<?php
$phone      = '06 (70) 164-4000';
$phone_link = 'tel:+36701644000';
$wa_link    = 'https://wa.me/36701644000?text=Szia!+%C3%89rdekl%C5%91dn%C3%A9k+a+bojler+szerel%C3%A9s+ir%C3%A1nt.';
$viber_link = 'viber://chat?number=%2B36701644000';
$email      = 'providomuszkft@gmail.com';
$base       = 'https://www.bojler-szerelo-budapest.hu';
?><!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bojler Szerelő Budapest – Javítás &amp; Csere 0-24 | Provi Domus Kft.</title>
<meta name="description" content="Bojler nem melegít? Csöpög? Leveri a biztosítékot? Hívjon most – 1-2 óra kiszállás Budapest minden kerületébe, 0-24. Ariston, Hajdú szerviz. Garancia, számla.">
<meta name="keywords" content="bojler szerelő budapest, villanybojler javítás, bojler csere budapest, ariston szerviz budapest, hajdú bojler szerelő, vízkőtelenítés budapest, bojler nem melegít">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $base ?>/">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base ?>/">
<meta property="og:title" content="Bojler Szerelő Budapest – 0-24 Gyorsszerviz | Provi Domus Kft.">
<meta property="og:description" content="Bojler javítás, csere, vízkőtelenítés – 1-2 óra kiszállás Budapest minden kerületébe. Ariston és Hajdú szakszerviz, garancia, számla.">
<meta property="og:locale" content="hu_HU">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bojler Szerelő Budapest – 0-24 | Provi Domus Kft.">
<meta name="twitter:description" content="Bojler javítás, csere, Ariston & Hajdú szerviz – 1-2 óra kiszállás, 0-24, garancia.">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Plumber","HVACBusiness"],
      "@id": "<?= $base ?>/#business",
      "name": "Provi Domus Kft. – Bojler Szerelő Budapest",
      "url": "<?= $base ?>/",
      "description": "Villanybojler javítás, csere, vízkőtelenítés Budapest területén 2011 óta. Ariston és Hajdú szakszerviz, 0-24, 1-2 óra kiszállás.",
      "telephone": "+36701644000",
      "email": "<?= $email ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hamvas utca 7-9",
        "addressLocality": "Budapest",
        "postalCode": "1191",
        "addressCountry": "HU"
      },
      "areaServed": [
        {"@type": "City", "name": "Budapest"},
        {"@type": "AdministrativeArea", "name": "Pest megye"}
      ],
      "priceRange": "10000-35000 HUF",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "foundingDate": "2011",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "143",
        "bestRating": "5"
      },
      "review": [
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Horváth Gábor"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Reggel 7-kor nem volt meleg víz. Délelőtt 10-re új bojler működött. Ariston Lydost szereltek, minden rendben.",
          "datePublished": "2025-04-10"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Szabó Krisztina"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Hajdú bojlerem 15 éve volt, vízkőtelenítés és anódrúd csere, még mindig megy. Profik, korrekt ár.",
          "datePublished": "2025-03-22"
        },
        {
          "@type": "Review",
          "author": {"@type": "Person", "name": "Molnár István"},
          "reviewRating": {"@type": "Rating", "ratingValue": "5"},
          "reviewBody": "Leverte a biztosítékot a bojler. Telefonon azonnal megmondták mi lehet, kiszálltak, fűtőszál csere 2 óra alatt.",
          "datePublished": "2025-02-14"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Bojler Szerelési Szolgáltatások",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Bojler javítás"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Bojler csere"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "15000", "maxPrice": "35000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Vízkőtelenítés"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "12000", "maxPrice": "20000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ariston bojler szerviz"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Hajdú bojler szerviz"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "10000", "maxPrice": "28000", "priceCurrency": "HUF"}}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Miért nem melegít a villanybojler?",
          "acceptedAnswer": {"@type": "Answer", "text": "A villanybojler leggyakoribb meghibásodásai: elégett fűtőszál (nem melegszik a víz), elromlott termosztát (nem áll be a hőmérséklet), leoldott biztonsági hőkapcsoló (túlhevülés után), vagy vastag vízkőréteg (lassú melegítés). Ezek közül a fűtőszál és termosztát csere a leggyakoribb, 10.000–28.000 Ft között javítható."}
        },
        {
          "@type": "Question",
          "name": "Mennyibe kerül a bojler javítás Budapesten 2025-ben?",
          "acceptedAnswer": {"@type": "Answer", "text": "A bojler javítás munkadíja Budapesten 10.000–28.000 Ft között mozog 2025-ben, az alkatrész árától függően. Fűtőszál csere: 12.000–20.000 Ft, termosztát csere: 10.000–18.000 Ft, biztonsági szelep csere: 8.000–15.000 Ft. Az alkatrész ára külön értendő."}
        },
        {
          "@type": "Question",
          "name": "Mikor kell bojlert cserélni javítás helyett?",
          "acceptedAnswer": {"@type": "Answer", "text": "Bojler cserét javasoljuk ha: a készülék 12 évnél idősebb, a tartályból rozsdás víz folyik, szivárog a tartály, vagy az éves javítási költség meghaladja az új bojler árának 40%-át. 7 évnél fiatalabb, ép tartályú bojlernél általában megéri javítani."}
        },
        {
          "@type": "Question",
          "name": "Miért veri le a bojler a biztosítékot?",
          "acceptedAnswer": {"@type": "Answer", "text": "Ha a villanybojler leveri a biztosítékot, az leggyakrabban elhasználódott vagy nedves fűtőszál miatt van. A fűtőszál szigetelése megsérül, földre szivárog az áram – ez védelmi kioldást okoz. Másik ok lehet a sérült tápkábel vagy belső rövidzárlat. Ez sürgős szervizeset, ne használja tovább a bojlert!"}
        },
        {
          "@type": "Question",
          "name": "Mennyi ideig tart egy bojler csere Budapesten?",
          "acceptedAnswer": {"@type": "Answer", "text": "Egy villanybojler csere általában 2–3 órát vesz igénybe. Ez magában foglalja a régi bojler leszedését és elszállítását, az új bojler felszerelését, bekötését és a rendszer próbáját. Nagy kapacitású (120+ literes) bojler esetén 3–4 óra."}
        },
        {
          "@type": "Question",
          "name": "Milyen garancia van a bojler javításra?",
          "acceptedAnswer": {"@type": "Answer", "text": "Minden elvégzett munkánkra a Ptk. szerinti jótállást és szavatosságot biztosítjuk, számlás teljesítéssel. Az általunk beépített alkatrészekre gyártói garancia vonatkozik."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Főoldal", "item": "<?= $base ?>/"}]
    }
  ]
}
</script>

