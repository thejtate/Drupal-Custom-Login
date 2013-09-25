<?php
/*
 *  Remove labels and add HTML5 placeholder attribute to login form
 */
function THEME_form_alter(&$form, &$form_state, $form_id) {
  if ( TRUE === in_array( $form_id, array( 'user_login', 'user_login_block') ) )
    $form['name']['#attributes']['placeholder'] = t( 'Username' );
    $form['pass']['#attributes']['placeholder'] = t( 'Password' );
    $form['name']['#title_display'] = "invisible";
    $form['pass']['#title_display'] = "invisible";
}



/*
 *  Remove login form descriptions
 */
function THEME_form_user_login_alter(&$form, &$form_state) {
    $form['name']['#description'] = t('');
    $form['pass']['#description'] = t('');
}
?>