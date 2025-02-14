<?php get_header()?>
<style type="text/css">
    .recipe {
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
    }
    .recipe__ingredients{
        width: 320px;
        padding: 20px;
        background-color: #f1f1f1;
    }
</style>
<?php
    if (have_posts()): while (have_posts()): the_post(); ?>
        <h2><?= get_the_title(); ?></h2>
    <p><?= get_the_excerpt(); ?></p>
    <div class="recipe">
        <aside class="recipe__ingredients">
            <h3>Ingrédients</h3>
            <p>À completer ...</p>
        </aside>
        <section class="recipe__steps">
            <h3>Étapes</h3>
            <div>
                <?php the_content();?>
            </div>
        </section>
    </div>

    <?php
    endwhile; else: ?>
        <p>Cette recette n’existe pas...</p>
    <?php endif; ?>

<?php get_footer()?>
