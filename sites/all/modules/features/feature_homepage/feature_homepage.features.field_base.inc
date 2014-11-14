<?php
/**
 * @file
 * feature_homepage.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function feature_homepage_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_content_items'
  $field_bases['field_content_items'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_content_items',
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
        'cta_block' => 'cta_block',
        'customer_logo' => 'customer_logo',
        'homepage' => 0,
        'item_rich_text_and_media' => 'item_rich_text_and_media',
        'item_tabs' => 'item_tabs',
        'page' => 0,
        'slider_item' => 'slider_item',
        'testimonial' => 'testimonial',
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

  // Exported field_base: 'field_display_title'
  $field_bases['field_display_title'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_display_title',
    'foreign keys' => array(
      'format' => array(
        'columns' => array(
          'format' => 'format',
        ),
        'table' => 'filter_format',
      ),
    ),
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  return $field_bases;
}
