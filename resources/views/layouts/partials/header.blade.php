<!DOCTYPE html>
<html class=light lang=en>
	<head>
		<meta charset=utf-8>
		<title>{{ env('APP_NAME')}} - {{ env('TAGLINE') }}</title>
		<meta content=247-Cointrading name=author>
		<meta content="width=device-width, initial-scale=1.0" name=viewport>
		<meta content="{{ env('APP_URL') }}" property=og:url>
		<meta content=origin name=referrer>
		<link href="resources/cdn.bitpanda.com/media/redesign/favicon/favicon-32x32.png" rel=icon sizes=32x32 type=image/png>
		<link href="resources/cdn.bitpanda.com/media/redesign/favicon/favicon-16x16.png" rel=icon sizes=16x16 type=image/png>
		<meta content="IE=EmulateIE11" http-equiv=X-UA-Compatible>
		<link href="resources/cdn.bitpanda.com/index.html" rel=preconnect>
		<link href="resources/code.highcharts.com/index.html" rel=preconnect>
		<link href="resources/cdn.segment.com/index.html" rel=preconnect>
		<link as=font crossorigin=anonymous href="resources/cdn.bitpanda.com/media/fonts/bp-assets/bp-assets.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff2" rel=preload type=font/woff2>
		<style>
			@font-face {
			font-family: 'bp-assets';
			src:
			url("resources/cdn.bitpanda.com/media/fonts/bp-assets/bp-assets.woff2") format("woff2");
			font-weight: normal;
			font-style: normal;
			font-display: swap;
			}
		</style>
		<style>
			@font-face {
			font-family: EuclidSquare;
			src:
			url("resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff2") format("woff2"),
			url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff") format("woff");
			font-weight: normal;
			font-style: normal;
			font-display: swap;
			}
			@font-face {
			font-family: EuclidSquare;
			src:
			url("resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff2") format("woff2"),
			url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff") format("woff");
			font-weight: 500;
			font-style: normal;
			font-display: swap;
			}
			@font-face {
			font-family: EuclidSquare;
			src:
			url("resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff2") format("woff2");
			url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff") format("woff");
			font-weight: 600;
			font-style: normal;
			font-display: swap;
			}
		</style>
		<meta content="Trade in minutes from only $1.
			Your No.1 America broker for stocks, crypto, indices, ETFs and precious metals. Trade 24/7." name=description>
		<meta content="Bitpanda - Start investing today" name=title>
		{{-- 
		<link href="/" rel=canonical>
		<link href="/" hreflang=x-default rel=alternate>
		<link href="/" hreflang=en rel=alternate>
		<link href="de.html" hreflang=de rel=alternate>
		<link href="fr.html" hreflang=fr rel=alternate>
		<link href="es.html" hreflang=es rel=alternate>
		<link href="it.html" hreflang=it rel=alternate>
		<link href="pl.html" hreflang=pl rel=alternate>
		--}}
		<meta content="index, follow " name=robots>
		<meta content=article property=og:type>
		<meta content="{{ env('APP_NAME') }} - {{ env('TAGLINE') }}" property=og:title>
		<meta content="Trade in minutes from only 1$.
			Your N. 1 America Broker for stocks, crypto, indices, ETFs and precious metals. Trade 24/7." property=og:description>
		<meta content=# property=og:image>
		<link href="resources/cdn.bitpanda.com/app/v2/css/all.minb4e4.css?id=21c769637faa4e5e25cf" rel=stylesheet>
		<script src="resources/cdn.bitpanda.com/app/v2/js/head.min085f.js?id=e37b5634f1d9be3b8e80"></script>
		<script>
			function getUrlVars() {
			    var vars = {};
			    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
			        vars[key] = value;
			    });
			    return vars;
			}
			
			function getUrlParam(param) {
			    let value = "";
			    //console.log(window.location.href);
			    if (window.location.href.indexOf(param) > -1)
			        value = getUrlVars()[param];
			    return value;
			}
			
			function setCookie(name, value, days) {
			    var expires = "";
			    if (days) {
			        var date = new Date();
			        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			        expires = "; expires=" + date.toUTCString();
			    }
			    document.cookie = name + "=" + (value || "") + expires + "; domain=.bitpanda.com; path=/";
			}
			
			function getCookie(name) {
			    var nameEQ = name + "=";
			    var ca = document.cookie.split(';');
			    for (var i = 0; i < ca.length; i++) {
			        var c = ca[i];
			        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			    }
			    return null;
			}
			
			function eraseCookie(name) {
			    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=.bitpanda.com; path=/';
			}
			const s_id = getUrlParam('s_id');
			if (!!s_id) {
			    setCookie('s_id', s_id, 60);
			}
			const ref = getUrlParam('ref');
			if (!!ref) {
			    setCookie('ref', ref, 30);
			    eraseCookie('tag');
			    eraseCookie('s_id');
			}
			const tag = getUrlParam('tag');
			if (!!tag) {
			    setCookie('tag', tag, 30);
			    //eraseCookie('s_id');
			}
			const clickId = getUrlParam('irclickid');
			if (!!clickId) {
			    setCookie('irclickid', clickId, 30);
			}
			
		</script>
		<script>
			window.addEventListener('DOMContentLoaded', (event) => {
			    let hash = window.location.hash;
			    hash = hash.replace("##", "#");
			    hash = hash.replace("%23", "");
			    window.location.hash = hash;
			    const targetNode = document.querySelectorAll('.uk-switcher')[0];
			    if (typeof targetNode !== "undefined") {
			        const config = {
			            attributes: true,
			            childList: true,
			            subtree: true
			        };
			        const callback = function(mutationsList, observer) {
			            document.querySelectorAll(".uk-switcher > li").forEach(_li => {
			                if (_li.getAttribute('id') !== null) {
			                    _li.setAttribute("id", _li.getAttribute("id").replace("#", ""));
			                }
			            });
			
			            document.querySelectorAll("#tab-module > li > a").forEach(_a => {
			                if (_a.getAttribute('href') !== null) {
			                    _a.setAttribute("href", _a.getAttribute("href").replace("##", "#"));
			                }
			            });
			
			            observer.disconnect();
			        };
			        const observer = new MutationObserver(callback);
			        observer.observe(targetNode, config);
			    }
			});
			
		</script>
		<script>
			var _paq = window._paq = window._paq || [];
			/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
			    var u = "https://bitpanda.matomo.cloud/";
			    _paq.push(['setTrackerUrl', u + 'matomo.php']);
			    _paq.push(['setSiteId', '1']);
			    var d = document,
			        g = d.createElement('script'),
			        s = d.getElementsByTagName('script')[0];
			    g.async = true;
			    g.src = 'resources/cdn.matomo.cloud/bitpanda.matomo.cloud/matomo.js';
			    s.parentNode.insertBefore(g, s);
			})();
			
		</script>
		<script async src="resources/widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
		{{-- 
		<meta content=Bitpanda name=smartbanner:title>
		<meta content=Bitpanda name=smartbanner:author>
		<meta content=FREE name=smartbanner:price>
		<meta content=" - In Google Play" name=smartbanner:price-suffix-google>
		<meta content="- Now in App Store" name=smartbanner:price-suffix-apple>
		<meta content=https://cdn.bitpanda.com/media/android-chrome-192x192.png name=smartbanner:icon-google>
		<meta content=https://cdn.bitpanda.com/media/apple-touch-icon.png name=smartbanner:icon-apple>
		<meta content=SHOW name=smartbanner:button>
		<meta content=android,ios name=smartbanner:enabled-platforms>
		<meta content="https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&referrer=utm_source%3Dmobile%26utm_medium%3Dsmartbanner" name=smartbanner:button-url-google>
		<meta content="https://apps.apple.com/at/app/bitpanda/id1449018960?referrer=utm_source%3Dmobile%26utm_medium%3Dsmartbanner_apple" name=smartbanner:button-url-apple>
		--}}
		<script>
			let apiUrls = {
			    bpIcons: "https://bitpanda-broker-production-assets.s3-eu-west-1.amazonaws.com/static/cryptocoin/",
			    base: "https://api.bitpanda.com/v1/",
			    baseV2: "https://api.bitpanda.com/v2/",
			    baseV3: "https://api.bitpanda.com/v3/"
			}
			
		</script>
		<script>
			let utmTextReplace = {
			    utmParameter: '',
			    utmValue: '',
			    cssSelector: '',
			    text: '',
			}
			window.footer_banner = {
			    show_in_countries: ["TR"]
			}
			
		</script>
		<script src="resources/geoip-js.com/js/apis/geoip2/v2.1/geoip2.js"></script>
		<script>
			window.adjustSettings = {
			    appToken: '7hrkmq2yb3b4',
			    environment: 'production'
			}
			
		</script>
		<script type=application/ld+json>
			{
			    "@context": "https://schema.org",
			    "@graph": [{
			            "@type": "Organization",
			            "@id": "https:\/\/bitpanda.com\/#organization",
			            "name": "Bitpanda",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "sameAs": ["https:\/\/en.wikipedia.org\/wiki\/Bitpanda", "index.html\/\/www.facebook.com\/BITPANDA", "index.html\/\/twitter.com\/bitpanda", "index.html\/\/www.linkedin.com\/company\/bitpanda\/", "index.html\/\/www.wikidata.org\/wiki\/Q109391386", "index.html\/\/www.youtube.com\/c\/BitpandaOfficial", "index.html\/\/www.instagram.com\/bitpanda\/", "index.html\/\/www.reddit.com\/r\/bitpanda\/", "index.html\/\/vk.com\/bitpanda", "index.html\/\/apps.apple.com\/at\/app\/bitpanda-buy-bitcoin\/id1449018960", "index.html\/\/play.google.com\/store\/apps\/details?id=com.bitpanda.bitpanda", "https:\/\/t.me\/bitpanda_announcements"],
			            "logo": {
			                "@type": "ImageObject",
			                "@id": "https:\/\/bitpanda.com\/#logo",
			                "inLanguage": "en-US",
			                "url": "https:\/\/cdn.bitpanda.com\/media\/Ukraine\/U-bitpanda-logo.svg",
			                "width": 180,
			                "height": 180,
			                "caption": "Bitpanda - Cryptocurrency, Stocks, Metals, and Indices Exchange"
			            },
			            "image": {
			                "@id": "https:\/\/bitpanda.com\/#logo"
			            }
			        },
			        {
			            "@type": "WebSite",
			            "@id": "https:\/\/bitpanda.com\/#website",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "name": "Bitpanda - Cryptocurrency, Stocks, Metals, and Indices Exchange",
			            "description": "Invest in what you believe in",
			            "publisher": {
			                "@id": "https:\/\/bitpanda.com\/#organization"
			            },
			            "potentialAction": [{
			                "@type": "SearchAction",
			                "target": "https:\/\/www.bitpanda.com\/en\/search?query={search_term_string}",
			                "query-input": "required name=search_term_string"
			            }],
			            "inLanguage": "en-US"
			        },
			        {
			            "@type": "WebPage",
			            "@id": "https:\/\/bitpanda.com\/#webpage",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "name": "Bitpanda's user-friendly, trade-everything platform empowers you to invest in the stocks, cryptocurrencies and metals you want \u2014 with any amount of money",
			            "isPartOf": {
			                "@id": "https:\/\/bitpanda.com\/#website"
			            },
			            "about": {
			                "@id": "https:\/\/bitpanda.com\/#organization"
			            },
			            "datePublished": "2018-06-13T13:52:10+00:00",
			            "dateModified": "2022-05-20T10:39:00+00:00",
			            "description": "Trade in minutes with Bitpanda from only \u20ac1. Your No.1 America broker for stocks, crypto, indices, ETFs and precious metals. Trade 24\/7."
			        }
			    ]
			}
			
		</script>
		<script type=application/ld+json>
			{
			    "@context": "https://schema.org",
			    "@type": "BreadcrumbList",
			    "itemListElement": [
			        [{
			            "@type": "ListItem",
			            "position": 1,
			            "name": "Home",
			            "item": "https:\/\/www.bitpanda.com\/en"
			        }]
			    ]
			}
			
		</script>
    </head>
	<body class="default home light" style="position: unset;">
		<header id=layout-header>
			<header>
				<div class="bp-nav js-contains-anchor">
					<div class=bp-nav__container>
						<div class=util-flex-shrink-0><a href="/"><img alt=247-Cointrading class=lazyload data-src="resources/1/img/logo.png" height=40 width=136> </a> </div>
						<div class=util-visible-desktop>
							<ul class=bp-nav__navigation>
								<li>
									<div class=bp-nav__item>
										<div class=bp-nav__item__text>Invest</div>
										<div class=bp-dropdown>
											<ul class=bp-dropdown__grid>
												<li class=bp-dropdown__grid-list>
													<div class=bp-dropdown__title>Invest in:</div>
													<ul>
														<li>
															<a aria-current=true bp-expand=bp-expand-1 class=bp-dropdown__item href="#">
															<img alt="Cryptocurrencies &lt;small&gt;Buy, sell &amp; swap cryptocurrencies&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Cryptos.svg" width=36>
															</a>
														<li>
                                                            {{-- <li>
                                                            <li>
                                                            <li>
                                                            <li> --}}
													</ul>
                                                <li aria-expanded=true class=bp-dropdown__grid-list id=bp-expand-1>
                                                    <div class=bp-dropdown__title>Top 4 Cryptocurrencies:</div>
                                                    <ul>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="#">
                                                                <img alt="Bitcoin &lt;small&gt;BTC&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/asset-icons/asset-btc.svg" width=36>
                                                                <div> Bitcoin <small>BTC</small> </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="#">
                                                                <img alt="Ethereum &lt;small&gt;ETH&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/asset-icons/asset-eth.svg" width=36>
                                                                <div> Ethereum <small>ETH</small> </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="#">
                                                                <img alt="Bitpanda Ecosystem Token &lt;small&gt;BEST&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/asset-icons/asset-best.svg" width=36>
                                                                <div> Bitpanda Ecosystem Token <small>BEST</small> </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="#">
                                                                <img alt="Chainlink &lt;small&gt;LINK&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/asset-icons/asset-link.svg" width=36>
                                                                <div> Chainlink <small>LINK</small> </div>
                                                            </a>
                                                        <li>
                                                    </ul>
                                                <li aria-expanded=false class=bp-dropdown__grid-list id=bp-expand-2>
                                                <li aria-expanded=false class=bp-dropdown__grid-list id=bp-expand-3>
                                                    <div class=bp-dropdown__title>Top 4 ETFs</div>
                                                    <ul>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/etfs/top-50-USDo-stocks-USDostoxx50.html">
                                                                <img alt="Top 50 USDo Stocks" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/USDostoxx50.svg" width=36>
                                                                <div> Top 50 USDo Stocks </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/etfs/top-40-german-stocks-dax.html">
                                                                <img alt="Top 40 German Stocks" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/dax.svg" width=36>
                                                                <div> Top 40 German Stocks </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/etfs/top-100-british-stocks-ftse100.html">
                                                                <img alt="Top 100 British Stocks" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/ftse100.svg" width=36>
                                                                <div> Top 100 British Stocks </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/etfs/emerging-markets-stocks-msci-em.html">
                                                                <img alt="Emerging Markets Stocks" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/msci-em.svg" width=36>
                                                                <div> Emerging Markets Stocks </div>
                                                            </a>
                                                        <li>
                                                            <a class=bp-dropdown__link href="prices/etfs.html">
                                                                <div> See all ETFs </div>
                                                            </a>
                                                    </ul>
                                                <li aria-expanded=false class=bp-dropdown__grid-list id=bp-expand-4>
                                                    <div class=bp-dropdown__title>Our Crypto Indices</div>
                                                    <ul>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/bci-infrastructure-leaders-bciil.html">
                                                                <img alt="BCI Infrastructure Leaders" height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/22_06_Website_BCI_LandingPage_BCI%20Infra_36x36.svg" width=36>
                                                                <div> BCI Infrastructure Leaders </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/bci-defi-leaders-bcidl.html">
                                                                <img alt="BCI DeFi Leaders" height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/22_06_Website_BCI_LandingPage_BCI%20DeFi_36x36.svg" width=36>
                                                                <div> BCI DeFi Leaders </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/bci-media-entertainment-leaders-bciml.html">
                                                                <img alt="BCI Media &amp; Entertainment Leaders" height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/bcime-01.svg" width=36>
                                                                <div> BCI Media & Entertainment Leaders </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/bci-smart-contract-leaders-bcisl.html">
                                                                <img alt="BCI Smart Contract Leaders" height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/22_06_Website_BCI_LandingPage_BCI%20Smart_36x36.svg" width=36>
                                                                <div> BCI Smart Contract Leaders </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/crypto-index/bci10.html">
                                                                <img alt=BCI10 height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/22_06_Website_BCI_LandingPage_BCI%2010_36x36.svg" width=36>
                                                                <div> BCI10 </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/crypto-index/bci25.html">
                                                                <img alt=BCI25 height=36 src="resources/cdn.bitpanda.com/media/bci/navigation_icons/22_06_Website_BCI_LandingPage_BCI%2025_36x36.svg" width=36>
                                                                <div> BCI25 </div>
                                                            </a>
                                                        <li>
                                                            <a class=bp-dropdown__link href="prices/crypto-index.html">
                                                                <div> See all Crypto Indices </div>
                                                            </a>
                                                    </ul>
                                                <li aria-expanded=false class=bp-dropdown__grid-list id=bp-expand-5>
                                                    <div class=bp-dropdown__title>Our Precious Metals</div>
                                                    <ul>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/gold-xau.html">
                                                                <img alt=Gold height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/xau.svg" width=36>
                                                                <div> Gold </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/silver-xag.html">
                                                                <img alt=Silver height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/xag.svg" width=36>
                                                                <div> Silver </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/palladium-xpd.html">
                                                                <img alt=Palladium height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/xpd.svg" width=36>
                                                                <div> Palladium </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/platinum-xpt.html">
                                                                <img alt=Platinum height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/xpt.svg" width=36>
                                                                <div> Platinum </div>
                                                            </a>
                                                        <li>
                                                            <a class=bp-dropdown__link href="prices/precious-metals.html">
                                                                <div> See all Precious Metals </div>
                                                            </a>
                                                    </ul>
                                                <li aria-expanded=false class=bp-dropdown__grid-list id=bp-expand-6>
                                                    <div class=bp-dropdown__title>Top commodities*</div>
                                                    <ul>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/brent-crude-oil.html">
                                                                <img alt=Brent height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/brent.png" width=36>
                                                                <div> Brent </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/natural-gas-natgas.html">
                                                                <img alt="Natural gas" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/natgas.png" width=36>
                                                                <div> Natural gas </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/wheat.html">
                                                                <img alt=Wheat height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/wheat.png" width=36>
                                                                <div> Wheat </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/soybeans-soybean.html">
                                                                <img alt=Soybean height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/soybean.png" width=36>
                                                                <div> Soybean </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/copper.html">
                                                                <img alt=Copper height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/copper.png" width=36>
                                                                <div> Copper </div>
                                                            </a>
                                                        <li>
                                                            <a class="bp-dropdown__item bp-dropdown__item--single-line" href="prices/commodities/nickel.html">
                                                                <img alt=Nickel height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/nickel.png" width=36>
                                                                <div> Nickel </div>
                                                            </a>
                                                        <li>
                                                            <a class=bp-dropdown__link href="prices/commodities.html">
                                                                <div> See all commodities </div>
                                                            </a>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    <li>
									<div class=bp-nav__item>
										<a class=bp-nav__item__text href="features.html">Features</a>
										<div class=bp-dropdown>
											<ul class=bp-dropdown__grid>
												<li class=bp-dropdown__grid-list>
													<div class=bp-dropdown__title>Popular features</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Bitpanda Crypto Index &lt;small&gt;Never miss out on the next asset&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Crypto%20Index%20new.svg" width=36>
																<div> 247-Cointrading Crypto Index <small>Never miss out on the next asset</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="/">
																<img alt="Savings Plan &lt;small&gt;A savings plan for Bitcoin and more&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201306.svg" width=36>
																<div> Savings Plan <small>A savings plan for Bitcoin and more</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Bitpanda Commodities &lt;small&gt;Diversify your portfolio&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%2043-1new.svg" width=36>
																<div> 247-Cointrading Commodities <small>Diversify your portfolio</small> </div>
															</a>
													</ul>
													<div class=bp-dropdown__title>Save time &amp; money</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Swap &lt;small&gt;Instantly exchange digital assets&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201309.svg" width=36>
																<div> Swap <small>Instantly exchange digital assets</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Bitpanda Pay &lt;small&gt;Pay or send money with Bitpanda&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201310.svg" width=36>
																<div> 247-Cointrading Pay <small>Pay or send money with Bitpanda</small> </div>
															</a>
													</ul>
												<li class=bp-dropdown__grid-list>
													<div class=bp-dropdown__title>Benefits &amp; Rewards</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Bitpanda Card &amp; card benefits &lt;small&gt;A visa card with Bitcoin cashback&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201307.svg" width=36>
																<div> 247-Cointrading Card & card benefits <small>A visa card with Bitcoin cashback</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="BEST Rewards &lt;small&gt;Earn rewards for every transaction&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201308.svg" width=36>
																<div> BEST Rewards <small>Earn rewards for every transaction</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Staking &lt;small&gt;Start staking popular coins and tokens&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/2022_May_Product_Staking%20icon_2022_May_Product_Staking%20icon_36x36.svg" width=36>
																<div> Staking <small>Start staking popular coins and tokens</small> </div>
															</a>
													</ul>
													<div class=bp-dropdown__title>Cash in</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Affiliate programme &lt;small&gt;Join the Bitpanda Affiliate programme&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201311.svg" width=36>
																<div> Affiliate programme <small>Join the 247-Cointrading Affiliate programme</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<img alt="Tell-a-Friend programme &lt;small&gt;Invite your friends, earn rewards&lt;/small&gt;" height=36 src="resources/cdn.bitpanda.com/media/New%20navigation_Rebrand%203.0/Group%201312.svg" width=36>
																<div> Tell-a-Friend programme <small>Invite your friends, earn rewards</small> </div>
															</a>
													</ul>
											</ul>
										</div>
									</div>
								<li>
									<a href="/about" class="bp-nav__item text-black hover:text-slate-600 hover:decoration-none">
										<div class=bp-nav__item__text>About Us</div>
									</a>
								</li>
								<li>
									<a href="/career" class="bp-nav__item text-black hover:text-slate-600 hover:decoration-none">
										<div class=bp-nav__item__text>Career</div>
									</a>
								</li>

								<li>
									<a href="/security" class="bp-nav__item text-black hover:text-slate-600 hover:decoration-none">
										<div class=bp-nav__item__text>Security</div>
									</a>
								</li>
							
							</ul>
						</div>
						<div class=util-visible-desktop>
							<div><a class=bp-button href="login" title="Log in">Log in</a></div>
							<div><a class="bp-button bp-button--primary" href="register" target=_blank title=Sign-up>Sign-up</a></div>
						</div>
						<div class=util-visible-mobile>
							<div><a class="bp-button bp-button--primary" href="register" target=_blank title=Sign-up>Sign-up</a></div>
							<div>
								<button class="bp-button bp-button--transparent" onclick=toggleOffcanvas();>
									<svg class=bp-symbol style="--bp-symbol-size: 20px;">
										<use xlink:href=#icon-hamburger></use>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
				<script>
					function toggleTarget(e) {
					    const item = e.currentTarget;
					    const currentTarget = document.getElementById(e.currentTarget.getAttribute("bp-expand"));
					    if (currentTarget !== activeTarget) {
					        activeTarget.setAttribute("aria-expanded", "false");
					        currentTarget.setAttribute("aria-expanded", "true");
					        activeTarget = currentTarget;
					
					        activeItem.setAttribute("aria-current", "false");
					        item.setAttribute("aria-current", "true");
					        activeItem = item;
					    }
					}
					let activeTarget = document.getElementById("bp-expand-1");
					let activeItem = document.querySelectorAll("[bp-expand=bp-expand-1]")[0];
					document.querySelectorAll("[bp-expand]").forEach(function(item) {
					    item.addEventListener("mouseenter", toggleTarget, false);
					    item.addEventListener("focus", toggleTarget, false);
					});
					
				</script>
				<div aria-expanded=false class=bp-offcanvas>
					<div class=bp-offcanvas__header>
						<a href="/"><img alt=Bitpanda class=lazyload data-src="resources/1/img/logo.png " height=40 width=136> </a>
						<button class="bp-button bp-button--transparent" onclick=toggleOffcanvas();>
							<svg class=bp-symbol>
								<use xlink:href=#icon-close></use>
							</svg>
						</button>
					</div>
					<script defer src="resources/www.livecoinwatch.com/static/lcw-widget.js"></script>
					<div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10"></div>
					<div class=bp-offcanvas__body>
						<nav id=js-offcanvas-nav>
							<ul>
								<li aria-expanded=false>
									<span class=bp-offcanvas__item>
										Invest
										<svg class=bp-symbol>
											<use xlink:href=#icon-chevron-down></use>
										</svg>
									</span>
									<ul>
										<li><a href="login">Cryptocurrencies <small>Buy, sell & swap cryptocurrencies</small></a>
										<li><a href="login">Stocks* <small>Invest in stocks with zero commissions</small></a>
										<li><a href="login">ETFs* <small>Invest in ETFs 24/7</small></a>
										<li><a href="login">Crypto Indices <small>The world's first real crypto index</small></a>
										<li><a href="login">Commodities* <small>Invest in commodities 24/7</small></a>
									</ul>
								<li aria-expanded=false>
									<span class=bp-offcanvas__item>
										Company
										<svg class=bp-symbol>
											<use xlink:href=#icon-chevron-down></use>
										</svg>
									</span>
									<ul>
										<li><a href="about">About</a>
										<li><a href="security">Security</a>
										<li><a href="#">Press</a>
										<li><a href="#">Careers</a>
									</ul>
								<li aria-expanded=false>
									<span class=bp-offcanvas__item>
										About
										<svg class=bp-symbol>
											<use xlink:href=#icon-chevron-down></use>
										</svg>
									</span>
									<ul>
										<li><a href="login">login</a>
										<li><a href="#">Deposit</a>
										<li><a href="#">Plans</a>
									</ul>
							</ul>
						</nav>
					</div>
					<div class=bp-offcanvas__footer><a class="bp-button bp-button--large" href="login" title="Log in">Log in</a> <a class="bp-button bp-button--large bp-button--primary" href="register" target=_blank title=Sign-up>Sign-up</a></div>
				</div>
				<script>
					function minimiseAll() {
					    document.querySelectorAll("#js-offcanvas-nav > ul > li").forEach(function(li) {
					        li.setAttribute("aria-expanded", false);
					    })
					}
					document.querySelectorAll("#js-offcanvas-nav > ul > li").forEach(function(li) {
					    li.addEventListener("click", function(e) {
					        if (e.currentTarget.getAttribute("aria-expanded") === "true") {
					            e.currentTarget.setAttribute("aria-expanded", false);
					        } else {
					            minimiseAll();
					            e.currentTarget.setAttribute("aria-expanded", true);
					        }
					    });
					})
					
					function toggleOffcanvas(e) {
					    const offcanvas = document.querySelectorAll(".bp-offcanvas")[0];
					    if (offcanvas.getAttribute("aria-expanded") === "false") {
					        offcanvas.setAttribute("aria-expanded", "true");
					    } else {
					        offcanvas.setAttribute("aria-expanded", "false");
					    }
					}
					
					function changeLanguage(e) {
					    document.location = e.value;
					}
					
				</script>
			</header>
			<div id=mobile-nav uk-offcanvas="overlay: true;">
				<div class=uk-offcanvas-bar>
					<div class=offcanvas-logo-wrapper><a class=navbar-logo href="/"><img alt="Bitpanda Logo" class=lazyload data-src="resources/1/img/logo.png "> </a> <a class=uk-offcanvas-close type=button><span class="bp-icon bp-icon--close"></span> </a></div>
					<ul class="uk-nav uk-nav-default" uk-nav="">
						<li class=uk-parent>
							<a href="/index#">Invest</a>
							<ul class=uk-nav-sub>
								<li><a href="/"> Invest in: </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="/index#">Prices</a>
							<ul class=uk-nav-sub>
								<li><a href="#"> Cryptocurrency prices </a></li>
								<li><a href="#"> Crypto Index prices </a></li>
								<li><a href="#"> Stock* prices </a></li>
								<li><a href="#"> ETF* prices </a></li>
								<li><a href="#"> Metals prices </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="/index#">Features</a>
							<ul class=uk-nav-sub>
								<li><a href="#"> Popular features </a></li>
								<li><a href="#"> Save time &amp; money </a></li>
								<li><a href="#"> Benefits &amp; Rewards </a></li>
								<li><a href="#"> Cash in </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="#">Company</a>
							<ul class=uk-nav-sub>
								<li><a href="about"> About </a></li>
								<li><a href="security"> Security </a></li>
								<li><a href="career"> Careers </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="#">Help</a>
							<ul class=uk-nav-sub>
								<li><a href="register"> Get started </a>
								<li><a href="#"> Payment methods and limits </a>
								<li><a href="#"> Privacy policy </a>
								<li><a href="#"> Helpdesk </a>
							</ul>
                        </li>
					</ul>
					<ul class="bp-offcanvas-buttons uk-nav uk-nav-default" uk-nav="">
						<div>
							<li><a class="uk-button uk-button-primary uk-width-1-1" href="register">Sign-up</a></li>
							<li class=uk-margin-small-top><a class="uk-button uk-button-secondary uk-width-1-1" href="login">Log in</a></li>
						</div>
					</ul>
				</div>
			</div>
			<script>
				const ENTER_KEY_CODE = 13;
				$(document).ready(function() {
				    $('#search-input-modal').keydown(function(event) {
				        const keyCode = (event.keyCode ? event.keyCode : event.which);
				        if (keyCode === ENTER_KEY_CODE) {
				            const searchFilter = '' || '';
				            const searchLink = `/search?${searchFilter.length === 0 ? '' : 'filter=' + searchFilter + '&'}query=${$(this).val()}`;
				            document.location.href = searchLink;
				        }
				    });
				});
				
			</script>
		</header>