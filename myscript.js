$(document).ready(function() {
// start
	$('#set-balloon-header').click(function () {
		//console.log(1);
		window.myPlacemark.properties.set('balloonHeader','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
	});
	$('#set-balloon-content').click(function () {
		//console.log(2);
		window.myPlacemark.properties.set('balloonContent','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
	});
	$('body').on('click', '.map-link, .coating-close', toggleCoating);

	$('.disabled-block').find('input[type="checkbox"]').prop('disabled', true);
	$('.disabled-block').on('click', '.checkbox, a', function() {return false;});
	$('.coating-return-search').on('click', function() {$(this).parents('.coating-connect').slideUp().siblings('form').slideDown();});
	$('.topbar-support span').on('click', 'span:not(.current)', function() {
	   $(this).addClass('current').siblings().removeClass('current').parent('span')
		   .siblings('strong').eq( $(this).index()).addClass('current').siblings('strong').removeClass('current');
	});
	$('.help-item h4').bind('click', function(e) {
		var $this = $(this),
			$parent = $this.parent(),
			$answer = $this.siblings('.answer');
		if( $parent.hasClass('visible') ) {
			$parent.removeClass('visible');
			$answer.slideUp();
		} else {
			$parent.addClass('visible');
			$answer.slideDown();
			alignPrize();
		}
	});
	$('.arrow-section').on('click', function() {
		var $this = $(this),
			$parent = $this.parents('.tariff-section'),
			$content = $parent.find('.tariff-section-content');
		if($parent.hasClass('hidden')) {
			$parent.removeClass('hidden');
			$content.slideDown();
			alignOther();
		} else {
			$parent.addClass('hidden');
			$content.slideUp();
		}
	});

	$('.help-more').on('click', '.btn-light', function() {
		var $this = $(this),
			$parent = $this.parents('.help-list');
		
		if( $parent.hasClass('visible') ) {
			$parent.removeClass('visible').find('.hidden').slideUp();
			$this.find('span').text('РџРѕРєР°Р·Р°С‚СЊ РІСЃРµ РІРѕРїСЂРѕСЃС‹');
		} else {
			$parent.addClass('visible').find('.hidden').slideDown();
			$this.find('span').text('РЎРєСЂС‹С‚СЊ РІРѕРїСЂРѕСЃС‹');
		}
		return false;
	});
	$('.tab-accord .title').on('click', function() {
		var $parent = $(this).parents('.tab-accord'),
			$content = $parent.find('.accord-content');
		if( $parent.hasClass('opened') ) {
			$parent.removeClass('opened');
			$content.slideUp();
		} else {
			$parent.addClass('opened');
			$content.slideDown();
			alignServ();
		}alignBonus();
	alignPrize();
	});
	$('.serv article .list').each(function() {
		var $this = $(this),
			$li = $this.find('li'),
			num = $li.size(),
			$more = $this.siblings('.more');
		if(num > 3) {
			$li.each(function(i) {
				i++;
				if(i>3) $(this).addClass('hidden').hide();
			});
			num = num - 3;
			$more.text('РџРѕРєР°Р·Р°С‚СЊ РµС‰Рµ ' + num + ' ' + persuadeWords(num, 'РІРїРµС‡Р°С‚Р»РµРЅРёРµ', 'РІРїРµС‡Р°С‚РµР»РµРЅРёСЏ', 'РІРїРµС‡Р°С‚РµР»РЅРёР№') + '');
		} else {
			$more.remove();
		}
		alignServ();
	});

	$('.serv article .more').on('click', function() {
		var $this = $(this),
			$list = $this.siblings('.list'),
			num = $list.find('li').size() - 3;

		if( $this.hasClass('opened') ) {
			$this.removeClass('opened').text('РџРѕРєР°Р·Р°С‚СЊ РµС‰Рµ ' + num + ' ' + persuadeWords(num, 'РІРїРµС‡Р°С‚Р»РµРЅРёРµ', 'РІРїРµС‡Р°С‚РµР»РµРЅРёСЏ', 'РІРїРµС‡Р°С‚РµР»РЅРёР№') + '');
			$list.find('.hidden').hide();
		} else {
			$this.addClass('opened').text('РЎРєСЂС‹С‚СЊ');
			$list.find('li').show();
		}

		alignServ();
	});
	$('body').on('click', '.open-link', function() {
		clickMenu( $(this), false );
		return false;
	});
	$('body').on('click', '.fill, .popup-nav-close', closeMenu);
	$('.dropdown-link').on('click', function() {
		var $this = $(this),
			$popup = $this.siblings('.dropdown-popup'),
			top = $this.position().top,
			left = $this.position().left;
		if( !$this.parents('.tariff-section').hasClass('disabled-block') ) {
			$popup.css({
				'top': top,
				'left': left
			});
			$popup.fadeToggle(300);
		if($this.attr("id")=="b2bcl" || $this.attr("id")=="onlimeservices"){
			$(".fill-background").fadeIn();
		}
		}
		return false;
	});
	/*$('.popup-link').on('click', function() {
		var $this = $(this),
		hash = $this.attr('data-id');
		$(".popup-nav:not(#"+hash+")").hide();
		$(this).siblings('.fill-background, #' + hash + '').fadeIn();
		return false;
	});*/

	alignNews();
	alignBonus();
	alignServ();
	alignPrize();
	checker();
	eachOtherItem();
	checkOther();
	toggleBlockPrice();
	updatecheckers();
	alignPocket();
	newYear();
	if(0)$(document).click(function(event) {
	//	console.log("event.click => document");
	    if ($(event.target).closest('.toltip').length) return;
	    closeToltip();
	    event.stopPropagation();
	});
	checkService();
	$('.works-list-link').on('click', function() {
		var $this = $(this),
			$block = $('.works-list');
		if($block.is(':visible')) {
			$this.text('РџРµСЂРµС‡РµРЅСЊ СЂР°Р±РѕС‚');
			$block.slideUp();
		} else {
			$this.text('РЎРєСЂС‹С‚СЊ РїРµСЂРµС‡РµРЅСЊ СЂР°Р±РѕС‚');
			$block.slideDown();
			$('.extract-link').text('РџРѕРґСЂРѕР±РЅР°СЏ РІС‹РїРёСЃРєР°');
			$('.works-extract').hide();
		}
		return false;
	});

	$('.extract-link').on('click', function() {
		var $this = $(this),
			$block = $('.works-extract');
		if($block.is(':visible')) {
			$this.text('РџРѕРґСЂРѕР±РЅР°СЏ РІС‹РїРёСЃРєР°');
			$block.slideUp();
		} else {
			$this.text('РЎРєСЂС‹С‚СЊ РІС‹РїРёСЃРєСѓ');
			$block.slideDown();
			$('.works-list-link').text('РџРµСЂРµС‡РµРЅСЊ СЂР°Р±РѕС‚');
			$('.works-list').hide();
		}
		return false;
	});
	check();
	/*window.onresize = function()  {
		$('.topbar-more-popup, .popup, .fill, .fill-background, .popup-nav').fadeOut();
		$('body').removeClass('wrapper-slide');
		$('.open-link').removeClass('opened');
		$('body').find('.popup-children-arrow').fadeOut();
	}*/
	var $startBanners = $('.start-banners-list');

	if($startBanners.length) {
		$startBanners.carouFredSel({
			responsive: true,
			items: {
				visible: 1
			},
			auto: {
				play: true,
				delay: 0,
				timeoutDuration: 8000
			},
			prev: {
				button: '.start-banner-prev'
			},
			next: {
				button: '.start-banner-next'
			}
		});
	}
	changeChannelList();
	$('.various').fancybox({
		maxWidth: 900,
		minWidth: 900,
		maxHeight: 560,
		fitToView: false,
		width: 900,
		autoSize: true,
		padding: 0,
		afterShow: function(current, previous) {
			loadPopupList();
		}
	});

	function loadPopupList() {
		var $popup = $('.channals-popup');
		if($popup.length) {
			$popup.find('select').styler();
		}
	}

	$('body').on('click', '.channals-popup table .description .arrow', function() {
		var $this = $(this),
			$parent = $this.parents('.description'),
			$article = $parent.find('article');
		if( $parent.hasClass('opened') ) {
			$parent.removeClass('opened');
			$article.slideUp();
		} else {
			$parent.addClass('opened');
			$article.slideDown();
		}
	});
	$('.topbar-more-link').on('click', function() {
		$(this).siblings('.topbar-more-popup').slideToggle();
	});

	$(document).click(function(event) {
		if ($(event.target).closest('.topbar-more-link, .topbar-more-popup').length) return;
		$('.topbar-more-popup').fadeOut();
		event.stopPropagation();
	});

	//$('.topbar-more-popup')
	$('body').on('click', '.fill, .popup-nav-close', closeMenu);
	$('.popup-link').bind('click', function() {
		var $this = $(this),
			hash = $this.attr('data-id'),
			$parent = $this.parents('.popup-parent');
		$this.siblings('.fill-background').fadeIn();
		$('#' + hash + '').fadeIn();
		$('body').addClass('wrapper-slide');
		
		if( $parent.length ) {
			$parent.hide();
			$('body').append('<div class="popup-children-arrow"></div>');
			$('body').find('.popup-children-arrow').fadeIn();
		}

		return false;
	});
	$('.popup-close, .fill-background').bind('click', function() {
		$('.fill-background, .popup, .specpop, .onlimeservicespop').fadeOut();
		$('body').removeClass('wrapper-slide');
	});

	$('body').on('click', '.popup-children-arrow', function() {
		$(this).remove();
		$('.popup').fadeOut();
		$('.popup-parent').fadeIn();
	});
	var $startClients = $('.start-clients-list');

	if($startClients.length) {
		$startClients.carouFredSel({
			responsive: true,
			items: 3,
			scroll: 1,
			auto: {
				play: true,
				delay: 0,
				timeoutDuration: 8000
			},
			prev: '.start-clients-prev',
			next: '.start-clients-next',
			pagination: '.clients-paging'
		});
	}
// end
});
function newYear(){

	lock = 0;

	  var winh = $(window).height(),
	  	  heightstart = winh-380;

	  $('.ny_footer').height(380);

	  $('.ny_footer .n_0').height(winh);
		

		function makeCounter() {
		  currentCount = 1;

		  return {
		    getNext: function() {
		      return currentCount++;
		    },

		    reset: function() {
		      currentCount = 1;
		    }
		  };
		}

		var counter = makeCounter();	



	  $(window).scroll(function() {

		if(lock==0){
			lock = 1

		// РћСЃРЅРѕРІРЅР°СЏ Р¤СѓРЅРєС†РёСЏ mousewheel
		function wheel(event){
		        var delta = 0;
		        if (!event) event = window.event; // РЎРѕР±С‹С‚РёРµ IE.
		        // РЈСЃС‚Р°РЅРѕРІРёРј РєСЂРѕСЃСЃР±СЂР°СѓР·РµСЂРЅСѓСЋ delta
		        if (event.wheelDelta) { 
		                // IE, Opera, safari, chrome - РєСЂР°С‚РЅРѕСЃС‚СЊ РґРµР»СЊС‚Р° СЂР°РІРЅР° 120
		                delta = event.wheelDelta/120;
		        } else if (event.detail) { 
		                // Mozilla, РєСЂР°С‚РЅРѕСЃС‚СЊ РґРµР»СЊС‚Р° СЂР°РІРЅР° 3
		                delta = -event.detail/3;
		        }


				if($(window).scrollTop()+$(window).height()>=$(document).height()){
					if(delta>0){
			    		counter.reset();
			    		$('.ny_footer').css({height: 380}, 0);
						$('.ny_footer .n_0, .ny_footer .add_move').removeClass('active');
			    	} else {
					    if(counter.getNext() > 50 && counter.getNext() < 100){
						    	$('.ny_footer .n_3').addClass('go');
						    	$('.ny_footer .n_2').addClass('go');
					    	setTimeout(function() {
						    	$('.ny_footer .n_3').removeClass('go');
						    	$('.ny_footer .n_2').removeClass('go');
					    	},250);
					    } else if (counter.getNext() > 100 && counter.getNext() < 150) {							
						    	$('.ny_footer .n_3').addClass('go');
						    	$('.ny_footer .n_2').addClass('go');
					    	setTimeout(function() {
						    	$('.ny_footer .n_3').removeClass('go');
						    	$('.ny_footer .n_2').removeClass('go');
					    	},250);
					    } else if (counter.getNext() > 150 && counter.getNext() < 200) {							
							$('.ny_footer').css({height: winh}, 0);
							$('.ny_footer .n_0, .ny_footer .add_move').addClass('active');
							var el = $('.ny_footer');
							$('.ny').animate({ scrollTop: el.offset().top }, 400);
					    }

			    	}
					
				} else {
		    		counter.reset();
				}



			}


		}

		// РРЅРёС†РёР°Р»РёР·Р°С†РёСЏ СЃРѕР±С‹С‚РёСЏ mousewheel
		if (window.addEventListener) // mozilla, safari, chrome
		    window.addEventListener('DOMMouseScroll', wheel, false);
		// IE, Opera.
		window.onmousewheel = document.onmousewheel = wheel;

	  });
	  


	}
function alignPocket() {
	var $list = $('.pockets-list:has(.pocket:visible)');
	if($list.length) {
		$list.find('.pocket-description').css('height','auto');
		$list.teslalign({'children': '.pocket-description','items': 2});
	}
}
function changeChannelList() {
	$('.channels-parent').each(function() {
		var $channels = $(this),
			active = $channels.find('.tabs-nav').find('.current').attr('data-type');
		 $channels.find('.channels-list .channel').each(function() {
		 	var $this = $(this),
		 		types = $this.attr('data-type');
		 	if( types.indexOf(active) != -1) {
		 		$this.show();
		 	} else {
		 		$this.hide();
		 	}
		 });
	});
}
function clickMenu(elem, close) {
	var $this = $(elem),
		hash = $this.attr('href').substring(1),
		$sub = $('#' + hash + ''),
		$head = $this.parents('.header');
	$(".popup-nav:not(#"+hash+")").hide();
	$(".open-link:not(.a-"+hash+")").removeClass('opened');
	if( $sub.hasClass('popup-nav') ) {
		if( $this.hasClass('opened') || close == true ) {
			closeMenu();
		} else {
			$this.addClass('opened');
			$sub.slideDown();
			if( ! $head.siblings('.fill').length ){
				$head.addClass('dropdown').after('<div class="fill"></div>');
			}
			$head.siblings('.fill').fadeIn();
		}
	}
}
function closeMenu() {
	var $this = $('.header-menu').find('.opened'),
		hash = $this.attr('href').substring(1),
		$sub = $('#' + hash + ''),
		$head = $this.parents('.header');
	if( $sub.hasClass('popup-nav') ) {
		$this.removeClass('opened');
		$sub.slideUp();
		$head.removeClass('dropdown').siblings('.fill').fadeOut(500)
	}
}
function circleLight() {
	$('.num-circle-animate').each(function() {
		var $this = $(this),
			text = $this.attr('data-text');
		$this.after('<span class="num">' + text + '</span>');
		$this.remove();
	});
}
function toggleCoating() {
		var $coating = $('.coating'),
			$close = $coating.siblings('.coating-close');
	//	console.log($coating);
		if( $coating.is(':visible') ) {
			initMap();
			$coating.slideUp();
			$close.hide();
		} else {
			initMap();
			$coating.slideDown();
			$close.show();
		}
	}
function updatecheckers(){
	//console.log("updatecheckers()");
	$('.other-item').children('.checkbox').on('change', 'input[type="checkbox"], input[type="radio"]', checkOther);
	$('.toggle-block .radiobox').on('click', '.checker', toggleBlockPrice);

	$('.topbar-support span').on('click', 'span:not(.current)', function() {
	   $(this).addClass('current').siblings().removeClass('current').parent('span')
		   .siblings('strong').eq( $(this).index()).addClass('current').siblings('strong').removeClass('current');
	});
	
	//arrow-selection

	$('.toltip').hover(
		function() {
			closeToltip();
			$(this).addClass('hover');
			return false;
		},
		function() {
			closeToltip();
		}
	);

	$(document).click(function(event) {
		if ($(event.target).closest('.toltip').length) return;
		closeToltip();
		event.stopPropagation();
	});
}

function closeToltip() {
	$('.toltip').removeClass('hover');
}


function toggleBlockPrice() {
	$('.toggle-block').find('.radiobox').each(function() {
		var $this = $(this),
			num = $this.find('input:checked').parents('.checker').index();
		$this.siblings('.toggle-block-price').eq(num).addClass('current')
			.siblings('.toggle-block-price').removeClass('current');
		alignOther();
	});
}


function checkOther() {
	$('.other-item').each(function() {
		var $this = $(this);
		$checkbox = $this.children('.checkbox').find('input[type="checkbox"]');
		if($checkbox.is(':checked')) {
			$this.addClass('checked');
		} else {
			$this.removeClass('checked');
		}
		alignOther();
	});
}




function alignNews() {
	$('.news .new').css('height','auto');
	$('.news .new').alignHeight();
}
function alignOther() {
	if( $('.other-list').length ) {
		$('.other-list').find('.title, .description, .other-item').css('height','auto');
		if( $(window).width() > 321) {
			$('.other-list').teslalign({'children': '.title','items': 2});
			$('.other-list').teslalign({'children': '.description','items': 2});
			$('.other-list').teslalign({'children': '.other-item','items': 2});
		} else {
			$('.other-list').find('.title, .description, .other-item').css('height','auto');
		}
	}
}

function alignBonus() {
	var $bonus = $('.bonuses-list');
	if($bonus.length) {
		$bonus.find('h3, .text').css('height','auto');
		$bonus.teslalign({'children': 'h3','items': 2});
		$bonus.teslalign({'children': '.text','items': 2});
	}
}
function alignServ() {
	$('.serv-list').each(function() {
		var $serv = $(this);
		if($serv.length) {
			$serv.find('h4, article').css('height','auto');
			$serv.teslalign({'children': 'h4','items': 2});
			$serv.teslalign({'children': 'article','items': 2});
		}
	});
}
function alignPrize() {
	var $prize = $('.prizes-list');
	if($prize.length) {
		$prize.find('.prize').css('height','auto');
		$prize.teslalign({'children': '.prize','items': 3});
	}
}

// РџР»Р°РіРёРЅ, РєРѕС‚РѕСЂС‹Р№ РІС‹СЂР°РІРЅРёРІР°РµС‚ РІС‹СЃРѕС‚Сѓ СЌР»РµРјРµРЅС‚РѕРІ
jQuery.fn.alignHeight = function(){
	var max = 0;
	this.each(function() {
		var $this = $(this),
			height = $this.height();
		if( height > max ) max = height;
	});
	this.height(max);
};
function checkService() {
	//console.log("checkService()");
    $('.service-check').each(function() {
        var $this = $(this),
        $chekbox = $this.find('input[type="checkbox"]');
		if(!$($chekbox).hasClass("patched4"))	
        $chekbox.unbind().on('change', function() {
            if($(this).is(':checked')) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
			$(".tariff-list").stop().fadeOut();
            is_($this);
			selecttype();
        }).addClass("patched4");
        is_($this);
    });
    function is_(elem) {
        var $elem = $(elem),
            $input = $elem.find('input[type="checkbox"]');
        if( $input.is(':checked') ) {
            $elem.addClass('checked');
        } else {
            $elem.removeClass('checked');
        }
    }
}

function checker() {
	//console.log("checker()");
	var $elem = $('.checker');
	
	$('.check-radio').find('input[type="radio"], input[type="checkbox"]').each(function(){
		//if(!$(this).hasClass("patched2"))
			$(this).unbind().on('change', check);//.addClass("patched2");
	});

	//if(!$($elem).hasClass("patched3"))
		$elem.unbind().on('click',function(){
			var $this = $(this);
		if($this.hasClass('disabled')) {
			$this.find('input[type="radio"], input[type="checkbox"]').prop('checked', false);
			$this.removeClass('checked');
			return false;
		}
		//console.log("event.click => .checker :: "+event.srcElement);
		var $input = $(this).find('input[type="radio"], input[type="checkbox"]');
		var exit=false;
		if($(this).hasClass("trigger_tarif")){
			exit=triggerhandler('tarif',$input);
		}
		if($(this).hasClass("trigger_doptarif")){
			exit=triggerhandler('doptarif');
		}
		if($(this).hasClass("trigger_techselector")){
			exit=triggerhandler('techselector');
		}
		if($(this).hasClass("trigger_voip")){
			exit=triggerhandler('voip');
		}
		if($(this).hasClass("trigger_addons")){
			exit=triggerhandler('addons',$input);
		}
		if($(this).hasClass("trigger_premiumaddons")){
			exit=triggerhandler('premiumaddons');
		}
		if($(this).hasClass("trigger_devices")){
			exit=triggerhandler('devices',$input);
		}
		if($(this).hasClass("trigger_multirooms")){
			exit=triggerhandler('multirooms',$input);
		}
		if($(this).hasClass("trigger_servicehelp")){
			exit=triggerhandler('servicehelp',$input);
		}
		if($(this).hasClass("trigger_serviceclick")){
			exit=triggerhandler('serviceclick',$input);
		}
		if(exit){try{displayfix();}catch(e){check();}return false;}
		if($input.attr('type') == 'checkbox') {
			//console.log($input.is(':checked'));
			if($input.is(':checked')) {
				$input.prop('checked', false);
			} else {
				$input.prop('checked', true);
			}
		} else {
			if($input.prop('checked')==false) {
				//console.log("ddfsdfsdf");
				$input.prop('checked', true);
			}else{
				$input.prop('checked', false);
			}
		}
		try{displayfix();}catch(e){check();}
		return false;
	});
}
function check() {
	//console.log("check()");
	$('.checker').each(function() {
		var $this = $(this),
			$inp = $this.find('input[type="radio"], input[type="checkbox"]');
		if($inp.is(':checked')) {
			$this.addClass('checked');
		} else {
			$this.removeClass('checked');
		}
		if($this.hasClass('check-radio')) {
			if($inp.is(':checked')) {
				$this.find('.check-radio-container span').text('Р’С‹Р±СЂР°РЅ');
			} else {
				$this.find('.check-radio-container span').text('Р’С‹Р±СЂР°С‚СЊ');
			}
		}
	});
}



function eachOtherItem() {
	$('.other-item').each(function(i) {
		if( (i++%2) != 0 ) $(this).addClass('even');
	});
}


function persuadeWords(number, one, two, five) {
    number = Math.abs(number);
    number %= 100;
    if (number >= 5 && number <= 20) {
        return five;
    }
    number %= 10;
    if (number == 1) {
        return one;
    }
    if (number >= 2 && number <= 4) {
        return two;
    }
    return five;
} 

