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
		<div class="footer__main | content width-md">
			<div class="footer__address footer__flex">
				<h2>Elliott Waksman, MA, CMPC</h2>
				<p>Certified Mental Performance Consultant</p>
				<div class="icon icon--address">
					<address>PO BOX 14044 Portland, OR 97293</address>
				</div>
				<div class="icon icon--phone">
					<a href="tel:15033097215" aria-label="Phone: 5 0 3 3 0 9 7 2 1 5">(503) 309-7215</a>
				</div>
			</div>

			<div class="footer__nav footer__flex">
				<h2>Helpful Links</h2>
				<ul>
					<?php include('inc-navigation-footer.php'); ?>
				</ul>
			</div>

			<div class="footer__social">
				<h2>Follow Me</h2>
				<ul class="social">
					<li class="social__linkedin">
						<a href="https://www.linkedin.com/in/elliott-waksman/" target="_blank" rel="noopener" aria-label="LinkedIn"></a>
					</li>
				</ul>
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
