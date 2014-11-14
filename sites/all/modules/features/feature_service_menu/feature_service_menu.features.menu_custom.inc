<?php
/**
 * @file
 * feature_service_menu.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function feature_service_menu_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-service-menu.
  $menus['menu-service-menu'] = array(
    'menu_name' => 'menu-service-menu',
    'title' => 'Service menu',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Service menu');


  return $menus;
}
