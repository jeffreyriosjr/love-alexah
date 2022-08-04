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
 * @package love-alexah
 * 
 * **/
 
get_header();

$contact_form_image = get_field('contact_form_image');




?>


<main id="contact-lisa" class="site-main contact-lisa">
	<section id="contact-form" class="contact-form">
        <div class="container-fluid">
		<div class="contact row d-flex">
        <?php 
        $contact_form_image = get_field('contact_form_image');
        if( !empty($contact_form_image) ): ?>
	    <img src="<?php echo $contact_form_image; ?>" alt="<?php echo $contact_form_image; ?>" />
        <?php endif; ?>
       
        </div>
    </div>

     </section>
        
    </main>
<?php

get_footer();