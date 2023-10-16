@extends('layouts.en')
    @section('content')
        <section id=layout-content tabindex=-1>
            <section class=bp-breadcrumb>
                <div class=uk-container>
                    <ul class=uk-breadcrumb>
                        <li><a href="../https_/247cointrading.com/index.html">Home</a>
                        <li><span>About {{ env('APP_NAME') }}</span>
                    </ul>
                </div>
            </section>
            <section class="default uk-padding-remove-bottom uk-section">
                <div class=default>
                    <section class="bp-teaser bp-teaser--reverse">
                        <picture>
                            <source data-srcset=https://cdn.bitpanda.com/media/Bitpanda%20FOUNDERS_ChristianTrummer_PaulKlanschek_EricDemuth.jpg type=image/webp>
                            <source data-srcset=https://cdn.bitpanda.com/media/Bitpanda%20FOUNDERS_ChristianTrummer_PaulKlanschek_EricDemuth.jpg type=image/png>
                            <img class="bp-teaser__image lazyload" data-src=https://cdn.bitpanda.com/media/Bitpanda%20FOUNDERS_ChristianTrummer_PaulKlanschek_EricDemuth.jpg height=720 width=1280>
                        </picture>
                        <div uk-lightbox="autoplay: true; video-autoplay: true;"><a class=bp-teaser__video-play-button href="https://youtu.be/qd9Fp64ppzU"></a> </div>
                        <div class=bp-teaser__content>
                            <div>
                                <p class=bp-preheader>About us
                                <h1>Investing. <br>Now available to everyone.</h1>
                                <p dir=ltr>At 247-Cointrading, we see investing differently. Today’s financial system is complex, exclusive and expensive - making it hard for the typical person to start investing.&nbsp;
                                <p dir=ltr>So, we’re building a platform without digital walls and complex barriers. A platform that empowers you to see new possibilities for your money - and helps make them a reality.
                            </div>
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
                    </section>
                </div>
            </section>
            <hr class=uk-margin-remove>
            <section class="uk-padding-remove-bottom uk-padding-remove-top uk-section">
                <div class="uk-container uk-flex uk-flex-center">
                    <section class=uk-section>
                        <div class=uk-container>
                            <div class="uk-child-width-1-3@m uk-flex-center uk-grid" uk-grid="">
                                <div>
                                    <div class="uk-flex uk-flex-column uk-flex-middle uk-tile">
                                        <div class="uk-border-circle uk-overflow-hidden"><img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/redesign/bitpanda-ceoeric-demuth-2.jpg> </div>
                                        <h2 class="uk-h4 uk-margin-remove-bottom uk-margin-small-top uk-text-bold">John Deuth</h2>
                                        <small class=uk-margin-small-bottom>CEO</small> <a href="#"><span class="bp-icon bp-icon--small bp-icon--twitter"></span> </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-column uk-flex-middle uk-tile">
                                        <div class="uk-border-circle uk-overflow-hidden"><img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/redesign/Bitpanda%20CEO_Paul%20Klanschek.jpg> </div>
                                        <h2 class="uk-h4 uk-margin-remove-bottom uk-margin-small-top uk-text-bold">Lusi Alex</h2>
                                        <small class=uk-margin-small-bottom>CEO</small> <a href="#"><span class="bp-icon bp-icon--small bp-icon--twitter"></span> </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-column uk-flex-middle uk-tile">
                                        <div class="uk-border-circle uk-overflow-hidden"><img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/redesign/bitpanda-ctochristian-trummer-1.jpg> </div>
                                        <h2 class="uk-h4 uk-margin-remove-bottom uk-margin-small-top uk-text-bold">Christian Tummy</h2>
                                        <small class=uk-margin-small-bottom>CTO</small> <a href="#"><span class="bp-icon bp-icon--small bp-icon--twitter"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <hr class=uk-margin-remove>
            <section class="default uk-padding-small-bottom uk-section">
                <div class="default uk-container">
                    <div class="uk-text-left uk-text-left@m">
                        <h2 dir=ltr>Who we are</h2>
                        <p dir=ltr>247-Cointrading was founded in 2014 in Vienna, Austria with the aim of making investing accessible for everyone. Our goals since day one was to reimagine what it means to invest, by making simple, easy-to-use financial products for everyone.
                        <p dir=ltr>Now, 8 years later, and with more than 700 team members and 4 million users, we're one of the fastest growing fintechs in Us. With a PSD2 payment service provider licence and E-Money licence, state-of-the-art security and streamlined user experience, we make it possible for both first-time investors and seasoned experts to invest in what they believe in.&nbsp;
                        <p dir=ltr>Our user-friendly, trade-everything platform empowers you to invest in the stocks, cryptocurrencies and metals you want — with any amount of money.
                    </div>
                </div>
            </section>
            <section class="default uk-padding-small-top uk-section">
                <div class=uk-container>
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center uk-flex-middle uk-grid uk-grid-match" uk-grid="">
                        <div class="uk-flex uk-flex-center">
                            <div class="text-muted uk-text-center@m">
                                <h3><strong>700+</strong></h3>
                                <p>Team members
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="text-muted uk-text-center@m">
                                <h3><strong>50+</strong></h3>
                                <p>Nationalities in the team
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-center">
                            <div class="text-muted uk-text-center@m">
                                <h3><strong>1,570,000+</strong></h3>
                                <p>Users
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class=uk-margin-remove>
            <section class="default uk-section">
                <div class="uk-container uk-flex uk-flex-center">
                    <section class="module-text uk-section uk-text-center@m uk-text-left">
                        <div class=module-text__content>
                            <h2>We’re changing the way the world views investing</h2>
                            <p>247-Cointrading is backed by a team of world-class experts and the best technology talent. To stay at the forefront of innovation.
                        </div>
                        <div class="js-bp3-cta-button module-text__buttons"><span class=primary-button><a class="desktop-button tk-get-started-button uk-button uk-button-large uk-button-primary" href="../app/login.html"> Join us </a> <a class="mobile-button uk-button uk-button-large uk-button-primary" href="../app/login.html"> Join us </a></span> </div>
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
            </section>
            <hr class=uk-margin-remove>
            <section class="default uk-padding-remove-bottom uk-section">
                <div class="default uk-container">
                    <div class="uk-text-left uk-text-left@m">
                        <h2><strong>What we do</strong></h2>
                        <p>Our user-friendly, trade-everything platform empowers you to invest in the stocks, <br>cryptocurrencies and metals you want, with any amount of money.
                    </div>
                </div>
            </section>
            <section class="default uk-padding-small-top uk-section">
                <div class=uk-container>
                    <div class="uk-child-width-1-2@m uk-grid" uk-grid="">
                        <div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p class=uk-text-lead>Buy, sell or swap 2000+ digital assets like crypto, stocks, precious metals, ETFs and crypto indices.
                                    </div>
                                </div>
                            </div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p class=uk-text-lead>Automate regular investments with savings plans
                                    </div>
                                </div>
                            </div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p class=uk-text-lead>Invest in any asset on 247-Cointrading from €1
                                    </div>
                                </div>
                            </div>
                            <section class="module-text uk-padding-small-bottom uk-padding-small-top uk-section uk-text-center uk-text-left@m">
                                <div class=module-text__content></div>
                                <div class="js-bp3-cta-button module-text__buttons"><span class=primary-button><a class="desktop-button tk-get-started-button uk-button uk-button-large uk-button-primary" href="../app/login.html"> Start investing today </a> <a class="mobile-button uk-button uk-button-large uk-button-primary" href="../app/login.html"> Start investing today </a></span> </div>
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
                        <div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p class=uk-text-lead>Wide range of payment and payout providers
                                    </div>
                                </div>
                            </div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p class=uk-text-lead>Use EUR, CHF, GBP, USD, PLN, DKK, SEK, HUF, CZK or TRY to pay or cash out
                                    </div>
                                </div>
                            </div>
                            <div class="module-list__item uk-grid uk-grid-small" uk-grid="">
                                <div class=uk-width-auto>
                                    <div><img alt="List icon" class=lazyload data-src=" https://cdn.bitpanda.com/media/icons/icon-bullet-purpule.svg " title="List icon"> </div>
                                </div>
                                <div class=uk-width-expand>
                                    <div>
                                        <p dir=ltr>247-Cointrading is a registered digital assets service provider with the Austrian Financial Market Authority (FMA) under FM-GwG and with the French Autorité des marchés financiers (AMF) under PACTE law. The Bitpanda Payments GmbH holds a PSD2 licence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="default footerbanner uk-section" style="display: none;">
                <div class=uk-container>
                    <div class=uk-grid>
                        <div class="uk-margin-medium-top uk-text-small">
                            <p><em>247-Cointrading ve grup şirketleri (247-Cointrading) Türk Parasının Kıymetini’nin Korunması Hakkında 32 sayılı Karar’ın 2/b maddesine göre Türkiye’de yerleşik sayılan hiçbir kişiye yönelik olarak 6362 sayılı Sermaye Piyasası Kanunu başta olmak üzere Türkiye Cumhuriyeti Devleti mevzuatı hükümleri gereği Türkiye’de faaliyet izni gerektiren hiçbir sermaye piyasası faaliyetine dair hizmet sunmamaktadır. Şayet Bitpanda’nın yabancı sermaye piyasalarında vermiş olduğu hizmetlerden Türkiye’de yerleşik kişilerin faydalandığı tespit edilecek olursa tüm zararları kullanıcıya ait olmak üzere bu hizmetler ivedilikle sona erdirilecektir.</em>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    @endsection