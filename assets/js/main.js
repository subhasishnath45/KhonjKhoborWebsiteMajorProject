//  Theme Custom jquery file, 

// Created on   : 01/02/2018.
// Theme Name   : Khonjkhobor
// Description  : Khonjkhobor js
// Version      : 1.0.
// Author       : subhasishnath45@gmail.com
// Developed by : Subhasish Nath (subhasishnath45@gmail.com)




"use strict";

// global variables
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var winW,winH;

function pageCalculations() {
    winW = $(window).width();
    winH = $(window).height();
}

function owlCarouselHome() {
    var homeSlider = $("#owl-demo-01");
    var newsSlider = $("#owl-demo-02");

    $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
    var homeSliderImg = homeSlider.find('img');
    homeSliderImg.each(
        function(){
            $(this).css('width',winW);
        }
    )
    if(newsSlider.length){
        newsSlider.owlCarousel({
            animateOut: 'slideOutLeft',
            dots: true,
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            autoplay: true,
            loop: true,
            paginationSpeed: 400,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });
    }
    if (homeSlider.length) {
        homeSlider.owlCarousel({
            animateOut: 'slideOutLeft',
            dots: true,
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            autoplay: true,
            loop: true,
            paginationSpeed: 400,
            singleItem: true

            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });
    }
}
function BreakingNewsScroll(){
    if($('.widget-block').length){
        var widgetScroller = $('#carouselExampleControls');
        // initializing the scroller
        widgetScroller.carousel();
        var widgetHeader = $('.heading-box');
        var widgetContent = $('.content-box');
        widgetContent.css({
            'height' : widgetHeader.outerHeight()
        });

    }
}
function adsHeightAdjustment(){
    var ads01 = $('.ads01').find('img');
    var ads02 = $('.ads02').find('img');
    ads02.css({
        width:'100%'
    });
    ads01.css({
        width:'100%'
    });
    // var ads02Height = ads02.height() + 'px';
    // alert(ads02Height);
    if(ads01.height() > ads02.height() ) {
        ads01.css({
            height: ads02.height()
        });
    }else {
        ads02.css({
            height: ads01.height()
        });
    }
}


function breakingNewsCarousel(){
    var BreakingNewsCarousel = $("#myCarousel");
    var breakingNewsWisth = BreakingNewsCarousel.find('.news-media').innerWidth();
    var comparableHeight =  $('.side-bar').find('#nav-tabContent').innerHeight();
    if (BreakingNewsCarousel.length) {
    // Activate Carousel
    BreakingNewsCarousel.carousel();
    BreakingNewsCarousel.find('.img-fluid').css({
        'width':breakingNewsWisth,
        'height':comparableHeight/1.5
    });
    $('#myCarousel').css(
        'background','#f3f3f3',
    );
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    /*
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });*/
    }
}

function tabPane(){
    $('.nav-item').first().addClass('active');
    if($('.nav-item').hasClass('active')){
        $(this).children('.nav-link').addClass('active');
        $('.nav-link').removeClass('active');
    }else{
        $(this).children('.nav-link').removeClass('active');
        // $('.nav-link').addClass('active');
    }
}

function addPlustomenu() {
    var navIconli = $(".fa-navicon-li");
    var navIconlielement = navIconli.find('.direct-a');

    var updatedElement = '<i class="fa fa-navicon"></i>';
    updatedElement += '<span class="caret navbar-toggle sub-arrow"></span>';

    navIconlielement.html(updatedElement);
}

// DOM ready function
jQuery(document).on('ready', function () {

    (function ($) {
        BreakingNewsScroll();
        pageCalculations();
        owlCarouselHome();
        addPlustomenu();
        breakingNewsCarousel();
        tabPane();
        adsHeightAdjustment();

    })(jQuery);

});

// Window load function
jQuery(window).on('load', function () {
    (function ($) {
        owlCarouselHome();
   })(jQuery);
  });