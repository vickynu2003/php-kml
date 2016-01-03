This php/dom based library allows to render [kml](http://en.wikipedia.org/wiki/Keyhole_Markup_Language) files and is as easy to use as

```
<?php

include('lib/kml.php');

$myPlacemark = new kml_Placemark('My place');
$myPlacemark->set_description('This is where I live !');
$myPlacemark->set_Geometry(new kml_Point(36.12, 10.45));


$myPlacemark->dump();
```