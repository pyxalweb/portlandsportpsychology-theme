<?php /* Template Name: Waksman's Workbook */ ?>

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

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>How to Support Your Student-Athlete</h2>
        <div class="text-3 text-strike text-strike--hide-vw100">
            <p><span>Success Strategies for Parents</span></p>
        </div>
    </section>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <ul class="numbered-items">
            <li>
                <h2>Stick to your normal post-game routine.</h2>
                <p>If you go for frozen yogurt after a win, do the same after a loss. Children respond well to routines. Additionally, your child might associate post-game activities with winning and losing.</p>
            </li>

            <li>
                <h2>Allow your child to start conversations about their performance.</h2>
                <p>Immediately after games, athletes' emotions run high. Try not to ask too many details of the game as your child is still dealing with these emotions.</p>
            </li>

            <li>
                <h2>Avoid comparing your child to other teammates.</h2>
                <p>Every player brings his/her own unique strengths to a team. Even high-level professional teams outline clear player roles and try to highlight what each player brings to the team. Players and coaches often comment on how championship seasons stem from the combination of every player's contributions. Player comparisons create hurt feelings and added pressure, especially at the youth level.</p>
            </li>

            <li>
                <h2>Timing is everything.</h2>
                <p>After a long, tiring day at work, would you appreciate an FBI style interrogation of how things went? Odds are your child could use a shower, clean clothes, and a nice meal before diving into game details. Work to save the sport conversation for the dinner table. Student-athletes will be more responsive after a nice meal. Additionally, all family members can be involved and your child won't have to repeat the same answers again to the new sets of ears.</p>
            </li>

            <li>
                <h2>Use basic, healthy statements.</h2>
                <p>Based on psychological research, the three healthiest statements moms and dads can make are: (Before the competition) “Have fun. Play hard. I love you.” (After the competition) “Did you have fun? I'm proud of you. I love you.”</p>
                <p>Sports are a great opportunity to help shape well-rounded young people. Countless positive memories and life lessons are gained every season. Teams and coaches come and go, but parents are often the constant factor. Using these five success strategies, work to support your child this season, as they learn all the wonderful lessons sports offer. </p>
            </li>
        </ul>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
