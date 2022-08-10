<?php get_header(); ?>

    <main>
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <section class="works works-lists">
        <span class="bg-grid">
        <div class="inner">
          <h1 class="works__title title">WORKS<span>制作実績</span></h1>
          <!-- /.works__title -->
          
          <?php if ( have_posts() ) : ?>
          <ul class="works-list">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="works-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="works-list__img">
                  <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail('full');
                  } ?>
                </div>
                <!-- /.works-list__img -->
              </a>
              <div class="works-list__tags">
                <?php 
                    $tags = get_the_tags();
                    foreach ( $tags as $tag ) {
                        echo '<span>' . $tag->name . '</span>';
                    }
                ?>
              </div>
              <!-- /.works-list__tags -->
              <div class="works-list__sitename">
                <span><?php the_title(); ?></span>
                <span>
                <?php
                    $cats = get_the_category();
                    foreach( $cats as $cat ) {
                        if($cat->parent) echo $cat->cat_name;
                    }
                ?>
                </span>
              </div>
              <!-- /.works-list__sitename -->
            </li>
            <!-- /.works-list__item -->
            <?php endwhile; ?>            
          </ul>
          <!-- /.works-list -->
          <?php endif; ?>

          <?php if ( paginate_links() ) : ?>
            <div class="pagination">
              <?php echo paginate_links(
                array(
                  'end_size' => 1,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'prev_text' => 'prev',
                  'next_text' => 'next'
                )
                );
              ?>
            </div>
            <!-- /.pagination -->
          <?php endif; ?>

        </div>
        <!-- /.inner -->
        </span>
        <!-- /.bg-grid -->
      </section>
      <!-- /.works -->

      <?php get_template_part('template-parts/contact', 'link'); ?>

<?php get_footer(); ?>
