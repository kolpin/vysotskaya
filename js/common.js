var currSlide = 1,
    click = true,
    current_address = 'от Газетного пер., 12';

$(function() {
    $('.item_preview:first').addClass('active');

    $(window).on('resize', function () {
        setTravelWrapHeight();
        cropToFit();
        setOrdSuccWrapHeight();
        cropToFitOrdSucc();
    }).trigger("resize");

    /* tours active*/

    $('.order_form .tours').on("click", function() {
        var id = $(this).data('id');
        $('input[name=tour_id]').val(id);
        $('.tours').removeClass('active');
        $(this).addClass('active');
    });
    $('.order_form .tours:first').trigger("click");
    $('.order_form .minus').on("click", function() {
        var cnt = parseInt($('.order_form .count_people').text());
        cnt--;
        if (cnt <= 0) cnt = 1;
        $('.order_form .count_people').text(cnt);
        $('input[name=count_people]').val(cnt);
        return false;
    });
    $('.order_form .plus').on("click", function() {
        var cnt = parseInt($('.order_form .count_people').text());
        cnt++;
        $('.order_form .count_people').text(cnt);
        $('input[name=count_people]').val(cnt);
        return false;
    });

    /*Tabs card*/

    $('.selection li a').on("click", function() {
        $('.selection li a').removeClass('active');
        $(this).addClass('active');
        var symbol = $(this).data('symbol');
        $('.number_card').hide();
        $('.number_card.td_'+symbol).show();
        return false;
    });
    $('.selection li a:first').trigger("click");

    /* Tabs address */

    $('.cont_tabs .num_tab').on("click", function() {
        //$('.cont_tabs .num_tab').css('color', '#5e5e5e');
        var id = $(this).data('item');

        var addr = $('.edit_address #address').val();
        if (addr == '') {
            $('#addr_text').text(current_address);
        }
        $('.edit_address').fadeOut(100);
        $('.tab_content').hide();
        $('.tc_'+id).show();
        $('.cont_tabs li').removeClass('active');
        $(this).parent().addClass('active');
        $('.tabs_wrapper').jScrollPane({showArrows:false});
    })

    /* Certificate Avers/Revers */

    $('.refresh_cert').on("click", function() {
        $('.cert_img img.visible').fadeOut(300, function() {
            $(this).removeClass('visible');
        });
        $('.cert_img img:not(.visible)').fadeIn(300, function() {
            $(this).addClass('visible');
            var text = $('.cert_img img.visible').data('text');
            $('.cert_wrapper .text span').hide();
            $('.cert_wrapper .text span.text_'+text).show();
        });
        return false;
    });

    /* Edit address */

    $('#edit').on("click", function() {
        $('.edit_address #address').val($('#addr_text').text());
        $('.edit_address').fadeIn(100);
        return false;
    });
    $('#apply').on("click", function() {
        var address = $('.edit_address #address').val();
        if (address == '') {
            $('.edit_address #address').css({'border' : '1px solid #f54b4c', 'background':'#f54b4c', 'color': '#ffffff'});
        }
        else {
            current_address = address;
            $('.edit_address #address').css({'border' : '1px solid #c4c4c4', 'background':'#f5f5f5', 'color': '#5e5e5e'});
            $('#addr_text').text(address);
            $('.edit_address').fadeOut(100);
        }
        return false;
    });

    /* Hover text color*/

    $('.num_tab span a').hover(function() {
        $(this).parents('.num_tab').css('color', '#5e5e5e');
    }, function() {
        $(this).parents('.num_tab').css('color', '');
    });

    /*Show map*/

        $('.slide_map i, .see_on_map').on("click", function() {
            $('.slide_map').fadeOut(300, function(){
                $('.cont_wrap').stop().animate({left: -827+'px'}, 1000, function() {
                    $('.half_opacity_left').css('z-index', '1');
                    $('.icons_map').show();
                });
            });
        });

        $('.half_opacity_left .icons_map.back ').on("click", function() {
            $('.half_opacity_left').css('z-index', '-1');
            $('.icons_map').fadeOut(300, function(){
                $('.cont_wrap').stop().animate({left: 0}, 1000, function() {
                    $('.slide_map').show();
                });
            })
        });

        $('#cont_map .print, #cont_map .close').hover(function() {
            $('#cont_map .opacity_map').show();
        }, function() {
            $('#cont_map .opacity_map').hide();
        });

    /*Personal a: opacity*/

    $('.personal a, .photos_wrap a, .mini_photos a, .video_wrap a').hover(function() {
        $('.opacity_img', this).stop(true, true).fadeIn(300);
    }, function() {
        $('.opacity_img', this).stop(true, true).fadeOut(300);
    });

    /*Show/Hide Opacity*/
    $('.hover').hover(function() {
        $('.img_slide .opacity').stop(true,true).fadeIn(300, function() {
            $('.hide_hover').show();
            if (parseInt($('.item_preview.active').css('left')) < 0) $('.product_by.hide_hover').hide();
        });
    }, function() {
        $('.img_slide .opacity').stop(true,true).fadeOut(300);
        $('.hide_hover').hide();
    });

    /*Refresh slides*/
    $('.refresh').on("click", function() {
        currSlide++;
        if (currSlide > $('.item_preview').length) currSlide = 1;
        refreshPreview(currSlide);
        return false;
    });

    /*Slide right*/

    $('.slide_right').on("click", function() {
        var parent = $(this).parents('.item_preview');
        var slideWidth = $('.travel_preview_wrap').width();
        $('.product_by').fadeOut(300, function() {
            parent.animate({left: -slideWidth+'px'}, 1000);
        });
        return false;
    });

    /*Slide left*/

    $('.slide_left').on("click", function() {
        var parent = $(this).parents('.item_preview');
        var slideWidth = $('.travel_preview_wrap').width();
        parent.animate({left: 0}, 1000, function() {
            $('.product_by').fadeIn(300);
        });
        return false;
    });

    /* Show/Hide popup window */

    $('.faq').on('click', function() {
        $('.opacity_popup, .popup_faq').fadeIn();
        $(window).trigger('resize');
        return false;
    });
    $('.close_faq').on('click', function() {
        $('.opacity_popup, .popup_faq').fadeOut();
        return false;
    });
    $('.cont-manager').on('click', function() {
        $('.opacity_popup, .popup_cont_manager').fadeIn();
        return false;
    });
    $('.close_cnt_mngr').on('click', function() {
        $('.opacity_popup, .popup_cont_manager').fadeOut();
        return false;
    });
    $('.subscribe').on('click', function() {
        $('.opacity_popup, .popup_subscribe').fadeIn();
        return false;
    });
    $('.close_subs').on('click', function() {
        $('.opacity_popup, .popup_subscribe').fadeOut();
        return false;
    });
    $('.other-sites').on('click', function() {
        $('.opacity_popup, .popup_other_sites').fadeIn();
        return false;
    });
    $('.close_other').on('click', function() {
        $('.opacity_popup, .popup_other_sites').fadeOut();
        return false;
    });
    $('.copy').on('click', function() {
        $('.opacity_popup, .popup_copy').fadeIn();
        return false;
    });
    $('.close_copy').on('click', function() {
        $('.opacity_popup, .popup_copy').fadeOut();
        return false;
    });
    $('.contacts').on('click', function() {
        $('.opacity_popup, .popup_contacts').fadeIn();
        $('.cont_tabs .num_tab:first').click();
        initialize();
        return false;
    });
    $('#cont_map .close, .close_cont').on('click', function() {
        $('.opacity_popup, .popup_contacts').fadeOut();
        return false;
    });
    $('.to_order').on('click', function() {
        $('.opacity_popup, .popup_order').fadeIn();
        return false;
    });
    $('.close_order').on('click', function() {
        $('.opacity_popup, .popup_order').fadeOut();
        return false;
    });
    $('.pay_card').on('click', function() {
        $('.opacity_popup, .popup_pay_card').fadeIn();
        return false;
    });
    $('.close_pay_card').on('click', function() {
        $('.opacity_popup, .popup_pay_card').fadeOut();
        return false;
    });
    $('.close_order_success').on('click', function() {
        $('.opacity_popup, .popup_order_success').fadeOut();
        return false;
    });
    $(this).keydown(function(eventObject){
        if (eventObject.which == 27) {
            $('.opacity_popup, .popup_faq').fadeOut();
            $('.opacity_popup, .popup_cont_manager').fadeOut();
            $('.opacity_popup, .popup_subscribe').fadeOut();
            $('.opacity_popup, .popup_other_sites').fadeOut();
            $('.opacity_popup, .popup_copy').fadeOut();
            $('.opacity_popup, .popup_contacts').fadeOut();
            $('.photo_slider .close_img').trigger("click");
            $('.opacity_popup, .popup_order').fadeOut();
            $('.opacity_popup, .popup_pay_card').fadeOut();
            $('.opacity_popup, .popup_order_success').fadeOut();
            $('.opacity_popup, .img_wrapper').fadeOut();
        }
    });

    /* Validate Fitback */
    if (checkClassContacts()) $('.fitback_form .send_button').addClass('success');
    else $('.fitback_form .send_button').removeClass('success');

    $('.fitback_form input, .fitback_form textarea').on("change keyup", function() {
        if (checkClassContacts()) $('.fitback_form .send_button').addClass('success');
        else $('.fitback_form .send_button').removeClass('success');
        if ($(this).attr('name') == 'user_email'){
            if (!isValidEmailAddress($(this).val())) $(this).addClass('error');
            else $(this).removeClass('error');
        }
        else {
            $(this).removeClass('error');
        }
    });
    $('.fitback_form').on("submit", function() {
        return validateFormContacts();
    });
    $('.fitback_form .send_button').on("mouseover", function() {
        if ($(this).hasClass('success')) {
            var tag_i = $(this).find('i');
            tag_i.stop(true, true).animate({'margin-left': 32+'px'}, 200, function() {
                tag_i.stop(true, true).animate({'margin-left': 14+'px'}, 200);
            });
        }
    });

    /* Validate rss */
    if (checkClassRss()) $('.rss_form .send_button').addClass('success');
    else $('.rss_form .send_button').removeClass('success');

    $('.rss_form input').on("change keyup", function() {
        if (checkClassRss()) $('.rss_form .send_button').addClass('success');
        else $('.rss_form .send_button').removeClass('success');
        if ($(this).attr('name') == 'user_email'){
            if (!isValidEmailAddress($(this).val())) $(this).addClass('error');
            else $(this).removeClass('error');
        }
        else {
            $(this).removeClass('error');
        }
    });
    $('.rss_form').on("submit", function() {
        return validateFormRss();
    });
    $('.rss_form .send_button').on("mouseover", function() {
        if ($(this).hasClass('success')) {
            var tag_i = $(this).find('i');
            tag_i.stop(true, true).animate({'margin-left': 32+'px'}, 200, function() {
                tag_i.stop(true, true).animate({'margin-left': 14+'px'}, 200);
            });
        }
    });

});

