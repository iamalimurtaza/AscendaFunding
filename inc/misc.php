<?php
function afMapKey( $api ){
  $google_maps_api = get_field('google_maps_api', 'option');
  $api['key'] = $google_maps_api;
  return $api;
}
add_filter('acf/fields/google_map/api', 'afMapKey');