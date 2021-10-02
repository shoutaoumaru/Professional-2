<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NEWS/single｜士業テンプレート</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
  </head>

  <body>
    <div id="main-wrapper" class="animsition news-single">
      <header id="header" class="p-header">
        <div class="logo clip-js3 top">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />
          </a>
        </div>
        <!-- /.logo -->
        <div class="l-menu-sp-button clip-js3 top"><i></i><i></i><i></i></div>
        <!-- /.l-menu-sp-button -->
        <div class="pc-menu">
          <nav class="pc-nav">
            <ul class="pc-nav__list">
              <li class="pc-nav__item">
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a>
              </li>
              <li class="pc-nav__item">
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/business')); ?>"
                  >取り扱い業務</a
                >
              </li>
              <li class="pc-nav__item">
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/business')); ?>"
                  >事務所紹介</a
                >
              </li>
              <li class="pc-nav__item">
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">ニュース</a>
              </li>
              <li class="pc-nav__item">
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>"
                  >採用情報</a
                >
              </li>
            </ul>
          </nav>
        </div>
        <div class="l-action-sp">
          <ul class="l-action-sp__buttons">
            <li class="l-action-sp__button-access">
              <a href="https://goo.gl/maps/zHQuAuFJBFJgpG6fA"
                ><i>取り扱い業務</i></a
              >
            </li>
            <li class="l-action-sp__button-tel">
              <a href="tel:092-686-7954"><i>お問い合わせ</i></a>
            </li>
          </ul>
        </div>
        <!-- /.l-action-sp__buttons -->
      </header>
      <!-- /.p-header -->
      <section class="c-news-sl">
        <div class="c-container">
          <ul class="c-news-sl__list">
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date"><?php echo get_the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p><?php the_content(); ?>
                </p>
              </div>
            </li>
          </ul>
          <div class="c-news-sl__link">
            <a
              class="more-link animsition-link"
              class="animsition"
              href=" <?php echo esc_url( home_url('/news')); ?>"
              ><span class="readmore">一覧へ戻る</span>
            </a>
          </div>
        </div>
      </section>
      <!-- /.news-top -->
      <?php get_template_part('includes/c-footer'); ?>      
      <!-- /.p-footer -->
      <?php get_template_part('includes/c-header'); ?>     
      <!-- /.l-menu-sp -->
    </div>
    <!-- .superwrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/date.js"></script> -->
  </body>
</html>
