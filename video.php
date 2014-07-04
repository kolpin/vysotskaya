<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script src='js/jquery.jplayer.min.js'></script>
    <link rel="stylesheet" href="css/jplayer.css">
    <script>
        var current_video = 0,
            item = 0;

        $(function() {
            $("#jquery_jplayer_1").jPlayer({
                swfPath: "/js",
                supplied: "webmv, ogv, m4v, flv",
                size: {
                    width: "680px",
                    height: "385px"
                },
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            });
            $('.video_wrap a').on("click", function() {
                $('.opacity_popup').show();
                current_video = $(this).data('video');
                $('.video_frame').fadeIn();
                playItemVideo(current_video);
                return false;
            });
            $('.video_frame .close_img').hover(function() {
                $('.video_frame .opacity').stop(true, true).fadeIn(300);
            }, function() {
                $('.video_frame .opacity').stop(true, true).fadeOut(300);
            });
            $('.video_frame .close_img').on("click", function() {
                $("#jquery_jplayer_1").jPlayer("clearMedia");
                $('.opacity_popup, .video_frame').fadeOut();
                return false;
            });
            $(this).keydown(function(eventObject){
                if (eventObject.which == 27) {
                    $("#jquery_jplayer_1").jPlayer("clearMedia");
                    $('.opacity_popup, .video_frame').fadeOut();
                }
            });

            $('.video_frame .next').on("click", function() {
                current_video++;
                if (current_video > $('.video_wrap a').length) current_video = 1;
                playItemVideo(current_video);
                return false;
            });
            $('.video_frame .prev').on("click", function() {
                current_video--;
                if (current_video < 1) current_video = $('.video_wrap a').length;
                playItemVideo(current_video);
                return false;
            });

        });
        function playItemVideo(item) {
            var m4v = $('.video_wrap a[data-video='+item+']').data('m4v');
            var ogv = $('.video_wrap a[data-video='+item+']').data('ogv');
            var flv = $('.video_wrap a[data-video='+item+']').data('flv');
            var webmv = $('.video_wrap a[data-video='+item+']').data('webmv');
            var poster = $('.video_wrap a[data-video='+item+']').data('poster');
            $("#jquery_jplayer_1").jPlayer("setMedia", {
                m4v: m4v,
                ogv: ogv,
                flv: flv,
                webmv: webmv,
                poster: poster
            });
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="inner">
            <?php include 'header.php'?>
            <div class="inner_content ord">
                <div class="left_margin">
                    <h1 class="name_personal">Видео</h1>
                </div>
                <div class="relative" style="overflow: hidden">
                    <div class="video_wrap">
                        <a href="#" class="fly-box" data-video="1" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i1.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="2" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i2.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="3" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i3.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="4" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i4.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="5" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i5.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="6" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i6.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="7" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i7.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="8" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i8.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="9" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i9.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="10" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i10.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="11" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i11.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="12" data-m4v="/videos/m4v/clip2-good.mp4" data-ogv="" data-webmv="" data-flv="" data-poster="/videos/poster/2v.jpg">
                            <img src="img/tmp/i12.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-video="13" data-m4v="/videos/m4v/Big_Buck_Bunny_Trailer.m4v" data-flv="" data-ogv="/videos/ogv/Big_Buck_Bunny_Trailer.ogv" data-webmv="/videos/webm/Big_Buck_Bunny_Trailer.webm" data-poster="/videos/poster/1v.png">
                            <img src="img/tmp/i13.png" alt="" />
                            <span class="play"></span>
                            <span class="opacity_img"></span>
                        </a>
                    </div>
                    <nav class="videos_nav">
                        <ul>
                            <li><a href="#" class="active">Все 17</a></li>
                            <li><a href="#">Венеция 8</a></li>
                            <li><a href="#">Тоскана 8</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <?php include 'side-panel.php'?>
    </div>
    <?php include 'popup.php'?>
    <div class="video_frame">
        <a href="#" class="close_img"></a>
        <div class="half_opacity_right">
            <a href="#" class="next"></a>
        </div>
        <div class="half_opacity_left">
            <a href="#" class="prev"></a>
        </div>
        <div class="opacity"></div>

        <div id="jp_container_1" class="jp-video">
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div class="jp-interface">
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-current-time"></div>
                <div class="jp-duration"></div>
                <a href="javascript:;" class="jp-play" tabindex="1"></a>
                <a href="javascript:;" class="jp-pause" tabindex="1"></a>
                <a href="javascript:;" class="jp-stop" tabindex="1"></a>
                <a href="javascript:;" class="jp-mute" tabindex="1" title="mute"></a>
                <a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"></a>
                <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                </div>
                <a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen"></a>
                <a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen"></a>
            </div>
        </div>

    </div>
</body>
</html>