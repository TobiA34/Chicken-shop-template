<h1 class="my-5">Recipe blogs</h1>

<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <div class="card mb-3 ml-1">
        <h3 class="ml-3 my-2"> <?php the_title();?> </h3>
        <div class="card-body d-flex ">

                <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

                <?php endif;?>

                <div class="blog-content  ml-4">
                
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

                </div>

     
        </div>
    </div>


<?php endwhile; else: endif;?>