<?php
/*
Plugin Name: OS-Adder
Description: This Plugin provides a class for the body-element that includes the used OS and the used language
Version: 0.2
Author: Lukas Kindermann
*/
?>
<?php
//setting javascript
add_action("wp_enqueue_scripts", "OSA_enqueue_script");
add_action('wp_head', 'OSA_insert_head');

function OSA_enqueue_script(){
	wp_enqueue_script("jquery");
}
function OSA_insert_head(){
    ?>
    <script type="text/javascript" src="<?php echo plugins_url( 'OS-Adder.js' , __FILE__ );?>"></script>
    <?php
}
?>