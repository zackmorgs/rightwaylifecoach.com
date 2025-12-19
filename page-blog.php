<?php
/* Template Name: Blog Page */
get_header(); ?>

<main>
    <header class="hero">
        <h3 id="latest_posts">Latest Posts</h3>
    </header>
    <section class="blog-posts">

        <div class="container">
            <div class="post-list">
            <?php
            // Query the last 3 posts
            $latest_posts = new WP_Query([
                'posts_per_page' => 6
            ]);

            if ($latest_posts->have_posts()):
                while ($latest_posts->have_posts()):
                    $latest_posts->the_post(); ?>
                    <a class="permalink" href="<?php the_permalink(); ?>">
                        <article class="post">
                            <h2><?php the_title(); ?></h2>
                            <div class="meta"><?php the_time('F j, Y'); ?> by <?php the_author(); ?></div>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </article>
                    </a>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>