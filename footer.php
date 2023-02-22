<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psp
 */
?>
<footer id="site-footer" class="footer">
	<div class="footer__container">
		<div class="footer__main | content width-df">
			<div class="footer__address footer__flex">
				<?php get_template_part( 'template-parts/content', 'info' ); ?>
			</div>

			<div class="footer__nav footer__flex">
				<h2>Helpful Links</h2>
				<ul>
					<?php include('inc-navigation-footer.php'); ?>
				</ul>
			</div>

			<div class="footer__social">
				<h2>Follow Me</h2>
				<?php get_template_part( 'template-parts/content', 'social' ); ?>
			</div>
		</div>

		<div class="footer__links">
			<div class="footer__links__container | content width-md">
				<p><a href="/accessibility">Web Accessibility</a><span> • </span><br><a href="/site-map">Site Map</a><span> • </span><br><a href="https://www.alxwntr.com" target="_blank"> Website by AW © <?php echo date('Y'); ?></a></p>
			</div>
		</div>
	</div>


</footer>


<?php wp_footer(); ?>

</body>
</html>
