<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_title(' - ', false, 'right') . get_bloginfo('name') ?></title>
</head>
<body>
<header>
    <h1><?= get_bloginfo('name') ?></h1>
    <p><?= get_bloginfo('description') ?></p>
</header>
<main>
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
</main>
</body>
</html>