<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>取り扱い業務 | 士業テンプレート1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
  </head>

  <body>
    <div class="first-wrapper animsition">
      <header id="header" class="p-header">
        <div class="logo clip-js3 top">
          <a class="animsition-link" href="/">
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
                <a class="animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"
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
      <div class="first-contents">
        <div id="c-topview" class="c-topview">
          <div class="c-topview__inner">
            <div class="c-topview__img">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/service/values.jpg" alt="" />
            </div>
          </div>
        </div>
        <!-- /.c-topview -->
        <div class="fs-message">
          <div class="c-container appear up">
            <h2 class="c-head01 item">
              <span>BUSINESS</span>
              <p>取り扱い業務</p>
            </h2>
            <div class="fa-text item">
              <p class="c-txt-sm">
                Riv司法書士事務所は高い専門知識とサポート力で、
                ご満足頂けるサービスをお約束します。
              </p>
            </div>
          </div>
        </div>
        <!-- /.fs-message -->
        <div class="fs-promise">
          <div class="fs-promise__inner">
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-1.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>1</i>
                  <span>不動産登記</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    不動産登記とはお客様の大切な財産である土地・建物に対して、所在・面積の他、所有者の住所・氏名等を公の登記簿に記載して、その権利をお守りすることです。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-2.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>2</i>
                  <span>商業登記</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    商業登記とは、会社法人等に関する取引上重要な一定の情報（商号・本店所在・資本金・目的・代表者の氏名等）を法務局に記録し、公開することにより会社の信用維持を図ると共に取引の安全と円滑を図る制度です。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>3</i>
                  <span>相続</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    相続が発生すると、様々な手続きが必要となります。弊所では、相続放棄の手続や遺産分割協議書の作成など、相続に係る手続をお受けしております。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-4.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>4</i>
                  <span>贈与</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    不動産を生前贈与したい時は、法律に則った手続をしなければなりません。
                    例えば親が持っている土地を子供に贈与税のかからない範囲で生前に贈与したいなど、よくご相談をいただくことがあります。
                    弊所では贈与にかかる相談から、遺言による贈与、贈与証書作成、申請書作成、登記申請までお受けしております。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-5.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>5</i>
                  <span>債権譲渡登記</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    債権譲渡登記とは、煩雑になりがちな債権譲渡手続きを負担が少なく簡便に行う方法として作られた登記制度です。
                    債権譲渡登記を利用することにより、簡単に債権譲渡の対抗要件（第三者に自分が担保権者だと主張するための要件）を備えることができるようになります。
                    それにより、不動産を保有しない企業でも自己が保有している売掛金等の債権を担保として提供することで、金融機関から融資を受けられる機会が広がります。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-6.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>6</i>
                  <span>信託登記</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    信託とは、委託者の財産を受託者に移転し、その受託者が目的の範囲内でその信託財産を管理・運用し、そこから発生する利益を委託者または第三者に帰属させるものです。
                    弊所では信託関係登記業務全般（信託設定・信託受益権売買・信託財産処分による移転等）を取り扱っております。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-7.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>7</i>
                  <span>契約書作成</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    契約書の作成・公正証書の作成・内容証明の作成・その他相談業務や、各種変更届申請、また供託手続その他債権譲渡登記まで幅広く取り扱っています。
                  </p>
                </div>
              </div>
            </div>
            <div class="fs-promise__block appear up">
              <div class="fs-promise__img cover-slide">
                <img
                  class="img-zoom"
                  src="<?php echo get_template_directory_uri(); ?>/images/service/service-8.jpg"
                  alt=""
                />
              </div>
              <div class="fs-promise__desc item">
                <h3 class="num-tit">
                  <i>8</i>
                  <span>その他の法務</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    成年後見申立や裁判所への提出書類作成業務、その他法律相談や企業への出張研修など幅広くお取扱いしております。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.fs-promise -->
        <nav class="btn-category appear up">
          <ul class="item">
            <li>
              <a href=" <?php echo esc_url( home_url('/business')); ?>"
                ><span class="btn-category__first"></span><i>取り扱い業務</i></a
              >
            </li>
            <li>
              <a href=" <?php echo esc_url( home_url('/company')); ?>"
                ><span class="btn-category__care"></span><i>事務所紹介</i></a
              >
            </li>
            <li>
              <a href=" <?php echo esc_url( home_url('/recruit')); ?>"
                ><span class="btn-category__staff"></span><i>採用情報</i></a
              >
            </li>
            <li class="u-hidden-pc">
              <a href=" <?php echo esc_url( home_url('/news')); ?>"
                ><span class="btn-category__faq"></span><i>ニュース</i></a
              >
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.first-contents -->
      <?php get_template_part('includes/c-footer'); ?>      
      <!-- /.p-footer -->
      <?php get_template_part('includes/c-header'); ?>     
      <!-- /.l-menu-sp -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/date.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
  </body>
</html>
