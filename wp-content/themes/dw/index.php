<?php get_header(); ?>

    <main class="layout">
        <section class="layout__latest latest">
            <h2 class="latest__title"><?= __( 'Mes derniers articles', 'dw' ) ?></h2>
            <div class="latest__container">
				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
					<?php dw_include( 'post', [ 'modifier' => 'index' ] ); ?>
				<?php endwhile; else: ?>
                    <!-- Il n'y a pas d'articles à afficher -->
                    <p class="results__empty"><?= __( 'Il n’y a pas de résultats pour votre recherche', 'dw' ); ?></p>
				<?php endif; ?>
            </div>
        </section>

        <section class="layout__trips trips">
            <h2 class="trips__title"><?= __( 'Mes derniers voyages', 'dw' ) ?></h2>
            <div class="trips__container">
				<?php if ( ( $trips = dw_get_trips( 3, get_search_query() ) )->have_posts() ): while ( $trips->have_posts() ): $trips->the_post(); ?>
					<?php dw_include( 'trip', [ 'modifier' => 'index' ] ); ?>
				<?php endwhile; else: ?>
                    <p class="trips__empty"><?= __( 'Il n’y a pas de voyages à vous raconter...', 'dw' ) ?></p>
				<?php endif; ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>