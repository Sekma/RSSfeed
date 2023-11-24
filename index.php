<?php
$fluxRSS = 'http://www.lemonde.fr/technologies/rss_full.xml';
$actu = simplexml_load_file($fluxRSS);

foreach ($actu->channel->item as $article) {
    echo '<h1>
    <a style="text-decoration:none" href="'.$article->link.'">'.$article->title.'.'.'</a>
     </h1>';
    echo '<p>'.$article->description.'</p>';
    }