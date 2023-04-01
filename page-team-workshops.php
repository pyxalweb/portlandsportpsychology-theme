<?php /* Template Name: Team Workshops */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1>Team Workshops</h1>
        <div class="mt-1">
            <p>Elevate team performance with dynamic workshops that strengthen team culture, communication, and mental toughness.</p>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | mb-4 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-light-bulb.svg'); ?>
            </div>
            <h2>Dynamic Presentations</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-brain-tough.svg'); ?>
            </div>
            <h2>Mental Skill Techniques</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-clipboard.svg'); ?>
            </div>
            <h2>Collaboration w/ Coaching Staff</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <!--
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-graph.svg'); ?>
            </div>
            <h2>Goal Setting</h2>
            <p>Players will learn the importance of process goals, outline the team's goals for the season, and complete individual S.M.A.R.T. goals. Goal setting locker room posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-trophy.svg'); ?>
            </div>
            <h2>Motivation</h2>
            <p>Learn to dig deep during crunch time by sharing personal, outside-of-the-box motivational stories and designing the visual aid “bag tag”. Individual bag tags included.</p>
        </div>
    
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-brain-visualization.svg'); ?>
            </div>
            <h2>Visualization</h2>
            <p>Learn to visualize like an Olympian! Players will learn about and practice the five senses of visualization. Personal audio tracks included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-brain-tough.svg'); ?>
            </div>
            <h2>Mental Toughness</h2>
            <p>Play to win, as opposed to making mistakes out of fear by defining mental toughness and developing mental toughness strategies. Mental toughness mini posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-smile.svg'); ?>
            </div>
            <h2>Staying Positive</h2>
            <p>Players will learn to better recognize negative self-talk and learn reframing techniques. Positive affirmation mini posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-mentor.svg'); ?>
            </div>
            <h2>Team Building</h2>
            <p>The group will compete in the strength photo challenge and other hands-on team chemistry activities, which help to unify teams and recognize player roles.</p>
        </div>
        -->
    </section>

    <section class="mbl-4 pbl-4 bg-grey-100 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df | text-6--h2 | mb-4 ta-c">
            <h2>Choose A Workshop</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id.<br>Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <div class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Goal Setting</h2>
                <p>Players will learn the importance of process goals, outline the team's goals for the season, and complete individual S.M.A.R.T. goals. Goal setting locker room posters included.</p>
            </div>

            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Motivation</h2>
                <p>Learn to dig deep during crunch time by sharing personal, outside-of-the-box motivational stories and designing the visual aid “bag tag”. Individual bag tags included.</p>
            </div>
        
            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Visualization</h2>
                <p>Learn to visualize like an Olympian! Players will learn about and practice the five senses of visualization. Personal audio tracks included.</p>
            </div>

            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Mental Toughness</h2>
                <p>Play to win, as opposed to making mistakes out of fear by defining mental toughness and developing mental toughness strategies. Mental toughness mini posters included.</p>
            </div>

            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Staying Positive</h2>
                <p>Players will learn to better recognize negative self-talk and learn reframing techniques. Positive affirmation mini posters included.</p>
            </div>

            <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
                <h2>Team Building</h2>
                <p>The group will compete in the strength photo challenge and other hands-on team chemistry activities, which help to unify teams and recognize player roles.</p>
            </div>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-66-33-vw800 | gtc-1-vw500 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c jc-c | mb-1--h2" style="opacity:0;">
            <div>
                <h2>Building a Winning Team: Workshops for Mental Toughness and Team Culture</h2>
                <p>Team workshops are dynamic presentations, which introduce mental toughness techniques, strengthen team culture, and improve group communication. Collaboration with the coaching staff on a custom agenda ensures the specific concepts most important to the team are covered. Player folders, mini posters, and audio tracks are provided, which reinforce the workshop's takeaways and remind players to apply the techniques they learned during the workshop. Players learn how to celebrate differences, eliminate jealousy, and recognize that their own unique skills contribute to the team's success.</p>

                <div class="df jc-sb g-1 | jc-s-vw500 g-2-vw500 | fd-c-vw300 ai-c-vw300 | mt-2">
                    <div class="fg-1 fs-1 fb-auto | list">
                        <ul>
                            <li>Dynamic presentations</li>
                            <li>Mental skill techniques</li>
                            <li>Collaboration w/ coaching staff</li>
                            <li>Celebrate differences</li>
                            <li>Eliminate jealousy</li>
                        </ul>
                    </div>

                    <div class="fg-0 fs-0 fb-auto | sale">
                        <div class="text-2">
                            <p>$350 per workshop</p>
                        </div>

                        <a href="/contact" class="button button--highlight">Schedule Consultation</a>

                        <div class="text-10">
                            <p>Additional travel fees may apply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image--maxheight-760 image--rounded image--circle--vw200" style="opacity:0;">
            <?php
            $image = get_field('split_content_image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500">
            <?php endif; ?>
        </div>
    </section>

    <section class="content width-df | ta-c-vw200 | list-boxes list-boxes--4 list-boxes--rounded | mt-6 mt-3-vw400 mb-7 mb-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
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
            <li><a href="/success-stories">And Many More...</a></li>
        </ul>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
