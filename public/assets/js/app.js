/* Website Prodi S1 Informatika — interaksi dasar (tanpa library)
   - Menu mobile (publik) & sidebar (admin)
   - Tab (role="tablist")
   - Filter chip:  <div data-filter="nama"> chip[data-value]  →  item[data-cat] di dalam [data-filter-items="nama"]
   - Pencarian tabel: <input data-search="idTabel">
   - Editor butir misi (admin profil)
*/
(function () {
  'use strict';

  // ---- Menu mobile / sidebar ----
  document.querySelectorAll('[data-nav-toggle]').forEach(function (btn) {
    var target = document.getElementById(btn.getAttribute('aria-controls'));
    var scrim = document.querySelector('.scrim');
    if (!target) return;
    function set(open) {
      target.classList.toggle('open', open);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      if (scrim) scrim.classList.toggle('show', open);
    }
    btn.addEventListener('click', function () { set(!target.classList.contains('open')); });
    if (scrim) scrim.addEventListener('click', function () { set(false); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') set(false); });
  });

  // ---- Tab ----
  document.querySelectorAll('[role="tablist"]').forEach(function (list) {
    var tabs = Array.prototype.slice.call(list.querySelectorAll('[role="tab"]'));
    function select(tab) {
      tabs.forEach(function (t) {
        var on = t === tab;
        t.setAttribute('aria-selected', on ? 'true' : 'false');
        t.tabIndex = on ? 0 : -1;
        var p = document.getElementById(t.getAttribute('aria-controls'));
        if (p) p.hidden = !on;
      });
    }
    tabs.forEach(function (t, i) {
      t.addEventListener('click', function () { select(t); });
      t.addEventListener('keydown', function (e) {
        var d = e.key === 'ArrowRight' ? 1 : e.key === 'ArrowLeft' ? -1 : 0;
        if (!d) return;
        var n = tabs[(i + d + tabs.length) % tabs.length];
        n.focus(); select(n);
      });
    });
  });

  // ---- Filter chip ----
  document.querySelectorAll('[data-filter]').forEach(function (group) {
    var name = group.getAttribute('data-filter');
    var items = document.querySelectorAll('[data-filter-items="' + name + '"] [data-cat]');
    group.querySelectorAll('.chip').forEach(function (chip) {
      chip.addEventListener('click', function () {
        group.querySelectorAll('.chip').forEach(function (c) { c.setAttribute('aria-pressed', c === chip ? 'true' : 'false'); });
        var v = chip.getAttribute('data-value');
        items.forEach(function (it) {
          var cats = it.getAttribute('data-cat').split('|');
          it.hidden = !(v === 'semua' || cats.indexOf(v) !== -1);
        });
      });
    });
  });

  // ---- Pencarian sederhana (tabel atau grid kartu) ----
  document.querySelectorAll('[data-search]').forEach(function (input) {
    var scope = document.getElementById(input.getAttribute('data-search'));
    if (!scope) return;
    var rows = scope.querySelectorAll('tbody tr, [data-cat]');
    input.addEventListener('input', function () {
      var q = input.value.trim().toLowerCase();
      rows.forEach(function (r) { r.hidden = q && r.textContent.toLowerCase().indexOf(q) === -1; });
    });
  });

  // ---- Editor butir misi ----
  var misi = document.getElementById('misi-list');
  if (misi) {
    function renumber() {
      misi.querySelectorAll('.misi-row').forEach(function (row, i) {
        row.querySelector('.no').textContent = i + 1;
        row.querySelector('textarea').setAttribute('aria-label', 'Misi ' + (i + 1));
      });
    }
    misi.addEventListener('click', function (e) {
      var btn = e.target.closest('button');
      if (!btn) return;
      var row = btn.closest('.misi-row');
      if (btn.dataset.act === 'hapus') row.remove();
      if (btn.dataset.act === 'naik' && row.previousElementSibling) misi.insertBefore(row, row.previousElementSibling);
      renumber();
    });
    var add = document.getElementById('misi-add');
    if (add) add.addEventListener('click', function () {
      var tpl = misi.querySelector('.misi-row');
      var row = tpl.cloneNode(true);
      row.querySelector('textarea').value = '';
      misi.appendChild(row);
      renumber();
      row.querySelector('textarea').focus();
    });
  }

  // ---- Formulir demo: cegah reload ----
  document.querySelectorAll('form[data-demo]').forEach(function (f) {
    f.addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Prototipe: data belum disimpan. Hubungkan formulir ini ke backend/API.');
    });
  });
})();
