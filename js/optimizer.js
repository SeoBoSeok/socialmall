$(document).ready(function() {
  var filter = "win16|win32|win64|mac|macintel";
  var device = "pc";
  if (navigator.platform) {
      if (filter.indexOf(navigator.platform.toLowerCase()) < 0) { device = "mobile"; }
  }

  /**
   * 상품상세, 상품 확대보기(팝업) - 소비자가 할인표시 */
  var oPriceInfoEl = $('#ec-product-price-info');
  if (oPriceInfoEl.length > 0) {
      var salePriceEl = $('#span_product_price_text');
      percentageCul(oPriceInfoEl, salePriceEl);
  }    

  /**
  * 상품목록/메인진열 - 소비자가 할인표시*/
  var mainEl = $(".main") + $(".layout");
  if (mainEl.length > 0) {
    var productListEl = $('.xans-product-listmain, .xans-product-listrecommend, .xans-product-listnew, .xans-product-listnormal');
      for (var i = 0; i < productListEl.length; i++) {
          var prdListEl = productListEl.eq(i).find('.prdList > li');
          for (var j = 0; j < prdListEl.length; j++) {
              var priceEl = prdListEl.eq(j).find('.prdInfo'),
                  salePriceEl = priceEl.find('.xans-product > li').eq(1).find('span:eq(1)');

              if (device == "mobile") {
                  salePriceEl = priceEl.find('.prd_spec >li.price');
              }                percentageCul(priceEl, salePriceEl);
          }
      }
  }

  function percentageCul(target, salePriceEl) {
      var iCustomPrice = parseInt(target.attr('ec-data-custom')),
          iPrice = parseInt(target.attr('ec-data-price')),
    prdImg = prdListEl.eq(j).find('.prdImg'),
          sDisplayAmount = 'p', // p:할인율, w:할인금액
          iOfftoFixed = 0, // 할인율 소수점자릿수
          sSaleText = '',
          regexp = /\B(?=(\d{3})+(?!\d))/g;

      if (iCustomPrice > 0 && iPrice > 0 && iPrice != iCustomPrice) {
          if (sDisplayAmount == 'p') {
              sSaleText = (((iCustomPrice - iPrice) / iCustomPrice) * 100).toFixed(iOfftoFixed) + '<span>%</span>';
          } else if (sDisplayAmount == 'w') {
              sSaleText = parseInt(iCustomPrice - iPrice).toString().replace(regexp, ',') + '원';
          }
          prdImg.prepend('<div class="ic_sale mov03"> ' + sSaleText + '</div>');
      }
  }
});
/* 네비게이션 */
$(function() {
$('.menu_btn').click(function() {
  if (!$('.btn_wrapper').hasClass('clicked')) {
    $('.btn_wrapper').addClass('clicked');
    $('.nav').addClass('opened');
    $('.nav .right').addClass('opened');
    $('.nav_cover').stop(true).fadeIn(200);
  } else {
    $('.btn_wrapper').removeClass('clicked');
    $('.nav').removeClass('opened');
    $('.nav .right').removeClass('opened');
    $('.nav_cover').stop(true).fadeOut(200);
  }
});
$('.nav_cover').click(function() {
  $('.btn_wrapper').removeClass('clicked');
  $('.nav').removeClass('opened');
  $('.nav .right').removeClass('opened');
  $('.nav_cover').stop(true).fadeOut(200);
});
});


/* 검색 */
$('.btn_sch').click(function() {
$('.schArea').stop().fadeToggle(100);
});
$('.sch_close').click(function() {
$('.schArea').stop().fadeToggle(100);
});
$('.sch_cover').click(function() {
$('.schArea').stop().fadeToggle(100);
});


