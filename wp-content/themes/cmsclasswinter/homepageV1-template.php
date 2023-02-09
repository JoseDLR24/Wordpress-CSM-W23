<?php
/**
 * Template Name: Homepage Version One (No plugins)
 * Template Post Type: page
 */
    get_header();
?>
<!-- Now we add our content -->
<!--  -->
<main class="homepage-v1">
    <?php
        if(have_posts()):
            while(have_posts()) : the_post();
                the_content();
            endwhile;
        else: 
            echo "<p>Sorry, no posts are found</p>";
        endif;
    ?>
</main>
<?php
    get_footer();
?>