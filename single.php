<?php get_header(); ?>

    <main>
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <section class="work">
        <span class="bg-grid">

        <?php if ( have_posts() ) : ?>
          <div class="inner">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="work__title title">
                    <?php the_title(); ?>
                    <span>
                        <?php
                            $cats = get_the_category();
                            foreach( $cats as $cat ) {
                                if($cat->parent) echo $cat->cat_name;
                            }
                        ?>
                    </span>
                </h1>
                <!-- /.works__title -->
                <div class="work-contents">
                    <div class="work-contents__img">
                        <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('full');
                            } 
                        ?>
                    </div>
                    <!-- /.work-contents__img -->
                    <div class="work-contents__texts">
                        <span><?php the_field( 'name' ) ?> / <?php the_field( 'site_kind' ); ?></span>
                        <dl>
                            <div class="work-contents__definition">
                                <dt>URL</dt>
                                <dd><a href="<?php the_field( 'url' ); ?>"><?php the_field( 'url' ); ?></a></dd>
                            </div>
                            <!-- /.work-contents__definition -->
                            <div class="work-contents__definition">
                                <dt>ROLE</dt>
                                <dd><?php the_field( 'role' ); ?></dd>
                            </div>
                            <!-- /.work-contents__definition -->
                            <div class="work-contents__definition">
                                <dt>PRODUCTION TIME</dt>
                                <dd><?php the_field( 'production_time' ) ?></dd>
                            </div>
                            <!-- /.work-contents__definition -->
                            <div class="work-contents__definition">
                                <dt>Github</dt>
                                <dd><a href="<?php the_field( 'github' ); ?>"><?php the_field( 'github' ); ?></a></dd>
                            </div>
                            <!-- /.work-contents__definition -->
                        </dl>
                        <div class="work-contents__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!-- /.work-contents__texts -->
                </div>
                <!-- /.work-contents -->
            <?php endwhile; ?>
          </div>
          <!-- /.inner -->
        <?php endif; ?>
        
        </span>
        <!-- /.bg-grid -->
      </section>
      <!-- /.work -->

      <section class="other-works">
        <!-- <div class="inner"> -->
          <h2 class="other-works__title title">
            OTHER WORKS<span>制作実績</span>
          </h2>
          <!-- /.other-works__title -->
          <div class="swiper-wrap">

            <div class="swiper">
                <?php if ( has_category()) : ?>

                    <?php
                        global $post;
                        $post_id = $post->ID; //表示されている記事のIDを取得
                        $args = array(
                            'post__not_in' => array($post_id), //現在表示されている記事を除く
                            'category_name' => 'works', //カテゴリースラッグがworksの記事
                            'orderby' => 'rand',
                            'post_type' => 'post',
                        );
                        $myposts = get_posts($args);
                    ?>
                    <div class="swiper-wrapper">
                        <?php foreach ( $myposts as $post ) : setup_postdata($post); ?>
                    
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('full');
                                        } 
                                    ?>
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
                                                foreach($cats as $cat):
                                                if($cat->parent) echo $cat->cat_name;
                                                endforeach;
                                            ?>
                                        </span>
                                    </div>
                                    <!-- /.works-list__sitename -->
                                </a>
                            </div>
                    
                        <?php endforeach; ?>
                    </div>
                    <!-- swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                <?php endif; ?>
            </div>
            <!-- swiper -->
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-wrap -->
 
        <!-- </div> -->
        <!-- /.inner -->
      </section>
      <!-- /.other-works -->

      <?php get_template_part('template-parts/contact', 'link'); ?>

 <?php get_footer(); ?>
