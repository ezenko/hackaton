<?php
/**
 * @file
 * feature_text_page_advanced.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_text_page_advanced_node_info() {
  $items = array(
    'text_page_advanced' => array(
      'name' => t('Text page advanced'),
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
