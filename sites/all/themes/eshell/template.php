<?php

/*
* adjusted functionality and information on content types
* implements template_preprocess_node()
* 
* @param includes node, view_mode and page variables
*/
function eshell_preprocess_node(&$vars) {
   $content_type = $vars['type'];
   $view_mode = $vars['view_mode'];

   // Creates page tempaltes for each view mode of a content type
   $vars['theme_hook_suggestions'][] = 'node__' . $content_type . '__' . $view_mode;

   // Displays date on pages with simpler format
   $vars['submitted'] = t('@date', array('@date' => date("M jS", $vars['created'])));
}

/* search bar placeholder text
function eshell_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  if (isset($form['search_block_form'])) {
    $form['search_block_form']['#title'] = t('Enter search terms here');
  }
}
*/
