<?php
	get_header ();
	echo '<main>';
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			echo '<span class="ep-article-meta">';
			echo '<span class="author"><small><em><a href="'. get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) .'" rel="author">'. get_the_author() .'</a></em></small></a></span>';
			echo '<time itemprop="datePublished" content="'. get_the_time("Y-m-d") .'"><small><em>'. get_the_time("F jS, Y") .'</em></small></time>';
			echo '</span>';
			echo '<h1><a href="'. get_post_permalink() .'">'. get_the_title() .'</a></h1>';

			echo '<article>';
//			if (has_post_thumbnail()) {
//				/* Featured Image */
//				$post_thumbnail_id = get_post_thumbnail_id();
//				$img_src = wp_get_attachment_image_url( $post_thumbnail_id, 'full' );
//				$img_srcset = wp_get_attachment_image_srcset( $post_thumbnail_id, 'full' );
//				$alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
//				echo '<a href="'. get_post_permalink() .'"><img alt="'. $alt .'" src="' . $img_src . '" srcset="' . $img_srcset . '" style="width: 100%;" /></a>';
//			}

			the_content();

			echo '</article>';
		}
	}
	echo '</main>';
	get_footer ();