/* 서랍기능 */
$('#menu .arr').live("click", function(e){

//$('#menu .d2Box').slideUp('normal');

if($(this).parent().hasClass("d1")) {
  $('#menu .d2Box').slideUp(200);
    $('#menu .d1 .open').removeClass('open-selected');
      $('#menu .d1').removeClass('open-li');
}else if($(this).parent().hasClass("d2")) {
  $('#menu .d3Box').slideUp(200);	
    $('#menu .d2 .open').removeClass('open-selected');
      $('#menu .d2').removeClass('open-li');
}else if($(this).parent().hasClass("d3")) {
  $('#menu .d4Box').slideUp(200);
    $('#menu .d3 .open').removeClass('open-selected');
      $('#menu .d3').removeClass('open-li');
}

if($(this).siblings('.open').next().is(':hidden') == true) {
  $(this).siblings('.open').addClass('open-selected');
      $(this).parent('li').addClass('open-li');
  $(this).siblings('.open').next().slideDown(200);
 } 

});


/* 카테고리 끌어오기 */
$(document).ready(function(){

  var $d1_wrap = $('.d1Box');
  var $d1_list = $d1_wrap.find('.d1');
  var len = $d1_list.length;

  $.ajax({
      url : '/exec/front/Product/SubCategory',
      dataType: 'json',
      success: function(aData) {
          if (aData == null || aData == 'undefined') {
              return;
          }
          $.each(aData, function(index, key) {
              var $d1 = $d1_wrap.find('.d1[data-param$="=' + key.parent_cate_no + '"]');
              var $d2 = $d1_wrap.find('.d2[data-param$="=' + key.parent_cate_no + '"]');
              var $d3 = $d1_wrap.find('.d3[data-param$="=' + key.parent_cate_no + '"]');
              if ($d1.length > 0) {
                  var _index = $d1_list.index($d1);

                  if ($d1.hasClass('pre') === false) {
                      $d1.addClass('pre');
                      $d1.append('<ul class="d2Box"></ul>');
                  }
                  $d1.find('.d2Box').append('<li class="d2" data-param="'+key.param+'"><a href="/product/list.html'+key.param+'">'+key.name+'</a></li>');
                  return;
              }                
              if ($d2.length > 0) {
                  if ($d2.hasClass('pre') === false) {
                      $d2.addClass('pre');
                      $d2.append('<ul class="d3Box"></ul>');
          
                  }

                  $d2.find('.d3Box').append('<li class="d3" data-param="'+key.param+'"><a href="/product/list.html'+key.param+'">'+key.name+'</a></li>');
                  return;
              }
              if ($d3.length > 0) {
                  if ($d3.hasClass('pre') === false) {
                      $d3.addClass('pre');
                      $d3.append('<ul class="d4Box"></ul>');
          
                  }

                  $d3.find('.d4Box').append('<li class="d4" data-param="'+key.param+'"><a href="/product/list.html'+key.param+'">'+key.name+'</a></li>');
                  return;
              }				
          }); 
          /*2020-03-16 수정*/
    $("div#menu .pre").each(function(k,v) { 
      $(this).children("a").addClass("open").parent('li').append("<a class='arr'><i class='fas fa-chevron-down'></i><i class='fas fa-chevron-up'></i></a>");
    });
          //setCategory();

      }
  });

});


/*스크롤 배경*/



$(window).scroll(function(){	

if($(document).scrollTop() > 450) {
  $('.btnTop').fadeIn(200);
} else {
  $('.btnTop').fadeOut(200);
}
return;

});

$(function() {

$('.gototop .top').click(function() {
  $('html, body').animate({scrollTop:0}, 'slow');
  return false;
});
$('.gototop .bottom').click(function() {
  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
  return false;
});

});
/**
* 움직이는 배너 Jquery Plug-in
* @author  cafe24
*/

