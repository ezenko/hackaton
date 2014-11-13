<?php
/**
 * @file
 * feature_rich_text_media.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_rich_text_media_node_info() {
  $items = array(
    'item_rich_text_and_media' => array(
      'name' => t('Item - Rich text and media'),
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
