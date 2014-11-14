<?php
/**
 * @file
 * feature_snippets.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_snippets_node_info() {
  $items = array(
    'snippet_banner' => array(
      'name' => t('Snippet banner'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('CMS Title'),
      'help' => '',
    ),
    'snippet_links' => array(
      'name' => t('Snippet links'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('CMS Title'),
      'help' => '',
    ),
    'snippet_rich_text' => array(
      'name' => t('Snippet rich text'),
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
