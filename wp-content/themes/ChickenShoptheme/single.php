<?php  get_header();?>

<section class="page-wrap">
<div class="container">


     <h3> <?php the_title();?> </h3>

        <?php if(has_post_thumbnail()):?>

		 <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

		<?php endif;?>


	<?php get_template_part('includes/section','blogcontent');?>
    <?php wp_link_pages();?>

</div>
</section>
<?php  get_footer();?>


