<?php

// ******************* Page Id by Name ****************** //

// Usage:
// get_id_by_slug('any-page-slug');

function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

// ******************* Sidebars ****************** //

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Pages',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}

// ******************* Add Custom Menus ****************** //

add_theme_support( 'menus' );

// ******************* Add Custom Walker for Nav ****************** //

function stripAccents($stripAccents){
  return strtr($stripAccents,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}

class data_type_walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth, $args) {
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
    $class_names = ' class="'. esc_attr( $class_names ) . '"';

    $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'   . esc_attr( $item->attr_title     ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="'  . esc_attr( $item->target         ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'     . esc_attr( $item->xfn            ) .'"' : '';
    
    if (in_array("js-anchor", apply_filters('nav_menu_css_class', array_filter( $classes )))) { 
      $attributes .= ! empty( $item->url )        ? ' href="'    . esc_url( home_url('')). esc_attr( $item->url ) .'"' : '';
    } else {
      $attributes .= ! empty( $item->url )        ? ' href="'    . esc_attr( $item->url ) .'"' : '';
    }
    
    $prepend = '';
    $append = '';

    if($depth != 0) {
      $description = $append = $prepend = "";
    }

    $item_output = $args->before;
    // $item_output .= '<a'. $attributes .' ">';
    $item_output .= '<a'. $attributes .' data-panel="'.  remove_accents(apply_filters( 'the_title', $item->title, $item->ID )) .'">';
    $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
    $item_output .= $description.$args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

// ******************* Add Custom Excerpt Lengths ****************** //

function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...<a href="'. get_permalink().'">Read More ></a>';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// ******************* Add Post Thumbnails ****************** //

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true );
add_image_size( 'category-thumb', 300, 9999, true );

// ******************* Add Page Slug To Body Class ****************** //

function add_slug_body_class( $classes ) {
  global $post;

  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// ******************* Add Custom Post Types & Taxonomies ****************** //

register_post_type('custom', array(
  'label' => __('Custom Post Type'),
  'singular_label' => __('Custom Post Type'),
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'rewrite' => true,
  'query_var' => false,
  'has_archive' => true,
  'supports' => array('title', 'editor', 'author')
));
/*
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'taxo', 'custom', array( 'hierarchical' => true, 'label' => 'Custom Taxonomy', 'query_var' => true, 'rewrite' => true ) );
}*/


// ******************* Add Options to Theme Customizer ****************** //


function themename_customize_register($wp_customize){
    $wp_customize->add_section('themename_section_name', array(
      'title' => __('Section Title', 'themename'),
      'priority' => 120,
  ));

  $wp_customize->add_setting('themename_theme_options[themename_option_name]', array(
      'default'        => 'Input description',
      'capability'     => 'edit_theme_options',
      'type'           => 'option',
  ));

  $wp_customize->add_control('themename_option_name', array(
      'label'      => __('Name of option', 'themename'),
      'section'    => 'themename_section_name',
      'settings'   => 'themename_theme_options[themename_option_name]',
  ));
}

add_action('customize_register', 'themename_customize_register');


// ******************* Add Shortcode ****************** //

function secondaryCallout($atts, $content = null) {
  extract(shortcode_atts(array(
  'link'  => '#',
    'link_title'  => '',
    'content' => '',
    ), $atts));

  $out = '
    <div class="secondaryCallout tertiaryColorBkg">
      '.$content.' <a class="secondaryColorText" title="'.$link_title.'" href="'.$link.'">'.$link_title.' &gt;</a>
    </div>
  ';

    return $out;
}

add_shortcode('secondary_callout', 'secondaryCallout');

add_filter('widget_text', 'do_shortcode');

// ******************* Include jQuery Properly ****************** //

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function plugin_scripts() {
  wp_enqueue_script( 'panelSnap', get_template_directory_uri() . '/assets/plugins/jquery.panelSnap.js', array('jquery'), false, true );
  wp_enqueue_script( 'scrollTo', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.js', array('jquery'), false, true );
  wp_enqueue_script( 'stellar', 'https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/jquery.slick/1.5.6/slick.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'featherlight', '//cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.min.js', array('jquery'), false, true );
  wp_enqueue_script( 'fl-gallery', '//cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.gallery.min.js', array('jquery','featherlight'), false, true );
  wp_enqueue_script( 'nestedaccordion', get_template_directory_uri() . '/assets/plugins/jquery.nestedaccordion.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'plugin_scripts' );

function casamob_scripts() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'casamob_scripts' );


// ******************* Search Array ****************** //

function search($array, $key, $value) {
  $results = array();
  search_r($array, $key, $value, $results);
  return $results;
}

function search_r($array, $key, $value, &$results) {
  if (!is_array($array)) {
    return;
  }

  if (isset($array[$key]) && $array[$key] == $value) {
    $results[] = $array;
  }

  foreach ($array as $subarray) {
    search_r($subarray, $key, $value, $results);
  }
}


// ******************* Custom Ajax Loading Gif for Contact Form 7 ****************** //

add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
  return  get_bloginfo('stylesheet_directory') . '/assets/images/ajax-loader.gif';
}


// ******************* Responsive Images for the Parallax ****************** //

function print_resp_images($array, $imagesDir)
{
  foreach ($array as $key => $value) {
    $sources = array(
      array("media"=>"" ,"src"=>$imagesDir.$value.'.png',"fallback"=>true),
      array("media"=>"(max-width:1500px)", "src"=>$imagesDir.'small/'.$value.'.png',)
    );

    $attributes = array(
      'alt' => '',
      'stellar-ratio' => mt_rand(-15, 15)/10,
      'class' => $value
    );

    $ratio = mt_rand(-20, 20)/100;

    echo RIP::get_picture($sources,$attributes);
  }
}



?>
