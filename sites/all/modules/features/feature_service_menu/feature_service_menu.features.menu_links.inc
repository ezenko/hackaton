<?php
/**
 * @file
 * feature_service_menu.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function feature_service_menu_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-service-menu_colours:http://colours.nl
  $menu_links['menu-service-menu_colours:http://colours.nl'] = array(
    'menu_name' => 'menu-service-menu',
    'link_path' => 'http://colours.nl',
    'router_path' => '',
    'link_title' => 'Colours',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-service-menu_colours:http://colours.nl',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 10,
    'customized' => 1,
  );
  // Exported menu link: menu-service-menu_drupal:http://drupal.org
  $menu_links['menu-service-menu_drupal:http://drupal.org'] = array(
    'menu_name' => 'menu-service-menu',
    'link_path' => 'http://drupal.org',
    'router_path' => '',
    'link_title' => 'Drupal',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-service-menu_drupal:http://drupal.org',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 39,
    'customized' => 1,
  );
  // Exported menu link: menu-service-menu_login:user
  $menu_links['menu-service-menu_login:user'] = array(
    'menu_name' => 'menu-service-menu',
    'link_path' => 'user',
    'router_path' => 'user',
    'link_title' => 'Login',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-service-menu_login:user',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Colours');
  t('Drupal');
  t('Login');


  return $menu_links;
}
