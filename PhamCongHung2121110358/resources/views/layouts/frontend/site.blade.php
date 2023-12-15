<head>
		<meta charset="UTF-8">
		<meta name="theme-color" content="#000000">
		<link rel="canonical" href="https://dola-watch.mysapo.net/">
		<meta name="revisit-after" content="2 days">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">	
		<meta name="robots" content="noodp,index,follow">
		<meta name="description" content="">
		<title>Hung Dola Watch		</title>
		<meta name="keywords" content="Cập nhật sau">		
	<meta property="og:type" content="website">
	<meta property="og:title" content="Dola Watch">
	<meta property="og:image" content="https://bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1696125396195">
	<meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1696125396195">
<meta property="og:description" content="">
<meta property="og:url" content="https://dola-watch.mysapo.net/">
<meta property="og:site_name" content="Dola Watch">	
		<link rel="icon" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/favicon.png?1696125396195" type="image/x-icon">
		<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/jquery.js?1696125396195">
		<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/jquery.js?1696125396195" type="text/javascript"></script>
		<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/swiper.js?1696125396195">
		<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/swiper.js?1696125396195" type="text/javascript"></script>
		<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/lazy.js?1696125396195">
		<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/lazy.js?1696125396195" type="text/javascript"></script>
		<script>
//notify js
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t("object"==typeof exports?require("jquery"):jQuery)}(function(t){function s(s){var e=!1;return t('[data-notify="container"]').each(function(i,n){var a=t(n),o=a.find('[data-notify="title"]').text().trim(),r=a.find('[data-notify="message"]').html().trim(),l=o===t("<div>"+s.settings.content.title+"</div>").html().trim(),d=r===t("<div>"+s.settings.content.message+"</div>").html().trim(),g=a.hasClass("alert-"+s.settings.type);return l&&d&&g&&(e=!0),!e}),e}function e(e,n,a){var o={content:{message:"object"==typeof n?n.message:n,title:n.title?n.title:"",icon:n.icon?n.icon:"",url:n.url?n.url:"#",target:n.target?n.target:"-"}};a=t.extend(!0,{},o,a),this.settings=t.extend(!0,{},i,a),this._defaults=i,"-"===this.settings.content.target&&(this.settings.content.target=this.settings.url_target),this.animations={start:"webkitAnimationStart oanimationstart MSAnimationStart animationstart",end:"webkitAnimationEnd oanimationend MSAnimationEnd animationend"},"number"==typeof this.settings.offset&&(this.settings.offset={x:this.settings.offset,y:this.settings.offset}),(this.settings.allow_duplicates||!this.settings.allow_duplicates&&!s(this))&&this.init()}var i={element:"body",position:null,type:"info",allow_dismiss:!0,allow_duplicates:!0,newest_on_top:!1,showProgressbar:!1,placement:{from:"top",align:"right"},offset:20,spacing:10,z_index:1031,delay:5e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},onShow:null,onShown:null,onClose:null,onClosed:null,icon_type:"class",template:'<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'};String.format=function(){for(var t=arguments[0],s=1;s<arguments.length;s++)t=t.replace(RegExp("\\{"+(s-1)+"\\}","gm"),arguments[s]);return t},t.extend(e.prototype,{init:function(){var t=this;this.buildNotify(),this.settings.content.icon&&this.setIcon(),"#"!=this.settings.content.url&&this.styleURL(),this.styleDismiss(),this.placement(),this.bind(),this.notify={$ele:this.$ele,update:function(s,e){var i={};"string"==typeof s?i[s]=e:i=s;for(var n in i)switch(n){case"type":this.$ele.removeClass("alert-"+t.settings.type),this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass("progress-bar-"+t.settings.type),t.settings.type=i[n],this.$ele.addClass("alert-"+i[n]).find('[data-notify="progressbar"] > .progress-bar').addClass("progress-bar-"+i[n]);break;case"icon":var a=this.$ele.find('[data-notify="icon"]');"class"===t.settings.icon_type.toLowerCase()?a.removeClass(t.settings.content.icon).addClass(i[n]):(a.is("img")||a.find("img"),a.attr("src",i[n]));break;case"progress":var o=t.settings.delay-t.settings.delay*(i[n]/100);this.$ele.data("notify-delay",o),this.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow",i[n]).css("width",i[n]+"%");break;case"url":this.$ele.find('[data-notify="url"]').attr("href",i[n]);break;case"target":this.$ele.find('[data-notify="url"]').attr("target",i[n]);break;default:this.$ele.find('[data-notify="'+n+'"]').html(i[n])}var r=this.$ele.outerHeight()+parseInt(t.settings.spacing)+parseInt(t.settings.offset.y);t.reposition(r)},close:function(){t.close()}}},buildNotify:function(){var s=this.settings.content;this.$ele=t(String.format(this.settings.template,this.settings.type,s.title,s.message,s.url,s.target)),this.$ele.attr("data-notify-position",this.settings.placement.from+"-"+this.settings.placement.align),this.settings.allow_dismiss||this.$ele.find('[data-notify="dismiss"]').css("display","none"),(this.settings.delay>0||this.settings.showProgressbar)&&this.settings.showProgressbar||this.$ele.find('[data-notify="progressbar"]').remove()},setIcon:function(){"class"===this.settings.icon_type.toLowerCase()?this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon):this.$ele.find('[data-notify="icon"]').is("img")?this.$ele.find('[data-notify="icon"]').attr("src",this.settings.content.icon):this.$ele.find('[data-notify="icon"]').append('<img src="'+this.settings.content.icon+'" alt="Notify Icon" />')},styleDismiss:function(){this.$ele.find('[data-notify="dismiss"]').css({position:"absolute",right:"10px",top:"5px",zIndex:this.settings.z_index+2})},styleURL:function(){this.$ele.find('[data-notify="url"]').css({backgroundImage:"url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",height:"100%",left:0,position:"absolute",top:0,width:"100%",zIndex:this.settings.z_index+1})},placement:function(){var s=this,e=this.settings.offset.y,i={display:"inline-block",margin:"0px auto",position:this.settings.position?this.settings.position:"body"===this.settings.element?"fixed":"absolute",transition:"all .5s ease-in-out",zIndex:this.settings.z_index},n=!1,a=this.settings;switch(t('[data-notify-position="'+this.settings.placement.from+"-"+this.settings.placement.align+'"]:not([data-closing="true"])').each(function(){e=Math.max(e,parseInt(t(this).css(a.placement.from))+parseInt(t(this).outerHeight())+parseInt(a.spacing))}),this.settings.newest_on_top===!0&&(e=this.settings.offset.y),i[this.settings.placement.from]=e+"px",this.settings.placement.align){case"left":case"right":i[this.settings.placement.align]=this.settings.offset.x+"px";break;case"center":i.left=0,i.right=0}this.$ele.css(i).addClass(this.settings.animate.enter),t.each(["webkit-","moz-","o-","ms-",""],function(t,e){s.$ele[0].style[e+"AnimationIterationCount"]=1}),t(this.settings.element).append(this.$ele),this.settings.newest_on_top===!0&&(e=parseInt(e)+parseInt(this.settings.spacing)+this.$ele.outerHeight(),this.reposition(e)),t.isFunction(s.settings.onShow)&&s.settings.onShow.call(this.$ele),this.$ele.one(this.animations.start,function(){n=!0}).one(this.animations.end,function(){t.isFunction(s.settings.onShown)&&s.settings.onShown.call(this)}),setTimeout(function(){n||t.isFunction(s.settings.onShown)&&s.settings.onShown.call(this)},600)},bind:function(){var s=this;if(this.$ele.find('[data-notify="dismiss"]').on("click",function(){s.close()}),this.$ele.mouseover(function(){t(this).data("data-hover","true")}).mouseout(function(){t(this).data("data-hover","false")}),this.$ele.data("data-hover","false"),this.settings.delay>0){s.$ele.data("notify-delay",s.settings.delay);var e=setInterval(function(){var t=parseInt(s.$ele.data("notify-delay"))-s.settings.timer;if("false"===s.$ele.data("data-hover")&&"pause"===s.settings.mouse_over||"pause"!=s.settings.mouse_over){var i=(s.settings.delay-t)/s.settings.delay*100;s.$ele.data("notify-delay",t),s.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow",i).css("width",i+"%")}t>-s.settings.timer||(clearInterval(e),s.close())},s.settings.timer)}},close:function(){var s=this,e=parseInt(this.$ele.css(this.settings.placement.from)),i=!1;this.$ele.data("closing","true").addClass(this.settings.animate.exit),s.reposition(e),t.isFunction(s.settings.onClose)&&s.settings.onClose.call(this.$ele),this.$ele.one(this.animations.start,function(){i=!0}).one(this.animations.end,function(){t(this).remove(),t.isFunction(s.settings.onClosed)&&s.settings.onClosed.call(this)}),setTimeout(function(){i||(s.$ele.remove(),s.settings.onClosed&&s.settings.onClosed(s.$ele))},600)},reposition:function(s){var e=this,i='[data-notify-position="'+this.settings.placement.from+"-"+this.settings.placement.align+'"]:not([data-closing="true"])',n=this.$ele.nextAll(i);this.settings.newest_on_top===!0&&(n=this.$ele.prevAll(i)),n.each(function(){t(this).css(e.settings.placement.from,s),s=parseInt(s)+parseInt(e.settings.spacing)+t(this).outerHeight()})}}),t.notify=function(t,s){var i=new e(this,t,s);return i.notify},t.notifyDefaults=function(s){return i=t.extend(!0,{},i,s)},t.notifyClose=function(s){void 0===s||"all"===s?t("[data-notify]").find('[data-notify="dismiss"]').trigger("click"):t('[data-notify-position="'+s+'"]').find('[data-notify="dismiss"]').trigger("click")}});
//cookie
!function(e){var n;if("function"==typeof define&&define.amd&&(define(e),n=!0),"object"==typeof exports&&(module.exports=e(),n=!0),!n){var t=window.Cookies,o=window.Cookies=e();o.noConflict=function(){return window.Cookies=t,o}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var t=arguments[e];for(var o in t)n[o]=t[o]}return n}function n(e){return e.replace(/(%[0-9A-Z]{2})+/g,decodeURIComponent)}return function t(o){function r(){}function i(n,t,i){if("undefined"!=typeof document){"number"==typeof(i=e({path:"/"},r.defaults,i)).expires&&(i.expires=new Date(1*new Date+864e5*i.expires)),i.expires=i.expires?i.expires.toUTCString():"";try{var c=JSON.stringify(t);/^[\{\[]/.test(c)&&(t=c)}catch(e){}t=o.write?o.write(t,n):encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent).replace(/[\(\)]/g,escape);var f="";for(var u in i)i[u]&&(f+="; "+u,!0!==i[u]&&(f+="="+i[u].split(";")[0]));return document.cookie=n+"="+t+f}}function c(e,t){if("undefined"!=typeof document){for(var r={},i=document.cookie?document.cookie.split("; "):[],c=0;c<i.length;c++){var f=i[c].split("="),u=f.slice(1).join("=");t||'"'!==u.charAt(0)||(u=u.slice(1,-1));try{var a=n(f[0]);if(u=(o.read||o)(u,a)||n(u),t)try{u=JSON.parse(u)}catch(e){}if(r[a]=u,e===a)break}catch(e){}}return e?r[e]:r}}return r.set=i,r.get=function(e){return c(e,!1)},r.getJSON=function(e){return c(e,!0)},r.remove=function(n,t){i(n,"",e(t,{expires:-1}))},r.defaults={},r.withConverter=t,r}(function(){})});

