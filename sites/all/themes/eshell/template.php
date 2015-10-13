<?php
function eshell_preprocess_node(&$vars) {
  $content_type = $vars['type'];
  $view_mode = $vars['view_mode'];

  // Creates page template suggestions for teasers
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }

  // Displays date on pages with simpler format
  $vars['submitted'] = t('@date', array('@date' => date("F jS, Y", $vars['created'])));
}

// Creating 404 page template
function eshell_preprocess_page(&$vars) {
  $header = drupal_get_http_header("status");
  if ($header == "404 Not Found") {
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
}

// User login placeholders
function eshell_form_alter( &$form, &$form_state, $form_id ) {
if ( TRUE === in_array( $form_id, array( 'user_login', 'user_login_block') ) )
  $form['name']['#attributes']['placeholder'] = t( 'Username' );
  $form['pass']['#attributes']['placeholder'] = t( 'Password' );
}
