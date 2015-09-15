Danny op regel 18 een class toegevoegd 'eigen-class' op page.tpl.php, ik veronderstel dat je een page view aanmaakt en dan wordt er terug gevallen op de page.tpl.php.
Ik zou ipv een page-view aan te maken een block-view maken en deze tonen op een pagina enkel voor deze block-view, zodat je de h2 (titel van de view) kan opmaken op volgende manier
<div id="block-views-news-block">
<h2>News</h2>
</div>