<?
function yourthemename_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'yourthemename') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'yourthemename_preprocess_user_login'
  ),
 );
return $items;
}
?>