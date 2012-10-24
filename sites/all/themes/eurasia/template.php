<?php
// define size of the search textfield
function eurasia_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#size'] = 32;  
  }
 }


// Change the seach tab to 'People' instead of 'Users'
function eurasia_preprocess_page(&$vars) {
    if (arg(0) == 'search') {
      $vars['tabs']['#primary'][1]['#link']['title'] = 'People';
	}
}

