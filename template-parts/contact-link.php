<?php if ( is_home() || is_front_page() ) : ?>
    <section class="contact" id="contact">
<?php else : ?>
    <section class="contact contact02" id="contact">
<?php endif; ?>
    <div class="inner contact-inner">
        <h2 class="contact__title title">CONTACT<span>お問い合わせ</span></h2>
        <!-- /.contact__title -->
        <a href="<?php echo home_url('/contact/'); ?>" class="contact__btn">お問い合わせフォーム</a>
        <!-- /.contact__btn -->
    </div>
    <!-- /.inner -->
</section>
<!-- /.contact -->