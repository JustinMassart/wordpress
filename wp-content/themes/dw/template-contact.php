<?php
	/*
	 * Template Name: Contact Page Template
	 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <main class="layout contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <div class="contact__content">
			<?php the_content(); ?>
        </div>
        <div class="contact__form form">
            <form action="<?= get_home_url() ?>/wp-admin/admin-post.php" method="POST">
                <div class="firstnameBlock">
                    <label for="firstname">Votre prénom</label>
                    <input id="firstname" name="firstname" type="text" class="form__input">
                </div>
                <div class="lastnameBlock">
                    <label for="lastname">Votre nom</label>
                    <input id="lastname" name="lastname" type="text" class="form__input">
                </div>
                <div class="emailBlock">
                    <label for="email">Votre mail</label>
                    <input id="email" name="email" type="email" class="form__input">
                </div>
                <div class="phoneBlock">
                    <label for="phone">Votre numéro de téléphone</label>
                    <input id="phone" name="phone" type="tel" class="form__input">
                </div>
                <div class="messageBlock">
                    <label for="message">Le message</label>
                    <textarea id="message" name="message" class="form__textarea" cols="40" rows="20"></textarea>
                </div>
                <div class="agree">
                    <input id="agreement" name="rules" type="checkbox" value="1" class="form__checker">
                    <label for="agreement">J'accepte que mes données soient utilisées.</label>
                </div>
                <div class="form__action">
                    <button type="submit">Envoyer</button>
                    <input type="hidden" name="action" value="submit_contact_form">
					<?php wp_nonce_field( 'nonce_check_contact_form' ); ?>
                </div>
            </form>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>