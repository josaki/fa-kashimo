<?php
/* ##############################################################################

    全ページ共通の情報を変数化（使用しない場合はコメントアウトすること）

############################################################################## */

  /* C情報
  *************************************************** */
    const C_NAME = '★会社名★';
    const COPY_NAME = '★CLIENT NAME★';
    const COPY_YEAR = '★COPY YEAR★';
    const CEO_NAME = '★代表名★';
    const OPEN_CLOSE = '★営業時間★';
    const HOLIDAY = '★休業日★';

  /* Tel
  *************************************************** */
    const TEL_TXT = '000-0000-0000';
    const TEL_LINK = '00000000000';
    const FAX_TXT = '111-1111-1111';

  /* 住所
  *************************************************** */
    const ZIP_TXT = '★郵便番号★';
    const ADD_TXT = '★住所を入力してください★';

  /* 共通パーツ設定
  *************************************************** */
    const MEGAMENU_TYPE  = '01'; // 01 - 04
    const GNAV_BTN_TYPE  = 'ver'; // ver（縦） OR hor（横）
    const GNAV_TYPE      = '01'; // 01 - 07
    const PAGE_HEAD_TYPE = '03'; // 01 - 07
    const GNAV_SUB_SLIDE = true; // true（有効） OR false（無効）
    const NAV_SUB_ACOD   = false; // true（有効） OR false（無効）

  /* SNS（あれば記述）
  *************************************************** */
    const LINE_URL = '★LINE URL★'; // LINE URL
    const INSTA_URL = '★INSTA URL★'; // Instagram URL
    const YT_URL = '★Youtube URL★'; // Youtube URL
    const X_URL = ''; // X URL
    const TIKTOK_URL = ''; // TIKTOK URL
    const PIN_URL = ''; // Pinterest URL
    const FB_URL = ''; // Facebook URL

  /* ページリンク
  *************************************************** */
    if ( !defined('LINK_HOME') ) {
      define('LINK_HOME', home_url());
    }
    if ( !defined('LINK_COMPANY') ) {
      define('LINK_COMPANY', home_url('/company'));
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