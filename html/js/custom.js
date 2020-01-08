jQuery(document).ready(function ($) {
    "use strict";

    // NavIcon Responsive Menu
    jQuery(function () {
        jQuery('.nav-showcase_wp').reaktion({
            navIcon: '<i class="fa fa-bars"></i>',
            arrowIcon: '<i class="fa fa-angle-down"></i>',
            arrowsToggleOnly: false,
            breakPoint: 980
        });
    });

    // Instagram
    jQuery("ul.instagram-pics li img").delay(150).animate({"opacity": "1"}, 100);

    /////////////////////////////////
    // Sticky Header
    /////////////////////////////////
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200) {
            jQuery('.sticky-on').addClass("stickytop");
        }
        else {
            jQuery('.sticky-on').removeClass("stickytop");
        }
    });

    // Sticky Sidebar
    jQuery('#sidebar, #small-sidebar').stick_in_parent({parent: '.wrap-fullwidth, .wrap-middle', spacer: '.sidebar-wrapper'});


    // Auto Height Articles
    jQuery('.modern-grid li, .home5 li, #featured-articles li, .home9 li, .footer-posts li, .related-posts li').matchHeight();

    /////////////////////////////////
    // Accordion 
    /////////////////////////////////       
    jQuery(".accordionButton").click(function () {
        jQuery(".accordionButton").removeClass("on");
        jQuery(".accordionContent").slideUp("normal");
        if (jQuery(this).next().is(":hidden") == true) {
            jQuery(this).addClass("on");
            jQuery(this).next().slideDown("normal")
        }
    });
    jQuery(".accordionButton").mouseover(function () {
        jQuery(this).addClass("over")
    }).mouseout(function () {
        jQuery(this).removeClass("over")
    });
    jQuery(".accordionContent").hide();

    /////////////////////////////////
    // Tabs 
    /////////////////////////////////   
    jQuery("#tabs li").click(function () {
        jQuery("#tabs li").removeClass('active');
        jQuery(this).addClass("active");
        jQuery(".tab_content").hide();
        var selected_tab = jQuery(this).find("a").attr("href");
        jQuery(selected_tab).fadeIn();
        return false;
    });

    /////////////////////////////////
    // Go to TOP
    /////////////////////////////////
    // hide #back-top first
    jQuery("#back-top").hide();

    // fade in #back-top
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#back-top').fadeIn();
            } else {
                jQuery('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        jQuery('#back-top a').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

}); // jQuery(document).