(function($){

  $.fn.floatBanner = function(options) {
      options = $.extend({}, $.fn.floatBanner.defaults , options);

      return this.each(function() {
          var aPosition = $(this).position();
          var jbOffset = $(this).offset();
          var node = this;

          $(window).scroll(function() {
              var _top = $(document).scrollTop();
              _top = (aPosition.top < _top) ? _top : aPosition.top;

              setTimeout(function () {
                  var newinit = $(document).scrollTop();

                  if ( newinit > jbOffset.top ) {
                      _top -= jbOffset.top;
                      var container_height = $("#wrap").height();
                      var quick_height = $(node).height();
                      var cul = container_height - quick_height;
                      if(_top > cul){
                          _top = cul;
                      }
                  }else {
                      _top = 0;
                  }

                  $(node).stop().animate({top: _top}, options.animate);
              }, options.delay);
          });
      });
  };

  $.fn.floatBanner.defaults = {
      'animate'  : 500,
      'delay'    : 500
  };

})(jQuery);

/**
* 문서 구동후 시작
*/
$(document).ready(function(){
  $('#banner:visible, #quick:visible').floatBanner();

  //placeholder
  $(".ePlaceholder input, .ePlaceholder textarea").each(function(i){
      var placeholderName = $(this).parents().attr('title');
      $(this).attr("placeholder", placeholderName);
  });
  /* placeholder ie8, ie9 */
  $.fn.extend({
      placeholder : function() {
          //IE 8 버전에는 hasPlaceholderSupport() 값이 false를 리턴
         if (hasPlaceholderSupport() === true) {
              return this;
          }
          //hasPlaceholderSupport() 값이 false 일 경우 아래 코드를 실행
          return this.each(function(){
              var findThis = $(this);
              var sPlaceholder = findThis.attr('placeholder');
              if ( ! sPlaceholder) {
                 return;
              }
              findThis.wrap('<label class="ePlaceholder" />');
              var sDisplayPlaceHolder = $(this).val() ? ' style="display:none;"' : '';
              findThis.before('<span' + sDisplayPlaceHolder + '>' + sPlaceholder + '</span>');
              this.onpropertychange = function(e){
                  e = event || e;
                  if (e.propertyName == 'value') {
                      $(this).trigger('focusout');
                  }
              };
              //공통 class
              var agent = navigator.userAgent.toLowerCase();
              if (agent.indexOf("msie") != -1) {
                  $(".ePlaceholder").css({"position":"relative"});
                  $(".ePlaceholder span").css({"position":"absolute", "padding":"0 4px", "color":"#878787"});
                  $(".ePlaceholder label").css({"padding":"0"});
              }
          });
      }
  });

  $(':input[placeholder]').placeholder(); //placeholder() 함수를 호출

  //클릭하면 placeholder 숨김
  $('body').delegate('.ePlaceholder span', 'click', function(){
      $(this).hide();
  });

  //input창 포커스 인 일때 placeholder 숨김
  $('body').delegate('.ePlaceholder :input', 'focusin', function(){
      $(this).prev('span').hide();
  });

  //input창 포커스 아웃 일때 value 가 true 이면 숨김, false 이면 보여짐
  $('body').delegate('.ePlaceholder :input', 'focusout', function(){
      if (this.value) {
          $(this).prev('span').hide();
      } else {
          $(this).prev('span').show();
      }
  });

  //input에 placeholder가 지원이 되면 true를 안되면 false를 리턴값으로 던져줌
  function hasPlaceholderSupport() {
      if ('placeholder' in document.createElement('input')) {
          return true;
      } else {
          return false;
      }
  }
});

/**
*  썸네일 이미지 엑박일경우 기본값 설정
*/
$(window).load(function() {
  $("img.thumb,img.ThumbImage,img.BigImage").each(function($i,$item){
      var $img = new Image();
      $img.onerror = function () {
              $item.src="//img.echosting.cafe24.com/thumb/img_product_big.gif";
      }
      $img.src = this.src;
  });
});

