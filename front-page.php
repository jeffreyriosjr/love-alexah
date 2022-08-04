<?php 
/**
 * 
 * This is the template that displays the home page content.
 * 
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package we-defend-fresno
 */
get_header();
$main_background_image = get_field('main_background_image');
$love_alexah_description = sanitize_textarea_field(get_field('love_alexah_description'));
$book_now_link = get_field('book_now_link');
?>
<main id="primary" class="container-fluid site-main">

<!-- Header Section --> 

    <section class="love-alexah">  
        <div class="home-page">
        <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
        </div>
    </section>
    
</main>


<?php
get_footer();