function refreshPreview(curr) {
    cropToFit();
    $('.hide_hover').fadeOut(300, function() {
        $('.item_preview').stop().animate({opacity: 0}, 1000);
        $('.ip_'+curr).stop().animate({opacity: 1}, 1000, function() {
            $('.hide_hover').fadeIn(300);
            $('.item_preview').removeClass('active');
            $('.ip_'+curr).addClass('active');
        });
    });
}

function setTravelWrapHeight() {
    var bodyHeight = parseInt($('body').height());
    var travelWrapHeight = bodyHeight - 83;
    $('.travel_preview_wrap').height(travelWrapHeight);

    var slideWidth = $('.travel_preview_wrap').width();
    var slideHeight = $('.travel_preview_wrap').height();

    $('.item_preview').width(slideWidth*2).height(slideHeight);
    $('.img_slide, .text_slide').width(slideWidth).height(slideHeight);
    if (parseInt($('.item_preview.active').css('left')) < 0) {
        $('.item_preview.active').css({left: -slideWidth+'px'});
        $('.product_by').hide();
    }
    $('.slide_right').css('top', (slideHeight/2-15)+'px');
    $('.text_slide > .slide_left').css('top', (slideHeight/2-15)+'px');
    $('.text_rel .slide_left').css('top', (slideHeight/2-106-15)+'px');
    $('.popup_faq, .popup_tours').css({'height': (bodyHeight-60)+'px'})

    $('.popup_faq .scroll_wrap, .faq_content').height(bodyHeight-118);
    $('.scroll_tour_wrap').height(bodyHeight-250);
    $('.faq_content, .scroll_tour_wrap').jScrollPane({
        showArrows:false
    });
}
function cropToFit() {
    var img = $('.item_preview .img_slide img.slide_bg');
    var imgWidth = Number(img.attr('width'));
    var imgHeight = Number(img.attr('height'));
    var windowWidth = $('.travel_preview_wrap').width();
    var windowHeight =  $('.travel_preview_wrap').height();

    var style = calculateStyle(imgWidth, imgHeight, windowWidth, windowHeight);

    img.css(style);
}
function setOrdSuccWrapHeight() {
    var bodyHeight = parseInt($('body').height());
    var travelWrapHeight = bodyHeight - 83;
    $('.order_succes_wrap').height(travelWrapHeight);

    var slideWidth = $('.order_succes_wrap').width();
    var slideHeight = $('.order_succes_wrap').height();

    $('.order_succes_wrap .slide_bg').width(slideWidth).height(slideHeight);

    $('.popup_faq').css({'height': (bodyHeight-60)+'px'})

    $('.popup_faq .scroll_wrap, .faq_content').height(bodyHeight-118);
    $('.faq_content').jScrollPane({
        showArrows:false
    });
}
function cropToFitOrdSucc() {
    var img = $('.order_succes_wrap .slide_bg');
    var imgWidth = Number(img.attr('width'));
    var imgHeight = Number(img.attr('height'));
    var windowWidth = $('.order_succes_wrap').width();
    var windowHeight =  $('.order_succes_wrap').height();

    var style = calculateStyle(imgWidth, imgHeight, windowWidth, windowHeight);

    img.css(style);
}
function calculateStyle(imgWidth, imgHeight, windowWidth, windowHeight) {
    var imgRatio = imgWidth / imgHeight;
    var windowRatio = windowWidth / windowHeight;

    var imgTop = 0, imgLeft = 0;

    if (imgRatio >= windowRatio) {
        imgHeight = windowHeight;
        imgWidth = Math.round((imgHeight) * imgRatio);
    } else {
        imgWidth = windowWidth;
        imgHeight = Math.round((imgWidth) / imgRatio);
    }

    if (imgWidth != windowWidth) {
        imgLeft = Math.round((windowWidth - imgWidth) / 2);
    }

    if (imgHeight != windowHeight) {
        imgTop = Math.round((windowHeight - imgHeight) / 2);
    }

    return {
        width: imgWidth,
        height: imgHeight,
        left: imgLeft,
        top: imgTop
    };
}
function isValidEmailAddress(emailAddress) {
    var pattern = /^[a-z0-9_\.\-]+@([a-z0-9\-]+\.)+[a-z]{2,4}$/i;
    return pattern.test(emailAddress);
}
function validateFormContacts() {
    var user_name = $('.fitback_form input[name=user_name]').val();
    var user_email = $('.fitback_form input[name=user_email]').val();
    var message = $('.fitback_form textarea[name=message]').val();
    var valid = true;

    if (user_name.trim() == '') { $('.fitback_form input[name=user_name]').addClass('error'); valid = false; }
    else $('.fitback_form input[name=user_name]').removeClass('error');

    if (user_email.trim() == '' || !isValidEmailAddress(user_email)) { $('.fitback_form input[name=user_email]').addClass('error'); valid = false; }
    else $('.fitback_form input[name=user_email]').removeClass('error');

    if (message.trim() == '') { $('.fitback_form textarea[name=message]').addClass('error'); valid = false; }
    else $('.fitback_form textarea[name=message]').removeClass('error');

    return valid;
}
function checkClassContacts() {
    var user_name = $('.fitback_form input[name=user_name]').val();
    var user_email = $('.fitback_form input[name=user_email]').val();
    var message = $('.fitback_form textarea[name=message]').val();
    var valid = true;
    if (user_name.trim() == '') valid = false;
    if (user_email.trim() == '' || !isValidEmailAddress(user_email)) valid = false;
    if (message.trim() == '') valid = false;
    return valid;
}

function validateFormRss() {
    var user_name = $('.rss_form input[name=user_name]').val();
    var user_email = $('.rss_form input[name=user_email]').val();
    var valid = true;

    if (user_name.trim() == '') { $('.rss_form input[name=user_name]').addClass('error'); valid = false; }
    else $('.rss_form input[name=user_name]').removeClass('error');

    if (user_email.trim() == '' || !isValidEmailAddress(user_email)) { $('.rss_form input[name=user_email]').addClass('error'); valid = false; }
    else $('.rss_form input[name=user_email]').removeClass('error');

    return valid;
}
function checkClassRss() {
    var user_name = $('.rss_form input[name=user_name]').val();
    var user_email = $('.rss_form input[name=user_email]').val();
    var valid = true;
    if (user_name.trim() == '') valid = false;
    if (user_email.trim() == '' || !isValidEmailAddress(user_email)) valid = false;
    return valid;
}