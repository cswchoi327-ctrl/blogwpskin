<?php get_header(); ?>

<div id="main-wrapper" class="item-post-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article class="item-post">
            <div class="post-header">
                <div id="breadcrumb">
                    <a href="<?php echo home_url(); ?>">Home</a> > <?php the_category(' > '); ?> > <?php the_title(); ?>
                </div>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span>By <?php the_author(); ?></span> | <span><?php echo get_the_date(); ?></span>
                </div>
            </div>

            <div class="post-body">
                <?php the_content(); ?>
            </div>

            <div class="post-footer">
                <div class="share-buttons-container">
                    <button class="share-button share-link" onclick="copyLink()">링크 복사</button>
                </div>
            </div>
        </article>

        <ul class="post-nav">
            <li class="post-prev"><?php previous_post_link('%link', 'Previous: %title'); ?></li>
            <li class="post-next"><?php next_post_link('%link', 'Next: %title'); ?></li>
        </ul>

    <?php endwhile; endif; ?>
</div>

<div id="left-ads-container">
    </div>
<div id="right-ads-container">
    </div>

<?php get_footer(); ?>
