<section id="site-masthead" class="masthead masthead--video" role="complementary" aria-label="Decorative looping video">
    <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0.5">
        <div class="masthead__overlay__box">
            <div class="masthead__overlay__heading">
                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>
        </div>
    </div>

    <div class="masthead__media photo">
		<?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		endif;
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500">
	</div>
</section>