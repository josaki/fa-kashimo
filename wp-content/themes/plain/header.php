<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="ja"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="ja"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="ja"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="x-dns-prefetch-control" content="on">
<script>
  if(navigator.userAgent.match(/(iPhone|Android.*Mobile)/)) {
    document.head.insertAdjacentHTML('beforeend', '<meta name="viewport" content="width=device-width,initial-scale=1.0">');
  } else {
    document.head.insertAdjacentHTML('beforeend', '<meta name="viewport" content="width=1480,maximum-scale=2.0,user-scalable=1">');
  };
</script>
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title><?php wp_title(); ?></title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXX-1');
</script>

<?php wp_head(); ?>
<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Shippori+Mincho&display=swap" rel="stylesheet">

<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
<?php if ( is_home() || is_front_page() ): ?>
  <link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/plugin/slick.css'); ?>" rel="stylesheet">
<?php endif; ?>

<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/common.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/main.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/megamenu-'.MEGAMENU_TYPE.'.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/gnav-'.GNAV_TYPE.'.css'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/page_head-'.PAGE_HEAD_TYPE.'.css'); ?>" rel="stylesheet">
<?php if ( is_single() ): ?>
  <link href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/wysiwyg.css'); ?>" rel="stylesheet">
<?php endif ?>
<link rel="stylesheet" media="print" href="<?php echo get_template_directory_uri(); ?>/css/print.css">
<script>
  var agent = window.navigator.userAgent.toLowerCase();
  var ipad = agent.indexOf('ipad') > -1 || agent.indexOf('macintosh') > -1 && 'ontouchend' in document;
  if ( ipad == true ) {
    document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?><?php latest_cache('/css/tablet.css'); ?>">');
  };
</script>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
</head>

<body class="<?php echo $body_class; ?> clr-def bg_ptrn" id="top">

<?php include(TEMPLATEPATH . '/parts/svgs.php'); ?>

<div id="loading" class="flx flx-ctr">
  <div class="layers">
    <div class="layer bg_clr-wht poa-bf"></div>
  </div>
  <div class="loading--cont por">
    <div class="logo">
      <?php /*
      <svg viewBox="<?php echo VB_LOGO; ?>" class="clr-blk" width="160" height="80"><use xlink:href="#logo"></use></svg>
      */ ?>
    </div>
  </div>
</div>

