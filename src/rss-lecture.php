<?php 



$userInterests = explode(",", $_SESSION["interests"]);

// pour intégrer le flux rss
$feeds = [
    "une" => "https://www.lemonde.fr/rss/une.xml",
    "ameriques" => "https://www.lemonde.fr/ameriques/rss_full.xml",
    "politique" => "https://www.lemonde.fr/politique/rss_full.xml",
    "economie" => "https://www.lemonde.fr/economie/rss_full.xml",
    "musiques" => "https://www.lemonde.fr/musiques/rss_full.xml",
    "football" => "https://www.lemonde.fr/football/rss_full.xml",
    "medecine" => "https://www.lemonde.fr/medecine/rss_full.xml"
];

?>