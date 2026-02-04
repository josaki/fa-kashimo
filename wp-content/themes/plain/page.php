<?php get_header(); ?>

<?php
// TEMP
// ==================================================
if( is_page('temp') ) {
  include(TEMPLATEPATH . '/pages/page-temp.php');

// COMPANY
// ==================================================
} elseif( is_page('company') ) {
  include(TEMPLATEPATH . '/pages/page-company.php');

// CONTACT
// ==================================================
} elseif( is_page('contact') ) {
  include(TEMPLATEPATH . '/pages/page-contact.php');

// PRIVACY
// ==================================================
} elseif( is_page('privacy') ) {
  include(TEMPLATEPATH . '/pages/page-privacy.php');

} ?>

<?php get_footer(); ?>