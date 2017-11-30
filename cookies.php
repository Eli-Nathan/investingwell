
<?php

/* ====== SET COOKIE ====== */
add_action( 'init', 'setting_my_first_cookie' );

function setting_my_first_cookie() {
 setcookie( $charity, $c_value, 30 * DAY_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );
}

/* ====== GET COOKIE ====== */
if(!isset($_COOKIE[$v_username])) {
  echo "The cookie: '" . $v_charity . "' is not set.";
} else {
  echo "The cookie '" . $v_charity . "' is set.";
  echo "Cookie is:  " . $_COOKIE[$v_charity];
}

?>
