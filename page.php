<?php
if ( is_page('contact') ) {
  remove_filter('the_content', 'wpautop');
}
?>

<?php get_header(); ?>

    <main>
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <section class="under-contact">
        <span class="bg-grid">
        <div class="inner">
          <h1 class="under-contact__title title">
            CONTACT<span>お問い合わせ</span>
          </h1>
          <!-- /.works__title -->

          <div class="contact-contents">
            <div class="contact-contents__progress">
              <span class="circle">項目入力</span>
              <span class="circle">内容確認</span>
              <span class="circle">送信完了</span>
            </div>
            <!-- /.contact-contents__progress -->
            <p class="contact-contents__text contact-contents__text-input">
              当サイトをご覧いただき誠にありがとうございます。<br>
              WEBサイトに関するお困りごと・ご相談は下記入力フォームよりお願い致します。
              その他、ご不明な点がありましたらお気軽にお問い合わせください。
            </p>
            <!-- /.contact-contents__text -->
            <p class="contact-contents__text contact-contents__text-confirm">
              以下の内容でお間違いなければ、「送信する」ボタンを押してください。
            </p>
            <!-- /.contact-contents__text -->
            <p class="contact-contents__text contact-contents__text-complete">
              <span>送信が完了しました!</span>
              お問い合わせいただきありがとうございました。<br>
              内容を確認後、後日ご連絡をさせていただきますので、今しばらくお待ちください。  
            </p>
            <!-- /.contact-contents__text -->
           <?php the_content(); ?>
          </div>
          <!-- /.contact-contents -->
        </div>
        <!-- /.inner -->
        </span>
        <!-- /.bg-grid -->
      </section>
      <!-- /.under-contact -->
    </main>

<?php get_footer(); ?>
