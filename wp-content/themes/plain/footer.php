<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<footer class="footer">
  <nav class="inner inner-lg flx flx-btw-end sect_pdg-sm">
    <div class="info_area">
      <h3 class="logo btm24"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-hor.svg" alt="<?php echo wp_title(); ?>" width="250"></h3>
      <div class="zipadd_mapbtn flx flx-stt-ctr ls-100 btm16">
        <p class="zip_add fnt-xxs">〒<?php echo ZIP_TXT; ?> <?php echo ADD_TXT; ?></p>
        <div class="mapbtn"><a href="<?php echo MAP_URL; ?>" class="flx flx-ctr fnt-maxs" target="_blank" rel="nofollow">地図を見る</a></div>
      </div>
      <div class="tel btm24">
        <p class="num head3 ls-150 fnt-serif">TEL.<?php echo TEL_TXT; ?></p>
        <p class="txt fnt-sm">受付時間：<?php echo OPEN_CLOSE; ?></p>
      </div>
      <ul class="sns_list flx">
        <li class="sns_list--item sns_list--item-insta">
          <a href="<?php echo INSTA_URL; ?>" target="_blank" rel="nofollow" class="hov_area por">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/sns_ico-insta.svg" alt="Instagram" width="40" height="40" class="flx hov-op0 ts" loading="lazy">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/sns_ico-insta-hov.svg" alt="Instagram" width="40" height="40" class="poa op0 hov-op100 ts" loading="lazy">
          </a>
        </li>
      </ul>

    </div>
    <div class="link_area">

      <ul class="fnav_list flx btm24">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['footer'] && $nav_v['type'] == 'page' ): ?>
            <?php
            $nav_add_class = $nav_k;
            if ( $nav_v['sub_nav'] ){
              $nav_add_class .= ' has_sub';
            }
            $current = '';
            if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
              $nav_add_class .= ' current';
              $current = '<span class="current_layer bg_clr-main"></span>';
            }
            ?>
            <li class="fnav_list--item fnav_list--item-<?php echo $nav_add_class; ?>">
              <?php
              $nav_tag_class = 'fnav_list--item_in flx flx-btw-ctr por hov_area';
              $nav_target = '';

              // 矢印のスタイル指定のため出力数（en/jp）をclassで付与
              if ( $nav_v['sub_nav'] ) {
                if ( $nav_v['label-en'] && $nav_v['label-jp'] ) {
                  $nav_tag_class .= ' output-2';
                } else {
                  $nav_tag_class .= ' output-1';
                }
              }

              // スムーススクロールの場合
              if ( $nav_v['smooth'] ) {
                $nav_tag_class .= ' smooth';
                if ( $detail_info['slug'] == $nav_v['belong'] ) {
                  $nav_href = $nav_v['url'];
                } else {
                  $nav_href = home_url().'/'.$nav_v['belong'].'/'.$nav_v['url'];
                }
              }
              // 別ウィンドウの場合
              elseif( $nav_v['outlink'] ) {
                $nav_href = $nav_v['url'];
                $nav_target = ' target="_blank"';
              }
              // それ以外
              else {
                $nav_href = $nav_v['url'];
              }

              // 別ページの場合（同じウィンドウ）
              if ( $nav_v['other_page'] ) {
                $nav_tag_stt = '<a href="'.$nav_href.'" class="'.$nav_tag_class.'"'.$nav_target.'>';
                $nav_tag_end = '</a>';
              }
              // それ以外
              else {
                $nav_tag_stt = '<span class="'.$nav_tag_class.'">';
                $nav_tag_end = '</span>';
              }
              $nav_label = '<span class="label flx flx-col">';
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
              }
              $nav_label .= '</span>';

              // a or span 出力
              echo $nav_tag_stt.$nav_label.$current.$nav_tag_end;
              ?>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
      <div class="btns flx flx-end btm32">
        <?php
        $args = array(
          'class' => '', 'hov_area' => false,
          'label' => '採用情報',
          'href' => LINK_RECRUIT, 'target' => '',
          'txt_clr' => 'def', 'txt_clr-hov' => 'main',
          'main_clr' => 'main', 'bg_clr-hov' => 'wht',
          'ico' => 'recruit',
        );
        get_template_part('/parts/btn-def', null, $args);
        $args = array(
          'class' => '', 'hov_area' => false,
          'label' => 'お問い合わせ',
          'href' => LINK_CONTACT, 'target' => '',
          'txt_clr' => 'def', 'txt_clr-hov' => 'main',
          'main_clr' => 'main', 'bg_clr-hov' => 'wht',
          'ico' => 'mail',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>

      <ul class="sub_list flx flx-end">
        <?php foreach ($sub_list as $sub_k => $sub_v): ?>
          <?php
          $sub_tag_class = 'sublist--item_in por op65 hov-op100 ts';
          $sub_target = '';
          if ( $sub_v['smooth'] ) {
            $sub_tag_class .= ' smooth';
            if ( $detail_info['slug'] == $sub_v['belong'] ) {
              $sub_href = $sub_v['url'];
            } else {
              $sub_href = home_url().'/'.$sub_v['belong'].'/'.$sub_v['url'];
            }
          } elseif( $sub_v['outlink'] ) {
            $sub_href = $snav_v['url'];
            $sub_target = ' target="_blank"';
          } else {
            $sub_href = $sub_v['url'];
          }
          if ( $sub_v['other_page'] ) {
            $sub_tag_stt = '<a href="'.$sub_href.'" class="'.$sub_tag_class.'"'.$sub_target.'>';
            $sub_tag_end = '</a>';
          } else {
            $sub_tag_stt = '<span class="'.$sub_tag_class.'">';
            $sub_tag_end = '</span>';
          }
          $sub_label = '';
          if ( $sub_v['label'] ) {
            $sub_label .= '<span class="txt fnt-xxs fnt-'.$sub_v['fnt'].'">'.$sub_v['label'].'</span>';
          }
          ?>
          <li class="sub_list--item">
            <?php echo $sub_tag_stt.$sub_label.$sub_tag_end; ?>
          </li>
        <?php endforeach ?>
      </ul>

    </div>
  </nav>
  <p class="footer--copyright txt-ctr bdr_clr-wht bdr-top">
    <span class="fnt-xxs">&copy; <?php echo COPY_YEAR.' '.COPY_NAME; ?> All Rights Reserved.</span>
    <span class="recaptcha_txt fnt-maxs">This site is protected by reCAPTCHA and <br class="sp-show">the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</span>
  </p>
</footer>

</div>
<!-- /.wrapper -->

<?php
// ページごとの分岐などもして全てのJSをmain_js.phpの中で書く。
include(TEMPLATEPATH . '/js/main_js.php'); ?>

<?php wp_footer(); ?>

</body>
</html>
