<?php

$fp = fopen('file.csv', 'r');

   $gg = fgetcsv ($fp, $fields);


print_r ($gg);


fclose($fp);

echo "<br>".'<a href="/">Вернуться назад</a>';