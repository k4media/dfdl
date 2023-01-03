<?php

     // get solutions pages
     $page      = get_page_by_path( 'solutions' );
     $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'child_of'       => $page->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order',
          'no_found_rows'          => true,
          'ignore_sticky_posts'    => true,
          'update_post_meta_cache' => false, 
          'update_post_term_cache' => false,
     );
     $pages = get_pages($args);
     foreach( $pages as $p ) {
          $solution = '<div class="solution ' . $p->post_title . ' ">';
          $icon = get_stylesheet_directory() . '/assets/media/si-' . $p->post_name . '.svg';
          $solution .= ( file_exists($icon) ) ? '<img src="' . get_stylesheet_directory_uri() . '/assets/media/si-' . $p->post_name . '.svg' . '">' : '<img src="' . get_stylesheet_directory_uri() . '/assets/media/si-missing.svg">' ;
          $solution .= '<a href="' . get_permalink($p->ID) . '">'  ;
          $solution .= $p->post_title;
          $solution .= '</a>';
          $solution .= '</div>';
          $solutions[] = $solution;
     }

?>
<div class="solutions-grid-stage">
     <div class="solutions-grid silo">
          <?php do_action("dfdl_solutions_country_nav"); ?>
          <div class="solutions stage"><?php echo implode($solutions) ?></div>
     </div>
</div>