<?php
                    $categories = get_the_category();
                    //var_dump($categories);
                ?>
                <article class="formation__cours <?php echo $categories[1] -> slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 4, -6);
                        $nbHeures = get_field("nombre_dheures");
                        $departement = get_field("departements");
                       // echo "<h1>//////// " .  $departement  . "/////////</h1>";
                        $sigleCours = substr($titre, 0, 3);
                        $descCours = get_the_excerpt();
                        ?>
                    <a href="<?php echo get_permalink() ?>">
                        <h3 class="cours__titre"> <?= $titreFiltreCours; ?></h3>
                    </a>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__dep"><?= $departement ?></p>
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <p class="cours__desc"> <?= $descCours; ?></p>           
                    </article>