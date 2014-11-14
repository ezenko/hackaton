<?php
/**
 * @file
 * feature_text_page_advanced.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function feature_text_page_advanced_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_text_page_content_items'
  $field_bases['field_text_page_content_items'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_text_page_content_items',
    'foreign keys' => array(
      'nid' => array(
        'columns' => array(
          'nid' => 'nid',
        ),
        'table' => 'node',
      ),
    ),
    'indexes' => array(
      'nid' => array(
        0 => 'nid',
      ),
    ),
    'locked' => 0,
    'module' => 'node_reference',
    'settings' => array(
      'referenceable_types' => array(
        'article' => 0,
        'case_studies' => 'case_studies',
        'cta_block' => 0,
        'customer_logo' => 'customer_logo',
        'homepage' => 0,
        'page' => 0,
        'slider_item' => 0,
        'text_page_advanced' => 0,
        'usp_items' => 'usp_items',
      ),
      'view' => array(
        'args' => array(),
        'display_name' => '',
        'view_name' => '',
      ),
    ),
    'translatable' => 0,
    'type' => 'node_reference',
  );

  // Exported field_base: 'field_text_page_snippets'
  $field_bases['field_text_page_snippets'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_text_page_snippets',
    'foreign keys' => array(
      'nid' => array(
        'columns' => array(
          'nid' => 'nid',
        ),
        'table' => 'node',
      ),
    ),
    'indexes' => array(
      'nid' => array(
        0 => 'nid',
      ),
    ),
    'locked' => 0,
    'module' => 'node_reference',
    'settings' => array(
      'referenceable_types' => array(
        'article' => 0,
        'case_studies' => 0,
        'cta_block' => 0,
        'customer_logo' => 0,
        'homepage' => 0,
        'page' => 0,
        'slider_item' => 0,
        'snippet_banner' => 'snippet_banner',
        'snippet_links' => 'snippet_links',
        'snippet_rich_text' => 'snippet_rich_text',
        'text_page_advanced' => 0,
        'usp_items' => 0,
      ),
      'view' => array(
        'args' => array(),
        'display_name' => '',
        'view_name' => '',
      ),
    ),
    'translatable' => 0,
    'type' => 'node_reference',
  );

  return $field_bases;
}
