<?php get_header(); ?>
    <section class="page">
        <div class="container">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile; else: ?>
                <h4 class="text-center">Content not found!</h4>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>