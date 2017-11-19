<?php
/**
  * The template for displaying 404 pages (not found)
  *
  * @link https://codex.wordpress.org/Creating_an_Error_404_Page
  *
  * @package WordPress
  * @subpackage Twenty_Seventeen
  * @since 1.0
  * @version 1.0
 */
  get_header();
 ?>

 <div class='col-sm-12 not-found-message text-center'>
  <h1>404 ERROR</h1>
  <img src='<?php bloginfo('stylesheet_directory');?>/images/error-cone.png' alt="404 Error">
  <h2>Oh dear! It looks like this page doesn't exist!</h2>
  <p>You can either <span class="goBack" onclick="goBack();">click here</span> to go back or use the button below to return to our homepage</p>
  <a href="/" class="btn btn-iw-b">Head home</a>
</div>

<?php
  get_footer();
?>
