<?php
// Ajout d'un filtre pour les SVG
add_filter('upload_mimes', 'addUploadMimes');

/**
* Ajout du format et type-mimes de SVG pour l'upload
*/
function addUploadMimes($mimes)
{
$mimes = array_merge($mimes, array(
'svg' => 'image/svg+xml'
));

return $mimes;
}
