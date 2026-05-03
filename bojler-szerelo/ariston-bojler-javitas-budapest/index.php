<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+Ariston+bojler+jav%C3%ADt%C3%A1st+szeretn%C3%A9k.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ariston Bojler Javítás Budapest – Szakszerviz, Hibakódok | Provi Domus Kft.</title>
<meta name="description" content="Ariston bojler javítás Budapesten – Lydos, Velis, Pro1 Eco szerviz. A02, A03, E02, E04 hibakódok megoldása. Eredeti Ariston alkatrészek, garancia. 0-24, 1-2 óra kiszállás.">
<meta name="keywords" content="ariston bojler javítás budapest, ariston szerviz budapest, ariston lydos javítás, ariston velis javítás, ariston a02 hibakód, ariston e04 hiba, ariston bojler nem melegít">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/ariston-bojler-javitas-budapest/">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Ariston Bojler Szerviz Budapest",
      "url": "<?= $base ?>/ariston-bojler-javitas-budapest/",
      "telephone": "+36701644000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": {"@type": "City", "name": "Budapest"},
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "143",
        "bestRating": "5"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Mit jelent az Ariston bojler A02 hibakód?",
          "acceptedAnswer": {"@type": "Answer", "text": "Az Ariston A02 hibakód a NTC hőmérséklet-érzékelő meghibásodását jelzi. A bojler biztonsági okból leáll. Megoldás: NTC szenzor csere, ami szakembernek 1-2 óra. Ne próbálja meg javítani házilag az elektromos alkatrészeket!"}
        },
        {
          "@type": "Question",
          "name": "Mit jelent az Ariston E04 hibakód?",
          "acceptedAnswer": {"@type": "Answer", "text": "Az Ariston E04 hibakód a termosztát meghibásodását jelzi, a bojler túlmelegedés védelem aktíválódott. Leggyakoribb ok: vízkő a fűtőszálon, ami miatt a termosztát kiold. Először vízkőtelenítés, majd termosztát vizsgálat szükséges."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül az Ariston bojler javítás?",
          "acceptedAnswer": {"@type": "Answer", "text": "Ariston bojler javítás ára: fűtőszál csere 12.000–22.000 Ft, NTC szenzor csere 10.000–16.000 Ft, termosztát csere 10.000–18.000 Ft, biztonsági szelep csere 8.000–14.000 Ft. Az ár tartalmazza a kiszállást, munkadíjat és az eredeti Ariston alkatrészt."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Ariston Bojler Javítás Budapest", "item": "<?= $base ?>/ariston-bojler-javitas-budapest/"}
      ]
    }
  ]
}
</script>

