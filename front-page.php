<?php get_header(); ?>

    <div class="fv">
      <div class="inner fv-inner">
        <div class="fv__left">
          <p class="fv__title">
            <span class="main-title">事業が加速する</span><br />
            <span class="main-title">Web制作</span>
          </p>
          <p class="fv__subtitle">
            丁寧かつスピード感を大切に。<br />
            手が届かないところまで正確に対応します。
          </p>
        </div>
        <!-- /.fv__left -->
        <div class="fv__right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fv-img.png" alt="コーディング画面" />
        </div>
        <!-- /.fv__right -->
      </div>
      <!-- /.inner -->
    </div>
    <!-- /.fv -->

    <main>
      <section class="works" id="works">
        <!-- <div class="inner"> -->
          <h2 class="works__title title">WORKS<span>制作実績</span></h2>
          <!-- /.works__title -->
          <div class="swiper-wrap">
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              
              <?php if ( have_posts() ) : ?>
              <div class="swiper-wrapper">
                <!-- Slides -->

                <?php while ( have_posts() ) : the_post(); ?>
                <div class="swiper-slide">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                      } 
                    ?>
                  </a>
                </div>
                <?php endwhile; ?>
              
              </div>
              <?php endif; ?>

              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-wrap -->
          <div class="works__btn">
            <?php
                $category_id = get_cat_ID('制作実績');
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo esc_url($category_link); ?>"><span>実績一覧はこちら</span></a>
          </div>
          <!-- /.works__btn -->
        <!-- </div> -->
        <!-- /.inner -->
      </section>
      <!-- /.works -->

      <section class="service" id="service">
        <div class="inner">
          <h2 class="service__title title">SERVICE<span>サービス</span></h2>
          <!-- /.service__title -->
          <ul class="service-contents">
            <li class="service-contents__list">
              <div class="service-contents__sp-subtitle">コーディング</div>
              <!-- /.service-contents__sp-subtitle -->
              <div class="service-contents__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/coading.png" alt="コーディング" />
              </div>
              <!-- /.service-contents__img -->
              <div class="service-contents__texts">
                <h3 class="service-contents__subtitle">コーディング</h3>
                <!-- /.service-contents__subtitle -->
                <p class="service-contents__text">
                  HTML・CSS・SASS・jQueryを用いて、コーポレートサイトやLP、ECサイトなど幅広くコーディングをいたします。急ぎのコーディング業務、修正する時間が足りない場合などはぜひご相談ください。
                </p>
                <!-- /.service-contents__text -->
                <ul class="service-contents__icons">
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/html-icon.png" alt="HTML" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/css-icon.png" alt="CSS" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sass-icon.png" alt="SASS" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jquery-icon.png" alt="JQUERY" />
                  </li>
                  <!-- /.service-contents__icon -->
                </ul>
                <!-- /.service-contents__icons -->
              </div>
              <!-- /.service-contents__texts -->
              <div class="line-area">
                <div class="border-wrap border-wrap01">
                  <span class="border-line01 border-line"></span>
                <!-- /.border-line01 -->
                </div>
                <!-- /.border-wrap -->
              </div>
              <!-- /.line-area -->
            </li>
            <!-- /.service-contents__list -->
            <li class="service-contents__list">
              <div class="service-contents__sp-subtitle">WordPress</div>
              <!-- /.service-contents__sp-subtitle -->
              <div class="service-contents__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="ワードプレス" />
              </div>
              <!-- /.service-contents__img -->
              <div class="service-contents__texts">
                <h3 class="service-contents__subtitle">WordPress</h3>
                <!-- /.service-contents__subtitle -->
                <p class="service-contents__text">
                  世界で多くシェアされているCMS「WordPress」で、テーマやプラグイン等を使用しつつ、ブログやコーポレートサイトなど機能面に優れたサイトに仕上げます。もちろん、オリジナルテーマからの構築も可能です。
                </p>
                <!-- /.service-contents__text -->
                <ul class="service-contents__icons">
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/php-icon.png" alt="PHP" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.png" alt="WORDPRESS" />
                  </li>
                  <!-- /.service-contents__icon -->
                </ul>
                <!-- /.service-contents__icons -->
              </div>
              <!-- /.service-contents__texts -->
              <div class="line-area">
                <div class="border-wrap border-wrap02">
                  <span class="border-line02 border-line"></span>
                <!-- /.border-line01 -->
                </div>
                <!-- /.border-wrap -->
              </div>
              <!-- /.line-area -->
            </li>
            <!-- /.service-contents__list -->
            <li class="service-contents__list">
              <div class="service-contents__sp-subtitle">サイト保守・修正</div>
              <!-- /.service-contents__sp-subtitle -->
              <div class="service-contents__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/config.png" alt="サイト保守・修正" />
              </div>
              <!-- /.service-contents__img -->
              <div class="service-contents__texts">
                <h3 class="service-contents__subtitle">サイト保守・修正</h3>
                <!-- /.service-contents__subtitle -->
                <p class="service-contents__text">
                  ホームページ運営をしていく中で、サーバーアップデートやコードの修正、画像変更などが必要な場面が出てくると思います。より良いホームページとは常に最新の状態を保っているものですので、どんな些細なことでも依頼を頂ければ真摯に対応いたします。
                </p>
                <!-- /.service-contents__text -->
                <ul class="service-contents__icons">
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/human-icon.png" alt="人" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/commentーicon.png" alt="コメント" />
                  </li>
                  <!-- /.service-contents__icon -->
                  <li class="service-contents__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gear-icon.png" alt="歯車" />
                  </li>
                  <!-- /.service-contents__icon -->
                </ul>
                <!-- /.service-contents__icons -->
              </div>
              <!-- /.service-contents__texts -->
            </li>
            <!-- /.service-contents__list -->
          </ul>
          <!-- /.service-contents -->
        </div>
        <!-- /.inner -->
      </section>
      <!-- /.service -->

      <section class="about" id="about">
        <div class="inner">
          <h2 class="about__title title">ABOUT US<span>私について</span></h2>
          <!-- /.about__title -->
          <div class="about-contents">
            <div class="about-contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="本人写真" />
            </div>
            <!-- /.about-contents__img -->
            <div class="about-contents__profile">
              <span class="about-contents__name"
                >Tsukuda Yuya<br /><span>佃 祐也</span></span
              >
              <!-- /.about-contents__name -->
              <p class="about-contents__text">
                鹿児島県在住 28歳。<br />
                診療放射線技師として病院に従事していますが、
                複業としてWeb制作をするため、2021年より勉強開始。
                「経験したことがないことをしていく」のが趣味で、
                普段から様々なことに挑戦するべく活動しています。
                行く行くはWeb制作に比重を置き、クライアント様とより良いHPを制作していくのが目標です。
              </p>
              <!-- /.about-contents__text -->
            </div>
            <!-- /.about-contents__profile -->
          </div>
          <!-- /.about-contents -->
        </div>
        <!-- /.inner -->
      </section>
      <!-- /.about -->

      <?php get_template_part('template-parts/contact', 'link'); ?>
    </main>

<?php get_footer(); ?>