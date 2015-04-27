<?php 
if ( has_post_thumbnail() ) {?>
<div class="post-type-wrapper">
	<?php the_post_thumbnail('main-medium-thumb'); ?>
</div>
<?php }
?>