		<style>
            .background {
                position: fixed;
                width: 100%;
                height: 130%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                overflow: hidden;
                will-change: transform;
                -webkit-backface-visibility: hidden;
                        backface-visibility: hidden;
                -webkit-transform: translateY(30vh);
                        transform: translateY(30vh);
                -webkit-transition: all 1.2s cubic-bezier(0.22, 0.44, 0, 1);
                        transition: all 1.2s cubic-bezier(0.22, 0.44, 0, 1);
            }
            .background:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
            //    background-color: rgba(255, 255, 255, 0.1);
            }
            .background:first-child {
                background-size: initial;
                background-repeat: initial;
                background-image: url(./image/BG_PLUSPAY.jpg);
                -webkit-transform: translateY(-15vh);
                        transform: translateY(-15vh);
            }
            .background:first-child .content-wrapper {
                -webkit-transform: translateY(15vh);
                        transform: translateY(15vh);
            }
            .background:nth-child(2) {
                background-image: url(https://i.postimg.cc/W14vywqg/photo-1424746219973-8fe3bd07d8e3.jpg);
            }
            .background:nth-child(3) {
                background-image: url(https://i.postimg.cc/TY0xQ41T/photo-1433840496881-cbd845929862.jpg);
            }

            /* Set stacking context of slides */
            .background:nth-child(1) {
                z-index: 3;
            }

            .background:nth-child(2) {
                z-index: 2;
            }

            .background:nth-child(3) {
             z-index: 1;
            }

            .content-wrapper {
                height: 100vh;
                display: -webkit-box;
                display: flex;
                -webkit-box-pack: center;
                        justify-content: center;
                text-align: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                        flex-flow: column nowrap;
                color: #fff;
                font-family: S-CoreDream;
                text-transform: uppercase;
                -webkit-transform: translateY(40vh);
                        transform: translateY(40vh);
                will-change: transform;
                -webkit-backface-visibility: hidden;
                        backface-visibility: hidden;
                -webkit-transition: all 1.7s cubic-bezier(0.22, 0.44, 0, 1);
                transition: all 1.7s cubic-bezier(0.22, 0.44, 0, 1);
                padding:80px 80px 180px 400px;
            }
            .content-title {
                font-size: 12vh;
                line-height: 1.4;
            }

            .background.up-scroll {
                -webkit-transform: translate3d(0, -15vh, 0);
                        transform: translate3d(0, -15vh, 0);
            }
            .background.up-scroll .content-wrapper {
                -webkit-transform: translateY(15vh);
                        transform: translateY(15vh);
            }
            .background.up-scroll + .background {
                -webkit-transform: translate3d(0, 30vh, 0);
                        transform: translate3d(0, 30vh, 0);
            }
            .background.up-scroll + .background .content-wrapper {
                -webkit-transform: translateY(30vh);
                        transform: translateY(30vh);
            }

            .background.down-scroll {
                -webkit-transform: translate3d(0, -130vh, 0);
                        transform: translate3d(0, -130vh, 0);
            }
            .background.down-scroll .content-wrapper {
                -webkit-transform: translateY(40vh);
                        transform: translateY(40vh);
            }
            .background.down-scroll + .background:not(.down-scroll) {
                -webkit-transform: translate3d(0, -15vh, 0);
                        transform: translate3d(0, -15vh, 0);
            }
            .background.down-scroll + .background:not(.down-scroll) .content-wrapper {
                -webkit-transform: translateY(15vh);
                        transform: translateY(15vh);
            }
        </style>
        
		<div class="container" id="fullpage2">
            <section class="background Select_1">
                <div class="content-wrapper">
                    <div class="outer intro">
                        <div class="inner">
                            <div class="card">
                                <p class="title"><q> 좀 더 똑똑한 소비습관 </q></p>
                                <div class="content">
                                    <p class="content_txt_i zoomIn"><span class="txt_info">플러스페이에 무료 가입하면 다양한 혜택/이벤트 확인이 가능합니다.</span></p>
                                    <p class="content_txt_img35 bounceInDown"><img width="98%" src="./image/Phone_img_1.png" alt="플러스페이 앱"></p>
                                    <div class="content_txtarea_65">
                                        <p class="content_txt_t fadeInLeft"><span class="txt_info">이왕이면 할인된 가격으로</span></p>
                                        <p class="content_txt_c icon_1 fadeInUp">
                                            같은 상품이라면 할인된 가격으로...<br>플러스페이 앱 가맹점에서 등록/제시한 할인된 가격의 쿠폰을 구매하여 이용 또는 가맹점의 할인쿠폰을 다운받아 해당 가맹점에 제시하여 이용 가능합니다.
                                        </p>
                                        <p class="content_txt_t fadeInLeft"><span class="txt_info">최대 2.5% 포인트 적립까지</span></p>
                                        <p class="content_txt_c icon_2 fadeInUp">
                                            같은상품 같은가격 이지만...<br>플러스페이로 결제하면 최대 2.5%의 포인트 적립혜택 / 포인트는 플러스페이 가맹점의 상품결제 또는 기프티콘등으로 사용가능 합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
			</section>
            <section class="background">
                <div class="content-wrapper">
                    <p class="content-title">Full Page Parallax Effect</p>
                    <p class="content-subtitle">Scroll down and up to see the effect!</p>
                </div>
            </section>
            <section class="background">
                <div class="content-wrapper">
                    <p class="content-title">Cras lacinia non eros nec semper.</p>
                    <p class="content-subtitle">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ut massa mattis nibh semper pretium.</p>
                </div>
            </section>
            <section class="background">
                <div class="content-wrapper">
                    <p class="content-title">Etiam consequat lectus.</p>
                    <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
                </div>
            </section>
        </div>

		<script type='text/javascript' src='./js/lodash.min.js'></script>
		<script type="text/javascript">
			// ------------- VARIABLES ------------- //
            var ticking = false;
            var isFirefox = /Firefox/i.test(navigator.userAgent);
            var isIe = /MSIE/i.test(navigator.userAgent) || /Trident.*rv\:11\./i.test(navigator.userAgent);
            var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive) 
            var slideDurationSetting = 600; //Amount of time for which slide is "locked"
            var currentSlideNumber = 0;
            var totalSlideNumber = $(".background").length;

            // ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
            function parallaxScroll(evt) {
                if (isFirefox) {
                    //Set delta for Firefox
                    delta = evt.detail * -120;
                } else if (isIe) {
                    //Set delta for IE
                    delta = -evt.deltaY;
                } else {
                    //Set delta for all other browsers
                    delta = evt.wheelDelta;
                }

                if (ticking != true) {
                    if (delta <= -scrollSensitivitySetting) {
                        //Down scroll
                        ticking = true;
                        if (currentSlideNumber !== totalSlideNumber - 1) {
                            currentSlideNumber++;
                            nextItem();
                        }
                    slideDurationTimeout(slideDurationSetting);
                    }
                    if (delta >= scrollSensitivitySetting) {
                        //Up scroll
                        ticking = true;
                        if (currentSlideNumber !== 0) {
                            currentSlideNumber--;
                        }
                        previousItem();
                        slideDurationTimeout(slideDurationSetting);
                    }
                }
            }

            // ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
            function slideDurationTimeout(slideDuration) {
                setTimeout(function () {
                    ticking = false;
                }, slideDuration);
            }

            // ------------- ADD EVENT LISTENER ------------- //
            var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
            window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

            // ------------- SLIDE MOTION ------------- //
            function nextItem() {
                var $previousSlide = $(".background").eq(currentSlideNumber - 1);
                $previousSlide.removeClass("up-scroll").addClass("down-scroll");
            }

            function previousItem() {
                var $currentSlide = $(".background").eq(currentSlideNumber);
                $currentSlide.removeClass("down-scroll").addClass("up-scroll");
			}
			
			$('body').off('scroll touchmove mousewheel');
			$('#fullpage2').off('scroll touchmove mousewheel');
			$('.container').off('scroll touchmove mousewheel');
        </script>