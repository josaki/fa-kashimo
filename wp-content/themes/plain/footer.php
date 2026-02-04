<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<footer class="footer">
  <nav class="inner flx flx-btw-stt sect_pdg-sm">
    <div class="info_area">
      <h3 class="logo txt-ctr btm24"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-ver.svg" alt="<?php echo wp_title(); ?>" width="120"></h3>
      <h4 class="ttl txt-ctr btm16"><?php echo C_NAME; ?></h4>
      <p class="zip_add fnt-xs btm8">〒<?php echo ZIP_TXT; ?><br><?php echo ADD_TXT; ?></p>
      <p class="tel_fax fnt-en fnt-xs">TEL.<?php echo TEL_TXT; ?> ／ FAX.<?php echo FAX_TXT; ?></p>
    </div>
    <div class="link_area">

      <h3 class="ttl fnt-sm ls-200 fnt-en btm32 op50">MENU</h3>

      <ul class="fnav_list fnav_list-page flx">
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
              if ( $nav_v['label-en'] ) {
                $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
              }
              $nav_label .= '</span>';

              // a or span 出力
              echo $nav_tag_stt.$nav_label.$current.$nav_tag_end;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="fnav_sub ts">
                  <ul class="snav_list flx flx-col">
                    <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                      <li class="snav_list--item snav_list--item-<?php echo $snav_k; ?>">
                        <?php
                        $snav_tag_class = 'snav_list--item_in flx flx-stt-ctr por';
                        $snav_target = '';
                        $ico_outlink = '';
                        if ( $snav_v['smooth'] ) {
                          $snav_tag_class .= ' smooth';
                          if ( $detail_info['slug'] == $snav_v['belong'] ) {
                            $snav_href = $snav_v['url'];
                          } else {
                            $snav_href = home_url().'/'.$snav_v['belong'].'/'.$snav_v['url'];
                          }
                        } elseif( $snav_v['outlink'] ) {
                          $snav_href = $snav_v['url'];
                          $snav_target = ' target="_blank"';
                          $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                        } else {
                          $snav_href = $snav_v['url'];
                        }
                        if ( $snav_v['other_page'] ) {
                          $snav_tag_stt = '<a href="'.$snav_href.'" class="'.$snav_tag_class.'"'.$snav_target.'>';
                          $snav_tag_end = '</a>';
                        } else {
                          $snav_tag_stt = '<span class="'.$snav_tag_class.'">';
                          $snav_tag_end = '</span>';
                        }
                        $snav_label = '<span class="ttl flx flx-stt-ctr"><span class="txt fnt-sm">'.$snav_v['label'].'</span>'.$ico_outlink.'</span>';
                        // a or span 出力
                        echo $snav_tag_stt.$snav_label.$snav_tag_end;
                        ?>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              <?php endif; ?>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>

      <ul class="fnav_list fnav_list-comp flx">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['footer'] && $nav_v['type'] == 'comp' ): ?>
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
              $nav_img = '';
              if ( $nav_v['img_src'] ) {
                $nav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$nav_v['img_src'].');"></span></span>';
              }

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
              if ( $nav_v['label-en'] ) {
                $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
              }
              $nav_label .= '</span>';

              // a or span 出力
              echo $nav_tag_stt.$nav_img.$nav_label.$current.$nav_tag_end;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="fnav_sub ts">
                  <ul class="snav_list flx flx-col">
                    <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                      <li class="snav_list--item snav_list--item-<?php echo $snav_k; ?>">
                        <?php
                        $snav_tag_class = 'snav_list--item_in flx flx-stt-ctr por';
                        $snav_target = '';
                        $snav_img = '';
                        if ( $snav_v['img_src'] ) {
                          $snav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$snav_v['img_src'].');"></span></span>';
                        }
                        $ico_outlink = '';
                        if ( $snav_v['smooth'] ) {
                          $snav_tag_class .= ' smooth';
                          if ( $detail_info['slug'] == $snav_v['belong'] ) {
                            $snav_href = $snav_v['url'];
                          } else {
                            $snav_href = home_url().'/'.$snav_v['belong'].'/'.$snav_v['url'];
                          }
                        } elseif( $snav_v['outlink'] ) {
                          $snav_href = $snav_v['url'];
                          $snav_target = ' target="_blank"';
                          $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                        } else {
                          $snav_href = $snav_v['url'];
                        }
                        if ( $snav_v['other_page'] ) {
                          $snav_tag_stt = '<a href="'.$snav_href.'" class="'.$snav_tag_class.'"'.$snav_target.'>';
                          $snav_tag_end = '</a>';
                        } else {
                          $snav_tag_stt = '<span class="'.$snav_tag_class.'">';
                          $snav_tag_end = '</span>';
                        }
                        $snav_label = '<span class="ttl flx flx-stt-ctr"><span class="txt fnt-sm">'.$snav_v['label'].'</span>'.$ico_outlink.'</span>';
                        // a or span 出力
                        echo $snav_tag_stt.$snav_img.$snav_label.$snav_tag_end;
                        ?>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              <?php endif; ?>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>

      <ul class="sub_list flx">
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
  <p class="footer--copyright txt-ctr fnt-en"><small>&copy; <?php echo COPY_YEAR.' '.COPY_NAME; ?> All Rights Reserved.</small><span class="recaptcha_txt">This site is protected by reCAPTCHA and <br class="sp-show">the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</span></p>
</footer>

</div>
<!-- /.wrapper -->

<?php
// ページごとの分岐などもして全てのJSをmain_js.phpの中で書く。
include(TEMPLATEPATH . '/js/main_js.php'); ?>

<?php wp_footer(); ?>

</body>
</html>
