<?php
include "sync_inc.php";

$target_id = 'slave_7';

### Allow arbitrary kml list to be selected by tag
$kml_tag = preg_replace( '/[^a-zA-Z0-9-_]/', '', getOrDefault('tag', '') );
$kml_tag_separator = (!empty( $kml_tag )) ? '-' : '';
$kml_data_file = "kmls" . $kml_tag_separator . $kml_tag . "_7.txt";

#LG server
$master_kml = 'http://lg1:81/kml/slave_7.kml';

include "sync_nlc_base.php";
?>