<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<?php foreach ($comments as $comment) : ?>
<div id="comment" class="span-24">
<br>
  <div class="span-14 prepend-5 commtxt">
&nbsp;<?php 
   echo get_avatar( $comment, $size = '32', $default = '' ); 
   ?>&nbsp;
   <strong><?php comment_author_link() ?></strong> <?php echo "در تاریخ"; ?> <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('jS F Y') ?></a> گفته<?php _e('&#58;'); ?> <?php edit_comment_link('Edit Comment','',''); ?>
 		<?php if ($comment->comment_approved == '0') : ?>
		<em><?php echo "((نظر شما ارسال و به زودی منتشر خواهد شد))" ?></em>
 		<?php endif; ?>
		<p></p>
<?php comment_text() ?>
</div>
</div>
<div id="spacer" class="span-24"></div>
  
<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">امکان نظر دادن برای این پست وجود ندارد</p>


	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>


<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>
<div id="formcontainer" class="span-24">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<p>
  <?php else : ?>
</p>
<p>
 <center> <label for="author" style="font-family:arial;font-size:16px;">  نام</label><br />
   <input type="text" class="input" name="author" id="author" value="<?php  echo $comment_author;?>" size="40" tabindex="1" onfocus="clearText(this)" onblur="clearText(this)" /></center>
 
</p>

<p>
  
 
 <center> <label for="label"  style="font-family:arial;font-size:16px;"> ایمیل (ضروری - منتشر نمی‌شود)</label><br /><input type="text" name="email" id="emailtxt" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" dir="ltr" onfocus="clearText(this)" onblur="clearText(this)" class="input"/> </center>
</p>
<p>
  <center> <label for="label"  style="font-family:arial;font-size:16px;">وبلاگ</label><br /><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" dir="ltr" onFocus="clearText(this)" onBlur="clearText(this)"class="input" /></center>
</p>
<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

<p><center><textarea name="comment" class="input" id="holetxt" cols="60" rows="10" tabindex="4"></textarea></center></p>

<p><center style="margin-bottom:10px"><input name="submit" type="submit" id="submit" tabindex="5" value="&#1579;&#1576;&#1578; &#1606;&#1592;&#1585;" /><br />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></center>
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>