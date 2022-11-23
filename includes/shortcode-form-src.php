<?php

function srt_contact_form($atts, $content){
    $atts = shortcode_atts(
        array (
            'email' => get_option('admin_email'),
            'submit' => __('Send Email', 'hookpack')
        ),
        $atts
    );

    $submit = false;
    if (isset($_POST['cnct_submit'])){
        $frstname = $_POST['fname'];
        $lastname = $_POST['lname'];

       // wp_mail($atts['email'],$frstname,$lastname);
        $submit = true;
    }
    
    ob_start();
    ?>

    <?php if ($submit) { ?>
        <h1><?php _e('Email sent succesfully', 'hookpack') ?></h1>
    <?php } ?>
    <form action="" id="srt_contact" method="post">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" name="cnct_submit" value="<?php echo esc_attr($atts['submit']); ?>">
    </form> 
    <?php



}
add_shortcode('contact_form', 'srt_contact_form');