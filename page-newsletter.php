<?php /* Template Name: Newsletter */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>Email Campaign Archive</h2>
    </section>
    
    <section class="content width-xs | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="link-list | mt-2 bg-grey-100 p-2">
            <ul>
                <li><a href="/newsletter-archive/what-helps-student-athletes-thrive-long-term.html">What Helps Student-Athletes Thrive Long-Term</a></li>

                <li><a href="/newsletter-archive/identifying-our-values.html">Identifying Our Values</a></li>

                <li><a href="/newsletter-archive/how-phones-impact-our-performance-and-goals.html">How Phones Impact Our Performance & Goals</a></li>

                <li><a href="/newsletter-archive/pro-soccer-player-explains-the-life-lessons-that-changed-everything.html">Pro Soccer Player Explains the Life Lessons That Changed Everything</a></li>

                <li><a href="/newsletter-archive/have-we-misconstrued-productivity.html">Have we misconstrued productivity?</a></li>

                <li><a href="/newsletter-archive/harvard-soccer-star-reveals-valuable-life-lessons.html">Harvard Soccer Star Reveals Valuable Life Lessons</a></li>

                <li><a href="/newsletter-archive/scoring-points-with-coach.html">Scoring Points with Coach</a></li>

                <li><a href="/newsletter-archive/nine-mini-mental-toughness-videos.html">Nine, Mini Mental Toughness Videos</a></li>

                <li><a href="/newsletter-archive/stuck-on-the-hedonic-treadmill.html">Stuck on the Hedonic Treadmill?</a></li>

                <li><a href="/newsletter-archive/conversations-for-mental-toughness.html">Conversations For Mental Toughness</a></li>

                <li><a href="/newsletter-archive/three-leadership-strategies-youre-not-using-yet.html">Three Leadership Strategies You're Not Using... Yet</a></li>

                <li><a href="/newsletter-archive/athletes-reflect-back-on-lost-seasons-and-share-advice-moving-forward.html">Athletes Reflect Back on Lost Seasons &amp; Share Advice Moving Forward</a></li>

                <li><a href="/newsletter-archive/emotions-not-things-motivate-us.html">Emotions (Not Things) Motivate Us</a></li>

                <li><a href="/newsletter-archive/four-lessons-covid-19-taught-me.html">Four Lessons COVID-19 Taught Me</a></li>

                <li><a href="/newsletter-archive/mental-toughness-strategies-for-navigating-tough-days-and-uncertainty.html">Mental Toughness Strategies for Navigating Tough Days & Uncertainty</a></li>

                <li><a href="/newsletter-archive/finding-confidence-in-the-process.html">Finding Confidence in the Process</a></li>

                <li><a href="/newsletter-archive/why-vacations-shouldnt-be-overlooked.html">Why Vacations Shouldn't Be Overlooked</a></li>

                <li><a href="/newsletter-archive/an-attitude-of-gratitude.html">An Attitude of Gratitude</a></li>

                <li><a href="/newsletter-archive/from-la-streets-to-college-courts.html">From L.A. Streets to College Courts</a></li>

                <li><a href="/newsletter-archive/a-unique-interview-about-preparing-for-the-big-stage.html">A Unique Interview About Preparing for the Big Stage</a></li>
            </ul>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