<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',Arial,sans-serif;background:#0a0a0a;color:#f0f0f0;line-height:1.6}
a{color:#ff6b00;text-decoration:none}
a:hover{text-decoration:underline}
.site-header{background:#111;border-bottom:2px solid #c62828;position:sticky;top:0;z-index:100;padding:12px 20px}
.header-inner{max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap}
.logo a{color:#fff;font-size:1.2rem;font-weight:700;text-decoration:none}
.logo span{color:#ff6b00}
.header-phone a{background:#c62828;color:#fff;padding:9px 20px;border-radius:5px;font-weight:700;font-size:1rem;text-decoration:none}
nav{display:flex;gap:6px;flex-wrap:wrap}
nav a{color:#ccc;font-size:.82rem;padding:4px 8px;border-radius:3px;text-decoration:none}
nav a:hover{color:#ff6b00}
nav a.active{color:#ff6b00;font-weight:700}
.urgency-bar{background:linear-gradient(90deg,#1565c0,#1976d2);text-align:center;padding:10px;font-weight:700;font-size:.95rem}
.urgency-bar a{color:#fff;text-decoration:none}
.hero{background:linear-gradient(135deg,#000d1a,#001a33,#000d1a);padding:60px 20px;border-bottom:3px solid #1565c0}
.hero-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 380px;gap:40px;align-items:start}
.hero-badge{display:inline-block;background:#1565c0;color:#fff;font-size:.8rem;font-weight:700;padding:4px 12px;border-radius:20px;margin-bottom:15px;text-transform:uppercase;letter-spacing:1px}
.hero h1{font-size:2.5rem;line-height:1.2;color:#fff;margin-bottom:16px}
.hero h1 span{color:#42a5f5}
.hero-sub{font-size:1.1rem;color:#ccc;margin-bottom:25px}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:30px}
.btn-primary{background:#c62828;color:#fff;padding:16px 32px;border-radius:6px;font-size:1.1rem;font-weight:700;text-decoration:none}
.btn-primary:hover{background:#e53935;text-decoration:none}
.btn-blue{background:#1565c0;color:#fff;padding:14px 28px;border-radius:6px;font-size:1rem;font-weight:700;text-decoration:none}
.btn-blue:hover{background:#1976d2;text-decoration:none}
.hero-trust{display:flex;gap:20px;flex-wrap:wrap}
.trust-badge{display:flex;align-items:center;gap:8px;color:#ccc;font-size:.9rem}
.emergency-card{background:#001a33;border:2px solid #1565c0;border-radius:10px;padding:25px;text-align:center}
.emergency-card h3{color:#42a5f5;font-size:1.2rem;margin-bottom:15px}
.big-phone{font-size:1.6rem;font-weight:700;color:#fff;display:block;margin-bottom:8px}
.big-phone a{color:#fff;text-decoration:none}
.emrg-btns{display:flex;flex-direction:column;gap:8px;margin-top:15px}
.emrg-btn{display:block;padding:11px;border-radius:5px;font-weight:700;text-decoration:none;font-size:.95rem;text-align:center}
.emrg-btn.phone{background:#c62828;color:#fff}
.emrg-btn.blue{background:#1565c0;color:#fff}
.emrg-btn.wa{background:#25d366;color:#fff}
.emrg-btn:hover{opacity:.9;text-decoration:none}
.ai-snippet{background:linear-gradient(135deg,#001a33,#0d1a00);border:1px solid #1565c0;border-left:4px solid #42a5f5;border-radius:8px;padding:20px 25px;margin:40px auto;max-width:1200px}
.ai-snippet-label{font-size:.75rem;color:#42a5f5;text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:8px}
.ai-snippet p{color:#ddd;font-size:1rem;line-height:1.7}
.section{padding:60px 20px}
.section-inner{max-width:1200px;margin:0 auto}
.section-title{font-size:2rem;color:#fff;margin-bottom:10px;text-align:center}
.section-title span{color:#42a5f5}
.section-sub{text-align:center;color:#999;margin-bottom:40px}
.error-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.error-card{background:#141414;border:1px solid #1a1a2a;border-radius:10px;padding:22px;border-left:4px solid #1565c0}
.error-code{font-size:1.5rem;font-weight:700;color:#42a5f5;margin-bottom:8px;font-family:monospace}
.error-card h3{color:#fff;font-size:1rem;margin-bottom:8px}
.error-card p{color:#bbb;font-size:.88rem;margin-bottom:10px}
.error-solution{color:#4caf50;font-size:.82rem;font-weight:600}
.error-price{color:#f57f17;font-size:.9rem;font-weight:700;margin-top:6px}
.model-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.model-card{background:#141414;border:1px solid #1a1a2a;border-radius:10px;overflow:hidden;transition:.2s}
.model-card:hover{border-color:#1565c0;transform:translateY(-3px)}
.model-head{background:linear-gradient(135deg,#001a33,#002a4a);padding:20px;border-bottom:1px solid #1a2a3a}
.model-head h3{color:#fff;font-size:1.05rem;margin-bottom:4px}
.model-head .model-sub{color:#42a5f5;font-size:.82rem}
.model-body{padding:18px}
.spec-row{display:flex;justify-content:space-between;padding:5px 0;border-bottom:1px solid #1a1a1a;font-size:.85rem}
.spec-row:last-child{border-bottom:none}
.spec-row .label{color:#777}
.spec-row .val{color:#ccc}
.model-card a.link{display:block;text-align:center;padding:10px;background:rgba(21,101,192,.1);border-top:1px solid #1a2a3a;color:#42a5f5;font-size:.85rem;font-weight:600;text-decoration:none}
.model-card a.link:hover{background:rgba(21,101,192,.2)}
.price-table{width:100%;border-collapse:collapse;margin-bottom:20px}
.price-table th{background:#1565c0;color:#fff;padding:12px 16px;text-align:left}
.price-table td{padding:12px 16px;border-bottom:1px solid #1a1a1a;color:#ccc;font-size:.9rem}
.price-table tr:nth-child(even) td{background:#111}
.price-col{color:#f57f17;font-weight:700}
.faq-list{display:flex;flex-direction:column;gap:12px}
.faq-item{background:#141414;border:1px solid #1a1a1a;border-radius:8px;overflow:hidden}
.faq-q{padding:16px 20px;cursor:pointer;color:#fff;font-size:1rem;font-weight:600;display:flex;justify-content:space-between;align-items:center}
.faq-q::after{content:'▼';font-size:.75rem;color:#42a5f5}
.faq-item.open .faq-q::after{transform:rotate(180deg)}
.faq-a{display:none;padding:0 20px 16px;color:#bbb;font-size:.9rem;line-height:1.7}
.faq-item.open .faq-a{display:block}
.related-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px}
.related-link{background:#141414;border:1px solid #1a1a1a;border-radius:8px;padding:14px 18px;display:flex;align-items:center;gap:10px;color:#ccc;text-decoration:none;font-size:.9rem;transition:.2s}
.related-link:hover{border-color:#42a5f5;color:#42a5f5;text-decoration:none}
.cta-banner{background:linear-gradient(135deg,#c62828,#b71c1c);padding:50px 20px;text-align:center}
.cta-banner h2{color:#fff;font-size:2rem;margin-bottom:10px}
.cta-banner p{color:#ffcccc;margin-bottom:25px}
.cta-banner .btn-white{background:#fff;color:#c62828;padding:16px 36px;border-radius:6px;font-size:1.1rem;font-weight:700;text-decoration:none;display:inline-block}
.site-footer{background:#0a0a0a;border-top:1px solid #1a1a1a;padding:40px 20px;color:#666;font-size:.85rem}
.footer-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:30px}
.footer-col h4{color:#ccc;margin-bottom:12px}
.footer-col a{display:block;color:#666;margin-bottom:6px;text-decoration:none}
.footer-col a:hover{color:#ff6b00}
.footer-bottom{max-width:1200px;margin:20px auto 0;padding-top:20px;border-top:1px solid #1a1a1a;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;color:#555;font-size:.8rem}
.float-btns{position:fixed;bottom:24px;right:20px;display:flex;flex-direction:column;gap:10px;z-index:1000}
.float-btn{width:54px;height:54px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.5rem;box-shadow:0 4px 15px rgba(0,0,0,.5);text-decoration:none}
.float-btn.phone{background:#c62828;color:#fff;animation:pulse 2s infinite}
.float-btn.wa{background:#25d366;color:#fff}
.float-btn:hover{transform:scale(1.1);text-decoration:none}
@keyframes pulse{0%,100%{box-shadow:0 4px 15px rgba(198,40,40,.5)}50%{box-shadow:0 4px 25px rgba(198,40,40,.9),0 0 0 8px rgba(198,40,40,.2)}}
@media(max-width:768px){.hero-inner{grid-template-columns:1fr}.hero h1{font-size:1.7rem}}
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
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="active">Ariston</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
  </div>
</header>

<div class="urgency-bar" style="background:linear-gradient(90deg,#c62828,#1565c0)">
  🔵 ARISTON BOJLER SZERVIZ BUDAPEST – EREDETI ALKATRÉSZEK – HIBAKÓD DIAGNÓZIS →
  <a href="<?= $phone_link ?>"><?= $phone ?></a>
</div>

<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🔵 Ariston Szakszerviz</span>
      <h1>Ariston Bojler Javítás<br><span>Budapest – Hibakódok Megoldva</span></h1>
      <p class="hero-sub">Ariston Lydos nem melegít? Velis hibakódot mutat? Pro1 Eco leállt? Ariston szakszervizként ismerjük az összes hibakódot (A02, A03, E02, E04) és rendelkezünk az eredeti Ariston alkatrészekkel. 1-2 óra kiszállás, garancia.</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-primary">📞 Hívjon Most – <?= $phone ?></a>
        <a href="<?= $wa_link ?>" class="btn-blue" target="_blank">💬 WhatsApp</a>
      </div>
      <div class="hero-trust">
        <div class="trust-badge">⭐ 4.9/5 értékelés</div>
        <div class="trust-badge">🔵 Eredeti Ariston alkatrész</div>
        <div class="trust-badge">✅ 12 hó garancia</div>
      </div>
    </div>
    <div class="emergency-card">
      <h3>🔵 Ariston Szerviz</h3>
      <div class="big-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      <p style="color:#999;font-size:.85rem;margin-bottom:5px">Mondja el a hibakódot – azonnal segítünk</p>
      <div class="emrg-btns">
        <a href="<?= $phone_link ?>" class="emrg-btn phone">📞 Azonnali Hívás</a>
        <a href="<?= $wa_link ?>" class="emrg-btn wa" target="_blank">💬 WhatsApp</a>
      </div>
      <div style="margin-top:15px;border-top:1px solid #00144a;padding-top:15px">
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.82rem;color:#ccc;border-bottom:1px solid #001a33">
          <span>A02 – NTC szenzor</span><strong style="color:#42a5f5">10.000–16.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.82rem;color:#ccc;border-bottom:1px solid #001a33">
          <span>E04 – Termosztát</span><strong style="color:#42a5f5">10.000–18.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.82rem;color:#ccc">
          <span>Fűtőszál csere</span><strong style="color:#42a5f5">12.000–22.000 Ft</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ai-snippet">
  <div class="ai-snippet-label">🤖 AI Keresési Válasz</div>
  <p><strong>Ariston bojler javítás Budapest:</strong> A Provi Domus Kft. Ariston szakszervizként javítja az Ariston Lydos, Velis Evo, Pro1 Eco és összes többi Ariston villanybojler modellt. Hibakódok: A02 (NTC szenzor, 10-16e Ft), A03 (fűtőszál hiba, 12-22e Ft), E02 (nyomáskapcsoló, 8-14e Ft), E04 (termosztát, 10-18e Ft). Eredeti Ariston alkatrészek, 1-2 óra kiszállás, 12 hó garancia. Tel: +36 70 164-4000.</p>
</div>

<!-- ERROR CODES -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston <span>Hibakódok Magyarázat</span></h2>
    <p class="section-sub">Melyik hibakód jelenik meg az Ariston bojlerén? Azonosítsa a hibát!</p>
    <div class="error-grid">
      <div class="error-card">
        <div class="error-code">A02</div>
        <h3>NTC hőmérséklet-szenzor hiba</h3>
        <p>A hőmérséklet-érzékelő meghibásodott, a bojler biztonsági leállásba lépett.</p>
        <div class="error-solution">✓ Megoldás: NTC szenzor csere</div>
        <div class="error-price">Javítás: 10.000–16.000 Ft</div>
      </div>
      <div class="error-card">
        <div class="error-code">A03</div>
        <h3>Fűtőszál meghibásodás</h3>
        <p>A fűtőszál elromlott vagy rövidzárlatot okoz. A bojler nem melegít.</p>
        <div class="error-solution">✓ Megoldás: Fűtőszál csere</div>
        <div class="error-price">Javítás: 12.000–22.000 Ft</div>
      </div>
      <div class="error-card">
        <div class="error-code">E02</div>
        <h3>Nyomáskapcsoló hiba</h3>
        <p>A nyomáskapcsoló vagy biztonsági szelep meghibásodott.</p>
        <div class="error-solution">✓ Megoldás: Biztonsági szelep csere</div>
        <div class="error-price">Javítás: 8.000–14.000 Ft</div>
      </div>
      <div class="error-card">
        <div class="error-code">E04</div>
        <h3>Termosztát hiba / Túlmelegedés</h3>
        <p>A biztonsági termosztát kioldott – általában vízkő okozza a túlmelegedést.</p>
        <div class="error-solution">✓ Megoldás: Vízkőtelenítés + termosztát reset</div>
        <div class="error-price">Javítás: 12.000–20.000 Ft</div>
      </div>
      <div class="error-card">
        <div class="error-code">A01</div>
        <h3>Vezérlőpanel hiba</h3>
        <p>Az elektronikus vezérlő meghibásodott, a kijelző nem működik megfelelően.</p>
        <div class="error-solution">✓ Megoldás: Vezérlőpanel csere</div>
        <div class="error-price">Javítás: 15.000–28.000 Ft</div>
      </div>
      <div class="error-card">
        <div class="error-code">E06</div>
        <h3>Anti-legionella hiba</h3>
        <p>Az anti-legionella program hibásan fut, általában szenzor probléma.</p>
        <div class="error-solution">✓ Megoldás: Szenzor ellenőrzés, reset</div>
        <div class="error-price">Javítás: 8.000–16.000 Ft</div>
      </div>
    </div>
  </div>
</section>

<!-- MODELS -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston <span>Modellek Szerviz</span></h2>
    <p class="section-sub">Az általunk szervizelt Ariston villanybojler modellek</p>
    <div class="model-grid">
      <div class="model-card">
        <div class="model-head">
          <h3>Ariston Lydos R</h3>
          <div class="model-sub">50L, 80L, 100L, 120L</div>
        </div>
        <div class="model-body">
          <div class="spec-row"><span class="label">Típus</span><span class="val">Álló/Fekvő</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,2–2,0 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">B</span></div>
          <div class="spec-row"><span class="label">Gyártás</span><span class="val">2010–</span></div>
        </div>
        <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="link">→ Ariston Lydos bemutató</a>
      </div>
      <div class="model-card">
        <div class="model-head">
          <h3>Ariston Velis Evo</h3>
          <div class="model-sub">30L, 50L, 80L, 100L</div>
        </div>
        <div class="model-body">
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">WiFi vezérlés</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,5–2,5 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">A</span></div>
          <div class="spec-row"><span class="label">App</span><span class="val">Ariston Net</span></div>
        </div>
        <a href="<?= $base ?>/ariston-velis-bojler-bemutato/" class="link">→ Ariston Velis bemutató</a>
      </div>
      <div class="model-card">
        <div class="model-head">
          <h3>Ariston Pro1 Eco</h3>
          <div class="model-sub">50L, 80L, 100L</div>
        </div>
        <div class="model-body">
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">Prémium hatásfok</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,5–2,5 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">A</span></div>
          <div class="spec-row"><span class="label">Titán anód</span><span class="val">Igen</span></div>
        </div>
        <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/" class="link">→ Ariston Pro1 Eco bemutató</a>
      </div>
      <div class="model-card">
        <div class="model-head">
          <h3>Ariston Shape Eco</h3>
          <div class="model-sub">50L, 80L, 100L</div>
        </div>
        <div class="model-body">
          <div class="spec-row"><span class="label">Különlegesség</span><span class="val">Flat design</span></div>
          <div class="spec-row"><span class="label">Teljesítmény</span><span class="val">1,5–2,0 kW</span></div>
          <div class="spec-row"><span class="label">Energia osztály</span><span class="val">B</span></div>
          <div class="spec-row"><span class="label">Méret</span><span class="val">Lapos forma</span></div>
        </div>
        <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="link">→ Ariston Shape szerviz</a>
      </div>
    </div>
  </div>
</section>

<!-- PRICES -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston Javítás <span>Árak 2025</span></h2>
    <table class="price-table">
      <thead>
        <tr><th>Javítás típusa</th><th>Ariston modell</th><th class="price-col">Ár (Ft)</th><th>Idő</th></tr>
      </thead>
      <tbody>
        <tr><td><strong>Fűtőszál csere</strong></td><td>Lydos, Velis, Pro1 Eco, Shape</td><td class="price-col">12.000–22.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>NTC szenzor csere</strong> (A02)</td><td>Minden modell</td><td class="price-col">10.000–16.000</td><td>1-2 óra</td></tr>
        <tr><td><strong>Termosztát csere</strong> (E04)</td><td>Minden modell</td><td class="price-col">10.000–18.000</td><td>1-2 óra</td></tr>
        <tr><td><strong>Biztonsági szelep</strong> (E02)</td><td>Minden modell</td><td class="price-col">8.000–14.000</td><td>1 óra</td></tr>
        <tr><td><strong>Vezérlőpanel csere</strong></td><td>Velis, Pro1 Eco</td><td class="price-col">15.000–28.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Vízkőtelenítés + szerviz</strong></td><td>Minden modell</td><td class="price-col">18.000–25.000</td><td>3-4 óra</td></tr>
      </tbody>
    </table>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Ariston Szerviz <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mit jelent az Ariston A02 hibakód?</div>
        <div class="faq-a">Az Ariston A02 hibakód az NTC hőmérséklet-szenzor meghibásodását jelzi. Az NTC szenzor méri a víz hőmérsékletét, ha ez elromlik, a bojler biztonsági okból leáll. Megoldás: NTC szenzor csere – szakembernek 1-2 óra. Ára: 10.000–16.000 Ft. Addig ne próbáljon meleget venni a bojlerből!</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mi okozza az Ariston E04 hibakódot?</div>
        <div class="faq-a">Az E04 hibakód a biztonsági termosztát kioldását jelzi – ez általában vízkő által okozott túlmelegedés következménye. A vízkőréteg szigetel, a fűtőszál túlmelegszik, a biztonsági termosztát kiold. Megoldás: először vízkőtelenítés, majd a termosztát visszaállítása vagy cseréje.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Milyen Ariston modelleket javítanak?</div>
        <div class="faq-a">Javítjuk az összes Ariston villanybojler modellt: Ariston Lydos R és Lydos Slim, Ariston Velis Evo (WiFi-s), Ariston Pro1 Eco, Ariston Shape Eco, Ariston Blue, Ariston SG és minden korábbi Ariston modellt. Ha van nálunk alkatrész, azonnal javítjuk; ha nem, akkor 1-2 munkanap alatt beszerezzük.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mennyibe kerül az Ariston Lydos javítása?</div>
        <div class="faq-a">Ariston Lydos javítás: fűtőszál csere 12.000–22.000 Ft, termosztát csere 10.000–18.000 Ft, biztonsági szelep csere 8.000–14.000 Ft. A kiszállás díja az árban bennfoglalt Budapest területén. Telefonon a hibakód vagy tünet alapján becsült árat adunk.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Az Ariston Velis WiFi is javítható?</div>
        <div class="faq-a">Igen, az Ariston Velis Evo WiFi-s modell javítható. A vezérlőelektronika speciálisabb, de rendelkezünk az Ariston Velis eredeti alkatrészeivel. A WiFi funkció hibája esetén vezérlőpanel cseréje szükséges (15.000–28.000 Ft). A mechanikus részek (fűtőszál, termosztát) javítása ugyanolyan áron elvégezhető.</div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Ariston <span>Modellek Bemutatói</span></h2>
    <div class="related-grid">
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/" class="related-link"><span class="icon">📘</span><span>Ariston Lydos – Bemutató</span></a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/" class="related-link"><span class="icon">📗</span><span>Ariston Velis Evo – WiFi</span></a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/" class="related-link"><span class="icon">📙</span><span>Ariston Pro1 Eco – Prémium</span></a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="related-link"><span class="icon">🔄</span><span>Ariston Csere Budapest</span></a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/" class="related-link"><span class="icon">🟠</span><span>Hajdú Bojler Szerviz</span></a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/" class="related-link"><span class="icon">🫧</span><span>Ariston Vízkőtelenítés</span></a>
    </div>
  </div>
</section>

<div class="cta-banner">
  <h2>Ariston Hibakódot Lát?</h2>
  <p>Mondja el a kódot – azonnal megmondjuk mi a baj!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?> – Ariston Szerviz</a>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p style="color:#555;font-size:.85rem">Provi Domus Kft. – Ariston szakszerviz 2011 óta.</p>
    </div>
    <div class="footer-col">
      <h4>Ariston Modellek</h4>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/">Ariston Lydos</a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/">Ariston Velis</a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a>
    </div>
    <div class="footer-col">
      <h4>Szolgáltatások</h4>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler Javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler Csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú Szerviz</a>
    </div>
    <div class="footer-col">
      <h4>Kerületek</h4>
      <a href="<?= $base ?>/bojler-szerelo-1-kerulet/">I. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-5-kerulet/">V. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-13-kerulet/">XIII. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23 kerület</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Ariston Bojler Javítás Budapest.</span>
    <span>📞 <a href="<?= $phone_link ?>" style="color:#ff6b00"><?= $phone ?></a></span>
  </div>
</footer>

<script>
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', () => q.parentElement.classList.toggle('open'));
});
</script>
</body>
</html>
