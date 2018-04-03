<?='<?xml version="1.0" encoding="UTF-8" ?>'?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
    	<loc><?=ROOT?></loc>
		<priority>1.0</priority>
		<changefreq>always</changefreq>
	</url>
	<?php foreach($secciones as $seccion): ?>
    <url>
        <loc><?=ROOT.'/'.$seccion->url?></loc>
        <changefreq>daily</changefreq>
		<priority>0.5</priority>
    </url>
	<?php endforeach; ?>
	<?php foreach($noticias as $noticia): ?>
    <url>
        <loc><?=ROOT.'/noticia/'.$noticia->url?></loc>
        <lastmod><?=$noticia->fecha?></lastmod>
        <changefreq>daily</changefreq>
		<priority>1.0</priority>
    </url>
	<?php endforeach; ?>
	<url>
        <loc><?=ROOT.'/nosotros'?></loc>
        <changefreq>monthly</changefreq>
		<priority>0.5</priority>
    </url>
    <url>
        <loc><?=ROOT.'/terminos'?></loc>
        <changefreq>monthly</changefreq>
		<priority>0.5</priority>
    </url>
    <url>
        <loc><?=ROOT.'/privacidad'?></loc>
        <changefreq>monthly</changefreq>
		<priority>0.5</priority>
    </url>
</urlset>