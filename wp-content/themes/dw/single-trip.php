<?php get_header() ?>
<style type="text/css">
    .trip {
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
    }
    .trip__location{
        width: 320px;
        padding: 20px;
        background-color: #f1f1f1;
        display: flex;
        margin: 0;
        flex-direction: column-reverse;
    }
    .trip__fig{
        display: block;
        position: relative;

        width: 100%;
        height: 0;
        padding-top: 100%;
        margin: 0;
    }
    .trip__img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    html{
        margin: 0 0 0 30px;
        text-align: justify;
    }
    .trip__day{
        width: 100%;
        margin-right: 30px;
    }

</style>
<?php
if (have_posts()): while (have_posts()): the_post(); ?>
    <h2><?= get_the_title(); ?></h2>
    <p><?= get_the_excerpt(); ?></p>
    <div class="trip">
        <aside class="trip__location">
            <div>
                <h3>Le village au multiple couleur</h3>
                <p>Les maisons de Procida sont colorées pour plusieurs raisons. Traditionnellement, les pêcheurs
                    peignaient leurs maisons avec des couleurs vives afin de pouvoir les repérer facilement depuis la
                    mer. Ces teintes variées facilitent aussi l’orientation dans les ruelles étroites de l’île et
                    ajoutent une touche de charme et d’authenticité au paysage. Aujourd’hui, ces couleurs font partie
                    intégrante de l’identité culturelle et touristique de Procida.
                </p>
            </div>
            <figure class="trip__fig">
                <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'trip__img']); ?>
            </figure>
        </aside>
        <section class="trip__day">
            <h3>Notres voyages</h3>
            <div>
                <?php the_content(); ?>
            </div>
        </section>
    </div>

<?php
endwhile;
else: ?>
    <p>Cette recette n’existe pas...</p>
<?php endif; ?>

<?php get_footer() ?>
