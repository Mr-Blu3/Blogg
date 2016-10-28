<?php
/**
 * The template used for displaying content single
 *
 * @package Barletta
 */
?>

				</div><!-- /.columns -->

			</div><!-- /.row -->
		</section><!-- /.container -->
		</div><!-- /.container -->

		<!-- back to top button -->
		<p id="back-top" style="display: block;">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>

		<footer id="stopSide" class="mz-footer">

			<!-- footer widgets -->

			<div class="footer-bottom container">
				<?php wp_footer(); ?>
				<?php dynamic_sidebar('footer-widget-1') ?>
				
			</div>
		</footer>
	</body>
	
<script src="https://fb.me/react-15.2.1.js"></script>
<script src="https://fb.me/react-dom-15.2.1.js"></script>
<script src="<?php echo  get_template_directory_uri(); ?>/js/libs/browser.min.js"></script>
<script type="text/babel" src="<?php echo  get_template_directory_uri(); ?>/js/page.js"></script>
</html>