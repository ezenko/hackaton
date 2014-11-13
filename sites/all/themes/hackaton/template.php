<?php

function hackaton_css_alter(&$css){
  unset($css['modules/system/system.theme.css']);
  unset($css['modules/system/system.base.css']);
  unset($css['modules/search/search.css']);
  unset($css['modules/system/system.menus.css']);
  unset($css['sites/all/modules/contrib/views/css/views.css']);
  unset($css['misc/ui/jquery.ui.core.css']);
  unset($css['misc/ui/jquery.ui.theme.css']);
  unset($css['misc/ui/jquery.ui.dialog.css']);
  unset($css['modules/system/system.messages.css']);
}

function hackaton_preprocess_html(&$variables) {

}

function  hackaton_menu_tree__main_menu($variables){
  return '<ul class="nav top-2">'. $variables['tree'] . '</ul>';
}

function hackaton_menu_link($variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if (!empty($element['#attributes']['class']) && in_array('active-trail', $element['#attributes']['class'])) {
    $element['#attributes']['class'][] = 'active';
  }
  if ($sub_menu) {
    $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';

    $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    $element['#localized_options']['html'] = true;

    $output = '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $element['#title'] . '<b class="caret"></b></a>';
  } else {
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . str_replace('nav top-2', 'dropdown-menu', $sub_menu) . "<b class='caret-out'></b></li>\n";
}

function hackaton_preprocess_page(&$variables) {
  
  $menu_tree =  menu_tree_page_data('main-menu');
  $footer_menu_tree =  menu_tree_page_data('menu-footer');
  $variables['main_menu'] = menu_tree_output($menu_tree);
  $variables['footer_menu'] = menu_tree_output($footer_menu_tree);
  $variables['copyright'] = variable_get('copyright_text', '© Hoom');
  $variables['footer_nav'] = menu_tree('menu-footer');
  $variables['page_backgrnd'] = NULL;
  if(isset($variables['node'])){
	if(!empty($variables['node']->field_background_image)){
	  $variables['page_backgrnd'] = file_create_url($variables['node']->field_background_image[LANGUAGE_NONE]['0']['uri']); 
	}
  }
  
  if ( variable_get('show_button') ) {
    $variables['header_btn'] = l(
      variable_get('button_text', ''), 
      variable_get('button_link', ''),
      array(
        'attributes' => array(
          'class' => array(
            'button',
            'secondary-button'
          )
        )
      )
    );
  }
  
  $variables['footer_rich_text'] = variable_get('footer_rich_text','');  
  
  //Logo settings
  $logo_image = variable_get('logo_image', '');
  if(!empty($logo_image)){
    $logo_image = file_load($logo_image);
    if(!empty($logo_image))
      $variables['header_logo'] = image_style_url('default', $logo_image->uri);
  }
  $variables['header_logo_link'] = url(variable_get('logo_link', '<front>'));
    
  // Footer logo settings
  $footer_logo_image = variable_get('footer_logo_image', '');
  if(!empty($footer_logo_image)){
    $footer_logo_image = file_load($footer_logo_image);
    if(!empty($footer_logo_image))
      $variables['footer_logo'] = image_style_url('default', $footer_logo_image->uri);
  }
  $variables['footer_logo_link'] = url(variable_get('footer_logo_link', '<front>'));
}

function hackaton_preprocess_node(&$variables) {
  if ( isset($variables['field_snippet_bar']) && !empty($variables['field_snippet_bar']) ) {
    $variables['classes_array'][] = 'with-aside';
  }
}

function hackaton_preprocess_block(&$variables) {
  
}

function hackaton_preprocess_field(&$variables) {
  if ($variables['element']['#field_type'] == 'field_collection') {
    if (is_array($variables['theme_hook_suggestions']) && sizeof($variables['theme_hook_suggestions'])) {
      $last = array_pop($variables['theme_hook_suggestions']);
      $variables['theme_hook_suggestions'][] = 'field__field_collection__' . $variables['element']['#field_name'];
      $variables['theme_hook_suggestions'][] = $last;
    } else {
      $variables['theme_hook_suggestions'][] = 'field__field_collection__' . $variables['element']['#field_name'];
    }
  }
}

/**
 * hook_js_alter()
 * @param $javascript
 */
function hackaton_js_alter(&$javascript) {   
  $javascript['misc/jquery.js']['data'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js';
  $javascript['misc/jquery.js']['version'] = '1.10.2';
  
  if ( isset($javascript['modules/file/file.js']) ){
    $javascript['modules/file/file.js']['data'] = 'sites/all/themes/hoom/j/lib/file.js';
  }

  $javascript['misc/ui/jquery.ui.core.min.js']['data'] = '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js';
  $javascript['misc/ui/jquery.ui.core.min.js']['version'] = '1.10.3';

  if(!isset($javascript['misc/ui/jquery.ui.core.min.js']['scope'])){
    unset($javascript['misc/ui/jquery.ui.core.min.js']);
  }

  if(isset($javascript['misc/jquery.form.js'])){
    $javascript['misc/jquery.form.js']['data'] = drupal_get_path('theme', 'hoom') . '/j/lib/jquery.form.min.js';
    $javascript['misc/jquery.form.js']['version'] = 'v20130731';
  }

  if(isset($javascript['misc/ui/jquery.ui.datepicker.min.js'])){
    unset($javascript['misc/ui/jquery.ui.datepicker.min.js']);
  }
}

function hackaton_process_page(&$variables) {
  if(isset($variables['node'])){
    $variables['theme_hook_suggestions'][] = 'page__'. $variables['node']->type;
  }
}