/**
*  tooltip
*/
$('.eTooltip').each(function(i){
  $(this).find('.btnClose').attr('tabIndex','-1');
});
//tooltip input focus
$('.eTooltip').find('input').focus(function() {
  var targetName = returnTagetName(this);
  targetName.siblings('.ec-base-tooltip').show();
});
$('.eTooltip').find('input').focusout(function() {
  var targetName = returnTagetName(this);
  targetName.siblings('.ec-base-tooltip').hide();
});
function returnTagetName(_this){
  var ePlacename = $(_this).parent().attr("class");
  var targetName;
  if(ePlacename == "ePlaceholder"){ //ePlaceholder 대응
      targetName = $(_this).parents();
  }else{
      targetName = $(_this);
  }
  return targetName;
}

/**
*  eTab
*/
$("body").delegate(".eTab a", "click", function(e){
  // 클릭한 li 에 selected 클래스 추가, 기존 li에 있는 selected 클래스는 삭제.
  var _li = $(this).parent("li").addClass("selected").siblings().removeClass("selected"),
  _target = $(this).attr("href"),
  _siblings = $(_target).attr("class"),
  _arr = _siblings.split(" "),
  _classSiblings = "."+_arr[0];

  //클릭한 탭에 해당하는 요소는 활성화, 기존 요소는 비활성화 함.
  $(_target).show().siblings(_classSiblings).hide();


  //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
  e.preventDefault();
});

//window popup script
function winPop(url) {
  window.open(url, "popup", "width=300,height=300,left=10,top=10,resizable=no,scrollbars=no");
}
/**
* document.location.href split
* return array Param
*/
function getQueryString(sKey)
{
  var sQueryString = document.location.search.substring(1);
  var aParam       = {};

  if (sQueryString) {
      var aFields = sQueryString.split("&");
      var aField  = [];
      for (var i=0; i<aFields.length; i++) {
          aField = aFields[i].split('=');
          aParam[aField[0]] = aField[1];
      }
  }

  aParam.page = aParam.page ? aParam.page : 1;
  return sKey ? aParam[sKey] : aParam;
};

