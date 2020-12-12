(function($) {
    "use strict";

    //側邊選單路徑與瀏覽位置相同時啟動顯示
    var getUrl = window.location;
    var url = getUrl.href;
    var ori = getUrl.origin;
    var path = getUrl.pathname.split('/');
    var newPath = path[0] + '/' + path[1] + '/' + path[2];
    var newUrl = ori + newPath;
    $('#sidebar').find('.active').removeClass('active');
    // $('#sidebar').find('.menu-open').removeClass('menu-open');
    $('#sidebar a').each(function () {
        if (this.href == url || this.href == newUrl) {
            $(this).addClass('active');
            if ($(this).parents('ul').length == 2) {
                $(this).parent().parent().parent().addClass('menu-open');
                $(this).parent().parent().parent().children('a').addClass('active');
            }
        }
    });
    //上方選單路徑與瀏覽位置相同時啟動
    $('#topbar').find('.active').removeClass('active');
    $('#topbar a').each(function () {
        if (this.href == url) {
            $(this).addClass('active').addClass('active text-yellow');
            if ($(this).parents('ul').length == 2) { //第一層ul
                $(this).parent().parent().parent().children('a').addClass('active text-yellow');
            }
            if ($(this).parents('ul').length == 3) { //第二層ul
                $(this).parent().parent().parent().children('a').addClass('bg-blue');
                $(this).parent().parent().parent().parent().parent().children('a').addClass('text-yellow');
            }
        }
    });

    //擴展全螢幕
    $("#fullscreen-button").on("click", function toggleFullScreen() {
		if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {
				document.documentElement.requestFullScreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullScreen) {
				document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
			} else if (document.documentElement.msRequestFullscreen) {
				document.documentElement.msRequestFullscreen();
			}
		} else {
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		}
    });

    //自動關閉警告訊息
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);

    //背景動畫
    var particlesJSfile = '';
    if(path.length == 4){
        particlesJSfile = '../../js/particles.json'
    }else if(path.length == 3){
        particlesJSfile = '../js/particles.json';
    }else{
        particlesJSfile = 'js/particles.json';
    }
    particlesJS.load('particles-js', particlesJSfile);

})(jQuery);
