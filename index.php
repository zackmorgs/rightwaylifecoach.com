<?php get_header(); ?>

<main>
    <header id="hero_main" class="hero">
        <div class="container">
            <img id="hero_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-12-16-cropped.png"
                alt="Right Way Coaching Life Blog Hero Image">
            <br />
            <a class="btn btn-primary" href="/request-an-appointment/">
                <span>Request an Appointment</span>
            </a>
            <a href="/about" class="btn btn-secondary">
                <span>About Robin</span>
            </a>
        </div>
    </header>
    <section id="about_homepage">
        <div class="container">
            <div class="text-center">
                <h2>Find Clarity, Peace, and Purpose</h2>
                <p>A <b>Christ-centered</b> coaching practice helping women navigate life decisions with <b>prayer</b>,
                    <b>clarity</b>, and
                    <b>grounded support</b>.
                </p>
            </div>
        </div>
    </section>
    <section id="who_this_is_for">
        <div class="container">
            <div class="text-center">
                <h2>Is This Coaching for You?</h2>
                <b>Right Way Coaching serves women who:</b>
                <ul class="text-left list-content">
                    <li>
                        Desire <b>Christ-centered guidance</b> for <b>life decisions</b>
                    </li>
                    <li>
                        Feel <b>stuck</b>, <b>overwhelmed</b>, or <b>uncertain</b> about next steps
                    </li>
                    <li>
                        Want support that honors Scripture without judgment
                    </li>
                    <li>
                        Prefer thoughtful conversation over quick fixes
                    </li>
                    <li>
                        Value discernment, prayer, and personal responsibility
                    </li>
                </ul>
                <p>This is coaching, not counseling or therapy — focused on growth, clarity, and forward movement.</p>
            </div>
        </div>
    </section>
    <section id="what_it_is_not">
        <div class="container">
            <h2>What Is Christian Coaching?</h2>
            <b>Christian Coaching IS:</b>
            <ul class="list-content">
                <li>
                    <b>Forward-focused</b> and <b>action-oriented</b>
                </li>
                <li>
                    Rooted in <b>biblical principles</b>
                </li>
                <li>
                    A partnership built on <b>trust</b> and <b>discernment</b>
                </li>
                <li>
                    A space for <b>reflection</b>, <b>prayer</b>, and <b>wise decision-making</b>.
                </li>
            </ul>
            <br>
            <b>Christian Coaching IS NOT:</b>
            <ul class="list-content">
                <li>Therapy or mental health treatment</li>
                <li>Crisis counseling</li>
                <li>Medical or psychological advice</li>
                <li>A replacement for church, pastors, or licensed professionals</li>
            </ul>
        </div>
    </section>
    <section id="meet_robin">
        <div class="container">
            <div class="text-center">
                <h2>Meet Robin Morgenthaler</h2>
                <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/robin_profile_2.jpg"
                    alt="Robin smiling warmly in a bright, welcoming setting, conveying a sense of calm and encouragement">
                <p>Robin Morgenthaler is a <b>Christian coach</b> with a heart for walking alongside women during
                    seasons of <b>transition</b>,
                    <b>uncertainty</b>, and <b>growth</b>.
                </p>
                <p>Her approach is grounded in <b>Scripture</b>, <b>prayer</b>, and <b>deep listening</b> —
                    offering <b>clarity</b> without pressure and <b>guidance</b> without judgment.</p>
                <a href="/about" class="btn btn-secondary">
                    <span>About Robin</span>
                </a>
            </div>
        </div>
    </section>
    <section id="how_coaching_works">
        <div class="container">
            <h2 class="text-center">How Coaching Works</h2>
            <ol class="list-ordered-content">
                <li>
                    <b>Request a Conversation</b>
                    <p>Submit a brief request sharing what you’re seeking guidance for.</p>
                </li>
                <li>
                    <b>Personal Review</b>
                    <p>Robin prayerfully reviews each request before accepting new clients.</p>
                </li>
                <li>
                    <b>Approved Scheduling</b>
                    <p>If it’s a good fit, you’ll receive a private scheduling link.</p>
                </li>
                <li>
                    <b>Coaching Sessions</b>
                    <p>Conversations rooted in faith, wisdom, and forward movement.</p>
                </li>
            </ol>
        </div>
    </section>
    <section id="gentle_faith_statement">
        <div class="container">
            <div class="text-center">
                <h2>Faith at the Center</h2>
                <p>Right Way Coaching is <b>grounded</b> in a <b>non-denominational</b> Christian worldview. Sessions are guided by <b>biblical truth</b>, <b>prayerful discernment</b>, and <b>respect</b> for each individual’s journey.</p>
                <p>All conversations are <b>confidential</b> and approached with <b>grace</b>.</p>
            </div>
        </div>
    </section>
    <section id="next_steps">
        <div class="container">
            <div class="text-center">
                <h2>Ready to Take the Next Step?</h2>
                <p>If you’re seeking clarity and faith-centered guidance, you’re welcome to request a coaching conversation.</p>
                <a href="/request-an-appointment" class="btn btn-primary">
                    <span>Request an Appointment</span>
                </a>
            </div>
        </div>
    </section>
    <section class="blog-listing">
        <div class="container">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
            else:
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>