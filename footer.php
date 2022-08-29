<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Love-Alexah
 */

?>

<footer id="colophon" class="site-footer">
<!-- contains a nav menu and address -->
<div class="footer-all row">
      <ul class="icon-section">
      <li class="icon-links"><a href="https://www.facebook.com/SMYLE-Co-101844815983658/"><i class="fab fa-facebook-f"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/smyle_co_/"><i class="fab fa-instagram"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/smyle_co_/"><i class="fab fa-twitter"></i></a></li>
      <li class="icon-links"><a href="https://www.instagram.com/smyle_co_/"><i class="fab fa-apple"></i></a></li>
    </ul>
    <!-- Section: Social media -->
    	
    <div class="footer-all row">
						<?php if (has_nav_menu('footer-community-menu')):?>
						<div class="col-lg-6">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-community-menu',
                                    'container' => 'ul',
                                    'menu_class' => 'nav',
                                ));
                            ?>
						</div>
					</div>
						<?php endif;?>
  			</div>		
		</div>
	</div>
</div>
							  <!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
