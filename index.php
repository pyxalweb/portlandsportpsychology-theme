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
        <div class="content width-df | callout-ctas even-columns even-columns--four even-columns--two--vw500 even-columns--one-vw200 even-columns--gap-5-vw200 | mbl-5 mbl-vw400-3 | animate-scroll-fade-in visible" data-delay="0.5" data-scroller="90%">
            <div class="callout-ctas__item">
                <div class="callout-ctas__text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-brain.svg" alt="" width="51" height="57">
                    <h2>Individual Sessions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
                </div>
                <div class="callout-ctas__link">
                    <a href="/" aria-label="Learn more about Individual Sessions">Learn More</a>
                </div>
            </div>

            <div class="callout-ctas__item">
                <div class="callout-ctas__text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-clipboard.svg" alt="" width="54" height="57">
                    <h2>Team Workshops</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
                </div>
                <div class="callout-ctas__link">
                    <a href="/" aria-label="Learn more about Team Workshops">Learn More</a>
                </div>
            </div>

            <div class="callout-ctas__item">
                <div class="callout-ctas__text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-parents.svg" alt="" width="52" height="57">
                    <h2>Parenting Workshops</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
                </div>
                <div class="callout-ctas__link">
                    <a href="/" aria-label="Learn more about Parenting Workshops">Learn More</a>
                </div>
            </div>

            <div class="callout-ctas__item">
                <div class="callout-ctas__text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mentor.svg" alt="" width="52" height="57">
                    <h2>Student Mentoring</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo iaculis semper. Morbi et posuere nunc, eu venenatis arcu.</p>
                </div>
                <div class="callout-ctas__link">
                    <a href="/" aria-label="Learn more about Student Mentoring">Learn More</a>
                </div>
            </div>
        </div>

        <div class="content-wide | mbl-5 mbl-vw400-3 bg-grey-100">
            <div class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 even-columns--gap-0-vw200">
                <div class="split-content__text | pbl-5 pbl-vw400-3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                        <h2>Elliott Waksman</h2>
                        <div class="sub-text">
                            <p>Waksman helps student-athletes play better and find more enjoyment in their sport.</p>
                        </div>
                        <p>Sport psychology techniques are life skills that every student-athlete can apply to improve their game and quality of life. Confidence, commitment, composure, courage, teamwork, and goal setting are arguably the most important aspects of youth sports and are topics Waksman often addresses in his sessions.</p>
                        <a href="/" aria-label="Learn more about Elliott Waksman" class="button">Learn More</a>
                    </div>
                </div>

                <div class="split-content__image | pb-3-vw200">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/elliott-waksman.jpg" alt="Elliott Waksman - Sport Psychologist in Portland, Oregon">
                </div>
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
