<?php
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
  wp_enqueue_style('animate-sheet', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css");
  wp_enqueue_style('slick-theme-sheet', get_template_directory_uri() . "/js/slick-1.8.1/slick/slick-theme.css");
  wp_enqueue_style('slick-sheet', get_template_directory_uri() . "/js/slick-1.8.1/slick/slick.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

function twpp_enqueue_scripts()
{
    wp_enqueue_script(
      'jQuery',
      'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js',
      array(),
      false,
      true
    );
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/script.js',
    array(),
    false,
    true
  );
  wp_enqueue_script(
    'wow-sheet',
    get_template_directory_uri() . '/js/wow.min.js',
    array(),
    false,
    true
  );
  wp_enqueue_script(
    'slide-min-sheet',
    get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.min.js',
    array(),
    false,
    true
  );
}

add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');


add_theme_support('post-thumbnails');




add_filter('show_admin_bar', '__return_false');


// function post_has_archive($args, $post_type)
// {

//   if ('post' == $post_type) {
//     $args['rewrite'] = true;
//     $args['has_archive'] = 'blogs'; //任意のスラッグ名
//   }
//   return $args;
// }
// add_filter('register_post_type_args', 'post_has_archive', 10, 2);



?>

