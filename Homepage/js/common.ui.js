/**
 * Created by Kang on 2019.12.24
 * @author : Publishing Team.
 * @dependency : jquery ver 1.12.4+
 * @env : MOBILE
 */

// Define Constant HDFUI(Hyundai Duty Free User Interface) : 퍼블리싱에서 사용
var HDFUI = HDFUI || {};

/**
 * ----------------------------------------------------------------------------
 * # Sticky Header UI
 * ----------------------------------------------------------------------------
 */
HDFUI.stickyHeader = function () {

	var $mHeader    = $('.header-wrap'),
		$headerTop  = $('.header-box'),

		$navOffset  = $headerTop.position().top,
		prevTop     = 0;

	$(window).on('scroll', function () {

		var nowTop = $(window).scrollTop();

		if (!!$mHeader.length) {
			if (nowTop > 0) $mHeader.addClass('fixed');
			else $mHeader.removeClass('fixed');
		}

		if (nowTop > $navOffset) {
			if (nowTop > prevTop) $headerTop.addClass('off');
			else $headerTop.removeClass('off');
		} else {
		}
		if (!nowTop) {
			$mHeader.removeClass('fixed');
		}

		prevTop = nowTop;
	});
};

//Tab
$.fn.uxeTabs = function (options) {
    var settings = $.extend({
        'selector' : 'js-tabs',
        'menuSelector': '.list-item',
        'menuBtnSelector' : '.button-tab',
        'mainTargetAttribute' : 'name',
        'activeTabMenuClass': 'list-item--active',
        'tabsContentSlector' : '.box__tab-contents',
        'activeTabContentClass' : 'box__tab-contents--active',
        'speed': 0,
        'autoFirstActivate': false,
        'firstActiveIndex':0,
        'useSubTarget' : false,
        'useSubTargetAttribute' : 'data-subtarget',
        'subtargetClass' : 'box__item-wrap--active',
        'navClickScrollToTabsTop' :false
    }, options);
    return this.each(function(){
        var $this = $(this);
        var $navs = $this.find(settings.menuSelector);
        var tabsScrollTop = $this.offset().top;
        $this.addClass(settings.selector);
        if(settings.autoFirstActivate === true){
            var fisrtMenuElement = $this.find(settings.menuSelector).eq(settings.firstActiveIndex);
            var fisrtHash = fisrtMenuElement.find('.button__list-item').attr(settings.mainTargetAttribute);
            fisrtMenuElement.addClass(settings.activeTabMenuClass).siblings().removeClass(settings.activeTabMenuClass);
            $this.find(fisrtHash).addClass(settings.activeTabContentClass);
            if(settings.useSubTarget===true){
                var $firstsubTarget = $(fisrtMenuElement.find('.button__list-item').attr(settings.useSubTargetAttribute));
                $firstsubTarget.addClass(settings.subtargetClass);
            }
        };
        $navs.find(settings.menuBtnSelector).click(function(e){
            e.preventDefault();
            var hash = $(this).attr(settings.mainTargetAttribute);
            var $tabContent = $this.find(settings.tabsContentSlector);

            $navs.removeClass(settings.activeTabMenuClass);
            $tabContent.removeClass(settings.activeTabContentClass);
            $(this).parents(settings.menuSelector).addClass(settings.activeTabMenuClass);
            $(hash).addClass(settings.activeTabContentClass);
            $('.box__item-wrap').removeClass('box__item-wrap--active');

            if(settings.useSubTarget===true){
                var $subTarget = $($(this).attr(settings.useSubTargetAttribute));
                $this.find($subTarget).addClass(settings.subtargetClass);
            }
            //if(settings.navClickScrollToTabsTop===true)$(document).scrollTop($this.offset().top);

        });
    });
};

//dimmed 레이어
$.fn.uxeDimmedLayer = function (options) {
    var settings = $.extend({
        'btnCtrlSelector' : 'js-layer-ctrl',
        'targetAttribute': 'name',
        'targetSelector': null,
        'layerSelector' : 'js-layer',
        'layerCloseCtrlSelector' : '.button__layer-close, .js_layer-close',
        'activelayerClass' : 'box__layer-popup--active',
        'otherHideSelector' : null
    }, options);
    return this.each(function(){
        $(this).addClass(settings.btnCtrlSelector);
        $(this).click(function(e){
            console.log($(this));
            $this = $(this);
            $this.addClass(settings.btnCtrlSelector);
            if(settings.targetSelector===null){
                var hash = $this.attr(settings.targetAttribute);
                var $target = $(hash);
            }else{ var $target = $(settings.targetSelector);}

            $target.addClass(settings.activelayerClass);
            $closeCtl = $target.find(settings.layerCloseCtrlSelector);
            e.preventDefault();
            $('html').addClass('scroll_off');
            var $closebtn = $target.find(settings.layerCloseCtrlSelector);
            $closebtn.add('.box__layer-dim').click(function(e){
                e.preventDefault();
                $target.removeClass(settings.activelayerClass);
                $('html').removeClass('scroll_off');
            });
        });
    });
};

//아코디언 메뉴
$.fn.uxeAccordionMenu = function (options) {
    var settings = $.extend({
        'selector' : 'js-accordion',
        'itemSelector' : '.box__others-item',
        'itemClass': 'js-accordion-item',
        'navigation' : '.button__accordion',
        'activeItemClass': 'box__others-item--active',
        'clickedShowOnly': false
    }, options);
    return this.each(function(){
        var $this = $(this);
        var $nav = $(this).find(settings.navigation);
        $this.addClass(settings.selector).find(settings.itemSelector).addClass(settings.itemClass);
        $nav.each(function(){
            $(this).click(function(e){
                e.preventDefault();
                if(settings.clickedShowOnly === true){
                    $(this).parents('.'+settings.itemClass).siblings().removeClass(settings.activeItemClass);
                }
                $(this).parents('.'+settings.itemClass).toggleClass(settings.activeItemClass);
            });
        });
    });
};

//관심상품 저장 애니메이션
var addInterestAni = function(){
    $('.box__wish-adden').addClass("box__toast-wish--active");
    setTimeout(function() {
        $('.box__wish-adden').removeClass('box__toast-wish--active');
    },1000);
};

// toast popup
var interestToggleAction = function (){
    var $btn = $('.sp_50-interest');
    $btn.each(function(){
        $(this).on('click',function(e){
            e.preventDefault();
            if($(this).hasClass('sp_50-interest--active')) {
                $(this).removeClass('sp_50-interest--active');
            } else{
                $(this).addClass('sp_50-interest--active');
                addInterestAni();
            }
        }); //on
    }); //each
};

/**
 * ----------------------------------------------------------------------------
 * # document ready init
 * ----------------------------------------------------------------------------
 */
$(function () {
	if (!!$('.main .header-wrap').length) HDFUI.stickyHeader();

});