</script>
		<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/main.scss.css?1696125396195">
<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/index.scss.css?1696125396195">
<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/bootstrap-4-3-min.css?1696125396195">
<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/swiper.scss.css?1696125396195">
<link rel="stylesheet" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/bootstrap-4-3-min.css?1696125396195">
<link href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/main.scss.css?1696125396195" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/index.scss.css?1696125396195" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/swiper.scss.css?1696125396195" rel="stylesheet" type="text/css" media="all">	


<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/quickviews_popup_cart.scss.css?1696125396195">
<link href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/quickviews_popup_cart.scss.css?1696125396195" rel="stylesheet" type="text/css" media="all">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap'); 
</style>
		<script>
	var Bizweb = Bizweb || {};
	Bizweb.store = 'dola-watch.mysapo.net';
	Bizweb.id = 487743;
	Bizweb.theme = {"id":912230,"name":"Dola Watch - demo","role":"main"};
	Bizweb.template = 'index';
	if(!Bizweb.fbEventId)  Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
	var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
				return v.toString(16);
			});		
</script>
<script>
	(function () {
		function asyncLoad() {
			var urls = [];
			for (var i = 0; i < urls.length; i++) {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = urls[i];
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		};
		window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
	})();
</script>


<script>
	window.BizwebAnalytics = window.BizwebAnalytics || {};
	window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
	window.BizwebAnalytics.meta.currency = 'VND';
	window.BizwebAnalytics.tracking_url = '/s';

	var meta = {};
	
	
	for (var attr in meta) {
	window.BizwebAnalytics.meta[attr] = meta[attr];
	}
</script>

	
		<script src="/dist/js/stats.min.js?v=8177d93"></script><script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>

	<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    @yield('header')
</head>
<body>
<div class="opacity_menu"></div>
<div class="topbar">
	<div class="container">

		<div class="topbar-text">
			<div class="text-slider swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
				<div class="swiper-wrapper" style="transition-duration: 0ms; height:3%">
					<div class="swiper-slide swiper-slide-active" style="width: 956px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
						<span class="dot"></span> Chào mừng bạn đến với cửa hàng Dola Watch!
					</div>
					

					<div class="swiper-slide swiper-slide-next" style="width: 956px; opacity: 0; transform: translate3d(-956px, 0px, 0px); transition-duration: 0ms;">
						<span class="dot"></span> Rất nhiều ưu đãi và chương trình khuyến mãi đang chờ đợi bạn
					</div>
					

					<div class="swiper-slide" style="width: 956px; opacity: 0; transform: translate3d(-1912px, 0px, 0px); transition-duration: 0ms;">
						<span class="dot"></span> Ưu đãi lớn dành cho thành viên mới
					</div>
					

				</div>
			</div>
		</div>
	</div>
</div>
<header class="header" style="min-height: 163px;">
	<div class="container">
		<div class="row row-header align-items-center">
			<div class="menu-bar d-lg-none d-flex">
				<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14"><path fill="#ffffff" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" class=""></path></svg>
			</div>


			<div class="col-lg-5 col-12 d-lg-block d-none">
				<ul class="ul-control-left">
					<li class="header-contact d-lg-flex d-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
							<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
						</svg>
						<span>
							Hotline:
							<a href="tel:19006750" title="1900 6750">1900 6750</a>
						</span>
					</li>
					<li class="header-contact d-lg-flex d-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
							<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
							<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
						</svg>
						<span>
							<a title="Hệ thống cửa hàng" href="/he-thong-cua-hang" class="button-wishlist icon">

								Hệ thống cửa hàng
							</a>
						</span>
					</li>
				</ul>

			</div>
			<div class="col-lg-2 col-12">
				<a href="/" class="logo" title="Logo">	
					<img width="220" height="27" src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1696125396195" alt="Dola Watch">
				</a>
			</div>
			<div class="col-lg-5 header-control col-12">
				<div class="search-header">
					<div class="search-smart">
						<form action="/search" method="get" class="header-search-form input-group search-bar" role="search">
							<input type="text" name="query" required="" class="input-group-field auto-search search-auto form-control" placeholder="Đồng Hồ Phiên Bả" autocomplete="off">
							<input type="hidden" name="type" value="product">
							<button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>							</button>
							
							<div class="search-suggest">
								<ul class="smart-search-title">
									<li data-tab="#tab-search-1" class="active"><a href="javascript:void(0)" title="Sản phẩm">Sản phẩm</a></li>
									<li data-tab="#tab-search-2"><a href="javascript:void(0)" title="Tin tức">Tin tức</a></li>
								</ul>
								<div class="list-search-suggest">
									<div class="list-search list-search-style active" id="tab-search-1">
									</div>
									<div class="list-search2 list-search-style" id="tab-search-2">
									</div>
								</div>

							</div>
							
						</form>
					</div>
				</div>
				<ul class="ul-control-right">


					<li class="header-account d-lg-flex d-none">

						<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40"><defs></defs><g id="ic-user"><g id="_6-User" data-name="6-User"><g id="Group_18" data-name="Group 18"><path id="Path_92" data-name="Path 92" class="cls-1" d="M20,22.21a6.12,6.12,0,1,0-6.12-6.12h0A6.13,6.13,0,0,0,20,22.21ZM20,12a4.08,4.08,0,1,1-4.08,4.08A4.08,4.08,0,0,1,20,12Z"></path><path id="Path_93" data-name="Path 93" class="cls-1" d="M20,4.88A16.31,16.31,0,1,0,36.31,21.19,16.31,16.31,0,0,0,20,4.88Zm0,2A14.25,14.25,0,0,1,31.93,29a15.23,15.23,0,0,0-21.38-2.47A15.66,15.66,0,0,0,8.07,29,14.25,14.25,0,0,1,20,6.92Zm0,28.54A14.24,14.24,0,0,1,9.35,30.65a13.24,13.24,0,0,1,21.3,0A14.24,14.24,0,0,1,20,35.46Z"></path></g></g></g></svg>
						<ul>

							
							<li>
								<a href="/account/register" title="Đăng ký">
									Đăng ký
								</a>
							</li>
							<li>
								<a href="/account/login" title="Đăng nhập">
									Đăng nhập
								</a>
							</li>
							
						</ul>
					</li>

					<li class="header-wishlist d-lg-flex d-none">
						<a title="Sản phẩm yêu thích" href="/san-pham-yeu-thich" class="button-wishlist icon">
							<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40"><defs></defs><path class="cls-1" d="M20,38.38a2.14,2.14,0,0,1-1.4-.53c-1.41-1.24-2.78-2.4-4-3.43a73.47,73.47,0,0,1-8.72-8.2,13.06,13.06,0,0,1-3.5-8.59,11,11,0,0,1,2.8-7.54,9.53,9.53,0,0,1,7-3.08h.11a8.94,8.94,0,0,1,5.52,1.92A11,11,0,0,1,20,11.18,12.13,12.13,0,0,1,22.2,8.93,8.89,8.89,0,0,1,27.71,7h.11a9.53,9.53,0,0,1,7,3.08,11,11,0,0,1,2.8,7.54,13.06,13.06,0,0,1-3.5,8.59,73.53,73.53,0,0,1-8.73,8.19c-1.2,1-2.57,2.2-4,3.44a2.14,2.14,0,0,1-1.4.53ZM12.19,9.19a7.35,7.35,0,0,0-5.41,2.37,8.84,8.84,0,0,0-2.22,6.06,10.89,10.89,0,0,0,3,7.21A73.66,73.66,0,0,0,16,32.75c1.2,1,2.55,2.18,4,3.41l4-3.41a72.9,72.9,0,0,0,8.46-7.92,10.89,10.89,0,0,0,3-7.21,8.84,8.84,0,0,0-2.22-6.06,7.35,7.35,0,0,0-5.41-2.37,6.8,6.8,0,0,0-4.28,1.46,9.8,9.8,0,0,0-2.36,2.73A1.37,1.37,0,0,1,20,14a1.41,1.41,0,0,1-.7-.19,1.51,1.51,0,0,1-.47-.47,9.8,9.8,0,0,0-2.36-2.73,6.8,6.8,0,0,0-4.2-1.46Z"></path></svg>
							<span class="count js-wishlist-count js-wishlist-count-mobile">0</span>
						</a>

					</li>

					<li class="header-cart block-cart">
						<a href="/cart" class="icon" title="Giỏ hàng">
							<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40"><defs></defs><g id="ic-cart"><path id="shopping-bag" class="cls-1" d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z"></path></g></svg>
							<span class="count count_item_pr hidden-count">0</span>
						</a>
						<div class="top-cart-content">					
							<div class="CartHeaderContainer"><div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve"> <g> <g> <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path> </g> </g> <g> <g> <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path> </g> </g> <g> <g> <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path> </g> </g> <g> <g> <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path> </g> </g> <g> <g> <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path> </g> </g> <g> <g> <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path> </g> </g> <g> <g> <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path> </g> </g> <g> <g> <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path> </g> </g> <g> <g> <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg><p>Không có sản phẩm nào trong giỏ hàng của bạn</p></div></div>
						</div>
					</li>

				</ul>
			</div>
		</div>

	</div>
	<!--  mod-menu -->
	<x-main-menu /> 
	<!-- end-mod-menu -->
</header>
<!--  home blade  -->

@yield('content')
<!--  end home blade  -->

@yield('footer')
<link rel="preload" as="style" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/ajaxcart.scss.css?1696125396195" type="text/css">
<link href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/ajaxcart.scss.css?1696125396195" rel="stylesheet" type="text/css" media="all">
<div class="backdrop__body-backdrop___1rvky"></div>
<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/main.js?1696125396195">
<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/index.js?1696125396195">
<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/placeholdertypewriter.js?1696125396195">
<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/placeholdertypewriter.js?1696125396195" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/main.js?1696125396195" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/index.js?1696125396195" type="text/javascript"></script>

</body>