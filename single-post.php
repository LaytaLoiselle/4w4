<?php get_header() ?>
<main class="site__main">
     <?php if (have_posts()): while(have_posts()):the_post(); ?>
     <article class="cours">
        <h1 class="cours_titre">
            <?php echo get_the_title(); ?>
        </h1>
     <section class="cours_contenu">
     <?php the_post_thumbnail("thumbnail"); ?>
        <?php the_content(); ?>
     </section>
     </article>
     <?php endwhile ?>
        <?php the_title() ?>
        <?php the_content() ?>
     <?php endif ?>
</main>
<?php get_footer() ?>