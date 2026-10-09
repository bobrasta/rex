/* =========================================================
   REX static site behaviour
   ---------------------------------------------------------
   EDIT THESE before going live
   ========================================================= */
var REX_CONFIG = {
  whatsapp: '255700000000',          // international format, no + or spaces
  phone: '+255 700 000 000',
  email: 'sales@rex.co.tz',
  showrooms: [
    ['Dar es Salaam', 'Nyerere Road, Kipawa'],
    ['Arusha', 'Sokoine Road, Kaloleni'],
    ['Mwanza', 'Kenyatta Road, Isamilo']
  ]
};

(function () {
  'use strict';
  var P = window.REX_PRODUCTS || {};
  var CATS = window.REX_CATEGORIES || {};
  var KEY = 'rex-cart-v1';
  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  var fmt = function (n) { return n.toLocaleString('en-US') + ' TZS'; };
  var esc = function (s) { return String(s).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; }); };

  /* ---------- storage ---------- */
  var mem = {};
  function load() { try { return JSON.parse(localStorage.getItem(KEY)) || {}; } catch (e) { return mem; } }
  function save(c) { mem = c; try { localStorage.setItem(KEY, JSON.stringify(c)); } catch (e) {} }
  var cart = load();
  Object.keys(cart).forEach(function (k) { if (!P[k]) delete cart[k]; });

  function count() { return Object.keys(cart).reduce(function (a, k) { return a + cart[k]; }, 0); }
  function total() { return Object.keys(cart).reduce(function (a, k) { return a + cart[k] * P[k].price; }, 0); }

  function wa(text) {
    return 'https://wa.me/' + REX_CONFIG.whatsapp + '?text=' + encodeURIComponent(text);
  }

  /* ---------- UI shell ---------- */
  var shell = document.createElement('div');
  shell.innerHTML =
    '<div class="rex-overlay" data-close></div>' +
    '<aside class="rex-drawer" id="rex-cart" aria-label="Cart" aria-hidden="true">' +
      '<div class="rex-head"><h2>Your cart</h2><button class="rex-x" data-close aria-label="Close">&times;</button></div>' +
      '<div class="rex-body" id="rex-cart-items"></div>' +
      '<div class="rex-foot" id="rex-cart-foot"></div>' +
    '</aside>' +
    '<div class="rex-modal" id="rex-quote" role="dialog" aria-modal="true" aria-hidden="true">' +
      '<div class="rex-head"><h2>Request a quote</h2><button class="rex-x" data-close aria-label="Close">&times;</button></div>' +
      '<div class="rex-body"><p class="rex-note" style="margin-bottom:1rem">Send your room sizes or what you need. We calculate quantities and reply with a free quote within 24 hours.</p>' +
      '<form class="rex-form" id="rex-quote-form">' +
        '<div class="rex-row"><label>Name<input name="name" required autocomplete="name"></label>' +
        '<label>Phone<input name="phone" required type="tel" autocomplete="tel" placeholder="07..."></label></div>' +
        '<label>Location<input name="location" placeholder="e.g. Mikocheni, Dar es Salaam"></label>' +
        '<label>Product / material<input name="product" placeholder="e.g. SPC flooring, natural oak"></label>' +
        '<label>Details<textarea name="details" placeholder="Room sizes (m x m), number of rooms, deadline..."></textarea></label>' +
        '<button class="rex-btn wa" type="submit">Send via WhatsApp</button>' +
        '<button class="rex-btn alt" type="button" data-quote-email>Send via email instead</button>' +
      '</form></div>' +
    '</div>' +
    '<div class="rex-modal" id="rex-contact" role="dialog" aria-modal="true" aria-hidden="true">' +
      '<div class="rex-head"><h2>Contact us</h2><button class="rex-x" data-close aria-label="Close">&times;</button></div>' +
      '<div class="rex-body"><div class="rex-contact-list">' +
        '<a href="' + wa('Hello REX, I have a question.') + '" target="_blank" rel="noopener"><b>WhatsApp</b><small>Fastest reply</small></a>' +
        '<a href="tel:' + REX_CONFIG.phone.replace(/\s/g, '') + '"><b>Call ' + esc(REX_CONFIG.phone) + '</b><small>Mon to Sat, 8am to 6pm</small></a>' +
        '<a href="mailto:' + REX_CONFIG.email + '"><b>' + esc(REX_CONFIG.email) + '</b><small>Quotes, tenders and trade accounts</small></a>' +
        REX_CONFIG.showrooms.map(function (s) { return '<div><b>' + esc(s[0]) + ' showroom</b><small>' + esc(s[1]) + '</small></div>'; }).join('') +
      '</div><button class="rex-btn" style="margin-top:1rem" data-action="quote">Request a quote</button></div>' +
    '</div>' +
    '<div class="rex-toast" id="rex-toast" role="status" aria-live="polite"><span></span><button type="button" data-action="cart">View cart</button></div>';
  while (shell.firstChild) document.body.appendChild(shell.firstChild);

  var overlay = $('.rex-overlay');
  var openEl = null;
  function open(id) {
    close();
    openEl = document.getElementById(id);
    openEl.classList.add('open'); openEl.setAttribute('aria-hidden', 'false');
    overlay.classList.add('open'); document.body.classList.add('rex-lock');
    var f = openEl.querySelector('input,button.rex-btn'); if (f && id !== 'rex-cart') setTimeout(function () { f.focus(); }, 50);
  }
  function close() {
    if (!openEl) return;
    openEl.classList.remove('open'); openEl.setAttribute('aria-hidden', 'true');
    overlay.classList.remove('open'); document.body.classList.remove('rex-lock'); openEl = null;
  }
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });

  var toastT;
  function toast(msg) {
    var t = $('#rex-toast'); t.firstChild.textContent = msg; t.classList.add('show');
    clearTimeout(toastT); toastT = setTimeout(function () { t.classList.remove('show'); }, 2800);
  }

  /* ---------- cart ---------- */
  function renderBadge(bump) {
    var n = count();
    $$('[data-cart-count]').forEach(function (b) {
      b.textContent = n > 99 ? '99+' : n; b.hidden = n === 0;
      if (bump) { b.classList.remove('rex-bump'); void b.offsetWidth; b.classList.add('rex-bump'); }
    });
  }
  function renderCart() {
    var keys = Object.keys(cart);
    var box = $('#rex-cart-items'), foot = $('#rex-cart-foot');
    if (!keys.length) {
      box.innerHTML = '<div class="rex-empty"><p>Your cart is empty.</p><a class="rex-btn" style="margin-top:1rem" href="/shop">Browse materials</a></div>';
      foot.innerHTML = ''; return;
    }
    box.innerHTML = keys.map(function (k) {
      var p = P[k], q = cart[k];
      return '<div class="rex-item"><a href="/products/' + k + '"><img src="' + p.img + '" alt=""></a>' +
        '<div><a class="n" href="/products/' + k + '">' + esc(p.name) + '</a><div class="p">' + fmt(p.price) + ' / ' + esc(p.unit) + '</div>' +
        '<div class="rex-qty"><button data-dec="' + k + '" aria-label="Decrease">−</button><span>' + q + '</span><button data-inc="' + k + '" aria-label="Increase">+</button></div></div>' +
        '<div><div class="rex-line">' + fmt(p.price * q) + '</div><button class="rex-rm" data-rm="' + k + '">Remove</button></div></div>';
    }).join('');
    foot.innerHTML =
      '<div class="rex-total"><span>Total</span><span>' + fmt(total()) + '</span></div>' +
      '<p class="rex-note">Free delivery in 1 to 3 days. Pay on delivery: cash, M-Pesa, Tigo Pesa or Airtel Money.</p>' +
      '<form class="rex-form" id="rex-order-form">' +
        '<div class="rex-row"><label>Name<input name="name" required autocomplete="name"></label>' +
        '<label>Phone<input name="phone" required type="tel" autocomplete="tel"></label></div>' +
        '<label>Delivery location<input name="location" required placeholder="Area, town"></label>' +
        '<button class="rex-btn wa" type="submit">Place order on WhatsApp</button>' +
      '</form>';
  }
  function add(slug, qty) {
    if (!P[slug]) return;
    cart[slug] = (cart[slug] || 0) + (qty || 1); save(cart);
    renderBadge(true); renderCart(); toast(P[slug].name + ' added to cart');
  }
  function setQty(slug, q) {
    if (q <= 0) delete cart[slug]; else cart[slug] = q;
    save(cart); renderBadge(); renderCart();
  }

  function orderText(f) {
    var lines = ['*New order - REX website*', ''];
    Object.keys(cart).forEach(function (k) {
      var p = P[k]; lines.push('- ' + p.name + ' x ' + cart[k] + ' ' + p.unit + ' = ' + fmt(p.price * cart[k]));
    });
    lines.push('', '*Total: ' + fmt(total()) + '*', '', 'Name: ' + f.name.value, 'Phone: ' + f.phone.value,
      'Delivery: ' + f.location.value, 'Payment: on delivery');
    return lines.join('\n');
  }
  function quoteText(f) {
    return ['*Quote request - REX website*', '', 'Name: ' + f.name.value, 'Phone: ' + f.phone.value,
      'Location: ' + (f.location.value || '-'), 'Product: ' + (f.product.value || '-'), '', f.details.value || ''].join('\n');
  }

  /* ---------- events ---------- */
  document.addEventListener('click', function (e) {
    var t = e.target.closest('[data-add],[data-action],[data-close],[data-inc],[data-dec],[data-rm],[data-quote-email],[data-cat-chip]');
    if (!t) return;
    if (t.hasAttribute('data-add')) { e.preventDefault(); add(t.getAttribute('data-add')); return; }
    if (t.hasAttribute('data-close')) { close(); return; }
    if (t.hasAttribute('data-inc')) { var k = t.getAttribute('data-inc'); setQty(k, cart[k] + 1); return; }
    if (t.hasAttribute('data-dec')) { var d = t.getAttribute('data-dec'); setQty(d, cart[d] - 1); return; }
    if (t.hasAttribute('data-rm')) { setQty(t.getAttribute('data-rm'), 0); return; }
    if (t.hasAttribute('data-cat-chip')) { setCategory(t.getAttribute('data-cat-chip'), true); return; }
    if (t.hasAttribute('data-quote-email')) {
      var f = $('#rex-quote-form');
      if (!f.reportValidity()) return;
      location.href = 'mailto:' + REX_CONFIG.email + '?subject=' + encodeURIComponent('Quote request - ' + f.name.value) +
        '&body=' + encodeURIComponent(quoteText(f).replace(/\*/g, ''));
      return;
    }
    var a = t.getAttribute('data-action');
    if (a === 'cart') { e.preventDefault(); $('#rex-toast').classList.remove('show'); renderCart(); open('rex-cart'); }
    else if (a === 'contact') { e.preventDefault(); open('rex-contact'); }
    else if (a === 'quote') {
      e.preventDefault(); open('rex-quote');
      var pf = $('#rex-quote-form').product; if (t.getAttribute('data-product')) pf.value = t.getAttribute('data-product');
    }
    else if (a === 'whatsapp') { e.preventDefault(); window.open(wa('Hello REX, I need help with quantities for my project.'), '_blank', 'noopener'); }
  });

  document.addEventListener('submit', function (e) {
    var f = e.target;
    if (f.id === 'rex-order-form') {
      e.preventDefault();
      window.open(wa(orderText(f)), '_blank', 'noopener');
      toast('Order sent to WhatsApp. We will confirm shortly.');
    } else if (f.id === 'rex-quote-form') {
      e.preventDefault();
      window.open(wa(quoteText(f)), '_blank', 'noopener');
      close(); f.reset(); toast('Opening WhatsApp with your quote request');
    }
  });

  /* ---------- shop filtering ---------- */
  var grid = $('#shop-grid'), search = $('#shop-search'), current = 'all';
  function applyFilter() {
    var q = (search && search.value || '').trim().toLowerCase(), shown = 0;
    $$('[data-card]', grid).forEach(function (c) {
      var ok = (current === 'all' || c.getAttribute('data-cat') === current) &&
        (!q || q.split(/\s+/).every(function (w) { return c.getAttribute('data-search').indexOf(w) > -1; }));
      c.hidden = !ok; c.style.display = ok ? '' : 'none'; if (ok) shown++;
    });
    $('#shop-empty').hidden = shown > 0;
    var cnt = $('[data-shop-count]'); if (cnt) cnt.textContent = shown + (shown === 1 ? ' product' : ' products');
  }
  function setCategory(cat, push) {
    if (!grid) { location.href = '/shop?category=' + cat; return; }
    current = CATS[cat] ? cat : 'all';
    $$('[data-cat-chip]').forEach(function (b) {
      var on = b.getAttribute('data-cat-chip') === current;
      b.classList.toggle('bg-primary', on); b.classList.toggle('text-primary-foreground', on);
      b.classList.toggle('bg-muted', !on); b.classList.toggle('hover:bg-secondary', !on);
      b.setAttribute('aria-pressed', on);
    });
    var c = CATS[current];
    $('[data-shop-title]').textContent = c.title; $('[data-shop-sub]').textContent = c.sub;
    document.title = 'REX | ' + c.title;
    if (push) {
      var u = current === 'all' ? '/shop' : '/shop?category=' + current;
      try { history.replaceState(null, '', u); } catch (err) {}
    }
    applyFilter();
  }
  if (grid) {
    var params = new URLSearchParams(location.search);
    if (params.get('q')) search.value = params.get('q');
    search.addEventListener('input', applyFilter);
    setCategory(params.get('category') || 'all', false);
  }

  /* header search icon focuses the shop search */
  $$('a[aria-label="Search"]').forEach(function (a) {
    a.addEventListener('click', function (e) { if (search) { e.preventDefault(); search.focus(); search.scrollIntoView({ block: 'center' }); } });
  });

  /* promo countdown: runs to the end of the current week (Sunday 23:59:59), then rolls over */
  $$('[data-countdown]').forEach(function (el) {
    function weekEnd() { var d = new Date(); d.setDate(d.getDate() + (7 - d.getDay()) % 7); d.setHours(23, 59, 59, 999); return d; }
    function pad(n) { return (n < 10 ? '0' : '') + n; }
    var target = weekEnd();
    function tick() {
      var ms = target - Date.now();
      if (ms <= 0) { target = new Date(target.getTime() + 7 * 864e5); ms = target - Date.now(); }
      var t = Math.floor(ms / 1000);
      [['d', Math.floor(t / 86400)], ['h', Math.floor(t / 3600) % 24], ['m', Math.floor(t / 60) % 60], ['s', t % 60]].forEach(function (u) {
        el.querySelector('[data-cd="' + u[0] + '"]').textContent = pad(u[1]);
      });
    }
    tick(); setInterval(tick, 1000);
  });

  renderBadge(); renderCart();
})();
