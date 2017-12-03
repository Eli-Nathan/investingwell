<?php
     global $investingwell;
     $investingwell = "Investing<span class='investingwell-well'>well</span>";
     global $phonelink;
     global $phonenumber;
     global $emaillink;
     global $emailaddress;
     global $linkedinlink;
     global $twitterlink;
     global $twittertext;
     global $facebooklink;
     global $facebooktext;
     global $instagramlink;
     global $youtubelink;
     global $charityPref;
     global $charity_value;
     global $charity_path;
     $charity_path = str_replace(home_url(),'',get_permalink());

     $phonelink = "tel:01419463000";
     $phonenumber = "0141 946 3000";
     $emaillink = "mailto:advisor@investingwell.co.uk";
     $emailaddress = "advisor@investingwell.co.uk";
     $linkedinlink = "https://www.linkedin.com/in/investing-well-4a491388/";
     $twitterlink = "https://twitter.com/BeGoodWithMoney";
     $twittertext = "@BeGoodWithMoney";
     $facebooklink = "https://www.facebook.com/investingwell";
     $facebooktext = "facebook.com/investingwell";
     $instagramlink = "https://www.instagram.com/investinggreen/";
     $youtubelink = "https://www.youtube.com/channel/UCelqY2yLJdNcN5BstB3ttXg";
     $charity_path = str_replace(home_url(),'',get_permalink());
     /* Add all new charities into this array */
     if( !( current_user_can('editor') || current_user_can('administrator') ) && is_single( array( 'chas' ) ) && !isset($_COOKIE['charityPref']) ) {
       $users_charity = $charity_path;
       setcookie( 'charityPref', $users_charity, time() + (86400 * 7), '/' ); // 86400 = 1 day
     }
     if( !( current_user_can('editor') || current_user_can('administrator') ) && is_home() ) {
       if( isset($_COOKIE['charityPref']) ) {
         header( "Location: http://localhost:8888/" . $_COOKIE['charityPref']  );
       }
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
     <meta charset="utf-8">
     <meta name="author" content="Elijah Nathan - Eli's Web">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=rubik:400,500,900,300,700" rel="stylesheet">
     <?php wp_head(); ?>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110545988-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-110545988-1');
    </script>

</head>
<body>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '132956770751866',
        xfbml      : true,
        version    : 'v2.11'
      });
      FB.AppEvents.logPageView();
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
     <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                         <span class="sr-only">Toggle navigation</span>
                         <i class="fa fa-bars"></i>
                    </button>
                    <a type="button" class="navbar-toggle collapsed" href='/'>
                         <i class="fa fa-user"></i>
                    </a>
                    <a class='navbar-brand' href='/'>
                         <img src='<?php bloginfo('stylesheet_directory');?>/images/iw-logo-long-newer.png' alt="Investing Well">
                    </a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php bootstrap_nav(); ?>
                    <ul class='nav navbar-nav navbar-right'>
                         <li>
                              <a href="#">
                                   Login &nbsp; <i class='fa fa-user'></i>
                              </a>
                         </li>
                    </ul>
               </div>
               <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
     </nav>
