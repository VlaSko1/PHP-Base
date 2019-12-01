<?php
$title = "Главная страница - страница обо мне";
$h1 = "Информация обо мне";
$year = "2008";
$mig = "img/mig.jpg";
$t50 = "img/t50.jpg";

$file = file_get_contents("site.html");
$file = str_replace("{{ TITLE }}",$title,$file);

$file = str_replace("{{ H1 }}", $h1, $file);
$file = str_replace("{{ YEAR }}", $year, $file);
$file = str_replace("{{ MIG }}", $mig, $file);
$file = str_replace("{{ T50 }}", $t50, $file);

echo $file;
