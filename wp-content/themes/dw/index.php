<!-- fonction wordpress qui appelle le fichier header.php-->
<?php get_header()?>

<?php
    //On ouvre 'la Boucle' (The loop), la structure de contrôle de contenu propre de WordPress:
    if (have_posts()): while (have_posts()): the_post(); ?>
        <h2><?= get_the_title(); ?></h2>
        <div >
            <?= get_the_content();?>
        </div>
    <?php
    // On ferme 'la Boucle' (The loop):
    endwhile; else: ?>
        <p>Il n’a pas de contenu à afficher.</p>
    <?php endif; ?>

<!-- fonction wordpress qui appelle le fichier footer.php -->
<?php get_footer()?>
