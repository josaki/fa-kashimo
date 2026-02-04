$(function(){

  /* kana & zip
  *************************************************** */
    setTimeout(function(){
      $.fn.autoKana('#namae', '#kana', {
        katakana : true
      });
      $('#zip').keyup(function(event){
        AjaxZip3.zip2addr(this,'','add','add');
      })
    },1000);

  /* スマホ時テンキー
  *************************************************** */
    $('#tel').on('focus', function () {
      $(this).attr('inputmode', 'tel');
    });

  /* アルファベット先頭大文字OFF、スペルミス修正OFF
  *************************************************** */
    $('input,textarea').each(function(){
      $(this).attr('autocapitalize', 'off').attr('spellcheck','false');
    });

  /* enterで送信させない
  *************************************************** */
    document.onkeydown = function (event){
      if( event.target.tagName == 'INPUT' && event.keyCode == 13 ){
        return false;
      }
    }

  /* validation check
  *************************************************** */
    const recuired_target = '[aria-required="true"],input[type="radio"],input[type="file"]';
    const header_mgn = $('.header').height() + 32;

    $(recuired_target).each(function (e) {
      $this = $(this);
      $this_id = $this.attr('id');
      $this_type = $this.attr('type');
      $this_required = $this.attr('aria-required');
      $custom = '';
      if ($this_type == 'email' ) {
        $custom += 'custom[email]';
      } else if ($this_type == 'url') {
        $custom += 'custom[url]';
      } else if ($this_type == 'tel') {
        $custom += 'custom[phone]';
      } else if ($this_type == 'file') {
        $this_size = $this.attr('size');
        $custom += 'funcCall[fileSize['+$this_size+']]';
      }
      if ( $this_required || $this_type == 'radio' ) {
        $custom += 'required';
      }
      $this_add_class = 'validate['+$custom+']';
      $(this).addClass($this_add_class);
    });

    window.fileSize = function(field, rules, i, options) {
      max = parseInt(rules[i + 2], 10);
      if (field[0].files.length === 0) {
        return;
      }
      var fileSize = field[0].files[0].size;
      if (fileSize > max * 1024 * 1024) {
        return "ファイルサイズは5MB以下にしてください";
      }
    };
    $("#cf_form form").validationEngine({
      promptPosition: "bottomLeft",
      focusFirstField: false,
      scrollOffset: header_mgn,
      custom_error_messages: {
        "#cf_form form": {
          funcCall: "fileSize",
        }
      }
    });

    window.requireOneChecked = function(field, rules, i, options) {
      var containerId = rules[i + 2];
      var $container = $('#' + containerId);
      if (!$container.length) { return; }
      if ($container.find('input[type="checkbox"]:checked').length === 0) {
        return "少なくとも1つ選択してください";
      }
    };
    $('.wpcf7-checkbox.wpcf7-validates-as-required').each(function(idx){
      var $group = $(this);
      var gid = $group.attr('id');
      if (!gid) {
        gid = 'cf7reqcb-' + (idx + 1);
        $group.attr('id', gid);
      }
      $group.find('input[type="checkbox"]').first()
            .addClass('validate[funcCall[requireOneChecked[' + gid + ']]]');
    });

  /* confirm_area set
  *************************************************** */
    $('.input_area .form_list').clone(true).insertBefore('.confirm_area .cf_form--btns');
    $('.confirm_area .form_list .wpcf7-form-control').each(function(){
      $this_id = $(this).attr('id');
      $(this).after('<span class="confirm_'+$this_id+'"></span>');
      $(this).remove();
    });

  /* confirmエリア クローン
  *************************************************** */
    var val; // 入力内容取得用
    var id; // id取得用 変数
    var radio; // ラジオボタン値取得用 変数
    var check; // チェックボックス値取得用 変数
    var type; // input要素のtype属性値取得用（ラジオボタンであるかどうか判別のため）

    const form_pos = $('#cf_form').offset().top - header_mgn;

    // ラジオ・チェック初期値の取得
    $("[type='checkbox']:checked,[type='radio']:checked").each(function (index) {
      checked = $(this).val();
      id = $(this).parents("[id]").attr("id");
      $(".confirm_" + id).text(checked);
    });

    //入力欄の内容が変わった際の処理　入力した内容が確認画面へ登録される
    $(".input_area input,.input_area select,.input_area textarea").change(function () {
      $this = $(this);
      val = $this.val();
      type = $this.attr("type");
      if (type == "radio") {
        radio = $this.val();
        id = $this.parents("[id]").attr("id");
        $(".confirm_" + id).text(radio);
      }
      else if (type == "checkbox") {
        check = $this.val();
        id = $this.parents("[id]").attr("id");
        var check = $('#'+id+' input:checked').map(function () {
          return $this.val();
        }).get().join(",");
        $(".confirm_" + id).text(check);
      }
      else if (type == "file") {
        id = $this.attr("id");
        var file = $this[0].files[0];
        var file_name = file.name;
        var file_type = file.type;
        $(".confirm_" + id).html('<span class="file_wrap file_wrap-'+file_type+'">'+file_name+'</span>');
      }
      else {
        id = $this.attr("id");
        $(".confirm_" + id).text(val);
        if ( id == 'zip' ) {
          add_val = $('#add').val();
          $(".confirm_add").text(add_val);
        }
      }
    })
    $('#cf_form').addClass('cf_form-input');

    //確認ボタンを押した際の処理　入力画面を非表示・確認画面を表示
    $(document).on('click','.btn-confirm', function () {
      $('.cf_form form').validationEngine('validate');
      if ( !$('.formErrorContent').length ) {
        $('#cf_form').removeClass('cf_form-input cf_form-complete');
        $('#cf_form').addClass('cf_form-confirm');
        $(".input_area").hide();
        $(".confirm_area").show();
        $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
      }
    })

    //戻るボタンを押した際の処理　入力画面を表示・確認画面を非表示
    $(document).on('click','.btn-back', function () {
      $('#cf_form').removeClass('cf_form-confirm cf_form-complete');
      $('#cf_form').addClass('cf_form-input');
      $(".input_area").show();
      $(".confirm_area").hide();
      $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
    })

    //送信ボタンを押した際の処理　サンクス（完了）画面を表示・確認画面を非表示
    $(document).on('click','.btn-send', function () {
      $('#cf_form').removeClass('cf_form-input cf_form-confirm');
      $('#cf_form').addClass('cf_form-complete');
      $(".confirm_area").hide();
      $('.response_load').fadeIn(1000).addClass('is_show');
      setTimeout(function(){
        $(".wpcf7-response-output").fadeIn(1000);
      },3200)
      $('body,html').animate({scrollTop:form_pos}, 400, 'swing');
    })

    // func - radioチェック
    function radio_check() {
      var $checked_radio_count = $('.input_area input[type="radio"]:checked').length;
      var $radio_count = $('.input_area .wpcf7-list-item.first input[type="radio"]').closest('.wpcf7-list-item.first').length;
      if( $checked_radio_count != $radio_count ){
        $radio_check = false;
      } else {
        $radio_check = true;
      }
      return $radio_check;
    }

    // func - 未入力など漏れがある場合は無効化
    function form_disabled() {
      $('#cf_form').removeClass('cf_form-confirm cf_form-complete');
      $('#cf_form').addClass('cf_form-input');
    }

    function varidate_radio_flag() {
      let flag = true;
      $(recuired_target).each(function (e) {
        if ($(recuired_target).eq(e).val() === "") {
          flag = false;
        }
      });
      radio_check();
      if ( !$radio_check ) {
        flag = false;
      }
      if (!flag) {
        form_disabled();
      }
    }

    //必須項目の内容が変わった際の処理
    $(recuired_target).on('keydown keyup keypress change', function () {
      varidate_radio_flag();
    });

    $('input[type="radio"]').change(function(){
      varidate_radio_flag();
    });

  /* optgroup & hr
  *************************************************** */
    var foundin_optgroup = $('option:contains("optgroup-")');
    $.each(foundin_optgroup, function(value) {
      var updated = $(this).val().replace("optgroup-","");
      $(this).nextUntil('option:contains("endoptgroup")')
      .wrapAll('<optgroup label="'+ updated +'"></optgroup');
    });
    $('option:contains("optgroup-")').remove();
    $('option:contains("endoptgroup")').remove();
    var found_hr = $('option:contains("<hr>")');
    if ( found_hr.length ) {
      $.each(found_hr, function(value) {
        var updated = $(this).val().replace("<hr>","");
        var replaced = $(this).replaceWith('<hr>');
      });
    }

  /* 年月日 - 年月に合わせた日時表示
  *************************************************** */
    $(document).on('change','#select-year,#select-month',function(){
      $('#select-day option').show();
      $selected_year = $('#select-year option:selected').val();
      $selected_month = $('#select-month option:selected').val();
      // 2月 - 閏年は28日まで、それ以外は29日まで
      if ( $selected_month == 2 ) {
        $('#select-day option[value="31"]').hide();
        $('#select-day option[value="30"]').hide();
        $('#select-day option[value="29"]').hide();
        if( $selected_year && ( (Math.floor($selected_year%4 == 0)) && (Math.floor($selected_year%100 != 0) ) || ( Math.floor($selected_year%400 == 0) ) ) ){
          $('#select-day option[value="29"]').show();
        }
      }
      // その他 4,6,9,11月は30日まで
      else if ( $selected_month == 4 || $selected_month == 6 || $selected_month == 9 || $selected_month == 11 ) {
        $('#select-day option[value="31"]').hide();
      }
    });

});
