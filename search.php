<?php
/**
 * Le modèle résultat de recherche search.php
 *
 * Affiche les résultats de recherche
 * 
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cidw-4w4
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <section class="site_main_recherche">
        <h1>Résultats de recherche</h1>
<?php if(have_posts()):while(have_posts()):the_post(); ?>

<a href="<?php echo get_permalink();?>">
<h2><?php the_title(); ?></h2>
</a>
<p>
<?php echo wp_trim_words(get_the_content(),20); ?>
</p>
<hr>
<?php endwhile ?>
<?php else: ?>
    <h2>Aucun résultats pour la recherche</h2>
<?php endif ?>
</section>
</main>
<?php get_footer(); ?>