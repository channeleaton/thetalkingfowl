  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'thetalkingfowl' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?>&nbsp;</a></h1>
          
    <div class="entry-meta">
      <?php
        printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'thetalkingfowl' ),
          get_permalink(),
          get_the_date( 'c' ),
          get_the_date(),
          get_author_posts_url( get_the_author_meta( 'ID' ) ),
          sprintf( esc_attr__( 'View all posts by %s', 'thetalkingfowl' ), get_the_author() ),
          get_the_author()
        );
      ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->
  <div class="entry-thumbnail">
           <?php the_post_thumbnail( 'loop-post-thumbnail' ); ?>
          </div>
  <?php if ( is_archive() || is_search() ) : // Only display Excerpts for archives & search ?>
  <div class="entry-summary">
    <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'thetalkingfowl' ) ); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'thetalkingfowl' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'thetalkingfowl' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

