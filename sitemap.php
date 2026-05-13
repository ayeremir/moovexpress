<?php ob_start();
$base = __DIR__;
function lm($f){ return @file_exists($f) ? date('Y-m-d', filemtime($f)) : '2026-05-13'; }
ob_end_clean();
header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc>https://www.moovecourse.fr/</loc><lastmod><?= lm($base.'/index.php') ?></lastmod><changefreq>weekly</changefreq><priority>1.0</priority></url>
  <url><loc>https://www.moovecourse.fr/devis</loc><lastmod><?= lm($base.'/devis.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
  <url><loc>https://www.moovecourse.fr/services/scooter-paris</loc><lastmod><?= lm($base.'/services/scooter-paris.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.85</priority></url>
  <url><loc>https://www.moovecourse.fr/services/utilitaire-livraison</loc><lastmod><?= lm($base.'/services/utilitaire-livraison.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.85</priority></url>
  <url><loc>https://www.moovecourse.fr/services/navette-reguliere</loc><lastmod><?= lm($base.'/services/navette-reguliere.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.80</priority></url>
  <url><loc>https://www.moovecourse.fr/services/livraison-express-paris</loc><lastmod><?= lm($base.'/services/livraison-express-paris.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.90</priority></url>
  <url><loc>https://www.moovecourse.fr/services/coursier-urgent-paris</loc><lastmod><?= lm($base.'/services/coursier-urgent-paris.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.85</priority></url>
  <url><loc>https://www.moovecourse.fr/zones/livraison-92-hauts-de-seine</loc><lastmod><?= lm($base.'/zones/livraison-92-hauts-de-seine.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.80</priority></url>
  <url><loc>https://www.moovecourse.fr/zones/livraison-93-seine-saint-denis</loc><lastmod><?= lm($base.'/zones/livraison-93-seine-saint-denis.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.80</priority></url>
  <url><loc>https://www.moovecourse.fr/zones/livraison-94-val-de-marne</loc><lastmod><?= lm($base.'/zones/livraison-94-val-de-marne.php') ?></lastmod><changefreq>monthly</changefreq><priority>0.80</priority></url>
  <url><loc>https://www.moovecourse.fr/cgv</loc><lastmod><?= lm($base.'/cgv.php') ?></lastmod><changefreq>yearly</changefreq><priority>0.3</priority></url>
  <url><loc>https://www.moovecourse.fr/mentions-legales</loc><lastmod><?= lm($base.'/mentions-legales.php') ?></lastmod><changefreq>yearly</changefreq><priority>0.3</priority></url>
  <url><loc>https://www.moovecourse.fr/politique-confidentialite</loc><lastmod><?= lm($base.'/politique-confidentialite.php') ?></lastmod><changefreq>yearly</changefreq><priority>0.3</priority></url>
</urlset>