<?php
$header_add_class = ' megamenu-'.MEGAMENU_TYPE;
if ( GNAV_SUB_SLIDE ) {
  $header_add_class .= ' slide_true';
} elseif ( NAV_SUB_ACOD ) {
  $header_add_class .= ' acod_true';
}
?>
<header class="header por poa-bf ts-fast-bf op0-bf<?php echo $header_add_class; ?>">
  <div class="header--in flx flx-btw-ctr ts">
    <h1 class="header--logo ts por"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-hor.svg" alt="<?php echo wp_title(); ?>" width="144"></a></h1>
    <nav class="header--nav flx flx-end-ctr flx-1">

      <?php
      /* ============================================================================

      MEGAMENU

      ============================================================================ */
      ?>
      <ul class="hnav_list smpc-none-flx flx-ctr-stt flx-tab-blc txt-ctr por">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['header'] ): ?>
            <?php
            $nav_add_class = $nav_k;
            if ( $nav_v['sub_nav'] ){
              $nav_add_class .= ' has_sub';
            }
            $current = '<span class="current_layer bg_clr-def ts"></span>';
            if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
              $nav_add_class .= ' current';
            }
            ?>
            <li class="hnav_list--item hnav_list--item-<?php echo $nav_add_class; ?>">
              <?php
              $nav_tag_class = 'hnav_list--item_in flx flx-ctr por hov_area w-b';
              $nav_target = '';

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
              $nav_label = '<span class="label flx flx-col por">';
              $ico_arrow = '';

              // sub_navがある場合矢印アイコンを付与
              if ( $nav_v['sub_nav']  ) {
                $ico_arrow = '<svg viewBox="'.VB_ICO.'" class="svg_ico-arrow clr-def op60" width="12" height="12"><use xlink:href="#ico-arrow"></use></svg>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp flx flx-ctr">'.$nav_v['label-jp'].$ico_arrow.'</span>'.$current;
              }
              $nav_label .= '</span>';

              // a or span 出力
              echo $nav_tag_stt.$nav_label.$nav_tag_end;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="megamenu br-5 poa-bf bg_clr-wht-bf br-3-bf ofh ts">
                  <div class="megamenu--in flx">
                    <div class="megamenu_desc hov_area por">
                      <?php if ( $nav_v['img_src'] ): ?>
                        <div class="img_area ofh por btm16">
                          <?php $img_src_2x = str_replace('.webp','@2x.webp',$nav_v['img_src']); ?>
                          <picture class="img flx ofh br-3">
                            <source srcset="<?php echo $nav_v['img_src']; ?> 1x, <?php echo $img_src_2x; ?> 2x">
                            <img src="<?php echo $nav_v['img_src']; ?>" alt="<?php echo $nav_v['label-jp']; ?>" width="255" height="136" loading="lazy">
                          </picture>
                        </div>
                      <?php endif ?>
                      <div class="txt_area">
                        <h3 class="ttl btm8">
                          <a href="<?php echo $nav_href; ?>" class="flx flx-col flx-stt poa-bf zi1-bf">
                            <?php if ( $nav_v['label-jp'] ): ?>
                              <span class="fnt-jp fnt-serif fnt-xxl"><?php echo $nav_v['label-jp']; ?></span>
                            <?php endif ?>
                            <?php if ( $nav_v['label-en'] ): ?>
                              <span class="fnt-en clr-sub fnt-xxxs"><?php echo $nav_v['label-en']; ?></span>
                            <?php endif ?>
                          </a>
                        </h3>
                        <?php if ( $nav_v['desc'] ): ?>
                          <div class="desc txt-lft fnt-xxs ls-100"><p><?php echo $nav_v['desc']; ?></p></div>
                        <?php endif ?>
                      </div>
                    </div>
                    <ul class="megamenu_list flx flx-1 por">
                      <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                        <?php if ( $snav_k != 'parent' ): ?>
                          <li class="megamenu_list--item snav_list--item-<?php echo $snav_k; ?> br-5 ofh bg_clr-wht">
                            <?php $snav_img_src_2x = str_replace('.webp','@2x.webp',$snav_v['img_src']); ?>
                            <picture class="img flx por ofh">
                              <source srcset="<?php echo $snav_v['img_src']; ?> 1x, <?php echo $snav_img_src_2x; ?> 2x">
                              <img src="<?php echo $snav_v['img_src']; ?>" alt="<?php echo $snav_v['label']; ?>" width="286" height="128" loading="lazy" class="poa ofc">
                            </picture>
                            <div class="txt_area txt-lft">
                              <?php
                              $snav_tag_class = 'flx flx-stt-ctr ls-100 por';
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
                              $snav_label = '<img src="'.get_template_directory_uri().'/images/common/hinoki_leave-0'.random_int(1,3).'.svg" alt="ひのきの葉" width="18" height="18" loading="lazy" class="flx"><span class="txt">'.$snav_v['label'].'</span>'.$ico_outlink;
                              echo '<h3 class="snav_ttl fnt-serif btm6">'.$snav_tag_stt.$snav_label.$snav_tag_end.'</h3>';
                              ?>
                              <ul class="child_list">
                                <?php foreach ($snav_v['child_nav'] as $cnav_k => $cnav_v): ?>
                                  <li class="child_list--item">
                                    <?php
                                    $cnav_tag_class = 'por flx flx-stt-ctr fnt-xxs ls-100';
                                    $cnav_target = '';
                                    $ico_outlink = '';
                                    if ( $cnav_v['smooth'] ) {
                                      $cnav_tag_class .= ' smooth';
                                      if ( $detail_info['slug'] == $cnav_v['belong'] ) {
                                        $cnav_href = $cnav_v['url'];
                                      } else {
                                        $cnav_href = home_url().'/'.$cnav_v['belong'].'/'.$cnav_v['url'];
                                      }
                                    } elseif( $cnav_v['outlink'] ) {
                                      $cnav_href = $cnav_v['url'];
                                      $cnav_target = ' target="_blank"';
                                      $ico_outlink = '<span class="ico ico-outlink hov-bdr_clr-main-bf hov-bdr_clr-main-af"></span>';
                                    } else {
                                      $cnav_href = $cnav_v['url'];
                                    }
                                    if ( $cnav_v['other_page'] ) {
                                      $cnav_tag_stt = '<a href="'.$cnav_href.'" class="'.$cnav_tag_class.'"'.$cnav_target.'>';
                                      $cnav_tag_end = '</a>';
                                    } else {
                                      $cnav_tag_stt = '<span class="'.$cnav_tag_class.'">';
                                      $cnav_tag_end = '</span>';
                                    }
                                    $cnav_label = '<svg viewBox="'.VB_ICO.'" class="flx clr-main" width="8" height="8"><use xlink:href="#ico-arrow"></use></svg><span class="txt">'.$cnav_v['label'].'</span>'.$ico_outlink;
                                    echo '<p class="cnav_ttl">'.$cnav_tag_stt.$cnav_label.$cnav_tag_end.'</p>';
                                    ?>
                                  </li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
                          </li>
                        <?php endif ?>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>

      <?php
      /* ============================================================================

      HEAD_BTN_LIST

      ============================================================================ */
      ?>
      <?php if ( is_array($head_btn_list) ): ?>
        <ul class="head_btn_list head_btn_clm-<?php echo count($head_btn_list); ?> flx">
          <?php foreach ($head_btn_list as $head_btn_k => $head_btn_v): ?>
            <li class="head_btn_list--item head_btn_list--item-<?php echo $head_btn_k; ?>">
              <a href="<?php echo $head_btn_v['url']; ?>" class="head_btn--in flx flx-col flx-ctr<?php if( $head_btn_v['clr'] ){ echo ' clr-'.$head_btn_v['clr']; } if( $head_btn_v['bg_clr'] ){ echo ' bg_clr-'.$head_btn_v['bg_clr']; } ?> ">
                <svg viewBox="<?php echo VB_ICO; ?>" class="clr-<?php echo $head_btn_v['clr']; ?>" width="24" height="24"><use xlink:href="#ico-<?php echo $head_btn_v['ico']; ?>"></use></svg>
                <span class="txts flx flx-col flx-ctr por">
                  <span class="txt lh-10 fnt-en ts"><?php echo $head_btn_v['label-en']; ?></span>
                </span>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

    </nav>
  </div>
