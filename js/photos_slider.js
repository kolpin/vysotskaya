var itemImg = 1;
var click = true;
var start = false;
$(function() {



    $(window).on('resize', function () {
        resizeInnerAndPhotoSlider();
    }).trigger("resize");

    $('.photos_wrap a').on("click", function() {
        $('.inner').addClass('slider_active');
        itemImg = $(this).data('img');
        animatePhotos(itemImg);
        resizeInnerAndPhotoSlider();
        return false;
    });

    $('.photo_slider .close_img').hover(function() {
        $('.photo_slider .opacity').stop(true, true).fadeIn(300);
    }, function() {
        $('.photo_slider .opacity').stop(true, true).fadeOut(300);
    });
    $('.photo_slider .close_img').on("click", function() {
        $('.inner.slider_active .photo_slider').fadeOut(300);
        $('.inner').removeClass('slider_active');
        return false;
    });
    $('.photo_slider .next').on("click", function() {
        if (!click) return false;
        click = false;
        itemImg++;

        if (itemImg > $('.images').length) itemImg = 1;
        animatePhotos(itemImg);
        return false;
    });
    $('.photo_slider .prev').on("click", function() {
        if (!click) return false;
        click = false;
        itemImg--;

        if (itemImg < 1) itemImg = $('.images').length;
        animatePhotos(itemImg);
        return false;
    });
});
function animatePhotos(curr) {
    $('.images').removeClass('active');
    $('.images[data-img='+curr+']').addClass('active');

    $('.images').stop().animate({opacity: 0}, 500, function() {});
    $('.images[data-img='+curr+']').stop().animate({opacity: 1}, 500, function() {
        click = true;
    });
}
function resizeInnerAndPhotoSlider() {
    var bodyHeight = parseInt($('body').height());
    $('.inner.slider_active').height(bodyHeight);
    var bodyWidth = parseInt($('body').width());
    $('.inner.slider_active .photo_slider').width(bodyWidth - 80).height(bodyHeight - 83).css('left', 0).fadeIn(300);;
    $('.photo_slider .opacity').width(bodyWidth - 80).height(bodyHeight - 83);

    $('.images').each(function() {
        var img = $(this);
        cropToFitPhotos(img);
    });
    return true;
}
function cropToFitPhotos(img) {
    //var img = $('.item_preview .img_slide img.slide_bg');
    var imgWidth = Number(img.attr('width'));
    var imgHeight = Number(img.attr('height'));
    var windowWidth = $('.photo_slider').width();
    var windowHeight =  $('.photo_slider').height();

    var style = calculateStyle(imgWidth, imgHeight, windowWidth, windowHeight);
    console.log(imgWidth+' '+imgHeight+' '+windowWidth+' '+windowHeight)
    img.css(style);
}
$.preloadImages = function () {
    var images = (typeof arguments[0] == 'object') ? arguments[0] : arguments;
    for (var i = 0; i < images.length; i++) {
        $("<img>").attr("src", images[i]);
    }
}