<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psp
 */

get_header();
?>
	<section id="site-masthead" class="masthead masthead--video" role="complementary" aria-label="Decorative looping video">
        <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0">
            <div class="masthead__overlay__box">
                <div class="masthead__overlay__heading">
                    <h1>Elliott Waksman</h1>
                </div>
                <div class="masthead__overlay__subtext">
                    <p>MA, CMPC</p>
                    <p>Speaker • Author • Consultant</p>
                </div>
                <div class="masthead__overlay__text">
                    <p>Improve your focus, confidence, and performance on the field. Schedule your sport psychology consultation today!</p>
                </div>
                <div class="masthead__overlay__buttons">
                    <a href="#" class="button">Schedule Consultation</a>
                    <a href="#" class="button">Waksman's Workbook</a>
                </div>
            </div>
        </div>

        <video autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/videos/homepage.mp4" type="video/mp4" />
		</video>
    </section>

	<main id="site-content" class="site-content">
        <div class="content width-df | callout-ctas even-columns even-columns--four | mbl-5 mbl-vw400-3 | animate-scroll-fade-in visible" data-delay="0.5" data-scroller="90%">
            <div class="callout-ctas__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-brain.svg" alt="" width="51" height="57">
                <h2>Individual Sessions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
            </div>

            <div class="callout-ctas__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-clipboard.svg" alt="" width="54" height="57">
                <h2>Team Workshops</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
            </div>

            <div class="callout-ctas__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-parents.svg" alt="" width="52" height="57">
                <h2>Parenting Workshops</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
            </div>

            <div class="callout-ctas__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mentor.svg" alt="" width="52" height="57">
                <h2>Student Mentoring</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
            </div>
        </div>

        <!--
        <div class="content">
            <p>main</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu. Praesent fringilla justo sed est gravida, id tincidunt nulla ullamcorper. Etiam molestie efficitur velit, a tristique purus dapibus sit amet. Vivamus id ante quam. Cras imperdiet, purus sit amet sagittis convallis, est ante rutrum risus, vitae aliquet lorem nunc a sapien. Suspendisse eleifend rhoncus dolor, sed volutpat felis maximus nec. Phasellus nec lobortis nisl. Phasellus porta, neque nec auctor faucibus, nisl sapien facilisis metus, nec commodo arcu odio tincidunt massa. Aliquam sit amet ultricies elit, nec cursus ex.<br><br>Vivamus bibendum hendrerit bibendum. Proin a nisl ultricies, condimentum augue et, rhoncus nisl. Aliquam at dignissim lorem, vel posuere ipsum. Nulla lobortis risus in congue hendrerit. Etiam dignissim porttitor tellus, sit amet dignissim velit commodo quis. Fusce hendrerit dui iaculis lacus pellentesque luctus. Sed vulputate purus dolor, sit amet malesuada dolor euismod non. Fusce egestas tristique porta.</p>
        </div>
        -->
	</main>

<?php
get_footer();
