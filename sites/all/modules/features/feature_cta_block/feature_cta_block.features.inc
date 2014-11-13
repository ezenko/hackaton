<?php
/**
 * @file
 * feature_cta_block.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_cta_block_node_info() {
  $items = array(
    'cta_block' => array(
      'name' => t('CTA block'),
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
