<?php
//echo "Hook Pack";

// Sample Data Shortcode
add_shortcode('hookshow', 'hook_data_shortcode');
if(!function_exists('hook_data_shortcode')){
    function hook_data_shortcode(){
       $output = "Name: Kausar Al Mamun</br>";
       $output .= "Company: HasTech IT Limited</br>";
       $output .= "Mobile: 01725911643</br></br></br>";
       return $output;
    }
}

//User form shortocde
add_shortcode('user-form', 'getUserForm');
if(!function_exists('getUserForm')){
    function getUserForm(){
        ob_start();
        ?>
            <form action="/action_page.php">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value="John"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value="Doe"><br><br>
                <input type="submit" value="Submit">
            </form>
        <?php 
        $output = ob_get_clean();
        return $output;
    }
}


// function add_some_extra($value1,$value2,$value3){
    
//     $value1 = "return positive";
//     return $value1;
   
// }
// add_action('value_bind', 'add_some_extra');
// //add_some_extra('Value 1','Value 2','Value 3');
// //echo "$value1.<br>$value2";
// var_dump($value1);


/**
 * Print SEO tags in the header
 * @return void
 */
//Header
function meta_header(){
   ?>
        <meta name="description" content="Free Web tutorials for HTML and CSS">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
}
add_action('wp_head','meta_header');

//footer
function meta_footer(){
    echo '<p style="text-align:center;">Copyright © 2022 WordPress Test | Powered by HasTheme WordPress Theme</p>';
}
add_action('wp_footer','meta_footer', 10);

//add_filter meta content
function meta_description($content){
    //var_dump($content);
    return $content . 'Read More';
}
add_filter('the_content','meta_description');



function page_content_info_top($a,$b){
    echo '<h5>Single Page Content Top</h5>';
    echo '<h6>Function value</h6>';
    echo "$a </br> $b";
    //var_dump($a,$b);
    //return $a.$b;
}
add_action('pagecontent_top','page_content_info_top', 10, 2);

function page_content_info_bottom(){
    echo '<h5>Single Page Content Bottom</h5>';
}
add_action('pagecontent_bottom','page_content_info_bottom');


// Apply Filter
function aply_filtr($message){
    $message = "Hello Sunshine";
    return $message;
}
// $fgg= "jggtertettetg";
// aply_filtr($fgg);
add_filter('aply_fltrt_text', 'aply_filtr');