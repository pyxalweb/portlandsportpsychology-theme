<?php /* Template Name: Media Appearances */ ?>

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

    <section class="pbl-7 pbl-3-vw400 mb-7 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <div class="svg svg--57h | mb-1 mi-center-child">
                <?php load_inline_svg('icon-trophy.svg'); ?>
            </div>
            <h1>Waksman's Media Appearances</h1>
            <div class="mt-1">
                <p>Waksman has been an expert guest on various news outlets, providing insight on student-athletics, sport performance, and sport parenting.<br>Below is a list of his recent media appearances.</p>
            </div>
        </div>

        <?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500" class="content-bg__photo">
        <?php endif; ?>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div>
            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>TV Interviews</h2>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="https://katu.com/afternoon-live/books-authors/sports-parenting-tips" target="_blank" rel="noopener">KATU Afternoon Live: How to talk to your child's coach</a></li>
                        <li><a href="https://www.youtube.com/watch?v=WVqVSkwj650&ab_channel=ElliottWaksman" target="_blank" rel="noopener">KATU AM Northwest: Sport Parenting Tips</a></li>
                        <li><a href="https://www.youtube.com/watch?v=ugjqvfG4r2g" target="_blank" rel="noopener">Pro Soccer Player Explains the Life Lessons That Changed Everything</a></li>
                        <li><a href="https://katu.com/news/local/sports-psychology-coach-impressed-with-blazers-gutsy-game-7-win" target="_blank" rel="noopener">KATU News: Blazers' Gutsy Game 7 Win</a></li>
                        <li><a href="https://katu.com/news/local/blazers-fans-stressed-out-after-two-close-games-at-home" target="_blank" rel="noopener">KATU News: Blazers fans stressed out after two close games at home</a></li>
                        <li><a href="https://katu.com/news/local/sports-psychology-coach-impressed-with-blazers-gutsy-game-7-win" target="_blank" rel="noopener">Sports psychology coach impressed with Blazers' gutsy game 7 win</a></li>
                    </ul>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>Podcast Interviews</h2>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=zfriDyGCYLo" target="_blank" rel="noopener">The LubDub Podcast: Building Mental Toughness</a></li>
                        <li><a href="https://anchor.fm/providence0/episodes/You-Have-the-Heart-to-Start-e1ap5h7/a-a6veqn4" target="_blank" rel="noopener">Providence Hospital: Staying Motivated</a></li>
                        <li><a href="https://anchor.fm/eric-runge/episodes/Portland-Sports-Psychology---Elliott-Waksman-eko7qj" target="_blank" rel="noopener">The Veritas Perspective: Entrepreneurial Lessons</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/waksmans-8202019-podcast " target="_blank" rel="noopener">The Dog Show Mentor: Stress, Performance Strategies, & Mindset</a></li>
                    </ul>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>Additional Sport Psychology Content</h2>
                <p>Additional content, unaffiliated with Waksman, for enjoyment and learning.</p>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="https://appliedsportpsych.org/resources/resources-for-parents/eight-tips-for-communicating-with-adolescent-athletes-immediately-after-the-game-win-or-loss/" target="_blank" rel="noopener">8 Tips for Communicating with Adolescent Athletes Immediately after the Game</a></li>
                        <li><a href="https://appliedsportpsych.org/resources/resources-for-parents/keeping-perspective-in-youth-sport/" target="_blank" rel="noopener">Keeping Perspective in Youth Sports</a></li>
                        <li><a href="https://athletesacceleration.com/six-life-skills-child-always-learn-playing-sports/" target="_blank" rel="noopener">Six Life Skills your Child Should Always Learn from Playing Sports</a></li>
                        <li><a href="https://www.ncaa.org/sports/2013/12/17/probability-of-competing-beyond-high-school.aspx" target="_blank" rel="noopener">Probability of Competing Beyond High School</a></li>
                        <li><a href="https://www.psychologytoday.com/us/blog/the-power-imagination/201003/help-kids-visualize-victory-olympic-athletes-9-tools-achieve" target="_blank" rel="noopener">Help Kids Visualize Victory: 9 Tools to Achieve Sports Success</a></li>
                        <li><a href="https://appliedsportpsych.org/resources/resources-for-athletes/the-3-c-s-of-being-a-captain/" target="_blank" rel="noopener">The 3 C's of Being a Captain</a></li>
                        <li><a href="https://appliedsportpsych.org/resources/resources-for-athletes/glass-is-half-full-thinking/" target="_blank" rel="noopener">Glass is Half-Full Thinking</a></li>
                        <li><a href="https://appliedsportpsych.org/resources/resources-for-athletes/dealing-with-anger-in-competition/" target="_blank" rel="noopener">Dealing With Anger in Competition</a></li>
                        <li><a href="https://www.apa.org/monitor/2012/04/sport" target="_blank" rel="noopener">America's First Sport Psychologist</a></li>
                        <li><a href="https://www.youtube.com/watch?v=52hsHIkDt-k&ab_channel=BenWilliams" target="_blank" rel="noopener">Kobe Bryant Mental Toughness (Video)</a></li>
                        <li><a href="https://www.youtube.com/watch?v=_MqVd8XlShM&ab_channel=NBA" target="_blank" rel="noopener">The Power of the Mind (Video)</a></li>
                        <li><a href="https://www.youtube.com/watch?v=QEaWv0SBp3A&ab_channel=tceliano" target="_blank" rel="noopener">Tiger Zone (Video)</a></li>
                        <li><a href="https://www.youtube.com/watch?v=WO8imsZl1F8&ab_channel=TheFRSHealthyEnergy" target="_blank" rel="noopener">FRS Energy Fuels Tim Tebow (Video)</a></li>
                    </ul>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>
        </div>

        <div>
            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>Radio Interviews</h2>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="https://soundcloud.com/elliott-waksman/mental-toughness-tips-to-stay-present-in-the-moment" target="_blank" rel="noopener">ESPN Radio: Staying Present in the Moment</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/elliott-waksmans-radio-interview-about-simone-biles-at-the-2021-olympics" target="_blank" rel="noopener">The Wolf Radio: Simone Biles 2021 Olympics</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/elliott-waksman_9122020" target="_blank" rel="noopener">ESPN Radio: Mental Toughness Golf</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/waksmans-golf-interview-may-2018" target="_blank" rel="noopener">ESPN Radio: Enjoying sports again</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/waksmans-radio-interview" target="_blank" rel="noopener">ESPN Radio: Pre-Performance Routines</a></li>
                        <li><a href="https://soundcloud.com/elliott-waksman/elliott-waksmans-kpam-radio-interview" target="_blank" rel="noopener">The Answer Radio: The Blazers' Playoff Mindset</a></li>
                    </ul>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>Published Articles</h2>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="https://katu.com/news/local/blazers-fans-stressed-out-after-two-close-games-at-home" target="_blank" rel="noopener">Blazers fans stressed out after two close games at home</a></li>
                        <li><a href="https://www.outsideonline.com/health/training-performance/why-you-should-curse-and-scream/" target="_blank" rel="noopener">Outside Magazine: Why You Should Curse and Scream</a></li>
                        <li><a href="https://lasallefalconer.com/2015/12/first-year-of-athlete-leadership-team-at-la-salle/" target="_blank" rel="noopener">The LaSalle Falconer: Athlete Leadership Team Begins Its First Year</a></li>
                        <li><a href="https://goviks.com/news/2012/3/26/WGOLF_0326125341.aspx?path=wgolf" target="_blank" rel="noopener">The Portland State University Vanguard: Waksman Aids Golf Team's Mental Approach To The Game</a></li>
                        <li><a href="https://www.oregonlive.com/timbers/2013/11/the_home_field_is_a_real_advan.html" target="_blank" rel="noopener">The Oregonian: For the Portland Timbers, home field is a real advantage</a></li>
                        <li><a href="https://www.southeastexaminer.com/2021/05/summer-is-time-to-bust-out-your-pickleball/" target="_blank" rel="noopener">The Southeast Examiner: Summer is Time to Bust Out Your Pickleball</a></li>
                    </ul>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2>Newsletter Archive</h2>
                <p>Waksman's archive of monthly newsletters introduce mental toughness tips, sport parenting success strategies, and more!</p>
            
                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <ul>
                        <li><a href="/newsletter-archive/what-helps-student-athletes-thrive-long-term.html">What Helps Student-Athletes Thrive Long-Term</a></li>

                        <li><a href="/newsletter-archive/identifying-our-values.html">Identifying Our Values</a></li>

                        <li><a href="/newsletter-archive/how-phones-impact-our-performance-and-goals.html">How Phones Impact Our Performance & Goals</a></li>

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

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
