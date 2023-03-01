<?php
get_header();
?>

<section id="site-masthead" class="masthead" role="complementary" aria-label="Page heading and decorative looping video">
    <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0.5">
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
                <a href="/contact" class="button">Schedule Consultation</a>
                <a href="/waksmans-workbook" class="button">Waksman's Workbook</a>
            </div>
        </div>
    </div>

    <video class="masthead__media video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/videos/homepage.mp4" type="video/mp4" />
    </video>
</section>

<main id="site-content" class="site-content">
    <section class="content width-df | callout-ctas even-columns even-columns--four even-columns--two--vw500 even-columns--one-vw200 even-columns--gap-5-vw200 even-columns--center-vw200 | mbl-7 mbl-3-vw400 | text-4--h2 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--underline">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-brain.svg" alt="" width="51" height="57">
                <h2>Individual Sessions</h2>
                <p>Individual sessions are one-on-one coaching for athletes to develop a personalized mental game plan for peak performance.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/individual-sessions" aria-label="Learn more about Individual Sessions" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--underline">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-clipboard.svg" alt="" width="54" height="57">
                <h2>Team Workshops</h2>
                <p>Team workshops are dynamic presentations with interactive activities to strengthen the team's culture, resolve issues, and improve communication.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/team-workshops" aria-label="Learn more about Team Workshops" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--underline">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-parents.svg" alt="" width="52" height="57">
                <h2>Parenting Workshops</h2>
                <p>Parenting workshops provide practical tips for communicating before and after games, and introduce success strategies to support student-athletes.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/parenting-workshops" aria-label="Learn more about Parenting Workshops" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--underline">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-mentor.svg" alt="" width="52" height="57">
                <h2>Student Mentoring</h2>
                <p>Student mentoring is approved mentorship to earn certified consultant status through the Association for Applied Sport Psychology (AASP).</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/student-mentoring" aria-label="Learn more about Student Mentoring" class="button">Learn More</a>
            </div>
        </div>
    </section>

    <section class="content-wide | mbl-7 mbl-3-vw400 bg-grey-swoop-01 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 even-columns--gap-0-vw200">
            <div class="split-content__text | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <div class="split-content__text__flex | text-6--h2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                    <h2>Elliott Waksman</h2>
                    <div class="gap-line | text-7">
                        <p>Waksman helps student-athletes play better and find more enjoyment in their sport.</p>
                    </div>
                    <p>Sport psychology techniques are life skills that every student-athlete can apply to improve their game and quality of life. Confidence, commitment, composure, courage, teamwork, and goal setting are arguably the most important aspects of youth sports and are topics Waksman often addresses in his sessions.</p>
                    <a href="/about-elliott" aria-label="Learn more about Elliott Waksman" class="button">About Elliott</a>
                </div>
            </div>

            <div class="split-content__image split-content__image--circle--mobile | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/elliott-waksman.jpg" alt="Elliott Waksman - Sport Psychologist in Portland, Oregon">
            </div>
        </div>
    </section>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="horizontal-content horizontal-content--1-2 horizontal-content--1-vw300">
            <div class="horizontal-content__item | gap-line | text-6--h2">
                <h2>Experienced & Trusted</h2>
            </div>

            <div class="horizontal-content__item | list-boxes list-boxes--4 list-boxes--rounded">
                <div class="mb-1">
                    <p>Elliott Waksman is a well-renowned sport pyschologist in the Portland metro area. A few organizations he's worked with include:</p>
                </div>
                <ul>
                    <li>Nike</li>
                    <li>University of Portland</li>
                    <li>Portland State University</li>
                    <li>Jesuit High School</li>
                    <li>Willamette University</li>
                    <li>Lincoln High School</li>
                    <li>Oregon Athletic Coaches</li>
                    <li><a href="/success-stories">And Many More...</a></li>
                </ul>
            </div>
        </div>

        <div class="testimonials | content-slider pagination-text | mbl-5 mbl-3-vw400 | text-4 ta-c">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <figure class="testimonials__item | glide__slide">
                            <blockquote>I've been coaching for 15 years, and the number one thing athletes lack in their training is the practice of their mental game. Elliott immediately made an impact on how our players perceived sport psychology and how they worked on their mental toughness. Without a doubt, Elliott was a major part of our success this year. We set a school record with seven wins and four top five finishes.</blockquote>
                            <figcaption>Patrick Daugherty, <cite>Head Golf Coach, Willamette University</cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote>Elliott played a direct and significant role in our success this past season by helping to create a strong chemistry and providing our players with the tools to build their confidence and be prepared to face adversity.</blockquote>
                            <figcaption>Pat Coons, <cite>Head Boys Basketball Coach, Westview High School, 2010 Oregon Coach of the Year</cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote>Elliott played a major role helping Jesuit become the 2016 State Champions. We used his visualization audio track as a routine to mentally prepare for games. It was just as valuable as our pregame infield/outfield drills.</blockquote>
                            <figcaption>Colin Griffin, <cite>Head Baseball Coach, Jesuit High School, 2016 Oregon Coach of the Year</cite></figcaption>
                        </figure>
                    </div>

                    <div class="glide__bullets" data-glide-el="controls[nav]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-wide | mt-7 mt-3-vw400 bg-grey-swoop-02 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content width-df | split-content even-columns even-columns--two even-columns--two--reverse even-columns--one-vw200 even-columns--gap-0-vw200">
            <div class="split-content__text | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="split-content__text__flex | text-6--h2">
                    <h2>Waksman's Workbook</h2>
                    
                    <div class="points | text-4--h3 | mt-1">
                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Improve Self-Confidence</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Increase Motivation Levels</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Success On & Off the Field</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
                </div>
            </div>

            <div class="split-content__image split-content__image--scale-down | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="460" height="604">
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
