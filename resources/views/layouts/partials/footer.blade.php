<footer id=layout-footer>
    <footer class=footer>
        {{-- <section class=footer__main>
            <div class=uk-container>
                <div uk-grid="">
                    <div class="uk-flex uk-width-auto@s uk-width1-1"><a href="https_/247cointrading.com/index.html"><img alt="{{ env('APP_NAME') }}" class=lazyload data-src="resources/1/img/logo.png" height=40 width=136> </a> </div>
                </div>
                <div uk-grid="">
                    <div class=uk-width-1-1>
                        <nav class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid="">
                            <div class=footer__main__nav>
                                <span class=footer__main__nav__title> Invest </span>
                                <ul>
                                    <li><a href="#l">Cryptocurrencies</a>
                                    <li><a href="#">Crypto Indices</a>
                                    <li><a href="#">Stocks*</a>
                                    <li><a href="#">ETFs*</a>
                                    <li><a href="#">Metals</a>
                                    <li><a href="#">Commodities*</a>
                                </ul>
                            </div>
                            <div class=footer__main__nav>
                                <span class=footer__main__nav__title> Earn </span>
                                <ul>
                                    <li><a href="#">Staking</a>
                                    <li><a href="#">BEST</a>
                                    <li><a href="#">Tell-a-Friend</a>
                                    <li><a href="#">Affiliate programme</a>
                                </ul>
                            </div>
                            <div class=footer__main__nav>
                                <span class=footer__main__nav__title> Learn </span>
                                <ul>
                                    <li><a href="#" target=_blank>Academy</a>
                                    <li><a href="index.html#" target=_blank>Maker and taker fees</a>
                                    <li><a href="#" target=_blank>6 questions about Bitcoin </a>
                                    <li><a href="#" target=_blank>Buy my first digital assets</a>
                                    <li><a href="#">What are NFTs</a>
                                </ul>
                            </div>
                            <div class=footer__main__nav>
                                <span class=footer__main__nav__title> Features </span>
                                <ul>
                                    <li><a href="#">Payments</a>
                                    <li><a href="#">Savings plan</a>
                                    <li><a href="#">Swap</a>
                                    <li><a href="#">Plus</a>
                                    <li><a href="#">Security</a>
                                </ul>
                            </div>
                            <div class=footer__main__nav>
                                <span class=footer__main__nav__title> Products </span>
                                <ul>
                                    <li><a href="#">Card</a>
                                    <li><a href="#">Bitpanda To Go</a>
                                    <li><a href="#">BEST</a>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class=footer__navbar>
            <div class=uk-container>
                <div class="uk-child-width-auto@s uk-flex-between uk-flex-middle" uk-grid="">

                    <div>
                        <ul>
                            <li><a href="/about">About us</a>
                            <li><a href="/career">Career</a>

                        </ul>
                    </div>
                    <div>
                        <ul class=footer__social>
                            <li><a class="footer__social--facebook footer__social__icon" href="#"></a>
                            <li><a class="footer__social--twitter footer__social__icon" href="#"></a>
                            <li><a class="footer__social--telegram footer__social__icon" href="#"></a>
                            <li><a class="footer__social--reddit footer__social__icon" href="#"></a>
                            <li><a class="footer__social--linkedin footer__social__icon" href="#"></a>
                            <li><a class="footer__social--youtube footer__social__icon" href="#"></a>
                            <li><a class="footer__social--discord footer__social__icon" href="#"></a>
                            <li><a class="footer__social--instagram footer__social__icon" href="#"></a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__navbar footer__navbar--sm footer__navbar__gradient">
            <div class=uk-container>
                <div class=uk-flex-between uk-grid="">

                    <div class="uk-text-center uk-text-right@m uk-width-1-1 uk-width-auto@m"><span>&copy;Copyright {{ env('COPYRIGHT') }} <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a></span> </div>
                </div>
            </div>
        </section>
    </footer>
</footer>
<section class=bp-banner__container>
    <div class="bp-banner bp-banner--hidden" id=cookie-banner>
        <div class=bp-banner__content>
            <div class=bp-banner__content__text>
                <div>
                    <h4>The website uses cookies.</h4>
                    We use cookies to optimize our services. The information we collect is used by us as part of our EU-wide activities. <a class=cookie-policy-button href="#" target=_blank>Cookie policy</a>
                </div>
                <div class=bp-banner__cookie-settings id=cookie-settings-modal>
                    <div>
                        <h5 class=cookie-settings__light-text>Cookie settings</h5>
                        <ul toggle=.uk-accordion-title uk-accordion="">
                            <li>
                                <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                    <span class="cookie-settings__accordion-title uk-accordion-title">Essential cookies</span>
                                    <p class=cookie-settings__light-text>Always active
                                </div>
                                <p class="cookie-settings-description uk-accordion-content"> As the name would suggest, some cookies on our website are essential. They are necessary to remember your settings when using Bitpanda, (such as privacy or language settings), to protect the platform from attacks, or simply to stay logged in after you originally log in. You have the option to refuse, block or delete them, but this will significantly affect your experience using the website and not all our services will be available to you.
                                    <hr>
                            <li>
                                <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                    <span class="cookie-settings__accordion-title uk-accordion-title">Performance cookies</span>
                                    <div class="cookie-settings__switch-block performance-cookies-switch"><span class="active-inactive-text cookie-settings__light-text"><span class=active>Active</span> <span class=inactive>Inactive</span></span> <label class="bp-switch uk-margin-small-right" for=performance-cookies-check><input id=performance-cookies-check type=checkbox> <span class=bp-switch__slider></span></label></div>
                                </div>
                                <p class="cookie-settings-description uk-accordion-content"> We use such cookies and similar technologies to collect information as users browse our website to help us better understand how it is used and then improve our services accordingly. It also helps us measure the overall performance of our website. We receive the date that this generates on an aggregated and anonymous basis. Blocking these cookies and tools does not affect the way our services work, but it does make it much harder for us to improve your experience.
                                    <hr>
                            <li>
                                <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                    <span class="cookie-settings__accordion-title uk-accordion-title">Advertisement cookies</span>
                                    <div class="ad-cookies-switch cookie-settings__switch-block"><span class="active-inactive-text cookie-settings__light-text"><span class=active>Active</span> <span class=inactive>Inactive</span></span> <label class="bp-switch uk-margin-small-right" for=ad-cookies-check><input id=ad-cookies-check type=checkbox> <span class=bp-switch__slider></span></label></div>
                                </div>
                                <p class="cookie-settings-description uk-accordion-content"> These cookies are used to provide you with adverts relevant to Bitpanda. The tools for this are usually provided by third parties. With the help of these cookies and such third parties, we can ensure for example, that you don’t see the same ad more than once and that the advertisements are tailored to your interests. We can also use these technologies to measure the success of our marketing campaigns. Blocking these cookies and similar technologies does not generally affect the way our services work. Please note, however, that while you’ll still see advertisements about Bitpanda on websites, the adverts will no longer be personalised for you.
                        </ul>
                    </div>
                </div>
                <div class=cookies_buttons>
                    <button class="uk-button uk-button-default uk-button-medium" id=bpCookieAcceptButton>Accept all cookies</button> <button class="uk-button uk-button-default uk-button-medium" id=bpCookieSaveButton>Save settings</button>
                    <div class=cookies-settings-link><a class=cookie-settings-button href="features.html#cookie-settings-modal" uk-toggle="cls: cookie-banner__settings--visible;">Settings</a></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const segment_key = "4R4o0hpahOARcVhpszPnj7cD2ehz1Ys3";
        const google_analytics_property = "UA-55274179-2";

    </script>
</section>
<div class="search-container uk-modal-full" id=search-modal uk-modal="">
    <div class=uk-modal-dialog>
        <button class="uk-close-large uk-modal-close-full" type=button uk-close=""></button>
        <div class=uk-padding-large>
            <input class=search-container--input id=search-input-modal placeholder="Type to search" type=search>
            <div class="blog-module search-container--results uk-child-width-1-3@m uk-grid" id=search-results></div>
        </div>
    </div>
</div>
<script async src="resources/cdn.bitpanda.com/app/v2/js/all.min3b73.js?id=67e4d4319fbaeabb283e"></script>
<script async src="resources/cdn.bitpanda.com/app/v2/js/stock.min3cea.js?id=72bce0a791e192ad0fb0"></script>
<script>
    var refAtt = getUrlParam('ref') || getCookie('ref');
    var tagAtt = getUrlParam('tag') || getCookie('tag');

    if (refAtt && tagAtt) {
        var androidLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "?tag%3D" + tagAtt + "&apn=com.bitpanda.bitpanda&ofl=https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
        var iosLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "?tag%3D" + tagAtt + "&apn=com.bitpanda.bitpanda&ofl=https://apps.apple.com/at/app/bitpanda/id1449018960?ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
        $('.android-button').attr("href", androidLink);
        $('.ios-button').attr("href", iosLink);
    } else if (refAtt) {
        var androidLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "&apn=com.bitpanda.bitpanda&ofl=https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
        var iosLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "&apn=com.bitpanda.bitpanda&ofl=https://apps.apple.com/at/app/bitpanda/id1449018960?ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
        $('.android-button').attr("href", androidLink);
        $('.ios-button').attr("href", iosLink);
    }

</script>
<script async src="resources/cdn.bitpanda.com/app/v2/js/dotcom-components/dotcom-components.esmcb35.js?id=418046627d829dcf7600" type=module></script>
<script async nomodule="" src="resources/cdn.bitpanda.com/app/v2/js/dotcom-components/dotcom-components165a.js?id=0b52396aaf0e4308e3af"></script>
<div class=fa_OyCkAkzwJOc8Gw2AUwuC>
    <script>
        //<! [CDATA[
        window._fa = window._fa || [];
        window._fa.push({
            id: "OyCkAkzwJOc8Gw2AUwuC"
        });
        (function(d) {
            var s = d.createElement("script");
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//www.fndsda.net/beige.js";
            var a = d.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(s, a)
        }(document));
        //]]>

    </script>
</div>
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink style="display: none;">
    <symbol id=icon-close viewbox="0 0 15.414 15.414">
        <g fill=currentColor>
            <path d="m14 15.414-14-14L1.414 0l14 14Z"></path>
            <path d="M1.414 15.414 0 14 14 0l1.414 1.414Z"></path>
        </g>
    </symbol>
    <symbol id=icon-magnifier viewbox="0 0 16.922 16.922">
        <path d="M12.418 10.922a6.9 6.9 0 1 0-1.5 1.5l4.5 4.5 1.5-1.5Zm-5.544.711a4.759 4.759 0 1 1 4.759-4.759 4.764 4.764 0 0 1-4.759 4.76Z" fill=currentColor></path>
    </symbol>
    <symbol id=icon-globe viewbox="0 0 18.467 18.467">
        <path d="M9.233 18.467A9.233 9.233 0 1 0 0 9.233a9.244 9.244 0 0 0 9.233 9.234Zm0-1.5c-.777 0-1.81-1.628-2.307-4.359h4.614c-.496 2.731-1.529 4.359-2.307 4.359Zm2.581-.451a12.588 12.588 0 0 0 1.245-3.905h3.123a7.783 7.783 0 0 1-4.368 3.904Zm5.152-7.282a7.688 7.688 0 0 1-.239 1.874h-3.481c.055-.622.087-1.252.087-1.874s-.032-1.254-.087-1.874h3.481a7.688 7.688 0 0 1 .24 1.873Zm-.787-3.374h-3.122a12.469 12.469 0 0 0-1.245-3.905 7.752 7.752 0 0 1 4.368 3.904ZM9.233 1.5c.777 0 1.81 1.628 2.307 4.359H6.926C7.423 3.128 8.456 1.5 9.233 1.5Zm2.51 5.859a20.174 20.174 0 0 1 0 3.748h-5.02a20.118 20.118 0 0 1-.002-3.748ZM6.652 1.951a12.588 12.588 0 0 0-1.245 3.905H2.284a7.783 7.783 0 0 1 4.369-3.904ZM1.5 9.233a7.688 7.688 0 0 1 .239-1.874H5.22c-.055.622-.087 1.252-.087 1.874s.032 1.254.087 1.874H1.74a7.688 7.688 0 0 1-.24-1.874Zm3.91 3.374a12.469 12.469 0 0 0 1.245 3.905 7.757 7.757 0 0 1-4.366-3.905Z" fill=currentColor></path>
    </symbol>
    <symbol id=icon-chevron-up viewbox="0 0 11.718 7.982">
        <path d="m5.858 0 5.861 5.86-2.122 2.122-3.739-3.739-3.736 3.739L0 5.861Z" fill=currentColor></path>
    </symbol>
    <symbol id=icon-chevron-down viewbox="0 0 11.569 7.904">
        <path d="M5.784 7.904 0 2.121 2.121 0l3.663 3.662L9.448 0l2.121 2.121Z" fill=currentColor></path>
    </symbol>
    <symbol id=icon-hamburger viewbox="0 0 96 96">
        <path d="M0 12h96v12H0zM0 42h96v12H0zM0 72h96v12H0z" fill=currentColor></path>
    </symbol>
</svg>
