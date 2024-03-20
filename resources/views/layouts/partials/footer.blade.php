<footer id=layout-footer>
    <footer class=footer>
        <section class=footer__navbar>
            <div class=uk-container>
                <div class="uk-child-width-auto@s uk-flex-between uk-flex-middle" uk-grid="">

                    <div>
                        <ul>
                            <li><a href="/about">About us</a>
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