<?php


$script = array_pop(explode('/',$_SERVER['PHP_SELF']));
foreach(glob('kml/kml_*.php') as $file) if ($file != $script) include_once($file);