<?php

function eshell_preprocess_node(&$vars) {
  $content_type = $vars['type'];
  $view_mode = $vars['view_mode'];

  // Creates page templates for each view mode of a content type
  $vars['theme_hook_suggestions'][] = 'node__' . $content_type . '__' . $view_mode;

  // Creates page template suggestions for teasers
  if($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';   
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }

  // Displays date on pages with simpler format
  $vars['submitted'] = t('@date', array('@date' => date("M jS", $vars['created'])));
}
