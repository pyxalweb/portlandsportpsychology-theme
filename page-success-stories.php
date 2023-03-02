<?php /* Template Name: Success Stories */ ?>

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
    
    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="ta-c">
            <h2>Success Stories & Testimonials</h2>
            <div class="text-3 text-strike text-strike--hide-vw100">
                <p><span>See What Others Are Saying</span></p>
            </div>
        </div>

        <div class="horizontal-content__item | list-boxes list-boxes--4 list-boxes--rounded | mt-6 mt-3-vw400 mb-7 mb-3-vw400">
            <div class="mb-1 ta-c">
                <p>Elliott Waksman is a well-renowned sport pyschologist in the Portland metro area. A few organizations he's worked with include:</p>
            </div>
            <ul>
                <li>Portland State University</li>
                <li>Nike</li>
                <li>Willamette University</li>
                <li>Lewis & Clark College</li>
                <li>Portland City United Soccer Club</li>
                <li>Vancouver Tennis Center</li>
                <li>Skating Club of Oregon High School</li>
                <li>Concordia University</li>
                <li>Lakeridge High School</li>
                <li>Athletes In Motion Baseball Club</li>
                <li>Multnomah Athletic Club</li>
                <li>Irvington Tennis Club</li>
                <li>Lincoln High School</li>
                <li>Glendale Community College</li>
                <li>La Salle High School</li>
                <li><a href="/team-workshops">And Many More...</a></li>
            </ul>
        </div>

        <div class="quotes | mt-7 mt-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
            <figure>
                <h2>Elliott immediately made an impact.</h2>
                <blockquote>I've been coaching for 15 years, and the number one thing athletes lack in their training is the practice of their mental game. Elliott immediately made an impact on how our players perceived sport psychology and how they worked on their mental toughness. Without a doubt, Elliott was a major part of our success this year. We set a school record with seven wins and four top five finishes.</blockquote>
                <figcaption>Patrick Daugherty, <cite>Head Golf Coach, Willamette University</cite></figcaption>
            </figure>

            <figure>
                <h2>A direct and significant role in our success.</h2>
                <blockquote>Elliott played a direct and significant role in our success this past season by helping to create a strong chemistry and providing our players with the tools to build their confidence and be prepared to face adversity.</blockquote>
                <figcaption>Pat Coons, <cite>Head Boys Basketball Coach, Westview High School, 2010 Oregon Coach of the Year</cite></figcaption>
            </figure>

            <figure>
                <h2>A major role helping us become State Champions.</h2>
                <blockquote>Elliott played a major role helping Jesuit become the 2016 State Champions. We used his visualization audio track as a routine to mentally prepare for games. It was just as valuable as our pregame infield/outfield drills.</blockquote>
                <figcaption>Colin Griffin, <cite>Head Baseball Coach, Jesuit High School, 2016 Oregon Coach of the Year</cite></figcaption>
            </figure>

            <figure>
                <h2>It changed his life.</h2>
                <blockquote>Scott read and filled out your workbook and said it changed his life. He takes it with him to all his tournaments.</blockquote>
                <figcaption>Alice, <cite>Sport Mother, La Salle High School, Milwaukie, Oregon</cite></figcaption>
            </figure>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
