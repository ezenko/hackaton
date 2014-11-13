<?php
/**
 * @file
 * feature_tabs.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_tabs_node_info() {
  $items = array(
    'item_tabs' => array(
      'name' => t('Item - Tabs'),
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
