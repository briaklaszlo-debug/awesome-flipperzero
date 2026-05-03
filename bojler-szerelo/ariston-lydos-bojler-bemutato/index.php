<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Ariston+Lydos+bojler+ir%C3%A1nt+%C3%A9rdekl%C5%91d%C3%B6m.';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ariston Lydos Bojler – Bemutató, Árak, Szerviz Budapest | Provi Domus Kft.</title>
<meta name="description" content="Ariston Lydos villanybojler bemutató – 50L, 80L, 100L, 120L modellek. Technikai adatok, ár, hibakódok, garancia. Ariston Lydos szerviz és csere Budapesten. 0-24, garancia.">
<meta name="keywords" content="ariston lydos bojler, ariston lydos 80l ár, ariston lydos r 80v, ariston lydos szerviz, ariston lydos fűtőszál, ariston lydos nem melegít">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/ariston-lydos-bojler-bemutato/">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Product",
      "name": "Ariston Lydos R 80V Villanybojler",
      "brand": {"@type": "Brand", "name": "Ariston"},
      "description": "Az Ariston Lydos az egyik legelterjedtebb villanybojler Magyarországon – megbízható, tartós, B energiaosztályú. 50L, 80L, 100L, 120L kapacitásban elérhető.",
      "category": "Villanybojler",
      "offers": {
        "@type": "Offer",
        "price": "55000",
        "priceCurrency": "HUF",
        "availability": "https://schema.org/InStock"
      }
    },
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Ariston Lydos Szerviz",
      "telephone": "+36701644000",
      "areaServed": {"@type": "City", "name": "Budapest"}
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mekkora Ariston Lydos bojler kell?",
          "acceptedAnswer": {"@type": "Answer", "text": "1-2 személynek 50L, 2-3 személynek 80L, 3-4 személynek 100L, 4+ személynek 120L Ariston Lydos ajánlott. Ha van fürdőkád, érdemes eggyel nagyobb méretet választani."}
        },
        {
          "@type": "Question",
          "name": "Mennyi ideig tart az Ariston Lydos melegítése?",
          "acceptedAnswer": {"@type": "Answer", "text": "Az Ariston Lydos R 80V 80 literes modell hideg vízből (15°C) 55°C-ra melegít kb. 2,5-3 óra alatt 1,5 kW-os fűtőszállal. Éjszakai tarifa esetén érdemes éjjel melegedni hagyni."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Ariston", "item": "<?= $base ?>/ariston-bojler-javitas-budapest/"},
        {"@type": "ListItem", "position": 3, "name": "Ariston Lydos Bemutató", "item": "<?= $base ?>/ariston-lydos-bojler-bemutato/"}
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
nav{display:flex;gap:6px;flex-wrap:wrap}
nav a{color:#ccc;font-size:.82rem;padding:4px 8px;border-radius:3px;text-decoration:none}
nav a:hover,nav a.active{color:#42a5f5}
.hero{background:linear-gradient(135deg,#000d1a,#001533);padding:50px 20px;border-bottom:3px solid #1565c0}
.hero-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 380px;gap:40px;align-items:start}
.hero-badge{display:inline-block;background:#1565c0;color:#fff;font-size:.8rem;font-weight:700;padding:4px 12px;border-radius:20px;margin-bottom:15px;text-transform:uppercase}
.hero h1{font-size:2.2rem;line-height:1.2;color:#fff;margin-bottom:14px}
.hero h1 span{color:#42a5f5}
.hero-sub{color:#ccc;margin-bottom:22px;font-size:1rem}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:20px}
.btn-red{background:#c62828;color:#fff;padding:14px 28px;border-radius:6px;font-size:1rem;font-weight:700;text-decoration:none}
.btn-red:hover{background:#e53935;text-decoration:none}
.btn-blue{background:#1565c0;color:#fff;padding:12px 24px;border-radius:6px;font-size:.95rem;font-weight:700;text-decoration:none}
.btn-blue:hover{background:#1976d2;text-decoration:none}
.spec-card{background:#001a33;border:2px solid #1565c0;border-radius:10px;padding:22px}
.spec-card h3{color:#42a5f5;margin-bottom:15px;font-size:1rem}
.spec-row{display:flex;justify-content:space-between;padding:7px 0;border-bottom:1px solid #001a33;font-size:.9rem}
.spec-row:last-child{border-bottom:none}
.spec-row .label{color:#888}
.spec-row .val{color:#ddd;font-weight:600}
.cta-box{background:#1a0000;border:1px solid #c62828;border-radius:8px;padding:18px;margin-top:15px;text-align:center}
.cta-box .price{font-size:1.5rem;font-weight:700;color:#f57f17;margin-bottom:5px}
.cta-box p{color:#999;font-size:.82rem;margin-bottom:12px}
.cta-box a{display:block;background:#c62828;color:#fff;padding:11px;border-radius:5px;font-weight:700;text-decoration:none;margin-bottom:8px}
.ai-snippet{background:linear-gradient(135deg,#001a33,#001400);border:1px solid #1565c0;border-left:4px solid #42a5f5;border-radius:8px;padding:18px 22px;margin:30px auto;max-width:1200px}
.ai-snippet-label{font-size:.75rem;color:#42a5f5;text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:6px}
.ai-snippet p{color:#ddd;font-size:.95rem;line-height:1.7}
.section{padding:50px 20px}
.section-inner{max-width:1200px;margin:0 auto}
.section-title{font-size:1.8rem;color:#fff;margin-bottom:10px;text-align:center}
.section-title span{color:#42a5f5}
.section-sub{text-align:center;color:#999;margin-bottom:35px}
.variants-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px}
.variant-card{background:#141414;border:1px solid #1a2a3a;border-radius:8px;padding:18px;text-align:center;transition:.2s}
.variant-card:hover{border-color:#1565c0}
.variant-card h3{color:#fff;font-size:1rem;margin-bottom:10px}
.variant-spec{font-size:.82rem;color:#999;margin-bottom:4px}
.variant-price{color:#f57f17;font-size:1.1rem;font-weight:700;margin-top:10px}
.pros-cons{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.pros,.cons{background:#141414;border-radius:10px;padding:22px}
.pros{border:1px solid #2a3a2a}
.cons{border:1px solid #3a2a2a}
.pros h3{color:#4caf50;margin-bottom:14px}
.cons h3{color:#ef5350;margin-bottom:14px}
.pro-item,.con-item{display:flex;gap:8px;align-items:start;margin-bottom:10px;font-size:.9rem;color:#ccc}
.pro-item::before{content:'✓';color:#4caf50;font-weight:700;flex-shrink:0}
.con-item::before{content:'✗';color:#ef5350;font-weight:700;flex-shrink:0}
.price-table{width:100%;border-collapse:collapse;margin-bottom:16px}
.price-table th{background:#1565c0;color:#fff;padding:10px 14px;text-align:left;font-size:.9rem}
.price-table td{padding:10px 14px;border-bottom:1px solid #1a1a1a;color:#ccc;font-size:.88rem}
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
      <a href="<?= $base ?>/bojler-javitas-budapest/">Javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Csere</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston Szerviz</a>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="active">Lydos</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
  </div>
</header>
<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🔵 Ariston Lydos Bemutató</span>
      <h1>Ariston Lydos<br><span>Villanybojler – Teljes Bemutató</span></h1>
      <p class="hero-sub">Az Ariston Lydos Magyarország egyik legtöbbet vásárolt villanybojlere. Megbízható, tartós, könnyen szervizelhető. 50–120L, B energiaosztály, 2+ év gyári garancia.</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-red">📞 Ariston Lydos Szerviz</a>
        <a href="<?= $base ?>/bojler-csere-budapest/" class="btn-blue">🔄 Áriston Lydos Csere</a>
      </div>
    </div>
    <div class="spec-card">
      <h3>📋 Ariston Lydos R 80V – Főbb Adatok</h3>
      <div class="spec-row"><span class="label">Kapacitás</span><span class="val">80 liter</span></div>
      <div class="spec-row"><span class="label">Fűtőszál</span><span class="val">1,5 kW (elérhető 2,0 kW)</span></div>
      <div class="spec-row"><span class="label">Max. hőmérséklet</span><span class="val">75°C</span></div>
      <div class="spec-row"><span class="label">Max. nyomás</span><span class="val">8 bar</span></div>
      <div class="spec-row"><span class="label">Energia osztály</span><span class="val">B</span></div>
      <div class="spec-row"><span class="label">Hőszigetelés</span><span class="val">35 mm PUR hab</span></div>
      <div class="spec-row"><span class="label">Garancia</span><span class="val">2 év (tank 5 év)</span></div>
      <div class="spec-row"><span class="label">Méretek (M×Á)</span><span class="val">985×450 mm</span></div>
      <div class="cta-box">
        <div class="price">~70.000–80.000 Ft</div>
        <p>Készülék + beépítés + régi elszállítás</p>
        <a href="<?= $phone_link ?>">📞 Árajánlat Kérése</a>
        <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" style="background:#1565c0">🔵 Ariston Szerviz</a>
      </div>
    </div>
  </div>
</section>
<div class="ai-snippet">
  <div class="ai-snippet-label">🤖 AI Keresési Válasz</div>
  <p><strong>Ariston Lydos bojler:</strong> Az Ariston Lydos R 80V a legkedveltebb magyarországi villanybojler. Főbb adatok: 80 liter, 1,5 kW fűtőszál, B energiaosztály, 75°C max hőmérséklet, 2 év garancia (tank 5 év). Ára Budapesten beépítéssel 70.000–80.000 Ft. Szerviz, javítás, vízkőtelenítés: Provi Domus Kft. – Tel: +36 70 164-4000, 0-24.</p>
</div>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Lydos <span>Méretek és Árak</span></h2>
    <div class="variants-grid">
      <div class="variant-card">
        <h3>Ariston Lydos 50L</h3>
        <div class="variant-spec">Teljesítmény: 1,2 kW</div>
        <div class="variant-spec">Energia osztály: B</div>
        <div class="variant-spec">1-2 személynek</div>
        <div class="variant-price">~55.000–62.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Ariston Lydos 80L</h3>
        <div class="variant-spec">Teljesítmény: 1,5 kW</div>
        <div class="variant-spec">Energia osztály: B</div>
        <div class="variant-spec">2-3 személynek</div>
        <div class="variant-price">~70.000–80.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Ariston Lydos 100L</h3>
        <div class="variant-spec">Teljesítmény: 1,5 kW</div>
        <div class="variant-spec">Energia osztály: B</div>
        <div class="variant-spec">3-4 személynek</div>
        <div class="variant-price">~80.000–92.000 Ft</div>
      </div>
      <div class="variant-card">
        <h3>Ariston Lydos 120L</h3>
        <div class="variant-spec">Teljesítmény: 2,0 kW</div>
        <div class="variant-spec">Energia osztály: B</div>
        <div class="variant-spec">4+ személynek</div>
        <div class="variant-price">~95.000–112.000 Ft</div>
      </div>
    </div>
    <p style="color:#777;font-size:.82rem;text-align:center;margin-top:15px">* Beépítéssel és régi bojler elszállítással együtt. Pontos árat telefonon adunk.</p>
  </div>
</section>
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston Lydos <span>Előnyök és Hátrányok</span></h2>
    <div class="pros-cons">
      <div class="pros">
        <h3>✓ Előnyök</h3>
        <div class="pro-item">Megbízható, bevált termék – évtizedes gyártási tapasztalat</div>
        <div class="pro-item">Elérhető alkatrészek – könnyű és olcsó szervizelhető</div>
        <div class="pro-item">Álló és fekvő változatban is elérhető</div>
        <div class="pro-item">Tank 5 év garancia – hosszú élettartam</div>
        <div class="pro-item">Titrán zománc belső bevonat – korrózióálló</div>
        <div class="pro-item">Jó ár-érték arány az Ariston termékcsalád alap tagjaként</div>
      </div>
      <div class="cons">
        <h3>✗ Hátrányok</h3>
        <div class="con-item">Nincs WiFi vezérlés (a Velis Evo modellel szemben)</div>
        <div class="con-item">B energiaosztály – nem a leghatékonyabb</div>
        <div class="con-item">Nincs digitális kijelző – hagyományos termosztátos vezérlés</div>
        <div class="con-item">Az 1,5 kW-os fűtőszál lassabban melegít, mint a 2 kW-os modellek</div>
      </div>
    </div>
  </div>
</section>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Lydos <span>Szerviz Árak</span></h2>
    <table class="price-table">
      <thead><tr><th>Szerviz típusa</th><th class="price-col">Ár (Ft)</th><th>Idő</th></tr></thead>
      <tbody>
        <tr><td>Fűtőszál csere</td><td class="price-col">12.000–22.000</td><td>2-3 h</td></tr>
        <tr><td>Termosztát csere</td><td class="price-col">10.000–18.000</td><td>1-2 h</td></tr>
        <tr><td>Biztonsági szelep csere</td><td class="price-col">8.000–14.000</td><td>1 h</td></tr>
        <tr><td>Anódrúd csere</td><td class="price-col">10.000–16.000</td><td>1-2 h</td></tr>
        <tr><td>Vízkőtelenítés + szerviz</td><td class="price-col">18.000–25.000</td><td>3-4 h</td></tr>
        <tr><td>Teljes csere (új Lydos 80L)</td><td class="price-col">70.000–80.000</td><td>2-3 h</td></tr>
      </tbody>
    </table>
  </div>
</section>
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston Lydos <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mekkora Ariston Lydos kell 2-3 személyes lakásba?</div>
        <div class="faq-a">2-3 személyes lakásba az Ariston Lydos 80 literes modell elegendő. Ha van zuhany is és fürdőkád is, a 100 literes modell biztosabb. Az 1,5 kW-os fűtőszállal a 80L-es modell kb. 2,5-3 óra alatt melegít fel teljesen hidegről.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mennyi ideig tart az Ariston Lydos élettartama?</div>
        <div class="faq-a">Az Ariston Lydos átlagos élettartama megfelelő karbantartással 12-15 év. Rendszeres vízkőtelenítéssel és anódrúd cserével (3-5 évente) akár 18-20 évig is eltart. A tank belső zománc bevonat és az 5 éves tank garancia is hosszú élettartamot jelez.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Az Ariston Lydos fekvő változata ugyanolyan jó mint az álló?</div>
        <div class="faq-a">Az Ariston Lydos Slim fekvő változata technikailag ugyanolyan minőségű, mint az álló R változat. A különbség csak a méretben és a felszerelési pozícióban van. Szűkebb fürdőszobákba, amelyek nem tudnak egy magas álló bojlert befogadni, a Lydos Slim ideális megoldás.</div>
      </div>
    </div>
  </div>
</section>
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Kapcsolódó <span>Oldalak</span></h2>
    <div class="related-grid">
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="related-link"><span>🔵</span><span>Ariston Szerviz Budapest</span></a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/" class="related-link"><span>📗</span><span>Ariston Velis Evo</span></a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/" class="related-link"><span>📙</span><span>Ariston Pro1 Eco</span></a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="related-link"><span>🔄</span><span>Bojler Csere Budapest</span></a>
      <a href="<?= $base ?>/hajdu-aquastic-bojler-bemutato/" class="related-link"><span>🟠</span><span>Hajdú Aquastic</span></a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/" class="related-link"><span>🫧</span><span>Vízkőtelenítés</span></a>
    </div>
  </div>
</section>
<div class="cta-banner">
  <h2>Ariston Lydos Szerviz vagy Csere?</h2>
  <p>Hívjon – megmondjuk a legjobb megoldást és az árat!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?> – Hívjon Most</a>
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
      <a href="<?= $base ?>/bojler-szerelo-13-kerulet/">XIII. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23 kerület</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Ariston Lydos Szerviz Budapest.</span>
    <span>📞 <a href="<?= $phone_link ?>" style="color:#42a5f5"><?= $phone ?></a></span>
  </div>
</footer>
<script>
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => q.parentElement.classList.toggle('open'));
});
</script>
</body>
</html>
