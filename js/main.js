/* -------------------------------------------------------------------
 * Template Name         : Agencyou - One Page Agency Template
 * Created Date          : 15 July 2020
 * Version               : 1.0
 * File Name             : main.js
------------------------------------------------------------------- */

/* -------------------------------------------------------------------
 [Table of contents]
 * 01.Preloader
 * 02.Navbar
 * 03.Wow Js
 * 04.ScrollIt
 * 05.ScrollSpy
 * 06.Owl Carousel
 * 07.Counter Up
 * 08.Magnific Popup
 * 09.Skills Bar
 * 10.Our Works
 * 11.Background Image
 * 12.Ripples Effect
   ------------------------------------------------------------------- */
$(function() {
    "use strict";

    // Call all ready functions
    agencyou_preloader();
    agencyou_navbar();
    agencyou_wowJs();
    agencyou_scrollIt();
    agencyou_owlCarousel();
    agencyou_counterUp();
    agencyou_magnificPopup();
    agencyou_SkillsBar();
    agencyou_Gallery();
    agencyou_Bg_Img_Path();
    agencyou_Ripples_Effect();
});
/* ------------------------------------------------------------------- */
/* 01.Preloader
/* ------------------------------------------------------------------- */
function agencyou_preloader() {
    "use-strict";

    // Variables
    let preloaderWrap = $( '#preloader-wrap' );
    let loaderInner = preloaderWrap.find( '.preloader-inner' );

    $( window ).ready(function(){
        loaderInner.delay(300).fadeOut(); 
        preloaderWrap.delay(300).fadeOut( 'slow' );
    });   
}
/* ------------------------------------------------------------------- */
/* 02.Navbar
/* ------------------------------------------------------------------- */
function agencyou_navbar(){
    "use-strict";

    // Variables
    let header = $( '.header' );
    let logoTransparent = $( '.logo-transparent' );
    let scrollTopBtn = $( '.scroll-top-btn' );
    let logoNormal = $( '.logo-normal' );
    let navbarLink      = $( '.menu-link' );
    let windowWidth = $( window ).innerWidth();
    let scrollTop = $( window ).scrollTop();
    let $dropdown = $( '.dropdown' );
    let $dropdownToggle = $( '.dropdown-toggle' );
    let $dropdownMenu = $( '.dropdown-menu' );
    let showClass = 'show';

    // When Window On Scroll
    $( window ).on( 'scroll', function(){
        let scrollTop = $( this ).scrollTop();

        if( scrollTop > 150 ) {
            logoTransparent.hide();
            logoNormal.show();
            header.addClass( 'header-shrink' );
            scrollTopBtn.addClass( 'active' );
        }else {
            logoTransparent.show();
            logoNormal.hide();
            header.removeClass( 'header-shrink' );
            scrollTopBtn.removeClass( 'active' );
        }
    });

    // The same process is done without page scroll to prevent errors.
    if( scrollTop > 150 ) {
        logoTransparent.hide();
        logoNormal.show();
        header.addClass( 'header-shrink' );
        scrollTopBtn.addClass( 'active' );
    }else {
        logoTransparent.show();
        logoNormal.hide();
        header.removeClass( 'header-shrink' );
        scrollTopBtn.removeClass( 'active' );
    }

    // Window On Resize Hover Dropdown
    $( window ).on( 'resize', function() {
        let windowWidth  = $( this ).innerWidth();

        if ( windowWidth > 991 ) {
            $dropdown.hover(
                function() {
                    let hasShowClass  =  $( this ).hasClass( showClass );
                    if( hasShowClass!==true ){
                        $( this ).addClass( showClass );
                        $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                        $( this ).find( $dropdownMenu ).addClass( showClass );
                    }
                },
                function() {
                    $( this ).removeClass( showClass);
                    $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                    $( this ).find( $dropdownMenu ).removeClass( showClass );
                }
            );
        }else {
            $dropdown.off( 'mouseenter mouseleave' );
            header.find( '.main-menu' ).collapse( 'hide' );
        }
    });
    // The same process is done without page scroll to prevent errors.
    if ( windowWidth > 991 ) {
        $dropdown.hover(
            function() {
                const $this = $( this );

                var hasShowClass = $this.hasClass( showClass );

                if( hasShowClass!==true ){
                    $this.addClass( showClass);
                    $this.find ( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                    $this.find( $dropdownMenu ).addClass( showClass );
                }
            },
            function() {
                const $this = $( this );
                $this.removeClass( showClass );
                $this.find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                $this.find( $dropdownMenu ).removeClass( showClass );
            }
        );
    }else {
        $dropdown.off( 'mouseenter mouseleave' );
    }

    navbarLink.on( 'click', function(){
        $( '.navbar-collapse' ).collapse( 'hide' );
    }); 

    // Scroll Spy
    $( 'body' ).scrollspy({
        target: '#fixedNavbar',
        offset: 70
    });
}
/* ------------------------------------------------------------------- */
/* 03.Wow Js
/* ------------------------------------------------------------------- */
function agencyou_wowJs(){
    "use-strict";
    
    let wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        scrollContainer: null
    });
    wow.init();
}
/* ------------------------------------------------------------------- */
/* 04.ScrollIt
/* ------------------------------------------------------------------- */
function agencyou_scrollIt() {
    "use-strict";
     
    $.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: "swing",
        scrollTime: 1000,
        activeClass: "active",
        onPageChange: null,
        topOffset: -15
    });
}
/* ------------------------------------------------------------------- */
/* 06.Owl Carousel
/* ------------------------------------------------------------------- */
function agencyou_owlCarousel(){

    "use-strict";

    // Variables
    let teamCarousel = $( '#teamCarousel' );
    let clientsCarousel = $( '#clientsCarousel' );
    let blogCarousel = $( '#blogCarousel' );
    let heroCarousel = $( '#heroCarousel' );

    // Team Carousel
    teamCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Clients Carousel
    clientsCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Blog Carousel
    blogCarousel.owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Hero Slider
    heroCarousel.owlCarousel({
        loop:true,
        margin:0,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        smartSpeed:1000,
        nav: true,
        navText: ["<span class='fa fa-arrow-left'></span>","<span class='fa fa-arrow-right'></span>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
}
/* ------------------------------------------------------------------- */
/* 07.Counter Up
/* ------------------------------------------------------------------- */
function agencyou_counterUp(){
    "use-strict";

    // Variables
    let counterItem = $( '.counter' );

    counterItem.counterUp({
        delay: 10,
        time: 1000
    });
}
/* ------------------------------------------------------------------- */
/* 08.Magnific Popup
/* ------------------------------------------------------------------- */
function agencyou_magnificPopup(){
    "use-strict";

    // Variables
    let youtubePopup = $( '.video-button' );

    youtubePopup.magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}
/* -------------------------------------------------------------------
 * 09.Skills Bar
------------------------------------------------------------------- */
function agencyou_SkillsBar(){
    "use-strict";

    // Variables
    let skillsItem = $( '.skills-item' );

    skillsItem.each(function(){
        let skillPercent   = $( this ).find( '.skills-progress-value' ).attr( 'data-percent' );

        $( this ).find( '.skills-progress-value' ).css( 'width', skillPercent + '%' );
        $( this ).find( '.skills-item-text .skill-percent' ).html( skillPercent + '%' );
    });
}
/* ------------------------------------------------------------------- */
/* 10.Our Works
/* ------------------------------------------------------------------- */
function agencyou_Gallery() {
    "use-strict";

    // Variables 
    let galleryWrapper     = $( '#portfolio-masonry-wrap' );
    let portfolioFilterBtn = $( '.portfolio-filter a' );

    // Portfolio Masonary Gallery
    galleryWrapper.imagesLoaded( function() {
        let grid = galleryWrapper.isotope({
            itemSelector: '.portfolio-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.portfolio-item',
            }
        });

        // filter items on button click
        portfolioFilterBtn.on( 'click', function() {
            let filterValue = $(this).attr( 'data-portfolio-filter' );
            grid.isotope({
                filter: filterValue
            });
        });
    });

    // filter items on button click
    portfolioFilterBtn.on( 'click', function() {
        portfolioFilterBtn.removeClass( 'current' );
        $(this).addClass( 'current' );
        event.preventDefault();
    });
}
/* ------------------------------------------------------------------- */
/* 11.Background Image
/* ------------------------------------------------------------------- */
function agencyou_Bg_Img_Path(){
    "use-scrict";

    // Variables
    let dataBgItem         = $( '*[data-bg-image-path]' );

    dataBgItem.each( function() {
        let imgPath        = $( this ).attr( 'data-bg-image-path' );
        $( this).css( 'background-image', 'url(' + imgPath + ')' );
    });
}

/* ------------------------------------------------------------------- */
/* 13.Ripples Effect
/* ------------------------------------------------------------------- */ 
function agencyou_Ripples_Effect() {
    "use-strict";
    
    $( '#hero-riples-banner' ).ripples({
        resolution: 500,
        dropRadius: 20,
        perturbance: 0.04
    });
}