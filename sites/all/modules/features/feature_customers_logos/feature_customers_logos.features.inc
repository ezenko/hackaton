<?php
/**
 * @file
 * feature_customers_logos.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_customers_logos_node_info() {
  $items = array(
    'customer_logo' => array(
      'name' => t('Customer logo'),
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
