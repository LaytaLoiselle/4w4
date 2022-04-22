<?php get_header() ?>
<main class="site__main">
<h1>Accueil</h1>
<section class="animation">
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#008246"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#008246"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
</section>
<h2>Activités en TIM</h2>
<?php
    wp_nav_menu(array("menu"=>"menu_accueil",
                    "container"=>"nav"));
?>
<h2>Les évenements importants pour l'année</h2>
<?php
    wp_nav_menu(array("menu"=>"evenement",
                    "container"=>"nav"));
?>          
     <?php if (have_posts()): while(have_posts()) : the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>
        <?php endwhile; ?>
     <?php endif ?>
</main>
<?php get_footer() ?>