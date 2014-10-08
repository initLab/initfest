<?php
get_header(); 

if ( $pagename == 'about' ||
     $pagename == 'ideas-and-recommendations' ||
     $pagename == 'team' ||
     $pagename == 'history' ) {
    wp_nav_menu( array( 'theme_location' => 'subnav-menu', 'container_class' => 'content subnav cf' ) );
    echo '<div class="separator"></div>';
}
?>
<section class="content grid">
    <div class="col-left">
    <h1><?php the_title();  ?></h1>
<?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
?>
    </div>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
