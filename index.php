<?php get_header(); ?>

<div id="main-wrapper">
    <div class="grid-posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="index-post">
                <div class="post-image-wrap">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } else { ?>
                            <img src="https://via.placeholder.com/300" alt="No Image">
                        <?php } ?>
                    </a>
                </div>
                
                <div class="post-info">
                    <span class="post-tag"><?php the_category(', '); ?></span>
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date(); ?></span>
                    </div>
                    <p class="post-snippet"><?php the_excerpt(); ?></p>
                </div>
            </div>

        <?php endwhile; endif; ?>
    </div>
    
    <div class="pagination">
        <?php the_posts_pagination(); ?>
    </div>
</div>

<?php get_footer(); ?>
