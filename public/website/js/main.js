jQuery(function($){'use strict';$('.mean-menu').meanmenu({meanScreenWidth:"992"});$(".others-option-for-responsive .dot-menu").on("click",function(){$(".others-option-for-responsive .container .container").toggleClass("active");});$(window).on('scroll',function(){if($(this).scrollTop()>150){$('.navbar-area').addClass("is-sticky");}
else{$('.navbar-area').removeClass("is-sticky");};});scrollCue.init({enable:function(){var maxWidth=768;return window.innerWidth<maxWidth;}});$(window).on('load',function(){$('.preloader').addClass('preloader-deactivate');});$('.from-menu-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:4}}});$('.testimonials-slider').owlCarousel({loop:true,margin:0,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:1},768:{items:1},992:{items:1},1200:{items:1}}});$('.portfolio-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,center:true,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:2},1200:{items:2}}});$('.portfolio-three-slider').owlCarousel({loop:true,margin:0,nav:true,dots:false,center:true,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:3},992:{items:3},1200:{items:4}}});$('.portfolio-two-slider').owlCarousel({loop:true,margin:24,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:3},992:{items:4},1200:{items:4}}});$('.top-grade-slider').owlCarousel({loop:true,margin:24,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:2},1200:{items:2}}});$('.restaurant-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,center:true,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});$('.testimonials-two-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});Fancybox.bind("[data-fancybox]",{});$('.blog-two-slider').owlCarousel({loop:true,margin:5,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:1},768:{items:2},992:{items:2},1200:{items:2}}});$('.popular-menu-details-slider').owlCarousel({loop:true,margin:10,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:2},1200:{items:2}}});$('.team-restaurant-slider').owlCarousel({loop:true,margin:25,nav:true,dots:false,center:true,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});$('#datetimepicker').datepicker({weekStart:0,todayBtn:"linked",language:"es",orientation:"bottom auto",keyboardNavigation:false,autoclose:true});$('.input-counter').each(function(){var spinner=jQuery(this),input=spinner.find('input[type="text"]'),btnUp=spinner.find('.plus-btn'),btnDown=spinner.find('.minus-btn'),min=input.attr('min'),max=input.attr('max');btnUp.on('click',function(){var oldValue=parseFloat(input.val());if(oldValue>=max){var newVal=oldValue;}else{var newVal=oldValue+1;}
spinner.find("input").val(newVal);spinner.find("input").trigger("change");});btnDown.on('click',function(){var oldValue=parseFloat(input.val());if(oldValue<=min){var newVal=oldValue;}else{var newVal=oldValue-1;}
spinner.find("input").val(newVal);spinner.find("input").trigger("change");});});function makeTimer(){var endTime=new Date("november 30, 2030 17:00:00 PDT");var endTime=(Date.parse(endTime))/1000;var now=new Date();var now=(Date.parse(now)/1000);var timeLeft=endTime-now;var days=Math.floor(timeLeft/86400);var hours=Math.floor((timeLeft-(days*86400))/3600);var minutes=Math.floor((timeLeft-(days*86400)-(hours*3600))/60);var seconds=Math.floor((timeLeft-(days*86400)-(hours*3600)-(minutes*60)));if(hours<"10"){hours="0"+hours;}
if(minutes<"10"){minutes="0"+minutes;}
if(seconds<"10"){seconds="0"+seconds;}
$("#days").html(days+"<span>Days</span>");$("#hours").html(hours+"<span>Hours</span>");$("#minutes").html(minutes+"<span>Minutes</span>");$("#seconds").html(seconds+"<span>Seconds</span>");}
setInterval(function(){makeTimer();},300);$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({disableOn:100,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});$('.close-btn').on('click',function(){$('.search-overlay').fadeOut();$('.search-btn').show();$('.close-btn').removeClass('active');});$('.search-btn').on('click',function(){$(this).hide();$('.search-overlay').fadeIn();$('.close-btn').addClass('active');});$('.odometer').appear(function(e){var odo=$(".odometer");odo.each(function(){var countNumber=$(this).attr("data-count");$(this).html(countNumber);});});$(function(){$(window).on('scroll',function(){var scrolled=$(window).scrollTop();if(scrolled>600)$('.go-top').addClass('active');if(scrolled<600)$('.go-top').removeClass('active');});$('.go-top').on('click',function(){$("html, body").animate({scrollTop:"0"},500);});});}(jQuery));try{function setTheme(themeName){localStorage.setItem('ruzo_theme',themeName);document.documentElement.className=themeName;}
function toggleTheme(){if(localStorage.getItem('ruzo_theme')==='theme-dark'){setTheme('theme-light');}else{setTheme('theme-dark');}}
(function(){if(localStorage.getItem('ruzo_theme')==='theme-dark'){setTheme('theme-dark');document.getElementById('slider').checked=false;}else{setTheme('theme-light');document.getElementById('slider').checked=true;}})();}catch(err){}