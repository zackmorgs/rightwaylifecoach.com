<?php get_header(); ?>
<main>
    <header class="hero">
        <div class="container">
            <div class="text-center">
                <h2>Request an Appointment</h2>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <!-- page content -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();

                    the_content();
                endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
            <!-- end page content -->
        </div>
    </section>
</main>

<?php get_footer(); ?>