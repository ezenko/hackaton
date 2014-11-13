<?php
/**
 * @file
 * feature_usp_items.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_usp_items_node_info() {
  $items = array(
    'usp_items' => array(
      'name' => t('USP items'),
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
