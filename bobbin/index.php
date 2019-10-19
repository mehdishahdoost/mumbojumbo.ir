<?php get_header(); ?>
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
<g:plusone href="<?php the_permalink(); ?>"></g:plusone>
</div><div id="foot" class="span-24">
<div id="date" class="span-16 prepend-4">
<br>
 <b>تاریخ نگارش :</b> <?php the_time(__('jS F Y')) ?>
</div>
<div id="com" class="span-16 prepend-4">
<br>
 <b>تعداد نظرات :</b> <?php $s=return_num_comments(); echo $s; ?> <a href="<?php the_permalink() ?>">(شما هم دیدگاه خود را بیان کنید)</a>

 
</div>
</div>
</div>
<div id="spacer" class="span-24">
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<div id="pagenav">
<div id="next"><?php next_posts_link('&lt;&lt;صفحه بعدی  ')?></div>
<div id="previous"><?php previous_posts_link(' صفحه قبلی &gt;&gt;') ?></div>
</div>
<?php get_footer(); ?>