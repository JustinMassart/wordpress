<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <main class="layout singleTrip">
        <h2 class="singleTrip__title"><?= get_the_title(); ?></h2>
        <figure class="singleTrip__figure">
			<?= get_the_post_thumbnail(); ?>
        </figure>
        <div class="singleTrip__content">
			<?php the_content(); ?>
        </div>
        <aside class="singleTrip__details detail">
            <h3 class="details__title">OUFTI</h3>
            <p class="details__dateofdeparture">
                <time datetime="<?= date( 'c', strtotime( get_field( 'departure_date', false, false ) ) ) ?>">
					<?= ucfirst( date_i18n( 'D, F, Y', strtotime( get_field( 'departure_date', false, false ) ) ) ) ?>
                </time>
            </p>
			<?php if ( get_field( 'return_date' ) ): ?>
                <p class="details__dateofreturn">
                    <time datetime="<?= date( 'c', strtotime( get_field( 'return_date', false, false ) ) ) ?>">
						<?= ucfirst( date_i18n( 'D, F, Y', strtotime( get_field( 'return_date', false, false ) ) ) ) ?>
                    </time>
                </p>
			<?php else: ?>
                <p>Aucune date de retour n'a été enregistrée.</p>
			<?php endif; ?>
        </aside>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>