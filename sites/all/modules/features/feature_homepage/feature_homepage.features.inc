<?php
/**
 * @file
 * feature_homepage.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_homepage_node_info() {
  $items = array(
    'homepage' => array(
      'name' => t('Homepage'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('CMS Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
