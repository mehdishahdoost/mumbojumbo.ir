<?php
/*
Template Name: Hubble
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
<meta name="google-site-verification" content="VA3zBMzM-lzCbzPNCr9gwljeI1Jf3zOOB8wOQz27_mA" />
<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; <?php _e('Blog Archive'); ?> <?php } ?> <?php wp_title(); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css"  media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/screen.css" />
<link rel="stylesheet" type="text/css"  media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" /> 
<!--[if IE]> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen, projection" /> 
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<style>
#hubble-header{
background-image:url(<?php bloginfo('stylesheet_directory'); ?>/images/hubble-header.jpg);
background-repeat:no-repeat;
height:432px;
background-position:center

}
</style>
</head>
<body>
<div id="maincontent" class="container">
<div id="hubble-header" class="span-19 prepend-5 last"></div>
<div id="navigation" class="span-24">
<div id="yt" class="span-2 prepend-6"><a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/yt.jpg" /></a></div>
<div id="gooder" class="span-2"><a href="http://www.google.com/reader/shared/02570638733875850681" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/gooder.jpg" alt="" /></a></div>
<div id="email" class="span-2"><a href="mailto:persianshadow@gmail.com" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/email.jpg" alt="" /></a></div>
<div id="twitter" class="span-2"><a href="http://twitter.com/persianshadow" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/twitter.jpg" alt="" /></a></div>
<div id="feed" class="span-2"><a href="http://feeds.feedburner.com/mumbo-jumbo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/feed.jpg" alt="" /></a></div>
<div id="home" class="span-2 last"><a href="http://mumbojumbo.ir"><img src="<?php bloginfo('url'); ?>/wp-content/themes/bobbin/images/home.jpg" alt="" /></a></div>
</div>
<div id="spacer" class="span-24"></div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="span-24 postcontainer">
<div id="stop" class="span-24">
<div class="span-16 prepend-4 title">
<br>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
</div>
<div id="post" class="span-24">
<div id="txt" class="span-16 prepend-4">
<?php the_content(); ?>
</div>

</div><div id="foot" class="span-24">
<div id="date" class="span-16 prepend-4">
<br>
 تاریخ نگارش : <?php the_time(__('jS F Y')) ?>
</div>
</div>
</div>
<div id="spacer" class="span-24"></div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<div id="spacer" class="span-24"></div>
<?php comments_template(); ?>
<?php get_footer(); ?>
