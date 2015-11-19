<?php

/**
 * Implements hook_page_alter().
 */
function sw2015_page_alter(&$variables) {
  $variables['#attached']['css'][] = array(
    'type' => 'external',
    'data' => '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    'every_page' => TRUE,
  );
}