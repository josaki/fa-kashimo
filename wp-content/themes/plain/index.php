<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<main>

  <!-- start hero -->
  <section class="hero por flx flx-stt-end btm40" id="hero">
    <div class="txt_area clr-wht">
      <h2 class="hero--ttl head1 fnt-serif ls-200 btm56">森を育て、暮らしを支え、<br>次の世代へ。</h2>
      <p class="fnt-xxl ls-200 w-m lh-20">岐阜県中津川市・加子母。<br>この地の山々で育つ「東濃ひのき」とともに、私たちは森林と人の営みを未来へつないでいます。</p>
    </div>
    <ul class="hero_slider poa">
      <li class="hero_slider--item">
        <picture class="img poa ofh">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero_img-01-pc.webp" alt="メインイメージ01" width="1824" height="960" loading="lazy" class="ofc poa ts">
        </picture>
      </li>
      <li class="hero_slider--item">
        <picture class="img poa ofh">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero_img-02-pc.webp" alt="メインイメージ02" width="1824" height="960" loading="lazy" class="ofc poa ts">
        </picture>
      </li>
      <li class="hero_slider--item">
        <picture class="img poa ofh">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero_img-03-pc.webp" alt="メインイメージ03" width="1824" height="960" loading="lazy" class="ofc poa ts">
        </picture>
      </li>
    </ul>
    <div class="scroll_bar">
      <div class="scroll_bar--in flx flx-ctr">
        <a class="txt fnt-en fnt-xxxs ls-250 poa-bf zi1-bf smooth" href="#message"><span>S</span><span>c</span><span>r</span><span>o</span><span>l</span><span>l</span></a>
        <div class="line por ofh poa-bf bg_clr-def-bf op10-bf poa-af bg_clr-def-af op50-af"></div>
      </div>
    </div>
  </section>
  <!-- end hero -->

  <!-- start message -->
  <section class="message por sect_pdg" id="message" data-trigger>
    <div class="message--in tbl-ctr por">
      <h2 class="head1 fnt-serif ls-400 fade-to_top anm_del400">
        <ruby>美林萬世之不滅<rt>びりんばんせいこれをたやさず</rt></ruby>
      </h2>
      <h3 class="head3 fnt-serif ls-400 btm64 fade-to_top anm_del500">― 森を育て、つなぐ</h3>
      <div class="mgn_txts ls-250 lh-21 btm120 fade-to_top anm_del800">
        <p>加子母の山林は、地域面積の約93％。<br>伊勢神宮の式年遷宮をはじめ、<br>日本の歴史ある建築を支えてきた良質な「東濃ひのき」が育つ森です。</p>
        <p>加子母森林組合は<br>「美林萬世之不滅（びりんばんせい これをたやさず）」という理念のもと、<br>森林を育て、守り、活かす仕事を続けてきました。</p>
        <p>森と人が、長く、健やかにつながるために。<br>私たちは今日も山に向き合っています。</p>
      </div>
      <div class="img_area">
        <div class="img img-01 ofh br-10 prlx">
          <picture class="prlx_cont poa">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/message_img-01.webp 1x, <?php echo get_template_directory_uri(); ?>/images/message_img-01@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/message_img-01.webp" alt="加子母の森イメージ" width="280" height="280" loading="lazy" class="poa ofc prlx_obj" data-stt="-12" data-end="12">
          </picture>
        </div>
        <div class="img img-02 ofh br-10 prlx">
          <picture class="prlx_cont poa">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/message_img-02.webp 1x, <?php echo get_template_directory_uri(); ?>/images/message_img-02@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/message_img-02.webp" alt="加子母の森イメージ" width="600" height="400" loading="lazy" class="poa ofc prlx_obj" data-stt="-12" data-end="12">
          </picture>
        </div>
        <picture class="wood_texture prlx">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/wood_texture.webp 1x, <?php echo get_template_directory_uri(); ?>/images/common/wood_texture@2x.webp 2x">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/wood_texture.webp" alt="年輪テクスチャ" width="750" height="702" loading="lazy" class="prlx_obj" data-stt="-8" data-end="8">
        </picture>
      </div>
    </div>
    <div class="sect_line sect_line-btm">
      <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-wht"><use xlink:href="#sect_line-top-01"></use></svg>
      <div class="prlx">
        <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-sub_lt poa prlx_obj" data-stt="24" data-end="-24"><use xlink:href="#sect_line-top-02"></use></svg>
      </div>
    </div>
  </section>
  <!-- end message -->

  <!-- start forestry -->
  <section class="forestry por bg_clr-wht" id="forestry" data-trigger>
    <div class="inner inner-lg sect_pdg">
      <h2 class="page_ttl fnt-serif flx flx-ctr flx-col por btm120">
        <picture class="motif fade-to_top">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/motif-forest.svg" alt="森モチーフ" width="143" height="59" loading="lazy">
        </picture>
        <span class="page_ttl-jp ls-200 fade-to_top anm_del200">山を育てる林業</span>
        <span class="line bg_clr-gry ts del800"></span>
      </h2>
      <div class="forestry--in flx flx-btw-stt" data-gsap data-start="top 90%" data-end="+=300%">
        <div class="scroll_area" data-show="0.2">
          <div class="scroll_area--in por ts">
            <div class="line poa poa-bf bg_clr-def-bf op10-bf">
              <div class="line_fill bg_clr-main op50 poa br10"></div>
            </div>
            <div class="circle bg_clr-main br-10"></div>
          </div>
        </div>
        <div class="side">
          <h3 class="sect_ttl sect_ttl-sm flx flx-col btm40">
            <span class="fnt-en fnt-lg clr-sub ls-300">Kashimo Forestry</span>
            <span class="sect_ttl-jp fnt-serif ls-300">かしもの山づくり</span>
          </h3>
          <ul class="forestry_list">
            <li class="forestry_list--item forestry_list--item-management por ofh" data-step="0" data-group="forestry_side">
              <h4 class="head6 fnt-serif ls-300 flx flx-stt-ctr">
                <span class="hinoki_leave ts-slow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/hinoki_leave-01.svg" alt="森林整備" width="32" height="32"></span>
                <span class="txt">森林整備</span>
              </h4>
              <div class="line bg_clr-main"></div>
            </li>
            <li class="forestry_list--item forestry_list--item-timber_market por ofh" data-step="0.4" data-group="forestry_side">
              <h4 class="head6 fnt-serif ls-300 flx flx-stt-ctr">
                <span class="hinoki_leave ts-slow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/hinoki_leave-02.svg" alt="木材市場" width="32" height="32"></span>
                <span class="txt">木材市場</span>
              </h4>
              <div class="line bg_clr-main"></div>
            </li>
            <li class="forestry_list--item forestry_list--item-support por ofh" data-step="0.7" data-group="forestry_side">
              <h4 class="head6 fnt-serif ls-300 flx flx-stt-ctr">
                <span class="hinoki_leave ts-slow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/hinoki_leave-03.svg" alt="組合員サポート" width="32" height="32"></span>
                  <span class="txt">組合員サポート</span>
                </h4>
                <div class="line bg_clr-main"></div>
            </li>
          </ul>
        </div>
        <div class="line bg_clr-def op80"></div>
        <div class="forestry_blocs por">
          <div class="forestry_bloc forestry_bloc-management" data-step="0" data-group="forestry">
            <div class="forestry_bloc--in ts-fast">
              <div class="img_area por btm72">
                <h4 class="head4 por bg_clr-wht fnt-serif txt-rl ls-200">
                  <span class="txt">森林整備</span>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
                   height="10"><use xlink:href="#round_corner"></use></svg>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
                </h4>
                <picture class="img br-10 ofh">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/forestry_img-management.webp 1x, <?php echo get_template_directory_uri(); ?>/images/forestry_img-management@2x.webp 2x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/forestry_img-management.webp" alt="森林整備" width="980" height="420" loading="lazy">
                </picture>
              </div>
              <div class="txt_area flx flx-btw-end">
                <div class="txts">
                  <h5 class="head5 fnt-serif btm40">森を育て、次につなぐ仕事。</h5>
                  <div class="mgn_txts fnt-sm lh-23">
                    <p>森林所有者から管理を受け、造林や保育、間伐などの森林整備を行っています。<br>林道や作業道の整備を通じて、安全で持続可能な山づくりを支えています。<br>山の立地や特性に応じた整備を行い、森の健全な循環を保っています。</p>
                    <p>経済林や水源林など、森の役割を意識しながら、<br>無理のない、長く続く山づくりを行っています。</p>
                  </div>
                </div>
                <?php
                $args = array(
                  'class' => 'btn-sm', 'hov_area' => false,
                  'label' => '森林組合について',
                  'href' => LINK_ABOUT, 'target' => '',
                  'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                  'main_clr' => 'main', 'bg_clr-hov' => 'body_lt',
                  'ico' => 'arrow',
                );
                get_template_part('/parts/btn-def', null, $args);
                ?>
              </div>
            </div>
          </div><!-- /.management -->
          <div class="forestry_bloc forestry_bloc-timber_market" data-step="0.4" data-group="forestry">
            <div class="forestry_bloc--in ts-fast">
              <div class="img_area por btm72">
                <h4 class="head4 por bg_clr-wht fnt-serif txt-rl ls-200">
                  <span class="txt">木材市場</span>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
                   height="10"><use xlink:href="#round_corner"></use></svg>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
                </h4>
                <picture class="img br-10 ofh">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/forestry_img-timber_market.webp 1x, <?php echo get_template_directory_uri(); ?>/images/forestry_img-timber_market@2x.webp 2x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/forestry_img-timber_market.webp" alt="木材市場" width="980" height="420" loading="lazy">
                </picture>
              </div>
              <div class="txt_area flx flx-btw-end">
                <div class="txts">
                  <h5 class="head5 fnt-serif btm40">森の価値を、正しく伝える仕事。</h5>
                  <div class="mgn_txts fnt-sm lh-23">
                    <p>伐採された木材は集材・選別され、木材市場を通じて各地へ流通します。<br>用途や品質に応じた評価を行い、適正な価格形成を大切にしています。<br>市場運営を通じて、森で育った木の価値を社会へ届けています。</p>
                    <p>市況情報の公開を通して、<br>健全な木材流通と林業経営を支えています。</p>
                  </div>
                </div>
                <?php
                $args = array(
                  'class' => 'btn-sm', 'hov_area' => false,
                  'label' => '木材市況情報を見る',
                  'href' => LINK_TIMBER_MARKET, 'target' => '',
                  'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                  'main_clr' => 'main', 'bg_clr-hov' => 'body_lt',
                  'ico' => 'arrow',
                );
                get_template_part('/parts/btn-def', null, $args);
                ?>
              </div>
            </div>
          </div><!-- /.timber_market -->
          <div class="forestry_bloc forestry_bloc-member" data-step="0.7" data-group="forestry">
            <div class="forestry_bloc--in ts-fast">
              <div class="img_area por btm72">
                <h4 class="head4 por bg_clr-wht fnt-serif txt-rl ls-200">
                  <span class="txt">組合員サポート</span>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
                   height="10"><use xlink:href="#round_corner"></use></svg>
                  <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
                </h4>
                <picture class="img br-10 ofh">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/forestry_img-support.webp 1x, <?php echo get_template_directory_uri(); ?>/images/forestry_img-support@2x.webp 2x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/forestry_img-support.webp" alt="組合員サポート" width="980" height="420" loading="lazy">
                </picture>
              </div>
              <div class="txt_area flx flx-btw-end">
                <div class="txts">
                  <h5 class="head5 fnt-serif btm40">山を持つ人を、支える仕事。</h5>
                  <div class="mgn_txts fnt-sm lh-23">
                    <p>山林の管理や活用、相続に関する悩みは組合員ごとにさまざまです。<br>状況に応じた助言や情報提供を行い、課題解決を支えています。<br>森林経営を一人で抱え込まない体制づくりを大切にしています。</p>
                    <p>加子母森林組合は、<br>組合員のみなさまの身近な相談先として寄り添います。</p>
                  </div>
                </div>
                <?php
                $args = array(
                  'class' => 'btn-sm', 'hov_area' => false,
                  'label' => '組合員のみなさまへ',
                  'href' => LINK_MEMBER, 'target' => '',
                  'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                  'main_clr' => 'main', 'bg_clr-hov' => 'body_lt',
                  'ico' => 'arrow',
                );
                get_template_part('/parts/btn-def', null, $args);
                ?>
              </div>
            </div>
          </div><!-- /.support -->
        </div>
      </div>
    </div>
  </section>
  <!-- end forestry -->

  <!-- start services -->
  <section class="services sect_pdg por" id="services">
    <div class="inner inner-lg sect_pdg-sm pdg_no-btm" data-trigger data-offset="200">
      <h2 class="page_ttl fnt-serif flx flx-ctr flx-col por btm104">
        <picture class="motif fade-to_top">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/motif-wood.svg" alt="木モチーフ" width="140" height="63" loading="lazy">
        </picture>
        <span class="page_ttl-jp ls-200 fade-to_top anm_del200">加子母の木を、もっと身近に</span>
        <span class="line bg_clr-gry ts del800"></span>
      </h2>
    </div>
    <div class="inner btm64" data-trigger data-offset="120">
      <div class="wood_workshop flx flx-btw-ctr flx-rev">
        <div class="img_area">
          <picture class="img ofh br-10 flx fade-to_diagonal del400">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/workshop_img.webp 1x, <?php echo get_template_directory_uri(); ?>/images/workshop_img@2x.webp 2x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/workshop_img.webp" alt="木工所" width="620" height="980" loading="lazy">
          </picture>
        </div>
        <div class="txt_area">
          <h3 class="sect_ttl sect_ttl-sm flx flx-col btm32 fade-to_top">
            <span class="fnt-en fnt-lg clr-sub ls-300">Wood Workshop</span>
            <span class="sect_ttl-jp fnt-serif ls-300">木工所</span>
          </h3>
          <div class="mgn_txts btm40 lh-20 fade-to_top anm_del100">
            <p>加子母の木を使い、用途や使う人に合わせた木製品を製作しています。<br>山と現場をつなぐ、ものづくりの拠点です。</p>
          </div>
          <?php
          $args = array(
            'class' => 'tbl-lft fade-to_top anm_del300', 'hov_area' => false,
            'label' => '木工所について',
            'href' => LINK_WORKSHOP, 'target' => '',
            'txt_clr' => 'def', 'txt_clr-hov' => 'main',
            'main_clr' => 'main', 'bg_clr-hov' => 'wht',
            'ico' => 'arrow',
          );
          get_template_part('/parts/btn-def', null, $args);
          ?>
        </div>
      </div>
    </div>
    <div class="sect_pdg pdg_no-top inner inner-xl bdr-btm bdr_clr-gry" data-trigger data-offset="120">
      <ul class="card_list flx">
        <li class="card_list--item card_list--item-furniture por poa-bf bg_clr-wht-bf flx-1 fade-to_top">
          <div class="img_area">
            <picture class="img ofh br-10 flx">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/workshop_img-furniture.webp 1x, <?php echo get_template_directory_uri(); ?>/images/workshop_img-furniture@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/workshop_img-furniture.webp" alt="オーダーメイド家具" width="510" height="315" loading="lazy">
            </picture>
          </div>
          <div class="txt_area txt-ctr">
            <h4 class="ttl head5 bg_clr-wht por tbl-ctr btm24">
              <span class="txt fnt-serif">オーダーメイド家具</span>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
               height="10"><use xlink:href="#round_corner"></use></svg>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
            </h4>
            <p class="btm32">空間や使い方に合わせ、サイズや素材、<br>仕上げを一つひとつ相談しながら、<br>長く使える家具を製作しています。</p>
            <div class="btns flx flx-ctr">
              <?php
              $args = array(
                'class' => 'btn-sm', 'hov_area' => false,
                'label' => '製作実績を見る',
                'href' => LINK_FURNITURE.'#works', 'target' => '',
                'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                'main_clr' => 'main', 'bg_clr-hov' => 'wht',
                'ico' => 'arrow',
              );
              get_template_part('/parts/btn-def', null, $args);
              ?>
              <?php
              $args = array(
                'class' => 'btn-sm', 'hov_area' => false,
                'label' => 'オーダー家具のご相談',
                'href' => LINK_FURNITURE.'#contact', 'target' => '',
                'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                'main_clr' => 'main', 'bg_clr-hov' => 'wht',
                'ico' => 'arrow',
              );
              get_template_part('/parts/btn-def', null, $args);
              ?>
            </div>
          </div>
        </li>
        <li class="card_list--item card_list--item-school por poa-bf bg_clr-wht-bf flx-1 fade-to_top anm_del100">
          <div class="img_area">
            <picture class="img ofh br-10 flx">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/workshop_img-school.webp 1x, <?php echo get_template_directory_uri(); ?>/images/workshop_img-school@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/workshop_img-school.webp" alt="こども園・学校関係" width="510" height="315" loading="lazy">
            </picture>
          </div>
          <div class="txt_area txt-ctr">
            <h4 class="ttl head5 bg_clr-wht por tbl-ctr btm24">
              <span class="txt fnt-serif">こども園・学校関係</span>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
               height="10"><use xlink:href="#round_corner"></use></svg>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
            </h4>
            <p class="btm32">こども園や学校向けに、<br>机や椅子などの家具を製作しています。<br>木のぬくもりが、日々の学びを支えます。</p>
            <div class="btns flx flx-ctr">
              <?php
              $args = array(
                'class' => 'btn-sm', 'hov_area' => false,
                'label' => '学校・園向け家具について',
                'href' => LINK_SCHOOL, 'target' => '',
                'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                'main_clr' => 'main', 'bg_clr-hov' => 'wht',
                'ico' => 'arrow',
              );
              get_template_part('/parts/btn-def', null, $args);
              ?>
            </div>
          </div>
        </li>
        <li class="card_list--item card_list--item-hiba por poa-bf bg_clr-wht-bf flx-1 fade-to_top anm_del200">
          <div class="img_area">
            <picture class="img ofh br-10 flx">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/workshop_img-hiba.webp 1x, <?php echo get_template_directory_uri(); ?>/images/workshop_img-hiba@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/workshop_img-hiba.webp" alt="檜葉加工事業" width="510" height="315" loading="lazy">
            </picture>
          </div>
          <div class="txt_area txt-ctr">
            <h4 class="ttl head5 bg_clr-wht por tbl-ctr btm24">
              <span class="txt fnt-serif">檜葉加工事業</span>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-01 clr-wht" width="10"
               height="10"><use xlink:href="#round_corner"></use></svg>
              <svg viewBox="<?php echo VB_ROUND_CORNER; ?>" class="rc rc-02 clr-wht" width="10" height="10"><use xlink:href="#round_corner"></use></svg>
            </h4>
            <p class="btm32">伐採後に出る檜葉を活用し、<br>精油などの製品へと加工しています。<br>資源を無駄にしない取り組みです。</p>
            <div class="btns flx flx-ctr">
              <?php
              $args = array(
                'class' => 'btn-sm', 'hov_area' => false,
                'label' => '檜葉加工事業について',
                'href' => LINK_SCHOOL, 'target' => '',
                'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                'main_clr' => 'main', 'bg_clr-hov' => 'wht',
                'ico' => 'arrow',
              );
              get_template_part('/parts/btn-def', null, $args);
              ?>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="mokumoku inner inner-xl sect_pdg bdr-btm bdr_clr-gry por">
      <div class="inner">
        <div class="mokumoku_center flx flx-btw-ctr flx-rev btm88" data-trigger data-offset="120">
          <div class="img_area fade-to_top anm_del400">
            <picture class="main_img tbl-ctr por ofh flx">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/mokumoku_img.webp 1x, <?php echo get_template_directory_uri(); ?>/images/mokumoku_img@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mokumoku_img.webp" alt="モクモクセンター" width="700" height="468" loading="lazy">
            </picture>
            <div class="slider_area ofh bdr br-15 por">
              <div class="slider_wrap">
                <ul class="img_slider flx flx-ctr">
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                  <li class="img ofh br-5">
                    <img src="https://placehold.jp/32/4c5162/ffffff/144x144.png?text=dummy" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="txt_area">
            <h3 class="sect_ttl sect_ttl-sm flx flx-col btm32 fade-to_top">
              <span class="fnt-en fnt-lg clr-sub ls-300">Mokumoku center</span>
              <span class="sect_ttl-jp fnt-serif ls-300">モクモクセンター</span>
            </h3>
            <div class="mgn_txts btm40 lh-20 fade-to_top anm_del100">
              <p>モクモクセンターは、加子母の森から生まれた木を<br>暮らしの道具や製品として紹介している施設です。</p>
              <p>木のキッチン用品や生活雑貨、<br>木のおもちゃ、ひのきの香りを楽しむ製品など、<br>素材の魅力を活かした品々を取り揃えています。</p>
              <p>端材や工作キット、林業道具なども扱い、<br>木に触れ、森を身近に感じられる場となっています。</p>
            </div>
            <?php
            $args = array(
              'class' => 'tbl-lft fade-to_top anm_del300', 'hov_area' => false,
              'label' => 'モクモクセンターについて',
              'href' => LINK_MOKUMOKU, 'target' => '',
              'txt_clr' => 'def', 'txt_clr-hov' => 'main',
              'main_clr' => 'main', 'bg_clr-hov' => 'wht',
              'ico' => 'arrow',
            );
            get_template_part('/parts/btn-def', null, $args);
            ?>
          </div>
        </div><!-- /.mokumoku_center -->
        <div class="experience bg_clr-wht br-10 tbl-ctr fade-to_diagonal" data-trigger>
          <div class="flx flx-btw-ctr">
            <div class="img_area">
              <picture class="img flx ofh br-5">
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/mokumoku_img-experience.webp 1x, <?php echo get_template_directory_uri(); ?>/images/mokumoku_img-experience@2x.webp 2x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mokumoku_img-experience.webp" alt="体験プログラム" width="376" height="252" loading="lazy">
              </picture>
            </div>
            <div class="txt_area">
              <h4 class="head5 fnt-serif ls-250 btm16">体験プログラム</h4>
              <p class="btm16">モクモクセンターでは、<br>加子母の木や自然素材に触れながら、<br>気軽に参加できる体験プログラムを<br>行っています。</p>
              <?php
              $args = array(
                'class' => 'tbl-lft btn-sm', 'hov_area' => false,
                'label' => '体験プログラムを見る',
                'href' => LINK_EXPERIENCE, 'target' => '',
                'txt_clr' => 'def', 'txt_clr-hov' => 'main',
                'main_clr' => 'main', 'bg_clr-hov' => 'wht',
                'ico' => 'arrow',
              );
              get_template_part('/parts/btn-def', null, $args);
              ?>
            </div>
            <div class="ico_area">
              <ul class="ico_list flx btm16">
                <li class="ico_list--item flx flx-col flx-ctr por poa-bf bg_clr-def-bf op05-bf br-5-bf">
                  <svg viewBox="<?php echo VB_ICO; ?>" class="clr-main" width="48" height="48"><use xlink:href="#exp_ico-chop_stick"></use></svg>
                  <h5 class="fnt-xxs w-r ls-50">マイ箸づくり</h5>
                </li>
                <li class="ico_list--item flx flx-col flx-ctr por poa-bf bg_clr-def-bf op05-bf br-5-bf">
                  <svg viewBox="<?php echo VB_ICO; ?>" class="clr-main" width="48" height="48"><use xlink:href="#exp_ico-terrarium"></use></svg>
                  <h5 class="fnt-xxs w-r ls-50">苔テラリウム</h5>
                </li>
                <li class="ico_list--item flx flx-col flx-ctr por poa-bf bg_clr-def-bf op05-bf br-5-bf">
                  <svg viewBox="<?php echo VB_ICO; ?>" class="clr-main" width="48" height="48"><use xlink:href="#exp_ico-pendant"></use></svg>
                  <h5 class="fnt-xxs w-r ls-50">檜のかけらペンダント</h5>
                </li>
                <li class="ico_list--item flx flx-col flx-ctr por poa-bf bg_clr-def-bf op05-bf br-5-bf">
                  <svg viewBox="<?php echo VB_ICO; ?>" class="clr-main" width="48" height="48"><use xlink:href="#exp_ico-fragrance"></use></svg>
                  <h5 class="fnt-xxs w-r ls-50">フレグランスづくり</h5>
                </li>
              </ul>
              <ul class="attn_list flx flx-end">
                <li class="attn_list--item fnt-maxs">お子さまから大人まで参加できます。</li>
              </ul>
            </div>
          </div>
        </div><!-- /.experience -->
      </div><!-- /.inner -->
      <picture class="wood_texture prlx">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/wood_texture.webp 1x, <?php echo get_template_directory_uri(); ?>/images/common/wood_texture@2x.webp 2x">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/wood_texture.webp" alt="年輪テクスチャ" width="750" height="702" loading="lazy" class="prlx_obj" data-stt="-8" data-end="8">
      </picture>
    </div><!-- /.mokumoku -->
    <div class="camp" id="camp" data-trigger data-offset="120">
      <div class="inner inner-lg sect_pdg flx">
        <div class="txt_aera">
          <h2 class="sect_ttl sect_ttl-sm flx flx-col btm32 fade-to_top">
            <span class="fnt-en fnt-lg clr-sub ls-300">Camp & Facilities</span>
            <span class="sect_ttl-jp fnt-serif ls-300">直営キャンプ場</span>
          </h2>
          <div class="mgn_txts btm40 lh-20 fade-to_top anm_del100">
            <p>森林の環境を活かし、<br>自然に親しむ時間を過ごせる施設を<br>運営しています。</p>
          </div>
          <?php
          $args = array(
            'class' => 'tbl-lft fade-to_top anm_del300', 'hov_area' => false,
            'label' => 'キャンプ場について',
            'href' => LINK_CAMP, 'target' => '',
            'txt_clr' => 'def', 'txt_clr-hov' => 'main',
            'main_clr' => 'main', 'bg_clr-hov' => 'wht',
            'ico' => 'arrow',
          );
          get_template_part('/parts/btn-def', null, $args);
          ?>
        </div>
        <ul class="camp_list flx flx-1">
          <li class="camp_list--item camp_list--item-otome por flx flx-stt-end flx-1 ofh br-10 fade-to_diagonal del400">
            <div class="img_area poa">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/camp_img-otome.webp 1x, <?php echo get_template_directory_uri(); ?>/images/camp_img-otome@2x.webp 2x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/camp_img-otome.webp" alt="乙女渓谷キャンプ場" width="538" height="282" loading="lazy" class="poa ofc">
              </picture>
            </div>
            <h3 class="head6 fnt-serif ls-200"><a href="<?php echo LINK_CAMP.'#otome'; ?>" class="poa-bf zi1-bf clr-wht">乙女渓谷キャンプ場</a></h3>
          </li>
          <li class="camp_list--item camp_list--item-butai por flx flx-stt-end flx-1 ofh br-10 fade-to_diagonal del500">
            <div class="img_area poa">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/camp_img-butai.webp 1x, <?php echo get_template_directory_uri(); ?>/images/camp_img-butai@2x.webp 2x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/camp_img-butai.webp" alt="舞台峠コテージ" width="538" height="282" loading="lazy" class="poa ofc">
              </picture>
            </div>
            <h3 class="head6 fnt-serif ls-200"><a href="<?php echo LINK_CAMP.'#butai'; ?>" class="poa-bf zi1-bf clr-wht">舞台峠コテージ</a></h3>
          </li>
        </ul>
      </div>
    </div><!-- /.camp -->
    <div class="sect_line sect_line-top">
      <div class="prlx">
        <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-wht prlx_obj" data-stt="0" data-end="-40"><use xlink:href="#sect_line-btm-02 flip"></use></svg>
      </div>
    </div>
    <div class="sect_line sect_line-btm">
      <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-wht"><use xlink:href="#sect_line-top-02"></use></svg>
      <div class="prlx">
        <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-sub_lt poa flip prlx_obj" data-stt="24" data-end="-24"><use xlink:href="#sect_line-top-02"></use></svg>
      </div>
    </div>
  </section>
  <!-- end services -->

  <!-- start recruit -->
  <section class="recruit por bg_clr-wht" id="recruit" data-trigger data-offset="200" data-loop_on>
    <div class="inner sect_pdg">
      <div class="txt_area">
        <div class="ttl_area por btm64">
          <h2 class="ttl tbl-ctr por fade-to_top">
            <picture class="ttl-clr op0 ts">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-clr.webp 1x, <?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-clr@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-clr.webp" alt="森と向き合い、生きる仕事。" width="175" height="478" loading="lazy">
            </picture>
            <picture class="ttl_clr-no_clr poa ts">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-no_clr.webp 1x, <?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-no_clr@2x.webp 2x">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/recruit_ttl-no_clr.webp" alt="森と向き合い、生きる仕事。" width="175" height="478" loading="lazy" class="poa">
            </picture>
          </h2>
          <div class="bg-marquee" aria-hidden="true">
            <div class="bg-marquee__track clr-sub fnt-en ls-50 op10">
              <span class=" fade-to_top anm_del1200">KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;</span>
              <span class=" fade-to_top anm_del1200">KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;KASHIMO FORESTRY RECRUIT&nbsp;&nbsp;</span>
            </div>
          </div>
        </div>
        <div class="mgn_txts fnt-xl lh-23 txt-ctr btm64 fade-to_top anm_del1200">
          <p>山に入り、木と向き合い、<br>天候や地形と向き合いながら、<br>森の未来を支える仕事があります。</p>
          <p>簡単な仕事ではありません。<br>それでも、自分の手で森を育て、<br>次の世代につながる実感があります。</p>
          <p>未経験から始めたスタッフも活躍しています。<br>加子母の森で、あなたの力を活かしてみませんか。</p>
        </div>
        <?php
        $args = array(
          'class' => 'tbl-ctr fade-to_top anm_del1400', 'hov_area' => false,
          'label' => '採用情報を詳しく見る',
          'href' => LINK_RECRUIT, 'target' => '',
          'txt_clr' => 'def', 'txt_clr-hov' => 'main',
          'main_clr' => 'main', 'bg_clr-hov' => 'body_lt',
          'ico' => 'arrow',
        );
        get_template_part('/parts/btn-def', null, $args);
        ?>
      </div>
    </div>
    <div class="img_area zi1 poa">
      <div class="img br-10 img-rgt ofh ts-slow prlx">
        <picture class="prlx_cont poa">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/recruit_img-rgt.webp 1x, <?php echo get_template_directory_uri(); ?>/images/recruit_img-rgt@2x.webp 2x">
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit_img-rgt.webp" alt="採用情報画像" width="451" height="567" loading="lazy" class="poa ofc prlx_obj" data-stt="-12" data-end="12">
        </picture>
      </div>
      <div class="img br-10 img-lft ofh ts-slow prlx">
        <picture class="prlx_cont poa">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/recruit_img-lft.webp 1x, <?php echo get_template_directory_uri(); ?>/images/recruit_img-lft@2x.webp 2x">
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit_img-lft.webp" alt="採用情報画像" width="451" height="567" loading="lazy" class="poa ofc prlx_obj" data-stt="-12" data-end="12">
        </picture>
      </div>
    </div>
  </section>
  <!-- end recruit -->

  <!-- start insta -->
  <section class="insta por ofh" id="insta" data-trigger>
    <div class="inner inner-xl sect_pdg-sm por">
      <div class="frame por br-10 ofh">
        <iframe src="https://snapwidget.com/embed/1117561" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:2840px; height:378px" loading="lazy"></iframe>
        <div class="account flx flx-col flx-ctr">
          <h2 class="insta_logo btm24"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sns_logo-insta.svg" width="148" height="118" loading="lazy" alt="Instagram"></h2>
          <div class="account_info flx flx-ctr">
            <div class="account_img ofh">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/insta-account_img.webp 1x, <?php echo get_template_directory_uri(); ?>/images/insta-account_img@2x.webp 2x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/insta-account_img.webp" alt="加子母森林組合" width="64" height="64" loading="lazy" class="flx">
              </picture>
            </div>
            <div class="txt_area ls-50 lh-14">
              <h3 class="w-r">加子母森林組合</h3>
              <p><a href="<?php echo INSTA_URL; ?>" class="zi1-bf poa-bf fnt-en fnt-xs" target="_blank" rel="nofollow">@kashimo_shinrin</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg poa poa-bf bg_clr-wht-bf">
      <div class="sect_line sect_line-btm">
        <svg viewBox="<?php echo VB_SECT_LINE; ?>" class="clr-wht"><use xlink:href="#sect_line-btm-02"></use></svg>
      </div>
    </div>
  </section>
  <!-- end insta -->


  <!-- start home_news -->
  <section class="home_news sect_pdg-sm bg_clr-wht" id="home_news">
    <div class="inner">
      <?php
      $news_query = new WP_Query( array(
        'post_type' => 'news',
        'posts_per_page' => 4,
      ));
      ?>
      <h3 class="sect_ttl sect_ttl-sm flx flx-col btm40">
        <span class="fnt-en fnt-lg clr-sub ls-300">News</span>
        <span class="sect_ttl-jp fnt-serif ls-300">お知らせ</span>
      </h3>
      <div class="posts posts-home_news news_list">
        <?php if ($news_query) : ?>
        <?php while ( $news_query->have_posts() ): $news_query->the_post(); ?>
          <?php include(TEMPLATEPATH . '/parts/post-news.php'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else: ?>
          <p class="no_post">現在お知らせはありません。</p>
        <?php endif; ?>
      </div>
      <?php
      $args = array(
        'class' => 'btn-sm tbl-lft', 'hov_area' => false,
        'label' => '一覧を見る',
        'href' => LINK_NEWS, 'target' => '',
        'txt_clr' => 'def', 'txt_clr-hov' => 'main',
        'main_clr' => 'main', 'bg_clr-hov' => 'body_lt',
        'ico' => 'arrow',
      );
      get_template_part('/parts/btn-def', null, $args);
      ?>
    </div>
  </section>
  <!-- end home_news -->


</main>

<?php get_footer(); ?>