<style>
/* ================================================
   RESET & BASE
================================================ */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;color:#1a1a2e;background:#fff;line-height:1.6;overflow-x:hidden}
img{max-width:100%;height:auto;display:block}
a{color:inherit;text-decoration:none}
ul{list-style:none}
button{font-family:inherit}

/* ================================================
   CSS VÁLTOZÓK – BOJLER TÉMA (tűz + meleg)
================================================ */
:root{
  --fire:#c62828;
  --fire-dark:#8e0000;
  --fire-light:#ef5350;
  --amber:#f57f17;
  --amber-bright:#ffab00;
  --dark:#0f0f1a;
  --dark-card:#1a1a2e;
  --green:#2e7d32;
  --white:#ffffff;
  --gray-light:#f5f5f7;
  --gray:#e8e8ed;
  --gray-mid:#9e9ea8;
  --text:#1a1a2e;
  --text-light:#4a4a5a;
  --shadow-sm:0 2px 8px rgba(198,40,40,.10);
  --shadow-md:0 6px 24px rgba(198,40,40,.16);
  --shadow-lg:0 16px 48px rgba(198,40,40,.20);
  --radius:12px;
  --radius-sm:8px;
  --t:all .22s ease;
}

/* ================================================
   TIPOGRÁFIA
================================================ */
h1{font-size:clamp(1.8rem,4.5vw,3rem);font-weight:900;line-height:1.1;color:#fff;letter-spacing:-.02em}
h2{font-size:clamp(1.45rem,3vw,2.2rem);font-weight:800;line-height:1.2;color:var(--text)}
h3{font-size:clamp(1.05rem,2vw,1.3rem);font-weight:700;color:var(--text)}
h4{font-size:1rem;font-weight:700;color:var(--text)}
p{color:var(--text-light);line-height:1.7}
strong{color:var(--text);font-weight:700}

/* ================================================
   SÜRGŐSSÉGI SÁV
================================================ */
.alert-bar{
  background:var(--fire-dark);color:#fff;
  text-align:center;padding:.5rem 1rem;
  font-size:.84rem;font-weight:600;letter-spacing:.01em;
}
.alert-bar a{color:#ffcc02;text-decoration:none;font-weight:800}
.alert-bar a:hover{text-decoration:underline}

/* ================================================
   FEJLÉC
================================================ */
.site-header{
  position:sticky;top:0;z-index:1000;
  background:var(--dark);
  box-shadow:0 2px 16px rgba(0,0,0,.4);
}
.header-inner{
  max-width:1200px;margin:0 auto;
  display:flex;align-items:center;justify-content:space-between;
  padding:.7rem 1.5rem;gap:1rem;
}
.logo a{
  display:flex;align-items:center;gap:.65rem;color:#fff;
  font-size:1.1rem;font-weight:900;white-space:nowrap;
}
.logo-mark{
  width:42px;height:42px;border-radius:10px;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  display:flex;align-items:center;justify-content:center;
  font-size:1.3rem;
}
.logo-sub{font-size:.68rem;font-weight:400;color:rgba(255,255,255,.6);display:block;margin-top:1px}

.main-nav{display:flex;gap:.1rem;flex-wrap:wrap;align-items:center}
.main-nav a{
  color:rgba(255,255,255,.8);font-size:.84rem;font-weight:500;
  padding:.4rem .65rem;border-radius:6px;transition:var(--t);white-space:nowrap;
}
.main-nav a:hover{background:rgba(255,255,255,.1);color:#fff}

.h-cta{display:flex;align-items:center;gap:.6rem;flex-shrink:0}
.btn-hcall{
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.55rem 1.15rem;border-radius:var(--radius-sm);
  font-weight:800;font-size:.9rem;white-space:nowrap;
  box-shadow:0 3px 12px rgba(198,40,40,.4);transition:var(--t);
}
.btn-hcall:hover{transform:translateY(-1px);box-shadow:0 5px 18px rgba(198,40,40,.5)}
.btn-hcall small{display:block;font-size:.64rem;font-weight:400;opacity:.85}

.nav-toggle{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:.4rem}
.nav-toggle span{width:24px;height:2px;background:#fff;border-radius:2px;transition:var(--t)}
#nav-check{display:none}

/* ================================================
   HERO
================================================ */
.hero{
  background:linear-gradient(145deg,var(--fire-dark) 0%,var(--fire) 50%,#d84315 100%);
  position:relative;overflow:hidden;
  padding:4.5rem 1.5rem 3.5rem;
}
.hero::after{
  content:'';position:absolute;
  bottom:-1px;left:0;right:0;height:60px;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 60'%3E%3Cpath fill='%23f5f5f7' d='M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60Z'/%3E%3C/svg%3E") bottom/cover;
  pointer-events:none;
}
.hero-wrap{max-width:1200px;margin:0 auto;position:relative;z-index:1}
.hero-grid{display:grid;grid-template-columns:1fr 280px;gap:2.5rem;align-items:start}

.hero-panic{
  display:inline-flex;align-items:center;gap:.5rem;
  background:rgba(0,0,0,.3);color:#ffcc02;
  padding:.35rem .9rem;border-radius:20px;
  font-size:.82rem;font-weight:800;margin-bottom:1rem;
  border:1px solid rgba(255,204,2,.3);letter-spacing:.04em;
  text-transform:uppercase;
}
.hero h1{margin-bottom:.8rem;text-shadow:0 2px 12px rgba(0,0,0,.3)}
.hero h1 em{font-style:normal;color:#ffcc02}
.hero-desc{
  color:rgba(255,255,255,.9);font-size:1.1rem;
  margin-bottom:1.5rem;max-width:580px;line-height:1.65;
}
.hero-checklist{
  display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:2rem;
}
.hc-item{
  display:flex;align-items:center;gap:.4rem;
  color:rgba(255,255,255,.93);font-size:.83rem;font-weight:600;
  background:rgba(0,0,0,.25);padding:.3rem .75rem;border-radius:20px;
  border:1px solid rgba(255,255,255,.15);
}
.hero-btns{display:flex;gap:.85rem;flex-wrap:wrap;margin-bottom:1.75rem}
.btn-hero-call{
  background:#fff;color:var(--fire);
  padding:.9rem 1.9rem;border-radius:var(--radius-sm);
  font-weight:900;font-size:1.1rem;
  box-shadow:0 6px 24px rgba(0,0,0,.25);transition:var(--t);
  display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-call:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(0,0,0,.35)}
.btn-hero-wa{
  background:rgba(255,255,255,.12);color:#fff;
  padding:.9rem 1.5rem;border-radius:var(--radius-sm);
  font-weight:700;border:2px solid rgba(255,255,255,.35);
  transition:var(--t);display:inline-flex;align-items:center;gap:.5rem;
}
.btn-hero-wa:hover{background:rgba(255,255,255,.22)}

.hero-signals{display:flex;flex-wrap:wrap;gap:1.25rem}
.sig{display:flex;align-items:center;gap:.4rem;color:rgba(255,255,255,.85);font-size:.82rem;font-weight:500}

/* Hero kártya */
.hero-card{
  background:var(--dark);border-radius:var(--radius);
  padding:1.5rem;border:1px solid rgba(255,255,255,.08);
  box-shadow:0 16px 48px rgba(0,0,0,.4);
}
.hc-urgent{
  text-align:center;
  background:linear-gradient(135deg,var(--fire-dark),var(--fire));
  border-radius:var(--radius-sm);padding:.8rem;margin-bottom:1rem;
}
.hc-urgent .u-label{font-size:.7rem;color:rgba(255,255,255,.7);text-transform:uppercase;letter-spacing:.08em;display:block}
.hc-urgent .u-phone{font-size:1.4rem;font-weight:900;color:#fff;display:block;margin:.2rem 0}
.hc-urgent .u-sub{font-size:.75rem;color:rgba(255,255,255,.75)}
.btn-call-red{
  display:block;width:100%;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;text-align:center;padding:.75rem;
  border-radius:var(--radius-sm);font-weight:800;font-size:.95rem;
  margin-bottom:.6rem;transition:var(--t);
}
.btn-call-red:hover{filter:brightness(1.1)}
.btn-wa-green{
  display:block;width:100%;
  background:#25d366;color:#fff;text-align:center;padding:.65rem;
  border-radius:var(--radius-sm);font-weight:700;font-size:.88rem;
  margin-bottom:.5rem;transition:var(--t);
}
.btn-wa-green:hover{background:#1ebe5d}
.hc-problems{margin-top:.85rem}
.hc-problems p{font-size:.73rem;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.07em;margin-bottom:.5rem}
.prob-list li{
  font-size:.83rem;color:rgba(255,255,255,.8);
  padding:.3rem 0;border-bottom:1px solid rgba(255,255,255,.07);
  display:flex;align-items:center;gap:.4rem;
}
.prob-list li:last-child{border-bottom:none}

/* ================================================
   STATS SÁV
================================================ */
.stats-bar{background:var(--dark);padding:1.5rem}
.stats-inner{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;
}
.stat{text-align:center}
.stat-n{font-size:2rem;font-weight:900;color:var(--amber);line-height:1}
.stat-l{font-size:.76rem;color:rgba(255,255,255,.6);margin-top:.25rem}

/* ================================================
   KÖZÖS SZEKCIÓ STÍLUSOK
================================================ */
.section{padding:4rem 1.5rem}
.section-alt{background:var(--gray-light)}
.section-dark{background:var(--dark-card)}
.container{max-width:1200px;margin:0 auto}
.tag{
  display:inline-block;font-size:.76rem;font-weight:700;
  text-transform:uppercase;letter-spacing:.1em;
  padding:.25rem .8rem;border-radius:20px;margin-bottom:.65rem;
}
.tag-fire{color:var(--fire);background:rgba(198,40,40,.1)}
.tag-dark{color:var(--amber);background:rgba(245,127,23,.15)}
.sec-title{margin-bottom:.6rem}
.sec-sub{color:var(--text-light);font-size:1rem;max-width:640px;margin-bottom:2.5rem}
.sec-title-white{color:#fff;margin-bottom:.6rem}
.sec-sub-white{color:rgba(255,255,255,.7);font-size:1rem;max-width:640px;margin-bottom:2.5rem}

/* ================================================
   AI SNIPPET BLOKK
================================================ */
.ai-snippet{
  background:linear-gradient(135deg,#0f0f1a,#1a1a2e);
  border-radius:var(--radius);padding:1.75rem 2rem;
  border-left:4px solid var(--amber);
  box-shadow:var(--shadow-md);
  margin-bottom:2.5rem;
}
.ai-label{
  display:inline-flex;align-items:center;gap:.4rem;
  font-size:.72rem;font-weight:700;color:var(--amber);
  text-transform:uppercase;letter-spacing:.1em;margin-bottom:.75rem;
  background:rgba(245,127,23,.15);padding:.2rem .7rem;border-radius:20px;
}
.ai-snippet h3{color:#fff;margin-bottom:.75rem;font-size:1.1rem}
.ai-snippet p{color:rgba(255,255,255,.78);font-size:.92rem;line-height:1.75;margin-bottom:.5rem}
.ai-snippet p:last-child{margin-bottom:0}

/* ================================================
   SZOLGÁLTATÁS KÁRTYÁK
================================================ */
.services-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));
  gap:1.25rem;
}
.svc-card{
  background:#fff;border-radius:var(--radius);
  border:1px solid var(--gray);padding:1.6rem;
  transition:var(--t);position:relative;overflow:hidden;
}
.svc-card::after{
  content:'';position:absolute;top:0;left:0;right:0;height:4px;
  background:linear-gradient(90deg,var(--fire),var(--amber));
  transform:scaleX(0);transform-origin:left;transition:var(--t);
}
.svc-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);border-color:transparent}
.svc-card:hover::after{transform:scaleX(1)}
.svc-icon{
  width:54px;height:54px;border-radius:12px;
  background:linear-gradient(135deg,rgba(198,40,40,.08),rgba(245,127,23,.12));
  display:flex;align-items:center;justify-content:center;
  font-size:1.55rem;margin-bottom:1rem;transition:var(--t);
}
.svc-card:hover .svc-icon{background:linear-gradient(135deg,rgba(198,40,40,.15),rgba(245,127,23,.2))}
.svc-price{
  display:inline-block;font-size:.78rem;font-weight:800;
  color:var(--fire);background:rgba(198,40,40,.08);
  padding:.2rem .65rem;border-radius:20px;margin-bottom:.75rem;
}
.svc-card h3{margin-bottom:.5rem;font-size:1.05rem}
.svc-card p{font-size:.88rem;margin-bottom:1rem}
.svc-list{margin-bottom:1rem}
.svc-list li{font-size:.83rem;color:var(--text-light);padding:.2rem 0;display:flex;align-items:center;gap:.4rem}
.svc-list li::before{content:'✓';color:var(--green);font-weight:700;font-size:.8rem;flex-shrink:0}
.svc-link{font-size:.85rem;font-weight:700;color:var(--fire);display:flex;align-items:center;gap:.3rem;transition:var(--t)}
.svc-link:hover{gap:.6rem}

/* ================================================
   MÁRKA SZEKCIÓ
================================================ */
.brand-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.brand-card{
  border-radius:var(--radius);padding:2rem;
  border:2px solid transparent;transition:var(--t);
}
.brand-ariston{background:linear-gradient(135deg,#fff9f9,#fff3f3);border-color:rgba(198,40,40,.2)}
.brand-hajdu{background:linear-gradient(135deg,#f9f9ff,#f0f4ff);border-color:rgba(21,101,192,.2)}
.brand-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md)}
.brand-header{display:flex;align-items:center;gap:.75rem;margin-bottom:1.25rem}
.brand-icon{
  width:50px;height:50px;border-radius:10px;
  display:flex;align-items:center;justify-content:center;font-size:1.5rem;
}
.brand-ariston .brand-icon{background:rgba(198,40,40,.1)}
.brand-hajdu .brand-icon{background:rgba(21,101,192,.1)}
.brand-name{font-size:1.3rem;font-weight:900}
.brand-ariston .brand-name{color:var(--fire)}
.brand-hajdu .brand-name{color:#1565c0}
.brand-sub{font-size:.78rem;color:var(--text-light)}
.brand-types{display:flex;flex-wrap:wrap;gap:.4rem;margin:1rem 0}
.btype{
  font-size:.78rem;font-weight:600;padding:.25rem .65rem;
  border-radius:20px;border:1px solid;
}
.brand-ariston .btype{color:var(--fire);border-color:rgba(198,40,40,.25);background:rgba(198,40,40,.06)}
.brand-hajdu .btype{color:#1565c0;border-color:rgba(21,101,192,.25);background:rgba(21,101,192,.06)}
.brand-features li{
  font-size:.86rem;color:var(--text-light);
  padding:.3rem 0;border-bottom:1px solid var(--gray);
  display:flex;align-items:center;gap:.5rem;
}
.brand-features li:last-child{border-bottom:none}
.brand-link{
  display:inline-flex;align-items:center;gap:.4rem;
  margin-top:1rem;font-size:.88rem;font-weight:700;
  padding:.55rem 1.1rem;border-radius:var(--radius-sm);transition:var(--t);
}
.brand-ariston .brand-link{color:#fff;background:var(--fire)}
.brand-ariston .brand-link:hover{background:var(--fire-dark)}
.brand-hajdu .brand-link{color:#fff;background:#1565c0}
.brand-hajdu .brand-link:hover{background:#0d47a1}

/* ================================================
   HIBAKÓD / TÜNET BLOKK
================================================ */
.symptom-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
  gap:1rem;
}
.symptom-card{
  background:#fff;border-radius:var(--radius-sm);padding:1.25rem;
  border:1px solid var(--gray);transition:var(--t);
  border-left:3px solid var(--fire);
}
.symptom-card:hover{box-shadow:var(--shadow-sm);transform:translateY(-2px)}
.sym-icon{font-size:1.5rem;margin-bottom:.5rem}
.sym-title{font-weight:700;font-size:.92rem;margin-bottom:.4rem;color:var(--text)}
.sym-cause{font-size:.82rem;color:var(--text-light);margin-bottom:.5rem}
.sym-price{font-size:.8rem;font-weight:700;color:var(--fire)}

/* ================================================
   ÁRAK
================================================ */
.price-table{width:100%;border-collapse:collapse;border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm)}
.price-table thead tr{background:linear-gradient(90deg,var(--fire-dark),var(--fire));color:#fff}
.price-table thead th{padding:1rem 1.25rem;text-align:left;font-size:.88rem;font-weight:700}
.price-table tbody tr{border-bottom:1px solid var(--gray);transition:var(--t)}
.price-table tbody tr:hover{background:#fff5f5}
.price-table tbody tr:last-child{border-bottom:none}
.price-table td{padding:.85rem 1.25rem;font-size:.9rem}
.price-table td:first-child{font-weight:600}
.price-col{font-weight:800;color:var(--fire)}
.note-col{font-size:.8rem;color:var(--text-light)}
.price-note{margin-top:1rem;font-size:.84rem;color:var(--text-light);padding:.75rem 1rem;background:var(--gray-light);border-radius:var(--radius-sm);border-left:3px solid var(--amber)}

/* ================================================
   DÖNTÉS SEGÉD – JAVÍTÁS VS CSERE
================================================ */
.decision-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.dec-card{border-radius:var(--radius);padding:1.75rem;border:2px solid transparent}
.dec-fix{background:linear-gradient(135deg,#f0fff4,#e8f5e9);border-color:#81c784}
.dec-replace{background:linear-gradient(135deg,#fff5f0,#fbe9e7);border-color:#ef9a9a}
.dec-header{display:flex;align-items:center;gap:.75rem;margin-bottom:1.25rem}
.dec-icon{font-size:1.8rem}
.dec-title{font-size:1.1rem;font-weight:800}
.dec-fix .dec-title{color:var(--green)}
.dec-replace .dec-title{color:var(--fire)}
.dec-list li{
  display:flex;align-items:flex-start;gap:.5rem;
  font-size:.88rem;color:var(--text-light);
  padding:.35rem 0;border-bottom:1px solid rgba(0,0,0,.06);
}
.dec-list li:last-child{border-bottom:none}
.dec-badge{
  display:inline-block;margin-top:1rem;
  font-size:.8rem;font-weight:700;padding:.3rem .8rem;border-radius:20px;
}
.dec-fix .dec-badge{background:var(--green);color:#fff}
.dec-replace .dec-badge{background:var(--fire);color:#fff}

/* ================================================
   MIÉRT MINKET
================================================ */
.reasons-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:1.25rem}
.reason{
  background:rgba(255,255,255,.05);border-radius:var(--radius);
  padding:1.5rem;border:1px solid rgba(255,255,255,.08);
  transition:var(--t);
}
.reason:hover{background:rgba(255,255,255,.09);transform:translateY(-2px)}
.reason-num{
  width:42px;height:42px;border-radius:10px;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:900;font-size:1rem;margin-bottom:1rem;
}
.reason h4{color:#fff;margin-bottom:.4rem;font-size:1rem}
.reason p{color:rgba(255,255,255,.65);font-size:.86rem}

/* ================================================
   FOLYAMAT LÉPÉSEK
================================================ */
.steps-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1.5rem;position:relative}
.steps-grid::before{
  content:'';position:absolute;top:28px;left:10%;right:10%;height:2px;
  background:linear-gradient(90deg,var(--fire),var(--amber));z-index:0;
}
.step{text-align:center;position:relative;z-index:1;padding:.5rem}
.step-n{
  width:56px;height:56px;border-radius:50%;margin:0 auto 1rem;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:1.4rem;font-weight:900;
  box-shadow:0 4px 16px rgba(198,40,40,.4);
}
.step h4{margin-bottom:.35rem;font-size:.95rem}
.step p{font-size:.83rem}

/* ================================================
   VÉLEMÉNYEK
================================================ */
.reviews-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.25rem}
.review-card{
  background:#fff;border-radius:var(--radius);padding:1.5rem;
  border:1px solid var(--gray);box-shadow:var(--shadow-sm);
  border-top:3px solid var(--fire);
}
.rv-stars{color:#f9a825;font-size:1.1rem;margin-bottom:.75rem}
.rv-text{font-size:.92rem;font-style:italic;margin-bottom:1rem;line-height:1.65;color:var(--text)}
.rv-author{display:flex;align-items:center;gap:.75rem}
.rv-av{
  width:40px;height:40px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:.9rem;
}
.rv-name{font-weight:700;font-size:.88rem}
.rv-loc{font-size:.76rem;color:var(--text-light)}

/* ================================================
   KERÜLETEK
================================================ */
.districts-grid{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(125px,1fr));gap:.5rem;
}
.dist-link{
  display:block;background:#fff;border:1px solid var(--gray);
  border-radius:var(--radius-sm);padding:.55rem .7rem;
  font-size:.8rem;font-weight:600;color:var(--fire);text-align:center;
  transition:var(--t);
}
.dist-link:hover{background:var(--fire);color:#fff;border-color:var(--fire);transform:translateY(-2px)}

/* ================================================
   FAQ
================================================ */
.faq-wrap{max-width:820px}
.faq-item{border:1px solid var(--gray);border-radius:var(--radius-sm);margin-bottom:.6rem;overflow:hidden}
.faq-item:hover{border-color:var(--fire)}
.faq-q{
  width:100%;background:none;border:none;cursor:pointer;
  padding:1.1rem 1.25rem;display:flex;align-items:center;
  justify-content:space-between;text-align:left;
  font-size:.95rem;font-weight:700;color:var(--text);gap:1rem;
}
.faq-icon{
  width:26px;height:26px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:1rem;transition:var(--t);
}
.faq-a{
  max-height:0;overflow:hidden;
  transition:max-height .3s ease,padding .3s ease;
  padding:0 1.25rem;font-size:.9rem;color:var(--text-light);
}
.faq-item.open .faq-a{max-height:250px;padding:.75rem 1.25rem 1.1rem}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-item.open{border-color:var(--fire);box-shadow:var(--shadow-sm)}

/* ================================================
   KAPCSOLAT
================================================ */
.contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:start}
.contact-card{
  background:linear-gradient(135deg,var(--fire-dark),var(--fire));
  border-radius:var(--radius);padding:2rem;color:#fff;
}
.contact-card h3{color:#fff;margin-bottom:1.25rem;font-size:1.4rem}
.cc-item{display:flex;align-items:center;gap:.85rem;margin-bottom:1.1rem;padding-bottom:1.1rem;border-bottom:1px solid rgba(255,255,255,.15)}
.cc-item:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.cc-ico{width:44px;height:44px;border-radius:10px;flex-shrink:0;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:1.2rem}
.cc-lbl{font-size:.7rem;opacity:.7;display:block;margin-bottom:.1rem;text-transform:uppercase;letter-spacing:.06em}
.cc-val{font-weight:700;font-size:.98rem}
.cc-val a{color:#fff}
.contact-btns{display:flex;gap:.6rem;margin-top:1rem;flex-wrap:wrap}
.cbtn{flex:1;min-width:90px;text-align:center;padding:.6rem;border-radius:8px;font-weight:700;font-size:.84rem;transition:var(--t)}
.cbtn-wa{background:#25d366;color:#fff}
.cbtn-wa:hover{background:#1ebe5d}
.cbtn-vb{background:#7360f2;color:#fff}
.cbtn-vb:hover{background:#5c4de0}

.form-card{background:#fff;border-radius:var(--radius);padding:2rem;border:1px solid var(--gray);box-shadow:var(--shadow-sm)}
.form-card h3{margin-bottom:1.25rem}
.fg{margin-bottom:1rem}
.fg label{display:block;font-size:.82rem;font-weight:700;margin-bottom:.35rem;color:var(--text)}
.fg input,.fg textarea{
  width:100%;padding:.7rem .9rem;
  border:1.5px solid var(--gray);border-radius:var(--radius-sm);
  font-size:.92rem;font-family:inherit;color:var(--text);transition:var(--t);
}
.fg input:focus,.fg textarea:focus{outline:none;border-color:var(--fire);box-shadow:0 0 0 3px rgba(198,40,40,.1)}
.fg textarea{resize:vertical;min-height:90px}
.btn-submit{
  width:100%;background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.85rem;border-radius:var(--radius-sm);
  font-weight:800;font-size:1rem;border:none;cursor:pointer;transition:var(--t);
}
.btn-submit:hover{filter:brightness(1.08);transform:translateY(-1px)}
.form-note{font-size:.73rem;color:var(--text-light);margin-top:.5rem;text-align:center}
.form-note a{color:var(--fire)}
#fs{display:none;text-align:center;padding:1.5rem}
#fs .fi{font-size:2.5rem;margin-bottom:.5rem}

/* ================================================
   CTA BANNER
================================================ */
.cta-banner{
  background:linear-gradient(135deg,#0f0f1a 0%,var(--fire-dark) 100%);
  padding:3.5rem 1.5rem;text-align:center;
}
.cta-banner h2{color:#fff;margin-bottom:.6rem}
.cta-banner p{color:rgba(255,255,255,.75);margin-bottom:2rem;font-size:1.05rem}
.cta-btns{display:flex;justify-content:center;gap:1rem;flex-wrap:wrap}
.btn-cta-main{
  background:linear-gradient(135deg,#fff,#fff5f0);color:var(--fire);
  padding:.95rem 2.2rem;border-radius:var(--radius-sm);
  font-weight:900;font-size:1.1rem;transition:var(--t);
  box-shadow:0 6px 24px rgba(255,255,255,.2);
}
.btn-cta-main:hover{transform:translateY(-2px);box-shadow:0 10px 32px rgba(255,255,255,.3)}
.btn-cta-sec{
  background:transparent;color:#fff;
  padding:.95rem 2rem;border-radius:var(--radius-sm);
  font-weight:700;border:2px solid rgba(255,255,255,.35);transition:var(--t);
}
.btn-cta-sec:hover{border-color:#fff;background:rgba(255,255,255,.1)}

/* ================================================
   FOOTER
================================================ */
.site-footer{background:#050510;color:rgba(255,255,255,.65)}
.footer-main{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1fr;
  gap:2.5rem;padding:3rem 1.5rem 2rem;
}
.footer-brand p{font-size:.86rem;line-height:1.7;margin:1rem 0 1.25rem;max-width:270px}
.f-contact-row{display:flex;align-items:center;gap:.55rem;margin-bottom:.5rem;font-size:.84rem}
.f-contact-row a{color:rgba(255,255,255,.65);transition:var(--t)}
.f-contact-row a:hover{color:#fff}
.f-heading{color:#fff;font-size:.76rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;margin-bottom:.85rem}
.f-links li{margin-bottom:.4rem}
.f-links a{font-size:.83rem;color:rgba(255,255,255,.6);transition:var(--t)}
.f-links a:hover{color:#fff}
.footer-logo{color:#fff;font-size:1.05rem;font-weight:900}

.footer-bottom{
  border-top:1px solid rgba(255,255,255,.07);
  max-width:1200px;margin:0 auto;
  padding:1.25rem 1.5rem;
  display:flex;align-items:center;justify-content:space-between;
  font-size:.76rem;flex-wrap:wrap;gap:.5rem;
}
.footer-bottom-links{display:flex;gap:1.1rem;flex-wrap:wrap}
.footer-bottom-links a{color:rgba(255,255,255,.4);transition:var(--t)}
.footer-bottom-links a:hover{color:rgba(255,255,255,.8)}

/* ================================================
   LEBEGŐ GOMBOK
================================================ */
.float-wa{
  position:fixed;bottom:5.5rem;right:1.25rem;z-index:900;
  width:52px;height:52px;border-radius:50%;
  background:#25d366;color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.5rem;border:3px solid #fff;
  box-shadow:0 4px 16px rgba(37,211,102,.45);transition:var(--t);
}
.float-wa:hover{transform:scale(1.1)}
.float-call{
  position:fixed;bottom:1.25rem;right:1.25rem;z-index:900;
  display:flex;align-items:center;gap:.55rem;
  background:linear-gradient(135deg,var(--fire),var(--amber));
  color:#fff;padding:.65rem 1.15rem;border-radius:30px;
  font-weight:800;font-size:.9rem;border:3px solid #fff;
  box-shadow:0 4px 20px rgba(198,40,40,.5);transition:var(--t);
}
.float-call:hover{filter:brightness(1.1);transform:translateY(-2px)}
@keyframes firepulse{0%,100%{box-shadow:0 4px 20px rgba(198,40,40,.5)}50%{box-shadow:0 4px 32px rgba(198,40,40,.8),0 0 0 8px rgba(198,40,40,.12)}}
.float-call{animation:firepulse 2.5s infinite}

/* ================================================
   RESZPONZÍV
================================================ */
@media(max-width:1024px){
  .hero-grid{grid-template-columns:1fr}
  .hero-card{display:none}
  .brand-grid{grid-template-columns:1fr}
  .decision-grid{grid-template-columns:1fr}
  .contact-grid{grid-template-columns:1fr}
  .footer-main{grid-template-columns:1fr 1fr}
}
@media(max-width:768px){
  .main-nav{display:none;position:absolute;top:100%;left:0;right:0;background:var(--dark);flex-direction:column;padding:1rem;gap:.2rem;box-shadow:var(--shadow-lg)}
  #nav-check:checked ~ .header-inner .main-nav{display:flex}
  .nav-toggle{display:flex}
  .stats-inner{grid-template-columns:repeat(2,1fr)}
  .steps-grid::before{display:none}
  .footer-main{grid-template-columns:1fr}
}
@media(max-width:480px){
  .hero{padding:2.5rem 1rem 2rem}
  .section{padding:2.5rem 1rem}
  .stats-inner{grid-template-columns:repeat(2,1fr);gap:.5rem}
  .stat-n{font-size:1.6rem}
}
</style>
