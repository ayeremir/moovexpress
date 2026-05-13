<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <!-- Pages principales -->
  <url>
    <loc>https://moovexpress.fr/</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/index.php')) ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/devis</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/devis.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
  </url>

  <!-- Services -->
  <url>
    <loc>https://moovexpress.fr/services/scooter-paris</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/services/scooter-paris.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.85</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/services/utilitaire-livraison</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/services/utilitaire-livraison.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.85</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/services/navette-reguliere</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/services/navette-reguliere.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/services/livraison-express-paris</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/services/livraison-express-paris.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.90</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/services/coursier-urgent-paris</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/services/coursier-urgent-paris.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.85</priority>
  </url>

  <!-- Zones géographiques -->
  <url>
    <loc>https://moovexpress.fr/zones/livraison-92-hauts-de-seine</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/zones/livraison-92-hauts-de-seine.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/zones/livraison-93-seine-saint-denis</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/zones/livraison-93-seine-saint-denis.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/zones/livraison-94-val-de-marne</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/zones/livraison-94-val-de-marne.php')) ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.80</priority>
  </url>

  <!-- Pages légales -->
  <url>
    <loc>https://moovexpress.fr/cgv</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/cgv.php')) ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/mentions-legales</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/mentions-legales.php')) ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  <url>
    <loc>https://moovexpress.fr/politique-confidentialite</loc>
    <lastmod><?= date('Y-m-d', filemtime(__DIR__.'/politique-confidentialite.php')) ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

</urlset>
