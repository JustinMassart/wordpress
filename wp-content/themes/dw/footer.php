<footer class="footer">
    <section class="footer__body">
        <h2 class="footer__title">Pied de page</h2>
        <nav class="header__nav nav">
            <h3 class="nav__title">Navigation secondaire</h3>
            <ul class="nav__container">
				<?php foreach ( dw_get_menu_items_footer( 'footer' ) as $link ): ?>
                    <li class="<?= $link->generateBemClasses( 'nav__item' ); ?>">
                        <a href="<?= $link->url; ?>"
							<?= $link->title ? ' title="' . $link->title . '"' : ''; ?>
                           class="nav__link">
							<?= $link->label; ?>
                        </a>
						<?php if ( $link->hasSubItems() ): ?>
                            <ul class="nav__subcontainer">
								<?php foreach ( $link->subitems as $sub ): ?>
                                    <li class="<?= $sub->generateBemClasses( 'nav__subitem' ); ?>">
                                        <a href="<?= $sub->url; ?>"
											<?= $sub->title ? ' title="' . $sub->title . '"' : ''; ?>
                                           class="nav__link">
											<?= $sub->label; ?>
                                        </a>
                                    </li>
								<?php endforeach; ?>
                            </ul>
						<?php endif; ?>
                    </li>
				<?php endforeach; ?>
            </ul>
        </nav>
    </section>
</footer>
</body>
</html>