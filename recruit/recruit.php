<?php
 /* Template Name: recruit
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>採用情報 | 士業テンプレート1</title>
    <?php get_header(); ?>
  </head>

  <body>
    <div class="recruit-wrapper animsition">
      <!-- header -->
      <?php get_template_part('includes/c-header'); ?>      
      <!-- /.p-header -->
      <div class="contents-recruit">
        <div class="c-topview">
          <div class="c-topview__inner">
            <div class="c-topview__img">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/top/recruit.jpg" alt="" />
            </div>
          </div>
        </div>
        <section class="recruit-message">
          <div class="c-container">
            <h1 class="recruit-message__title">
              <p class="contents-title">採用情報</p>
              <p class="contents-subtitle">Recruit</p>
            </h1>
            <h2 class="recruit-subtitle">
              司法書士有資格者はもちろんのこと、未経験の方、これから資格取得を目指す方も歓迎いたします。
            </h2>
            <div class="recruit-message__wrap">
              <div class="recruit-message__block">
                <h3 class="recruit-message-subtitle">
                  <p class="c-txt-md">1.経験の有無問わず歓迎します。</p>
                </h3>
                
                <div class="recruit-message-desc">
                  <p class="c-txt-sm">
                    Riv司法書士事務所は、司法書士有資格者、業務経験のある方、資格取得中の方すべて歓迎しております。
                    経験の有無は心配せず、少しでもご興味のある方はお気軽にご応募ください。
                  </p>
                </div>
              </div>
              <div class="recruit-message__block">
                <h3 class="recruit-message-subtitle">
                  <p class="c-txt-md">2.勤務形態を選べます。</p>
                </h3>
                
                <div class="recruit-message-desc">
                  <p class="c-txt-sm">
                    Riv司法書士事務所は、様々な勤務形態をとることができます。<br
                      class="u-view-sp"
                    />ご家庭の事情や体調面などで、残業ができない、勤務形態を変えたいなど、個々の状況に対応いたしますので、面接時にご相談ください。
                  </p>
                </div>
              </div>
              <div class="recruit-message__block">
                <h3 class="recruit-message-subtitle">
                  <p class="c-txt-md">3.研修期間を大切に考えております。</p>
                </h3>
                
                <div class="recruit-message-desc">
                  <p class="c-txt-sm">
                    一人一人がスキルアップできるように、社内研修制度を設けています。
                    <br
                      class="u-view-sp"
                    />業務未経験の方も一から学べますので、どなたでも確実に成長していけます。分からないことはいつでも聞けますので、安心して働けます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.recruit-message -->
        <section class="recruit-detaiil">
          <div class="c-container">
            <section class="recruit-sec">
              <h3 class="recruit-subtitle">募集内容</h3>
              <div class="c-table01 is-top">
                <table>
                  <tbody>
                    <tr>
                      <th>募集資格</th>
                      <td>
                        司法書士の有資格者（未経験者可）
                        <br />
                        司法書士の実務経験者<br />
                        司法書士の業務に興味のある方（未経験者、受験生可）
                      </td>
                    </tr>
                    <tr>
                      <th>雇用形態</th>
                      <td>正社員</td>
                    </tr>
                    <tr>
                      <th>勤務地</th>
                      <td>福岡県福岡市博多区博多駅前3-27-25-9F（出張あり）</td>
                    </tr>
                    <tr>
                      <th>通勤</th>
                      <td>マイカー通勤可能</td>
                    </tr>
                    <tr>
                      <th>勤務時間</th>
                      <td>8：00～17：00</td>
                    </tr>
                    <tr>
                      <th>休日休暇</th>
                      <td>
                        週休2日制（土日）、有給休暇、夏季休暇、年末年始休暇、慶弔休暇<br />
                        <span class="c-note01">※その他都度相談可能</span>
                      </td>
                    </tr>
                    <tr>
                      <th>待遇・福利厚生</th>
                      <td>
                        社会保険完備、制服支給、残業手当、有給休暇、資格取得支援
                      </td>
                    </tr>
                    <tr>
                      <th>応募方法</th>
                      <td>
                        まずはお電話にてご応募ください。<br />追ってこちらから面接日等の詳細をお知らせします。<br />お仕事や職場のことをもっと知りたいという方は、お気軽にお問合せ下さい。<br />面接日・入社日のご相談もお気軽にどうぞ。現在お仕事中の方もぜひご検討下さい。
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </section>
        <!-- /#essentials -->
        <nav class="btn-category appear up inview">
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
      <!-- /.contents-recruit -->
      <!-- /.p-footer -->
      <?php get_footer(); ?>
      <!-- /.l-menu-sp -->
    </div>
    <!-- /.main-contents -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  </body>
</html>
