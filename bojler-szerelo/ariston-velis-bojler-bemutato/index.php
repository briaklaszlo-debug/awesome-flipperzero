<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Ariston+Velis+bojler+ir%C3%A1nt+%C3%A9rdekl%C5%91d%C3%B6m.';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ariston Velis Evo Bojler – WiFi, Bemutató, Szerviz Budapest | Provi Domus Kft.</title>
<meta name="description" content="Ariston Velis Evo villanybojler bemutató – WiFi okosotthon vezérlés, A energiaosztály, 30-100L. Ariston Velis szerviz és csere Budapesten. Hibakódok, árak, garancia.">
<meta name="keywords" content="ariston velis evo, ariston velis wifi, ariston velis 80l, ariston velis szerviz, ariston velis bemutató, ariston net app, ariston velis ár budapest">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/ariston-velis-bojler-bemutato/">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Product",
      "name": "Ariston Velis Evo 80 Villanybojler",
      "brand": {"@type": "Brand", "name": "Ariston"},
      "description": "Az Ariston Velis Evo WiFi-s okos villanybojler – A energiaosztály, beépített WiFi modul, Ariston Net appon vezérelve. 30–100L változatokban.",
      "offers": {"@type": "Offer", "price": "75000", "priceCurrency": "HUF"}
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Ariston Szerviz", "item": "<?= $base ?>/ariston-bojler-javitas-budapest/"},
        {"@type": "ListItem", "position": 3, "name": "Ariston Velis Bemutató", "item": "<?= $base ?>/ariston-velis-bojler-bemutato/"}
      ]
    }
  ]
}
</script>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',Arial,sans-serif;background:#0a0a0a;color:#f0f0f0;line-height:1.6}
a{color:#42a5f5;text-decoration:none}
a:hover{text-decoration:underline}
.site-header{background:#111;border-bottom:2px solid #1565c0;position:sticky;top:0;z-index:100;padding:12px 20px}
.header-inner{max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap}
.logo a{color:#fff;font-size:1.2rem;font-weight:700;text-decoration:none}
.logo span{color:#ff6b00}
.header-phone a{background:#c62828;color:#fff;padding:9px 20px;border-radius:5px;font-weight:700;font-size:1rem;text-decoration:none}
nav a{color:#ccc;font-size:.82rem;padding:4px 8px;border-radius:3px;text-decoration:none;margin-right:4px}
nav a:hover,nav a.active{color:#42a5f5}
.hero{background:linear-gradient(135deg,#000d2a,#001040);padding:50px 20px;border-bottom:3px solid #1565c0}
.hero-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 380px;gap:40px;align-items:start}
.hero-badge{display:inline-block;background:#1565c0;color:#fff;font-size:.8rem;font-weight:700;padding:4px 12px;border-radius:20px;margin-bottom:15px;text-transform:uppercase}
.wifi-badge{display:inline-block;background:#00897b;color:#fff;font-size:.8rem;font-weight:700;padding:4px 10px;border-radius:20px;margin-left:8px}
.hero h1{font-size:2.2rem;line-height:1.2;color:#fff;margin-bottom:14px}
.hero h1 span{color:#42a5f5}
.hero-sub{color:#ccc;margin-bottom:22px;font-size:1rem}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:20px}
.btn-red{background:#c62828;color:#fff;padding:14px 28px;border-radius:6px;font-size:1rem;font-weight:700;text-decoration:none}
.btn-red:hover{background:#e53935;text-decoration:none}
.btn-blue{background:#1565c0;color:#fff;padding:12px 24px;border-radius:6px;font-size:.95rem;font-weight:700;text-decoration:none}
.btn-blue:hover{background:#1976d2;text-decoration:none}
.spec-card{background:#001033;border:2px solid #1565c0;border-radius:10px;padding:22px}
.spec-card h3{color:#42a5f5;margin-bottom:15px;font-size:1rem}
.spec-row{display:flex;justify-content:space-between;padding:7px 0;border-bottom:1px solid #001a33;font-size:.88rem}
.spec-row:last-child{border-bottom:none}
.spec-row .label{color:#777}
.spec-row .val{color:#ddd;font-weight:600}
.val.green{color:#4caf50}
.val.blue{color:#42a5f5}
.cta-box{background:#1a0000;border:1px solid #c62828;border-radius:8px;padding:16px;margin-top:15px;text-align:center}
.cta-box .price{font-size:1.5rem;font-weight:700;color:#f57f17;margin-bottom:4px}
.cta-box p{color:#999;font-size:.82rem;margin-bottom:12px}
.cta-box a{display:block;background:#c62828;color:#fff;padding:10px;border-radius:5px;font-weight:700;text-decoration:none;margin-bottom:8px}
.ai-snippet{background:linear-gradient(135deg,#001033,#001400);border:1px solid #1565c0;border-left:4px solid #42a5f5;border-radius:8px;padding:18px 22px;margin:30px auto;max-width:1200px}
.ai-snippet-label{font-size:.75rem;color:#42a5f5;text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:6px}
.ai-snippet p{color:#ddd;font-size:.95rem;line-height:1.7}
.section{padding:50px 20px}
.section-inner{max-width:1200px;margin:0 auto}
.section-title{font-size:1.8rem;color:#fff;margin-bottom:10px;text-align:center}
.section-title span{color:#42a5f5}
.section-sub{text-align:center;color:#999;margin-bottom:35px}
.features-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px}
.feature-card{background:#141414;border:1px solid #1a2a3a;border-radius:10px;padding:20px}
.feature-icon{font-size:2rem;margin-bottom:10px}
.feature-card h3{color:#42a5f5;font-size:1rem;margin-bottom:8px}
.feature-card p{color:#bbb;font-size:.88rem}
.variants-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px}
.variant-card{background:#141414;border:1px solid #1a2a3a;border-radius:8px;padding:16px;text-align:center;transition:.2s}
.variant-card:hover{border-color:#1565c0}
.variant-card h3{color:#fff;font-size:.95rem;margin-bottom:8px}
.variant-spec{font-size:.82rem;color:#888;margin-bottom:3px}
.variant-price{color:#f57f17;font-size:1rem;font-weight:700;margin-top:8px}
.pros-cons{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.pros,.cons{background:#141414;border-radius:10px;padding:20px}
.pros{border:1px solid #2a3a2a}.cons{border:1px solid #3a2a2a}
.pros h3{color:#4caf50;margin-bottom:12px}.cons h3{color:#ef5350;margin-bottom:12px}
.pro-item,.con-item{display:flex;gap:8px;align-items:start;margin-bottom:8px;font-size:.88rem;color:#ccc}
.pro-item::before{content:'✓';color:#4caf50;font-weight:700;flex-shrink:0}
.con-item::before{content:'✗';color:#ef5350;font-weight:700;flex-shrink:0}
.price-table{width:100%;border-collapse:collapse;margin-bottom:14px}
.price-table th{background:#1565c0;color:#fff;padding:10px 14px;text-align:left;font-size:.88rem}
.price-table td{padding:10px 14px;border-bottom:1px solid #1a1a1a;color:#ccc;font-size:.86rem}
.price-table tr:nth-child(even) td{background:#111}
.price-col{color:#f57f17;font-weight:700}
.faq-list{display:flex;flex-direction:column;gap:10px}
.faq-item{background:#141414;border:1px solid #1a1a1a;border-radius:8px;overflow:hidden}
.faq-q{padding:14px 18px;cursor:pointer;color:#fff;font-size:.95rem;font-weight:600;display:flex;justify-content:space-between;align-items:center}
.faq-q::after{content:'▼';font-size:.72rem;color:#42a5f5}
.faq-item.open .faq-q::after{transform:rotate(180deg)}
.faq-a{display:none;padding:0 18px 14px;color:#bbb;font-size:.88rem;line-height:1.7}
.faq-item.open .faq-a{display:block}
.related-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:10px}
.related-link{background:#141414;border:1px solid #1a1a1a;border-radius:8px;padding:12px 16px;display:flex;align-items:center;gap:8px;color:#ccc;text-decoration:none;font-size:.88rem;transition:.2s}
.related-link:hover{border-color:#42a5f5;color:#42a5f5;text-decoration:none}
.cta-banner{background:linear-gradient(135deg,#c62828,#b71c1c);padding:40px 20px;text-align:center}
.cta-banner h2{color:#fff;font-size:1.8rem;margin-bottom:8px}
.cta-banner p{color:#ffcccc;margin-bottom:20px}
.cta-banner .btn-white{background:#fff;color:#c62828;padding:14px 32px;border-radius:6px;font-size:1rem;font-weight:700;text-decoration:none;display:inline-block}
.site-footer{background:#0a0a0a;border-top:1px solid #1a1a1a;padding:35px 20px;color:#666;font-size:.82rem}
.footer-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:25px}
.footer-col h4{color:#ccc;margin-bottom:10px}
.footer-col a{display:block;color:#666;margin-bottom:5px;text-decoration:none}
.footer-col a:hover{color:#42a5f5}
.footer-bottom{max-width:1200px;margin:16px auto 0;padding-top:16px;border-top:1px solid #1a1a1a;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;color:#555;font-size:.78rem}
.float-btns{position:fixed;bottom:24px;right:20px;display:flex;flex-direction:column;gap:10px;z-index:1000}
.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.4rem;box-shadow:0 4px 15px rgba(0,0,0,.5);text-decoration:none}
.float-btn.phone{background:#c62828;color:#fff;animation:pulse 2s infinite}
.float-btn.wa{background:#25d366;color:#fff}
.float-btn:hover{transform:scale(1.1);text-decoration:none}
@keyframes pulse{0%,100%{box-shadow:0 4px 15px rgba(198,40,40,.5)}50%{box-shadow:0 4px 25px rgba(198,40,40,.9),0 0 0 8px rgba(198,40,40,.2)}}
@media(max-width:768px){.hero-inner{grid-template-columns:1fr}.hero h1{font-size:1.6rem}.pros-cons{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="float-btns">
  <a href="<?= $phone_link ?>" class="float-btn phone">📞</a>
  <a href="<?= $wa_link ?>" class="float-btn wa" target="_blank">💬</a>
</div>
<header class="site-header">
  <div class="header-inner">
    <div class="logo"><a href="<?= $base ?>/"><span>🔥</span> Bojler Szerelő Budapest</a></div>
    <nav>
      <a href="<?= $base ?>/">Főoldal</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston Szerviz</a>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/">Lydos</a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/" class="active">Velis</a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/">Pro1 Eco</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
  </div>
</header>
<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🔵 Ariston Velis Evo Bemutató</span>
      <span class="wifi-badge">📶 WiFi</span>
      <h1>Ariston Velis Evo<br><span>Okos WiFi Bojler – Teljes Bemutató</span></h1>
      <p class="hero-sub">Az Ariston Velis Evo az okosotthon bojler – beépített WiFi modul, Ariston Net app vezérlés, A energiaosztály. Távolról is szabályozható, időzíthető, okos üzemmódok. 30–100L változatokban.</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-red">📞 Ariston Velis Szerviz</a>
        <a href="<?= $base ?>/bojler-csere-budapest/" class="btn-blue">🔄 Ariston Velis Csere</a>
      </div>
    </div>
    <div class="spec-card">
      <h3>📋 Ariston Velis Evo 80 – Főbb Adatok</h3>
      <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
      <div class="spec-row"><span class="label">Fűtőszál</span><span class="val">1,5 kW / 2,5 kW (turbo)</span></div>
      <div class="spec-row"><span class="label">Max. hőmérséklet</span><span class="val">75°C</span></div>
      <div class="spec-row"><span class="label">Energia osztály</span><span class="val blue">A (jobb mint Lydos!)</span></div>
      <div class="spec-row"><span class="label">WiFi</span><span class="val green">✓ Beépített</span></div>
      <div class="spec-row"><span class="label">App</span><span class="val">Ariston Net (iOS/Android)</span></div>
      <div class="spec-row"><span class="label">Garancia</span><span class="val">2 év (tank 5 év)</span></div>
      <div class="spec-row"><span class="label">Antilegionella</span><span class="val green">✓ Automatikus</span></div>
      <div class="cta-box">
        <div class="price">~90.000–105.000 Ft</div>
        <p>Készülék + beépítés + app beállítás</p>
        <a href="<?= $phone_link ?>">📞 Árajánlat Kérése</a>
        <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" style="background:#1565c0">🔵 Ariston Szerviz</a>
      </div>
    </div>
  </div>
</section>
<div class="ai-snippet">
  <div class="ai-snippet-label">🤖 AI Keresési Válasz</div>
  <p><strong>Ariston Velis Evo bojler:</strong> Az Ariston Velis Evo WiFi-s okos villanybojler – A energiaosztály, beépített WiFi, Ariston Net app vezérlés. 80L-es modell ára beépítéssel Budapest: 90.000–105.000 Ft. A bojler okostelefonról vezérelhető, időzíthető, és automatikus anti-legionella programmal rendelkezik. Szerviz, javítás: Provi Domus Kft. – Tel: +36 70 164-4000.</p>
</div>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Velis <span>Különleges Funkciók</span></h2>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">📱</div>
        <h3>WiFi + Ariston Net App</h3>
        <p>Okostelefonról bárhonnan vezérelhető, hőmérséklet beállítható, időzítés programozható.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">⚡</div>
        <h3>Turbo Üzemmód</h3>
        <p>A 2,5 kW-os turbo fűtőszál gyors melegítést tesz lehetővé – sürgős esetben azonnal van meleg víz.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🌿</div>
        <h3>Eco Üzemmód</h3>
        <p>Az intelligens eco program csökkenti az áramfogyasztást az igények alapján automatikusan.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🦠</div>
        <h3>Anti-Legionella Program</h3>
        <p>Automatikus periódikus magashőfokú ciklus, ami megakadályozza a legionella baktérium elszaporodását.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🔋</div>
        <h3>Napenergia Kompatibilis</h3>
        <p>Napelemmel kombinálható – programozható, hogy mikor termel a napelem, akkor melegítsen.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">📊</div>
        <h3>Fogyasztás Monitorozás</h3>
        <p>Az app mutatja a bojler áramfogyasztását és a meleg víz felhasználást – energia tudatos használathoz.</p>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston Velis <span>Modellek és Árak</span></h2>
    <div class="variants-grid">
      <div class="variant-card">
        <h3>Velis Evo 30L</h3>
        <div class="variant-spec">Teljesítmény: 1,5 kW</div>
        <div class="variant-spec">1 személy / gyors</div>
        <div class="variant-price">~60.000–72.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Velis Evo 50L</h3>
        <div class="variant-spec">Teljesítmény: 1,5 kW</div>
        <div class="variant-spec">1-2 személynek</div>
        <div class="variant-price">~75.000–85.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Velis Evo 80L</h3>
        <div class="variant-spec">Teljesítmény: 1,5/2,5 kW</div>
        <div class="variant-spec">2-3 személynek</div>
        <div class="variant-price">~90.000–105.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Velis Evo 100L</h3>
        <div class="variant-spec">Teljesítmény: 2,5 kW</div>
        <div class="variant-spec">3-4 személynek</div>
        <div class="variant-price">~105.000–120.000 Ft</div>
      </div>
    </div>
  </div>
</section>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Velis vs. <span>Lydos – Összehasonlítás</span></h2>
    <div class="pros-cons">
      <div class="pros">
        <h3>Ariston Velis Evo – Előnyök</h3>
        <div class="pro-item">A energiaosztály – hatékonyabb, mint a Lydos (B)</div>
        <div class="pro-item">WiFi vezérlés – okostelefonról bárhonnan</div>
        <div class="pro-item">Turbo üzemmód – gyors melegítés</div>
        <div class="pro-item">Fogyasztás monitorozás az appban</div>
        <div class="pro-item">Automatikus anti-legionella program</div>
      </div>
      <div class="cons">
        <h3>Ariston Velis Evo – Hátránya</h3>
        <div class="con-item">Drágább, mint az alap Lydos modell</div>
        <div class="con-item">WiFi modulhoz otthoni WiFi szükséges</div>
        <div class="con-item">Elektronika bonyolultabb – drágább szerviz</div>
        <div class="con-item">Az app frissítések időnként problémát okoznak</div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston Velis <span>Szerviz Árak</span></h2>
    <table class="price-table">
      <thead><tr><th>Szerviz</th><th class="price-col">Ár (Ft)</th><th>Megjegyzés</th></tr></thead>
      <tbody>
        <tr><td>Fűtőszál csere</td><td class="price-col">12.000–22.000</td><td>Eredeti Ariston alkatrész</td></tr>
        <tr><td>Vezérlőpanel / WiFi modul</td><td class="price-col">15.000–28.000</td><td>Velis specifikus alkatrész</td></tr>
        <tr><td>NTC szenzor csere (A02)</td><td class="price-col">10.000–16.000</td><td>Hibakód törlés is</td></tr>
        <tr><td>Vízkőtelenítés + szerviz</td><td class="price-col">18.000–25.000</td><td>3-4 óra</td></tr>
        <tr><td>Teljes csere (Velis 80L)</td><td class="price-col">90.000–105.000</td><td>App beállítással</td></tr>
      </tbody>
    </table>
  </div>
</section>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Velis <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Hogyan kell csatlakoztatni az Ariston Velis WiFi-t?</div>
        <div class="faq-a">Az Ariston Velis Evo WiFi beállítása: (1) Töltse le az Ariston Net appot (iOS vagy Android), (2) Hozzon létre felhasználói fiókot, (3) A bojleren nyomja meg és tartsa lenyomva a WiFi gombot 3 másodpercig, (4) Az appban kövesse az összekapcsolási folyamatot. Ha a csatlakoztatás nem sikerül, segítünk – felhívhat minket.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Az Ariston Velis Evo kompatibilis a napelemmel?</div>
        <div class="faq-a">Igen, az Ariston Velis Evo appból programozható, hogy a napenergia termelési időszakában melegítsen. Napelemmel rendelkező otthonokban a bojler energiafelhasználása lényegesen csökkenthető – a bojler automatikusan a napelem termelési csúcsán melegít.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Megéri-e az Ariston Velis többet fizetni, mint a Lydosért?</div>
        <div class="faq-a">Az Ariston Velis kb. 15.000–20.000 Ft-tal drágább, mint a Lydos. Főbb előnyök: A energiaosztály (jobb hatásfok), WiFi vezérlés, turbo üzemmód, anti-legionella program. Ha okosotthon megoldást keres, napelemmel kombinálná, vagy fontos az energiafogyasztás nyomon követése – a Velis megéri a felárat. Ha egyszerűen megbízható meleg vizes bojlert keres, a Lydos is kiváló.</div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Kapcsolódó <span>Oldalak</span></h2>
    <div class="related-grid">
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="related-link"><span>🔵</span><span>Ariston Szerviz Budapest</span></a>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="related-link"><span>📘</span><span>Ariston Lydos</span></a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/" class="related-link"><span>📙</span><span>Ariston Pro1 Eco</span></a>
      <a href="<?= $base ?>/hajdu-z-smart-bojler-bemutato/" class="related-link"><span>📱</span><span>Hajdú Z Smart (WiFi)</span></a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="related-link"><span>🔄</span><span>Bojler Csere Budapest</span></a>
    </div>
  </div>
</section>
<div class="cta-banner">
  <h2>Ariston Velis Szerviz vagy Csere?</h2>
  <p>Hívjon – WiFi hibától fűtőszál cseréig mindenben segítünk!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?></a>
</div>
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col"><h4>🔥 Bojler Szerelő Budapest</h4><p style="color:#555">Provi Domus Kft. – Ariston szakszerviz 2011 óta.</p></div>
    <div class="footer-col"><h4>Ariston Modellek</h4>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/">Ariston Lydos</a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/">Ariston Velis</a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a>
    </div>
    <div class="footer-col"><h4>Szolgáltatások</h4>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
    </div>
    <div class="footer-col"><h4>Kerületek</h4>
      <a href="<?= $base ?>/bojler-szerelo-1-kerulet/">I. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Ariston Velis Szerviz Budapest.</span>
    <span>📞 <a href="<?= $phone_link ?>" style="color:#42a5f5"><?= $phone ?></a></span>
  </div>
</footer>
<script>document.querySelectorAll('.faq-q').forEach(q=>{q.addEventListener('click',()=>q.parentElement.classList.toggle('open'))});</script>
</body>
</html>
