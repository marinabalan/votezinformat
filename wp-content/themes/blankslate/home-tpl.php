<?php
//Template Name: Home
get_header();
?>

<?php
	$args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => '2',
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	$categ1 = get_posts($args);

	$args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => '3',
	'category_name'    => '',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true );
	$categ2 = get_posts($args);
?>

<div class="main_col_left">
	<h2 class="politicieni"><span class="img_psd"></span><span>Victor Ponta</span></h2>
	<div class="post_wrapper">
		<?php foreach($categ1 as $post): ?>
			<div class="single_post">
				<p><a href="<?php setup_postdata($post); the_permalink(); ?>" target="_blank"><?php echo $post->post_title;  ?></a><?php echo get_the_title();wp_reset_postdata(); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="main_col_right">
	<h2 class="politicieni"><span class="img_acl"></span><span>Klaus Iohannis</span></h2>
	<div class="post_wrapper">
		<?php foreach($categ2 as $post): ?>
			<div class="single_post">
				<p><a href="<?php setup_postdata($post); edit_post_link(); ?>" target="_blank"><?php echo $post->post_title; wp_reset_postdata(); ?></a></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<?php get_footer(); ?>