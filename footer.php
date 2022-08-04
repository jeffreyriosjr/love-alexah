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
<div class="container-fluid">
    <h1 class="footer-header">Stay In Touch Please!</h1>
  <div class="container p-4 pb-0 text-center">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Google -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

    </section>
    <!-- Section: Social media -->
    	
    <div class="footer-all row">
						<div class="col <?php if (!has_nav_menu('footer-community-menu')) echo " text-center"; ?>">
							<?php
							wp_nav_menu( array( 
								'theme_location' => 'footer-menu', 
								'container' => 'ul',
								'menu_class' => 'footer-menu',
								) ); 
							?>
						</div>
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
