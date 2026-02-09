<?php
/* ##############################################################################

    全ページ共通の情報を変数化（使用しない場合はコメントアウトすること）

############################################################################## */

  /* C情報
  *************************************************** */
    const C_NAME = '加子母森林組合';
    const COPY_NAME = '加子母森林組合';
    const COPY_YEAR = '2026';
    const CEO_NAME = '★代表名★';
    const OPEN_CLOSE = '8:00 - 17:00';
    const HOLIDAY = '★休業日★';

  /* Tel
  *************************************************** */
    const TEL_TXT = '0573-79-3333';
    const TEL_LINK = '0573793333';
    const FAX_TXT = '111-1111-1111';

  /* 住所
  *************************************************** */
    const ZIP_TXT = '〒508-0421';
    const ADD_TXT = '岐阜県中津川市加子母4872-5';

  /* 共通パーツ設定
  *************************************************** */
    const MEGAMENU_TYPE  = 'custom'; // 01 - 04
    const GNAV_BTN_TYPE  = 'ver'; // ver（縦） OR hor（横）
    const GNAV_TYPE      = '05'; // 01 - 07
    const PAGE_HEAD_TYPE = '03'; // 01 - 07
    const GNAV_SUB_SLIDE = true; // true（有効） OR false（無効）
    const NAV_SUB_ACOD   = false; // true（有効） OR false（無効）

  /* SNS（あれば記述）
  *************************************************** */
    const LINE_URL = ''; // LINE URL
    const INSTA_URL = 'https://www.instagram.com/kashimo_shinrin/'; // Instagram URL
    const MAP_URL = 'https://maps.app.goo.gl/53aEFaJcv47cQwuJA'; // MAP URL
    const YT_URL = ''; // Youtube URL
    const X_URL = ''; // X URL
    const TIKTOK_URL = ''; // TIKTOK URL
    const PIN_URL = ''; // Pinterest URL
    const FB_URL = ''; // Facebook URL

  /* ページリンク
  *************************************************** */
    if ( !defined('LINK_HOME') ) {
      define('LINK_HOME', home_url());
    }
    if ( !defined('LINK_ABOUT') ) {
      define('LINK_ABOUT', home_url('/about'));
    }
    if ( !defined('LINK_MEMBER') ) {
      define('LINK_MEMBER', home_url('/member'));
    }
    if ( !defined('LINK_MOKUMOKU') ) {
      define('LINK_MOKUMOKU', home_url('/mokumoku'));
    }
      if ( !defined('LINK_EXPERIENCE') ) {
        define('LINK_EXPERIENCE', home_url('/mokumoku/experience'));
      }
    if ( !defined('LINK_WORKSHOP') ) {
      define('LINK_WORKSHOP', home_url('/workshop'));
    }
      if ( !defined('LINK_FURNITURE') ) {
        define('LINK_FURNITURE', home_url('/workshop/furniture'));
      }
      if ( !defined('LINK_SCHOOL') ) {
        define('LINK_SCHOOL', home_url('/workshop/school'));
      }
      if ( !defined('LINK_HIBA') ) {
        define('LINK_HIBA', home_url('/workshop/hiba'));
      }
    if ( !defined('LINK_TIMBER_MARKET') ) {
      define('LINK_TIMBER_MARKET', home_url('/timber-market'));
    }
    if ( !defined('LINK_CAMP') ) {
      define('LINK_CAMP', home_url('/camp'));
    }
    if ( !defined('LINK_RECRUIT') ) {
      define('LINK_RECRUIT', home_url('/recruit'));
    }
    if ( !defined('LINK_BLOG') ) {
      define('LINK_BLOG', home_url('/blog'));
    }
    if ( !defined('LINK_NEWS') ) {
      define('LINK_NEWS', home_url('/news'));
    }
    if ( !defined('LINK_CONTACT') ) {
      define('LINK_CONTACT', home_url('/contact'));
    }
    if ( !defined('LINK_PRIVACY') ) {
      define('LINK_PRIVACY', home_url('/privacy'));
    }