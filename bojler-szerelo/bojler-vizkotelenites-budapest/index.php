<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+V%C3%ADzk%C5%91telen%C3%ADt%C3%A9st+szeretn%C3%A9k+k%C3%A9rni.';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Vízkőtelenítés Budapest – Teljes Szerviz | Provi Domus Kft.</title>
<meta name="description" content="Bojler vízkőtelenítés Budapesten – hangos bojler, lassú melegítés, magas villanyszámla? Vegyszeres és mechanikus vízkőtelenítés + anódrúd csere. 1-2 óra kiszállás, garancia.">
<meta name="keywords" content="bojler vízkőtelenítés budapest, bojler hangos, bojler lassú melegítés, villanybojler tisztítás, anódrúd csere, bojler szerviz budapest">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/bojler-vizkotelenites-budapest/">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Bojler Vízkőtelenítés Budapest",
      "url": "<?= $base ?>/bojler-vizkotelenites-budapest/",
      "telephone": "+36701644000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": {"@type": "City", "name": "Budapest"},
      "priceRange": "12000-20000 HUF",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
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
          "name": "Mennyibe kerül a bojler vízkőtelenítés Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "A bojler vízkőtelenítés ára 12.000–18.000 Ft (munkadíj + vegyszer). Ha anódrúd csere is szükséges (ami minden szervizhez ajánlott), az további 3.000–5.000 Ft. A teljes szervizcsomag (vízkőtelenítés + anódrúd + tömítés csere) 18.000–25.000 Ft."}
        },
        {
          "@type": "Question",
          "name": "Milyen gyakran kell vízkőteleníteni a bojlert?",
          "acceptedAnswer": {"@type": "Answer", "text": "Budapest kemény vizű város – átlagosan 2-3 évente ajánlott a bojler vízkőtelenítése. Ha a bojler hangos (robog, sisterg melegítéskor), ha lassabban melegít, vagy ha a villanyszámla emelkedett, az jelzi, hogy ideje a vízkőtelenítésnek."}
        },
        {
          "@type": "Question",
          "name": "Meg lehet-e hosszabbítani a bojler élettartamát vízkőtelenítéssel?",
          "acceptedAnswer": {"@type": "Answer", "text": "Igen, a rendszeres vízkőtelenítés és anódrúd csere akár 5-10 évvel meghosszabbíthatja a bojler élettartamát. A vízkő szigetelőként hat a fűtőszálon, ami túlmelegedéshez és korai tönkremenetelhez vezet. Az anódrúd csere megakadályozza a tank belső falának korrodálódását."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"},
        {"@type": "ListItem", "position": 2, "name": "Bojler Vízkőtelenítés Budapest", "item": "<?= $base ?>/bojler-vizkotelenites-budapest/"}
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
.header-phone a:hover{background:#e53935}
nav{display:flex;gap:6px;flex-wrap:wrap}
nav a{color:#ccc;font-size:.82rem;padding:4px 8px;border-radius:3px;text-decoration:none}
nav a:hover{color:#ff6b00}
nav a.active{color:#ff6b00;font-weight:700}
.urgency-bar{background:linear-gradient(90deg,#c62828,#e53935);text-align:center;padding:10px;font-weight:700;font-size:.95rem}
.urgency-bar a{color:#fff;text-decoration:none}
.hero{background:linear-gradient(135deg,#1a0000,#2d0a00,#1a0000);padding:60px 20px;border-bottom:3px solid #c62828}
.hero-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 380px;gap:40px;align-items:start}
.hero-badge{display:inline-block;background:#c62828;color:#fff;font-size:.8rem;font-weight:700;padding:4px 12px;border-radius:20px;margin-bottom:15px;text-transform:uppercase;letter-spacing:1px}
.hero h1{font-size:2.5rem;line-height:1.2;color:#fff;margin-bottom:16px}
.hero h1 span{color:#ff6b00}
.hero-sub{font-size:1.1rem;color:#ccc;margin-bottom:25px}
.hero-ctas{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:30px}
.btn-primary{background:#c62828;color:#fff;padding:16px 32px;border-radius:6px;font-size:1.1rem;font-weight:700;text-decoration:none}
.btn-primary:hover{background:#e53935;text-decoration:none}
.btn-secondary{background:transparent;border:2px solid #ff6b00;color:#ff6b00;padding:14px 28px;border-radius:6px;font-size:1rem;font-weight:700;text-decoration:none}
.btn-secondary:hover{background:rgba(255,107,0,.1);text-decoration:none}
.hero-trust{display:flex;gap:20px;flex-wrap:wrap}
.trust-badge{display:flex;align-items:center;gap:8px;color:#ccc;font-size:.9rem}
.emergency-card{background:#1a0000;border:2px solid #c62828;border-radius:10px;padding:25px;text-align:center}
.emergency-card h3{color:#ff6b00;font-size:1.2rem;margin-bottom:15px}
.big-phone{font-size:1.6rem;font-weight:700;color:#fff;display:block;margin-bottom:8px}
.big-phone a{color:#fff;text-decoration:none}
.emrg-btns{display:flex;flex-direction:column;gap:8px;margin-top:15px}
.emrg-btn{display:block;padding:11px;border-radius:5px;font-weight:700;text-decoration:none;font-size:.95rem;text-align:center}
.emrg-btn.phone{background:#c62828;color:#fff}
.emrg-btn.wa{background:#25d366;color:#fff}
.emrg-btn:hover{opacity:.9;text-decoration:none}
.ai-snippet{background:linear-gradient(135deg,#0d2044,#1a0000);border:1px solid #c62828;border-left:4px solid #ff6b00;border-radius:8px;padding:20px 25px;margin:40px auto;max-width:1200px}
.ai-snippet-label{font-size:.75rem;color:#ff6b00;text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:8px}
.ai-snippet p{color:#ddd;font-size:1rem;line-height:1.7}
.section{padding:60px 20px}
.section-inner{max-width:1200px;margin:0 auto}
.section-title{font-size:2rem;color:#fff;margin-bottom:10px;text-align:center}
.section-title span{color:#ff6b00}
.section-sub{text-align:center;color:#999;margin-bottom:40px}
.symptoms-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.symptom-card{background:#141414;border:1px solid #2a1a00;border-radius:10px;padding:22px;transition:.2s}
.symptom-card:hover{border-color:#c62828}
.symptom-icon{font-size:2rem;margin-bottom:10px}
.symptom-card h3{color:#ff6b00;font-size:1rem;margin-bottom:8px}
.symptom-card p{color:#bbb;font-size:.88rem}
.steps-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:20px}
.step-card{background:#141414;border:1px solid #1a1a1a;border-radius:10px;padding:22px;text-align:center}
.step-num{width:44px;height:44px;background:#c62828;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;font-weight:700;margin:0 auto 12px}
.step-card h3{color:#fff;font-size:1rem;margin-bottom:6px}
.step-card p{color:#999;font-size:.85rem}
.price-table{width:100%;border-collapse:collapse;margin-bottom:20px}
.price-table th{background:#c62828;color:#fff;padding:12px 16px;text-align:left}
.price-table td{padding:12px 16px;border-bottom:1px solid #1a1a1a;color:#ccc;font-size:.9rem}
.price-table tr:nth-child(even) td{background:#111}
.price-col{color:#f57f17;font-weight:700}
.vizkő-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;margin-bottom:40px}
.stat-card{background:#141414;border:1px solid #2a1a00;border-radius:10px;padding:22px;text-align:center}
.stat-card .big-num{font-size:2.5rem;font-weight:700;color:#ff6b00;display:block;margin-bottom:5px}
.stat-card p{color:#999;font-size:.88rem}
.faq-list{display:flex;flex-direction:column;gap:12px}
.faq-item{background:#141414;border:1px solid #1a1a1a;border-radius:8px;overflow:hidden}
.faq-q{padding:16px 20px;cursor:pointer;color:#fff;font-size:1rem;font-weight:600;display:flex;justify-content:space-between;align-items:center}
.faq-q::after{content:'▼';font-size:.75rem;color:#ff6b00}
.faq-item.open .faq-q::after{transform:rotate(180deg)}
.faq-a{display:none;padding:0 20px 16px;color:#bbb;font-size:.9rem;line-height:1.7}
.faq-item.open .faq-a{display:block}
.trust-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px}
.trust-card{background:#141414;border:1px solid #1a1a1a;border-radius:10px;padding:22px;text-align:center}
.trust-card .icon{font-size:2.2rem;margin-bottom:10px}
.trust-card h3{color:#ff6b00;font-size:1rem;margin-bottom:6px}
.trust-card p{color:#999;font-size:.85rem}
.district-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:8px}
.district-link{background:#141414;border:1px solid #1a1a1a;border-radius:6px;padding:10px;text-align:center;color:#ccc;font-size:.82rem;text-decoration:none;transition:.2s}
.district-link:hover{border-color:#c62828;color:#ff6b00;text-decoration:none}
.related-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px}
.related-link{background:#141414;border:1px solid #1a1a1a;border-radius:8px;padding:14px 18px;display:flex;align-items:center;gap:10px;color:#ccc;text-decoration:none;font-size:.9rem;transition:.2s}
.related-link:hover{border-color:#ff6b00;color:#ff6b00;text-decoration:none}
.cta-banner{background:linear-gradient(135deg,#c62828,#b71c1c);padding:50px 20px;text-align:center}
.cta-banner h2{color:#fff;font-size:2rem;margin-bottom:10px}
.cta-banner p{color:#ffcccc;margin-bottom:25px}
.cta-banner .btn-white{background:#fff;color:#c62828;padding:16px 36px;border-radius:6px;font-size:1.1rem;font-weight:700;text-decoration:none;display:inline-block}
.cta-banner .btn-white:hover{background:#fff3f3;text-decoration:none}
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
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/" class="active">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú</a>
    </nav>
    <div class="header-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
  </div>
</header>

<div class="urgency-bar">
  🫧 BOJLER VÍZKŐTELENÍTÉS BUDAPEST – ANÓDRÚD CSERÉVEL – 1-2 ÓRA KISZÁLLÁS →
  <a href="<?= $phone_link ?>"><?= $phone ?></a>
</div>

<section class="hero">
  <div class="hero-inner">
    <div>
      <span class="hero-badge">🫧 Vízkőtelenítés Budapest</span>
      <h1>Bojler Vízkőtelenítés –<br><span>Hangos Bojler Csendben</span></h1>
      <p class="hero-sub">Robog, sisterg a bojler melegítéskor? Lassabban melegít, mint régen? Nőtt a villanyszámla? Vízkőtelenítéssel és anódrúd cserével a bojler újra csendesen és hatékonyan melegít – és akár 10 évvel meghosszabbítja az élettartamát!</p>
      <div class="hero-ctas">
        <a href="<?= $phone_link ?>" class="btn-primary">📞 Hívjon Most – <?= $phone ?></a>
        <a href="<?= $wa_link ?>" class="btn-secondary" target="_blank">💬 WhatsApp</a>
      </div>
      <div class="hero-trust">
        <div class="trust-badge">⭐ 4.9/5 értékelés</div>
        <div class="trust-badge">✅ 12 hó garancia</div>
        <div class="trust-badge">🧾 Számla, ÁFA</div>
        <div class="trust-badge">📅 2011 óta</div>
      </div>
    </div>
    <div class="emergency-card">
      <h3>🫧 Vízkőtelenítés Árak</h3>
      <div class="big-phone"><a href="<?= $phone_link ?>"><?= $phone ?></a></div>
      <p style="color:#999;font-size:.85rem;margin-bottom:10px">Telefonon pontos árat adunk</p>
      <div class="emrg-btns">
        <a href="<?= $phone_link ?>" class="emrg-btn phone">📞 Hívjon Most</a>
        <a href="<?= $wa_link ?>" class="emrg-btn wa" target="_blank">💬 WhatsApp</a>
      </div>
      <div style="margin-top:15px;border-top:1px solid #2a0000;padding-top:15px">
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Vízkőtelenítés</span><strong style="color:#ff6b00">12.000–18.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc;border-bottom:1px solid #1a0a00">
          <span>Anódrúd csere</span><strong style="color:#ff6b00">+3.000–5.000 Ft</strong>
        </div>
        <div style="display:flex;justify-content:space-between;padding:5px 0;font-size:.85rem;color:#ccc">
          <span>Teljes szerviz</span><strong style="color:#ff6b00">18.000–25.000 Ft</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="ai-snippet">
  <div class="ai-snippet-label">🤖 AI Keresési Válasz</div>
  <p><strong>Bojler vízkőtelenítés Budapest:</strong> Budapest kemény vize miatt 2-3 évente ajánlott a bojler vízkőtelenítése. A Provi Domus Kft. vegyszeres és mechanikus vízkőtelenítést végez, anódrúd cserével, 12.000–18.000 Ft-tól. Ha a bojler hangos melegítéskor, lassabban melegít, vagy nőtt a villanyszámla – vízkőtelenítés szükséges. Tel: +36 70 164-4000. Kiszállás 1-2 óra.</p>
</div>

<!-- STATS -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Miért <span>Probléma a Vízkő</span>?</h2>
    <p class="section-sub">Budapest víze kemény – a lerakódás komoly kárt okoz</p>
    <div class="vizkő-stats">
      <div class="stat-card">
        <span class="big-num">3mm</span>
        <p>Vízkőréteg a fűtőszálon = 25%-kal több áramfogyasztás</p>
      </div>
      <div class="stat-card">
        <span class="big-num">2-3x</span>
        <p>Gyorsabb fűtőszál elhasználódás vastag vízkőrétegnél</p>
      </div>
      <div class="stat-card">
        <span class="big-num">+40%</span>
        <p>Átlagos villanyköltség növekedés elhanyagolt bojlernél</p>
      </div>
      <div class="stat-card">
        <span class="big-num">10 év</span>
        <p>Mennyivel meghosszabbítható a bojler élete rendszeres karbantartással</p>
      </div>
    </div>
  </div>
</section>

<!-- SYMPTOMS -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Mikor Kell <span>Vízkőtelenítés</span>?</h2>
    <p class="section-sub">Ezek a jelek mutatják, hogy ideje a szerviznek</p>
    <div class="symptoms-grid">
      <div class="symptom-card">
        <div class="symptom-icon">🔊</div>
        <h3>Hangos, robogó bojler</h3>
        <p>Melegítés közben erős robogás, sistergés, kattogás – a vízkő izzó rétege okozza a hangot a fűtőszálon.</p>
      </div>
      <div class="symptom-card">
        <div class="symptom-icon">⏱️</div>
        <h3>Lassabb melegítés</h3>
        <p>A bojler ugyanannyi idő alatt kevesebb meleg vizet ad, mint régen – a vízkő szigetel és gátolja a hőátadást.</p>
      </div>
      <div class="symptom-card">
        <div class="symptom-icon">💡</div>
        <h3>Megnőtt villanyszámla</h3>
        <p>Ha észrevette, hogy a villanyszámla emelkedett anélkül, hogy más fogyasztó változott volna – a bojler vízkövesedhet.</p>
      </div>
      <div class="symptom-card">
        <div class="symptom-icon">🦠</div>
        <h3>Bűzös, rozsdás víz</h3>
        <p>A meleg víznek kellemetlen szaga van vagy rozsdás – az anódrúd elhasználódott, korrózió indult a tartályban.</p>
      </div>
      <div class="symptom-card">
        <div class="symptom-icon">📅</div>
        <h3>Több mint 2-3 év szerviz nélkül</h3>
        <p>Budapest kemény vize miatt 2-3 évente szükséges a vízkőtelenítés, még ha látható tünet nincs is.</p>
      </div>
      <div class="symptom-card">
        <div class="symptom-icon">🔧</div>
        <h3>Ismétlődő fűtőszál hiba</h3>
        <p>Ha rendszeresen cserélni kell a fűtőszálat – a vízkő okozza a korai meghibásodást. Vízkőtelenítés nélkül hamar újra tönkremegy.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Folyamata</span></h2>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-num">1</div>
        <h3>Diagnózis</h3>
        <p>Megvizsgáljuk a bojlert, leürítjük és megmérjük a vízkőréteg vastagságát</p>
      </div>
      <div class="step-card">
        <div class="step-num">2</div>
        <h3>Fűtőszál kivétel</h3>
        <p>A fűtőszálat kivesszük a tankból és megvizsgáljuk az állapotát</p>
      </div>
      <div class="step-card">
        <div class="step-num">3</div>
        <h3>Vegyszeres tisztítás</h3>
        <p>Citromsavas áztatás + mechanikus tisztítás – a vízkő teljesen eltávolítódik</p>
      </div>
      <div class="step-card">
        <div class="step-num">4</div>
        <h3>Anódrúd csere</h3>
        <p>A magnéziumanód cseréje megakadályozza a tank korrózióját</p>
      </div>
      <div class="step-card">
        <div class="step-num">5</div>
        <h3>Tömítések</h3>
        <p>Fűtőszál tömítés, kar tömítés csere – szivárgásmentesen visszaszerelve</p>
      </div>
      <div class="step-card">
        <div class="step-num">6</div>
        <h3>Próbaüzem</h3>
        <p>Töltés, nyomáspróba, melegítési teszt – minden rendben, megy a meleg víz</p>
      </div>
    </div>
  </div>
</section>

<!-- PRICES -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Árak 2025</span></h2>
    <table class="price-table">
      <thead>
        <tr><th>Szolgáltatás</th><th>Tartalmaz</th><th class="price-col">Ár (Ft)</th><th>Idő</th></tr>
      </thead>
      <tbody>
        <tr><td><strong>Vízkőtelenítés alap</strong></td><td>Fűtőszál tisztítás, vegyszeres kezelés, visszaszerelés</td><td class="price-col">12.000–18.000</td><td>2-3 óra</td></tr>
        <tr><td><strong>Anódrúd csere</strong></td><td>Elhasználódott magnéziumanód cseréje</td><td class="price-col">3.000–5.000</td><td>+30 perc</td></tr>
        <tr><td><strong>Teljes szerviz</strong></td><td>Vízkőtelenítés + anódrúd + tömítés csere + beállítás</td><td class="price-col">18.000–25.000</td><td>3-4 óra</td></tr>
        <tr><td><strong>Vizsgálat (ha nem kell tisztítás)</strong></td><td>Helyszíni diagnózis, állapotfelmérés</td><td class="price-col">5.000–8.000</td><td>1 óra</td></tr>
      </tbody>
    </table>
    <p style="color:#888;font-size:.82rem">* Kiszállás Budapest területén az árban bennfoglalt. A teljes szerviz csomag a legjobb hosszú távú befektetés.</p>
  </div>
</section>

<!-- TRUST -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Miért <span>Minket Válasszon</span>?</h2>
    <div class="trust-grid">
      <div class="trust-card"><div class="icon">🧪</div><h3>Profi Vegyszer</h3><p>Ipari citromsavas oldat – hatékony, a tankot nem károsítja</p></div>
      <div class="trust-card"><div class="icon">🔍</div><h3>Teljes Vizsgálat</h3><p>A fűtőszál, anódrúd, tömítések – minden elem átvizsgálva</p></div>
      <div class="trust-card"><div class="icon">⚡</div><h3>1-2 Óra Kiszállás</h3><p>Budapest minden kerületébe gyorsan kiszállunk</p></div>
      <div class="trust-card"><div class="icon">✅</div><h3>12 Hó Garancia</h3><p>Az elvégzett munkára és beépített alkatrészekre</p></div>
      <div class="trust-card"><div class="icon">💰</div><h3>Átlátható Árak</h3><p>Előzetes becsült ár, pontos ajánlat helyszínen</p></div>
      <div class="trust-card"><div class="icon">📅</div><h3>Éves Emlékeztető</h3><p>Kérésre szólunk, ha újabb szerviz esedékes</p></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>GYIK</span></h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">Mennyibe kerül a bojler vízkőtelenítés?</div>
        <div class="faq-a">Az alap vízkőtelenítés ára 12.000–18.000 Ft (tartalmazza a kiszállást, vegyszert és munkadíjat). Ha anódrúd csere is szükséges, az további 3.000–5.000 Ft. A teljes szerviz (vízkőtelenítés + anódrúd + tömítések) 18.000–25.000 Ft – ez a legjobb megoldás, mert az összes karbantartási elemet egyszerre intézi.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Milyen gyakran kell vízkőteleníteni a bojlert Budapesten?</div>
        <div class="faq-a">Budapest vize keménységi foka 15-25 nk° (nagyon kemény), ezért 2-3 évente ajánlott a vízkőtelenítés. Keménységi fokú víz területén (pl. Pest oldala) szükség esetén akár 2 évente is érdemes elvégezni. A szerviz nemcsak meghosszabbítja a bojler életét, de 15-25%-kal csökkenti az áramfogyasztást.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Mi az az anódrúd és miért kell cserélni?</div>
        <div class="faq-a">Az anódrúd (magnéziumanód) egy védőrúd a bojler tankjában, ami feláldozza magát a korrózió helyett. Ha az anódrúd teljesen elhasználódik, a tank belső fala kezd korrodálni, a víz rozsdás lesz, majd a tank kilyukad. Az anódrúd cseréje 3-5 évenként szükséges – olcsóbb, mint egy új bojler. Vízkőtelenítésnél mindig megnézzük.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Meg lehet-e csinálni bojler vízkőtelenítést saját magam?</div>
        <div class="faq-a">Elméletileg igen, de nem ajánlott. A helytelen leürítés, a nem megfelelő vegyszer, vagy a rosszul visszaszerelt tömítések miatt szivárgás, rövidzárlat keletkezhet. Szakember elvégzi 2-3 óra alatt biztonságosan, ellenőrzi az összes alkatrész állapotát, és garanciát ad a munkára.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Ha megcsináltatom a vízkőtelenítést, csend lesz a bojlerben?</div>
        <div class="faq-a">Igen, a vízkőtelenítés után a bojler csendesen melegít. A robogás, sistergés a vízkőrétegen forrásba kerülő víz hangja – ha a réteg eltávolítódik, a hangok megszűnnek. Ha a fűtőszál is már kopott volt, azt cseréljük, és attól kezdve az egész melegítési folyamat néma lesz.</div>
      </div>
    </div>
  </div>
</section>

<!-- DISTRICTS -->
<section class="section" style="background:#0d0d0d">
  <div class="section-inner">
    <h2 class="section-title">Vízkőtelenítés <span>Minden Kerületbe</span></h2>
    <div class="district-grid">
      <?php
      $keruletek = [
        1=>'I. ker.', 2=>'II. ker.', 3=>'III. ker.', 4=>'IV. ker.', 5=>'V. ker.',
        6=>'VI. ker.', 7=>'VII. ker.', 8=>'VIII. ker.', 9=>'IX. ker.', 10=>'X. ker.',
        11=>'XI. ker.', 12=>'XII. ker.', 13=>'XIII. ker.', 14=>'XIV. ker.', 15=>'XV. ker.',
        16=>'XVI. ker.', 17=>'XVII. ker.', 18=>'XVIII. ker.', 19=>'XIX. ker.', 20=>'XX. ker.',
        21=>'XXI. ker.', 22=>'XXII. ker.', 23=>'XXIII. ker.'
      ];
      foreach($keruletek as $n => $nev):
      ?>
      <a href="<?= $base ?>/bojler-szerelo-<?= $n ?>-kerulet/" class="district-link"><?= $nev ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <h2 class="section-title">Kapcsolódó <span>Szolgáltatások</span></h2>
    <div class="related-grid">
      <a href="<?= $base ?>/bojler-javitas-budapest/" class="related-link"><span class="icon">🔧</span><span>Bojler Javítás</span></a>
      <a href="<?= $base ?>/bojler-csere-budapest/" class="related-link"><span class="icon">🔄</span><span>Bojler Csere</span></a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/" class="related-link"><span class="icon">🔵</span><span>Ariston Szerviz</span></a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/" class="related-link"><span class="icon">🟠</span><span>Hajdú Szerviz</span></a>
    </div>
  </div>
</section>

<div class="cta-banner">
  <h2>Hangos a Bojlere?</h2>
  <p>Vízkőtelenítéssel csendben és hatékonyan melegít újra!</p>
  <a href="<?= $phone_link ?>" class="btn-white">📞 <?= $phone ?> – Hívjon Most</a>
</div>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-col">
      <h4>🔥 Bojler Szerelő Budapest</h4>
      <p style="color:#555;font-size:.85rem">Provi Domus Kft. – vízkőtelenítés és szerviz 2011 óta.</p>
      <p style="color:#555;font-size:.82rem;margin-top:8px">📍 Hamvas utca 7-9, Budapest 1191</p>
    </div>
    <div class="footer-col">
      <h4>Szolgáltatások</h4>
      <a href="<?= $base ?>/bojler-javitas-budapest/">Bojler Javítás</a>
      <a href="<?= $base ?>/bojler-csere-budapest/">Bojler Csere</a>
      <a href="<?= $base ?>/bojler-vizkotelenites-budapest/">Vízkőtelenítés</a>
      <a href="<?= $base ?>/ariston-bojler-javitas-budapest/">Ariston Szerviz</a>
      <a href="<?= $base ?>/hajdu-bojler-csere-budapest/">Hajdú Szerviz</a>
    </div>
    <div class="footer-col">
      <h4>Márkák</h4>
      <a href="<?= $base ?>/ariston-lydos-bojler-bemutato/">Ariston Lydos</a>
      <a href="<?= $base ?>/ariston-velis-bojler-bemutato/">Ariston Velis</a>
      <a href="<?= $base ?>/ariston-pro1-eco-bojler-bemutato/">Ariston Pro1 Eco</a>
      <a href="<?= $base ?>/hajdu-aquastic-bojler-bemutato/">Hajdú Aquastic</a>
    </div>
    <div class="footer-col">
      <h4>Kerületek</h4>
      <a href="<?= $base ?>/bojler-szerelo-1-kerulet/">I. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-11-kerulet/">XI. kerület</a>
      <a href="<?= $base ?>/bojler-szerelo-14-kerulet/">XIV. kerület</a>
      <a href="<?= $base ?>/">→ Mind a 23 kerület</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Provi Domus Kft. – Bojler Vízkőtelenítés Budapest.</span>
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
