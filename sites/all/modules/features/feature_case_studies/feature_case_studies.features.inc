<?php
/**
 * @file
 * feature_case_studies.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_case_studies_node_info() {
  $items = array(
    'case_studies' => array(
      'name' => t('Case studies'),
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
