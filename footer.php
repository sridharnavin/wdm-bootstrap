<?php
/**
 * The template for displaying the footer
 *
 * @version 1.0
 */

?>

	<footer class="site-footer">
		<?php 
        	wp_nav_menu( array( 'theme_location' => 'footer' ) );
        ?>
		<p><?php bloginfo( 'name' ); ?> - &copy; <?php echo date('Y'); ?></p>
	</footer>
</div><!-- container -->

<?php wp_footer(); ?>

</body>
</html>
