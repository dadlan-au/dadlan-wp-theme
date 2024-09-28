<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DadLAN
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div id="main">
		<?php
		// Get the current page ID
		$current_page_id = get_the_ID();

		// Attempt to get subpages of the current page
		$subpages_args = array(
			'title_li' => '',
			'child_of' => $current_page_id,
			'echo'     => false,
			'depth'    => 1,
		);

		$subpages = wp_list_pages( $subpages_args );

		// Check if there are any subpages
		if ( ! empty( $subpages ) ) {
			// Current page has subpages, display them
			echo '<nav><ul>' . $subpages . '</ul></nav>';
		} else {
			// Current page does not have subpages, check if it has a parent
			$parent_id = wp_get_post_parent_id( $current_page_id );

			if ( $parent_id ) {
				// Current page has a parent, get its siblings
				$siblings_args = array(
					'title_li' => '',
					'child_of' => $parent_id,
					'echo'     => false,
					'depth'    => 1,
				);

				$siblings = wp_list_pages( $siblings_args );

				// Check if there are any siblings
				if ( ! empty( $siblings ) ) {
					echo '<nav><ul>' . $siblings . '</ul></nav>';
				}
			}
		}
		?>
		


			<?php dadlan_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dadlan' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'dadlan' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->