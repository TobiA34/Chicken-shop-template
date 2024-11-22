<?php if( have_posts() ): while( have_posts() ): the_post();?>


<p class="mt-3"><?php echo get_the_date('d/m/Y');?></p>
<?php the_content();?>

<?php
 $fname = get_the_author_meta('first_name');
 $lname = get_the_author_meta('last_name');
?>

 <p> Posted by: <?php echo $fname . ' ' . $lname;?> </p>

 <?php 
 $tags = get_the_tags();

 foreach($tags as $tag):?>
          <span>
            <a class="badge rounded-pill text-bg-info p-2" href="<?php echo get_tag_link($tag->term_id);?>">
                <?php echo $tag->name?>
            </a>
          </span>


 <?php endforeach;?>
 
 <?php $categories = get_the_category();
 foreach($categories as $cat):?>
 <a href="<?php echo get_category_link($cat->term_id);?>">
     <?php echo $cat->name;?>
 </a>
 <?php endforeach;?>

  <?php comments_template()?>
 
 <?php endwhile; else: endif;?>