$(document).ready(function(){
  // tab
  $.eTab = function(ul){
      $(ul).find('a').click(function(){
          var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
              _target = $(this).attr('href'),
              _siblings = '.' + $(_target).attr('class');
          $(_target).show().siblings(_siblings).hide();
          return false
      });
  }
  if ( window.call_eTab ) {
      call_eTab();
  };

});
(function($){
$.fn.extend({
  center: function() {
      this.each(function() {
          var
              $this = $(this),
              $w = $(window);
          $this.css({
              position: "absolute",
              top: ~~(($w.height() - $this.outerHeight()) / 2) + $w.scrollTop() + "px",
              left: ~~(($w.width() - $this.outerWidth()) / 2) + $w.scrollLeft() + "px"
          });
      });
      return this;
  }
});
$(function() {
  var $container = function(){/*
<div id="modalContainer">
  <iframe id="modalContent" scroll="0" scrolling="no" frameBorder="0"></iframe>
</div>');
*/}.toString().slice(14,-3);
  $('body')
  .append($('<div id="modalBackpanel"></div>'))
  .append($($container));
  function closeModal () {
      $('#modalContainer').hide();
      $('#modalBackpanel').hide();
  }
  $('#modalBackpanel').click(closeModal);
  zoom = function ($piProductNo, $piCategoryNo, $piDisplayGroup) {
      var $url = '/product/image_zoom.html?product_no=' + $piProductNo + '&cate_no=' + $piCategoryNo + '&display_group=' + $piDisplayGroup;
      $('#modalContent').attr('src', $url);
      $('#modalContent').bind("load",function(){
          $(".header .close",this.contentWindow.document.body).bind("click", closeModal);
      });
      $('#modalBackpanel').css({width:$("body").width(),height:$("body").height(),opacity:.4}).show();
      $('#modalContainer').center().show();
  }
});
})(jQuery);
$(document).ready(function(){
  if (typeof(EC_SHOP_MULTISHOP_SHIPPING) != "undefined") {
      var sShippingCountryCode4Cookie = 'shippingCountryCode';
      var bShippingCountryProc = false;

      // 배송국가 선택 설정이 사용안함이면 숨김
      if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === false) {
          $('.xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist').hide();
          $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption .xans-layout-multishoplistmultioptioncountry').hide();
      } else {
          $('.thumb .xans-layout-multishoplistitem').hide();
          var aShippingCountryCode = document.cookie.match('(^|;) ?'+sShippingCountryCode4Cookie+'=([^;]*)(;|$)');
          if (typeof(aShippingCountryCode) != 'undefined' && aShippingCountryCode != null && aShippingCountryCode.length > 2) {
              var sShippingCountryValue = aShippingCountryCode[2];
          }

          // query string으로 넘어 온 배송국가 값이 있다면, 그 값을 적용함
          var aHrefCountryValue = decodeURIComponent(location.href).split("/?country=");

          if (aHrefCountryValue.length == 2) {
              var sShippingCountryValue = aHrefCountryValue[1];
          }

          // 메인 페이지에서 국가선택을 안한 경우, 그 외의 페이지에서 셋팅된 값이 안 나오는 현상 처리
          if (location.href.split("/").length != 4 && $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val()) {
              $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));

              if ($("#f_country").length > 0 && location.href.indexOf("orderform.html") > -1) {
                  $("#f_country").val($(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val());
              }
          }
          if (typeof(sShippingCountryValue) != "undefined" && sShippingCountryValue != "" && sShippingCountryValue != null) {
              sShippingCountryValue = sShippingCountryValue.split("#")[0];
              var bShippingCountryProc = true;

              $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val(sShippingCountryValue);
              $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));
              var expires = new Date();
              expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30일간 쿠키 유지
              document.cookie = sShippingCountryCode4Cookie+'=' + $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val() +';path=/'+ ';expires=' + expires.toUTCString();
              if ($("#f_country").length > 0 && location.href.indexOf("orderform.html") > -1) {
                  $("#f_country").val(sShippingCountryValue).change();;
              }
          }
      }
      // 언어선택 설정이 사용안함이면 숨김
      if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingLanguageSelection === false) {
          $('.xans-layout-multishopshipping .xans-layout-multishopshippinglanguagelist').hide();
          $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption .xans-layout-multishoplistmultioptionlanguage').hide();
      } else {
          $('.thumb .xans-layout-multishoplistitem').hide();
      }

      // 배송국가 및 언어 설정이 둘 다 사용안함이면 숨김
      if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShipping === false) {
          $(".xans-layout-multishopshipping").hide();
          $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption').hide();
      } else if (bShippingCountryProc === false && location.href.split("/").length == 4) { // 배송국가 값을 처리한 적이 없고, 메인화면일 때만 선택 레이어를 띄움
          var sShippingCountryValue = $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val();
          $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val(sShippingCountryValue);
          $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));
          // 배송국가 선택을 사용해야 레이어를 보이게 함
          if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === true) {
              $(".xans-layout-multishopshipping").show();
          }
      }

      $(".xans-layout-multishopshipping .close").bind("click", function() {
          $(".xans-layout-multishopshipping").hide();
      });

      $(".xans-layout-multishopshipping .ec-base-button a").bind("click", function() {
          var expires = new Date();
          expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30일간 쿠키 유지
          document.cookie = sShippingCountryCode4Cookie+'=' + $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val() +';path=/'+ ';expires=' + expires.toUTCString();

          // 도메인 문제로 쿠키로 배송국가 설정이 안 되는 경우를 위해 query string으로 배송국가 값을 넘김
          var sQuerySting = (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === false) ? "" : "/?country="+encodeURIComponent($(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val());

          location.href = '//'+$(".xans-layout-multishopshipping .xans-layout-multishopshippinglanguagelist").val()+sQuerySting;
      });
      $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a").bind("click", function() {
          $(".xans-layout-multishopshipping").show();
      });
  }
});