</header>

<?php
/* ============================================================================

GNAV_BTN

============================================================================ */
?>
<div class="gnav_btn gnav_btn-<?php echo GNAV_BTN_TYPE; ?> smpc-show-flx flx-ctr bg_clr-def ts ">
  <div class="gnav_btn--in">
    <div class="gnav_btn--lines">
      <span class="bg_clr-wht"></span><span class="bg_clr-wht"></span><span class="bg_clr-wht"></span>
    </div>
    <span class="gnav_btn--txt txt-ctr clr-wht fnt-en por fnt-xs ls-200">
      <span class="open">menu</span>
      <span class="close">close</span>
    </span>
  </div>
</div>

<?php
/* ============================================================================

GNAV

============================================================================ */
?>
<?php
$gnav_add_class = '';
if ( is_array($head_btn_list) && GNAV_TYPE == '01' ) {
  $gnav_add_class .= ' pdg-head_btn';
}
?>
<div class="gnav gnav-<?php echo GNAV_TYPE.$gnav_add_class; ?> por ts">
  <div class="gnav--in ofh por poa-bf bg_clr-wht-bf">
    <div class="gnav--cont ">
      <h3 class="gnav--logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-hor.svg" alt="<?php echo wp_title(); ?>" width="160"></a></h3>
      <ul class="gnav_list flx flx-col gnav_list-page">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['type'] == 'page' ): ?>
            <?php
            $nav_add_class = $nav_k;
            if ( $nav_v['sub_nav'] ){
              $nav_add_class .= ' has_sub';
            }
            $tap_area = '';
            $current = '';
            if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
              $nav_add_class .= ' current';
              $current = '<span class="current_layer bg_clr-def"></span>';
            }
            ?>
            <li class="gnav_list--item gnav_list--item-<?php echo $nav_add_class; ?>">
              <?php
              $nav_tag_class = 'gnav_list--item_in flx flx-col por hov_area';
              $nav_target = '';
              $nav_img = '';
              if ( $nav_v['img_src'] ) {
                $nav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$nav_v['img_src'].');"></span></span>';
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
              $ico_arrow = '<span class="ico ico-arrow ico-arrow-rgt ts op65"></span>';

              // sub_navがある場合矢印アイコンを付与
              if ( $nav_v['sub_nav'] && GNAV_SUB_SLIDE ) {
                $tap_area = '<div class="tap_area tap_area-next poa"></div>';
              }
              if ( $nav_v['label-en'] ) {
                $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
              }
              $nav_label .= '</span>';
              $nav_label .= $ico_arrow;

              $acod_arrow = '';
              if ( $nav_v['sub_nav'] && NAV_SUB_ACOD ) {
                $acod_arrow = '<span class="acod_arrow ts flx flx-ctr"><span class="ico ico-arrow ico-arrow-btm ts op65"></span></span>';
              }

              // a or span 出力
              echo $tap_area.$nav_tag_stt.$nav_img.$nav_label.$current.$nav_tag_end.$acod_arrow;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="gnav_sub ts">
                  <?php if ( GNAV_SUB_SLIDE ): ?>
                    <div class="tap_area tap_area-prev por flx flx-stt-ctr">
                      <span class="ico ico-arrow ico-arrow-lft ts op65"></span>
                      <span class="label flx flx-col"><?php echo $nav_label; ?></span>
                    </div>
                  <?php endif ?>
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
                        if ( !$ico_outlink ) {
                          $ico_outlink = $ico_arrow;
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
      <ul class="gnav_list flx flx-col gnav_list-comp">
        <?php foreach ($nav_list as $nav_k => $nav_v): ?>
          <?php if ( $nav_v['type'] == 'comp' ): ?>
            <?php
            $nav_add_class = $nav_k;
            if ( $nav_v['sub_nav'] ){
              $nav_add_class .= ' has_sub';
            }
            $tap_area = '';
            $current = '';
            if ( is_page() && $detail_info['slug'] == $nav_k || $detail_info['post_type'] == $nav_k || is_front_page() && $nav_k == 'home' ) {
              $nav_add_class .= ' current';
              $current = '<span class="current_layer bg_clr-main"></span>';
            }
            ?>
            <li class="gnav_list--item gnav_list--item-<?php echo $nav_add_class; ?>">
              <?php
              $nav_tag_class = 'gnav_list--item_in flx flx-col por hov_area';
              $nav_target = '';

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
              $ico_arrow = '<span class="ico ico-arrow ico-arrow-rgt ts op65"></span>';

              // sub_navがある場合矢印アイコンを付与
              if ( $nav_v['sub_nav'] && GNAV_SUB_SLIDE ) {
                $tap_area = '<div class="tap_area tap_area-next poa"></div>';
              }
              if ( $nav_v['label-en'] ) {
                $nav_label .= '<span class="txt fnt-en">'.$nav_v['label-en'].'</span>';
              }
              if ( $nav_v['label-jp'] ) {
                $nav_label .= '<span class="txt fnt-jp">'.$nav_v['label-jp'].'</span>';
              }
              $nav_label .= '</span>';
              $nav_label .= $ico_arrow;

              $acod_arrow = '';
              if ( $nav_v['sub_nav'] && NAV_SUB_ACOD ) {
                $acod_arrow = '<span class="acod_arrow ts flx flx-ctr"><span class="ico ico-arrow ico-arrow-btm ts op65"></span></span>';
              }

              // a or span 出力
              echo $tap_area.$nav_tag_stt.$nav_label.$current.$nav_tag_end.$acod_arrow;
              ?>
              <?php
              // sub_navがある場合
              if ( $nav_v['sub_nav'] ): ?>
                <div class="gnav_sub ts">
                  <?php if ( GNAV_SUB_SLIDE ): ?>
                    <div class="tap_area tap_area-prev por flx flx-stt-ctr">
                      <span class="ico ico-arrow ico-arrow-lft ts op65"></span>
                      <span class="label w-b"><?php echo $nav_label; ?></span>
                    </div>
                  <?php endif ?>
                  <ul class="snav_list flx flx-col">
                    <?php foreach ($nav_v['sub_nav'] as $snav_k => $snav_v): ?>
                      <li class="snav_list--item snav_list--item-<?php echo $snav_k; ?>">
                        <?php
                        $snav_tag_class = 'snav_list--item_in flx por';
                        $snav_target = '';
                        $snav_img = '<span class="img_area ofh por"><span class="bg_img poa" style="background-image: url('.$snav_v['img_src'].');"></span></span>';
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
                        if ( !$ico_outlink ) {
                          $ico_outlink = $ico_arrow;
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
      <?php if ( is_array($sns_list) ): ?>
        <div class="sns_area flx flx-stt-ctr">
          <h3 class="fnt-en fnt-xs">Follow us</h3>
          <ul class="sns_list flx flx-ctr">
            <?php foreach ($sns_list as $sns_k => $sns_url): ?>
              <li class="sns_list--item">
                <a href="<?php echo $sns_url; ?>" target="_blank" rel="nofollow" class="flx flx-ctr">
                  <svg viewBox="<?php echo VB_SNS_ICO; ?>" class="clr-def hov-clr-<?php echo $sns_k; ?> op20 hov-op100 ts" width="24" height="24"><use xlink:href="#sns_ico-<?php echo $sns_k; ?>"></use></svg>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif ?>

      <div class="tel_area">
        <p class="tel flx flx-stt-end">
          <a href="tel:<?php echo TEL_LINK; ?>" class="flx flx-stt-ctr">
            <svg viewBox="<?php echo VB_ICO; ?>" class="clr-def" width="36" height="36"><use xlink:href="#ico-tel"></use></svg>
            <span class="fnt-en"><?php echo TEL_TXT; ?></span>
          </a>
          <?php if ( OPEN_CLOSE ): ?>
            <span class="open_close">[ <?php echo OPEN_CLOSE; ?> ]</span>
          <?php endif ?>
        </p>
      </div>

      <?php if ( is_array($head_btn_list) ): ?>
        <ul class="head_btn_list head_btn_clm-<?php echo count($head_btn_list); ?> flx">
          <?php foreach ($head_btn_list as $head_btn_k => $head_btn_v): ?>
            <li class="head_btn_list--item head_btn_list--item-<?php echo $head_btn_k; ?>">
              <a href="<?php echo $head_btn_v['url']; ?>" class="head_btn--in flx flx-ctr<?php if( $head_btn_v['clr'] ){ echo ' clr-'.$head_btn_v['clr']; } if( $head_btn_v['bg_clr'] ){ echo ' bg_clr-'.$head_btn_v['bg_clr']; } ?> ">
                <svg viewBox="<?php echo VB_ICO; ?>" class="clr-<?php echo $head_btn_v['clr']; ?>" width="32" height="32"><use xlink:href="#ico-<?php echo $head_btn_v['ico']; ?>"></use></svg>
                <span class="label flx flx-col por">
                  <span class="txt lh-10 fnt-en ts"><?php echo $head_btn_v['label-en']; ?></span>
                  <span class="txt lh-10 fnt-jp ts"><?php echo $head_btn_v['label-jp']; ?></span>
                </span>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </div>
  </div>
  <div class="gnav_layer poa poa-bf bg_clr-blk-bf op35-bf">
    <span class="bg_img poa"></span>
  </div>
</div>

<div class="wrapper">

<?php if(!is_home()): ?>

  <!-- start page_head -->
  <?php
  if ( is_single() ) {
    $page_ttl_jp = esc_html( get_post_type_object(get_post_type())->label );
  } else {
    $page_ttl_jp = $detail_info['title'];
  }
  if ( is_tax() || is_archive() || is_single() ){
    $page_ttl_en = $detail_info['post_type'];
  } else {
    $page_ttl_en = $detail_info['slug'];
  }
  $page_ttl_en = str_replace(array('-', '_',), ' ', $page_ttl_en);

  // 固定ページで任意入力されている場合の処理
  if ( is_page() ) {
    if ( isset( get_field('page_ttl')['page_ttl-jp'] ) ) {
      $page_ttl_jp_field = get_field('page_ttl')['page_ttl-jp'];
      if ( $page_ttl_jp_field ) {
        $page_ttl_jp = $page_ttl_jp_field;
      }
    }
    if ( isset( get_field('page_ttl')['page_ttl-en'] ) ) {
      $page_ttl_en_field = get_field('page_ttl')['page_ttl-en'];
      if ( $page_ttl_en_field ) {
        $page_ttl_en = $page_ttl_en_field;
      }
    }
  }

  $page_img_flg = true;
  $page_txt_flg = false;
  $breadcrumbs_flg = false;
  $inner_class = '';
  $txt_area_class = '';
  $ttl_jp_class = '';
  $ttl_en_class = '';
  $page_txt_class = '';
  if ( PAGE_HEAD_TYPE == '01' ) {
    $inner_class = ' por inner-lg poa-bf bg_clr-main-bf op05-bf flx-rev';
    $ttl_en_class = ' clr-main';
  } elseif ( PAGE_HEAD_TYPE == '02' ) {
    $inner_class = ' por flx flx-col';
    $txt_area_class = ' flx flx-btw-end flx-xspc-blc bdr_clr-body_lt';
    $page_txt_class = ' flx-1 fnt-xs';
  } elseif ( PAGE_HEAD_TYPE == '03' ) {
    $inner_class = ' por inner-xl';
    $page_ttl_en = '<span>'.$page_ttl_en.'</span><span>'.$page_ttl_en.'</span><span>'.$page_ttl_en.'</span>';
    $page_img_flg = false;
  } elseif ( PAGE_HEAD_TYPE == '04' ) {
    $inner_class = ' por flx flx-col';
    $txt_area_class = ' flx flx-btw-end flx-xspc-blc';
    $page_txt_class = ' flx-1 fnt-xs';
  } elseif ( PAGE_HEAD_TYPE == '05' ) {
    $txt_area_class = ' bg_clr-body tbl-rgt';
    $ttl_en_class = ' clr-main';
    $page_txt_flg = false;
  } elseif ( PAGE_HEAD_TYPE == '06' ) {
    $inner_class = ' inner-sm flx-rev por poa-bf bg_clr-def-bf op05-bf';
    $ttl_en_class = ' clr-main';
    $txt_area_class = ' flx flx-col';
    $page_txt_class = ' fnt-xs';
    $breadcrumbs_flg = true;
  } elseif ( PAGE_HEAD_TYPE == '07' ) {
    $inner_class = ' inner-lg';
    $page_txt_class = ' fnt-xs';
    $txt_area_class = ' clr-wht flx flx-col';
  }
  ?>
  <div class="page_head ofh">
    <div class="inner<?php echo $inner_class; ?>">
      <?php if ( $page_img_flg ): ?>
        <div class="img_area por ofh bg_clr-def">
          <picture class="poa">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $detail_info['slug']; ?>/page_img-<?php echo $detail_info['slug']; ?>.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/<?php echo $detail_info['slug']; ?>/page_img-<?php echo $detail_info['slug']; ?>@2x.jpg 2x" type="image/jpeg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $detail_info['slug']; ?>/page_img-<?php echo $detail_info['slug']; ?>.jpg" alt="<?php echo $page_ttl_jp; ?>" width="422" height="235" loading="lazy" class="ofc poa prlx_bg_img">
          </picture>
        </div>
      <?php endif ?>
      <div class="txt_area<?php echo $txt_area_class; ?>">
        <h2 class="page_ttl flx flx-col">
          <span class="page_ttl-jp<?php echo $ttl_jp_class; ?>"><?php echo $page_ttl_jp; ?></span>
          <span class="page_ttl-en<?php echo $ttl_en_class; ?>"><?php echo $page_ttl_en; ?></span>
        </h2>
        <?php
        $page_txt = get_field('page_txt');
        if ( $page_txt && $page_txt_flg ){
          echo '<p class="page_txt '.$page_txt_class.'">'.$page_txt.'</p>';
        }
        ?>
        <?php
        if ( $breadcrumbs_flg && function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<div id="breadcrumbs" class="fnt-maxs">','</div>' );
        }
        ?>
      </div>
    </div>
  </div>
  <!-- end page_head -->

<?php endif; ?>

