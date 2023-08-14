<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// Menu: menu-newsletter - منو خبرنامه

function register_menu_newsletter_page() {

	$menu = add_menu_page( 'بانک خبرنامه', 'بانک خبرنامه', 'manage_options', 'menu_newsletter', 'register_menu_newsletter_page_callback', 'dashicons-email-alt' ); 
    // $submenu = add_submenu_page( 'menu_newsletter', 'عنوان برگه', 'عنوان زیرمنو', 'manage_options', 'submenu_newsletter', 'register_menu_newsletter_page_callback', 'dashicons-format-chat' ); 
    add_action("load-$menu", 'menu_newsletter_table_add_options');
    
}
add_action( 'admin_menu', 'register_menu_newsletter_page' );

// screen option
function menu_newsletter_table_add_options() {

    $args_page = array(
        'label' => 'تعداد موردها در هر برگه:',
        'default' => 20,
        'option' => 'newsletter_per_page'
    );

    add_screen_option('per_page', $args_page);

}

// get saved screen meta value
function menu_newsletter_table_set_option($status, $option, $value) {

    return $value;

}
add_filter('set-screen-option', 'menu_newsletter_table_set_option', 10, 3);

function register_menu_newsletter_page_callback() {

    require_once plugin_dir_path(__FILE__) . "../table/newsletter.php";
    // require_once plugin_dir_path(__FILE__) . "../table/newsletter-csv.php";

}


// $settings = ['capability' => 'administrator'];
// $handler = function() {  

    // return 'hi';  

// };

// $menu_sample = tr_page('menu_sample', 'name', 'درخواست‌ها', $settings, $handler);
// $menu_sample->setHandler(\App\Controllers\SampleController::class);
// $menu_sample->mapAction('GET', 'menu_sample');
// $menu_sample->mapAction('POST', 'create_menu_sample');
// $menu_sample->setView($handler);
// $menu_sample->adminBar('menu_sample_index');
// $menu_sample->setSlug('menu_sample_index');

// $menu_sample->setIcon('dashicons-format-chat');
// $menu_sample->setTitle('عنوان برگه');
// $menu_sample->setMenuTitle('عنوان منو');
// $menu_sample->setSubMenuTitle('عنوان زیرمنو'); // If is sub page


// download CSV file
if( isset($_GET['action']) && $_GET['action'] == 'download_csv_file' ) {
    download_csv_file_callback();
}

// CSV Callback
function download_csv_file_callback() {

    // $newsletter = Newsletter::new()->findAll()->orderBy('ID', 'DESC')->get()->toArray();
    $newsletter = (new \App\Models\Newsletter())->findAll()->orderBy('ID', 'DESC')->get()->toArray();

    // Query
    $statement = $newsletter;
    
    // file creation
    $wp_filename = "newsletter_".date("d-m-y").".csv";
    
    // Clean object
    ob_end_clean();
    
    // Open file
    $wp_file = fopen($wp_filename,"w");
    
    // loop for insert data into CSV file
    foreach ($statement as $statementFet) {
        $wp_array = array(
            "ID"    => $statementFet['ID'],
            "email" => $statementFet['email']
        );
        // $wp_array = array();
        @fputcsv($wp_file, $wp_array);
    }
    
    // Close file
    fclose($wp_file);
    
    // download csv file
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=".$wp_filename);
    header("Content-Type: application/csv;");
    readfile($wp_filename);
    exit;

}