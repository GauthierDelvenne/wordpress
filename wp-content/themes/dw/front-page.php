<?php get_header()?>

    <h2>Bienvenu sur mon site&nbsp;!</h2>
    <?php
    //On ouvre 'la Boucle' (The loop), la structure de contrôle de contenu propre de WordPress:
    if (have_posts()): while (have_posts()): the_post(); ?>
        <div >
            <?= get_the_content();?>
        </div>
    <?php
    // On ferme 'la Boucle' (The loop):
    endwhile; else: ?>
        <p>Il n’a pas de contenu à afficher.</p>
    <?php endif; ?>

<?php get_footer()?>
