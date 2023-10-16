@extends('layouts.en')
@section('content')

    <section id=layout-content tabindex=-1>
        <section class="background-gray uk-padding-remove-bottom uk-padding-small-top uk-section">
            <div class=uk-container>
                <div class="uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                    <div class="uk-flex uk-flex-center">
                        <picture>
                            <source data-srcset=https://cdn.bitpanda.com/media/Feature%203.0/security-page/bp_security_Redshift-Static_Main_main-cam_MP14-M1P-08094_2022-11-14_10-42-18_0001_SMALLER.webp type=image/webp>
                            <source data-srcset=https://cdn.bitpanda.com/media/Feature%203.0/security-page/bp_security_Redshift-Static_Main_main-cam_MP14-M1P-08094_2022-11-14_10-42-18_0001_SMALLER.png type=image/png>
                            <img alt="" class="lazyload uk-align-center" data-src=https://cdn.bitpanda.com/media/Feature%203.0/security-page/bp_security_Redshift-Static_Main_main-cam_MP14-M1P-08094_2022-11-14_10-42-18_0001_SMALLER.png>
                        </picture>
                    </div>
                    <div class="uk-flex uk-flex-center">
                        <section class="module-text uk-padding-remove-bottom uk-section uk-text-left uk-text-left@m">
                            <div class=module-text__content>
                                <h1>Why your assets are safe with us</h1>
                                <p>Customer safety is our first goal - this is how we approach security.
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="uk-padding-remove-bottom uk-padding-small-top uk-section">
            <div class="default uk-container">
                <section class="module-steps module-steps--has-image module-steps--image-48x48 module-steps--is-centered uk-section">
                    <div class=uk-container>
                        <div class="module-steps__main uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-4@l uk-flex-center uk-flex-top uk-grid uk-grid-match">
                            <div class="module-steps__step module-steps__step--has-image">
                                <div class="module-steps__step-image uk-text-center">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Community.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-center">
                                    <h3>+1,570,000</h3>
                                    <div>
                                        <p>users
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-center">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Regulated.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-center">
                                    <h3>10</h3>
                                    <div>
                                        <p dir=ltr>United States of America licences &amp; registrations
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-center">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Trusted.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-center">
                                    <h3>7.7k</h3>
                                    <div>
                                        <p>trusted reviews
                                    </div>
                                </div>
                            </div>
                            <div class="module-steps__step module-steps__step--has-image module-steps__step-border">
                                <div class="module-steps__step-image uk-text-center">
                                    <picture><img alt="" class="lazyload module-steps__image-background" data-src=https://cdn.bitpanda.com/media/Website%203.0/Home%203.0/Secure.svg uk-img=""> </picture>
                                </div>
                                <div class="module-steps__step-content uk-text-center">
                                    <h3>All</h3>
                                    <div>
                                        <p><a href="#">our funds are regularly validated</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="module-steps__footer uk-text-center">
                            <div class="js-bp3-cta-button module-text__buttons uk-text-left"></div>
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
        <section class="uk-padding-remove-bottom uk-padding-remove-top uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-center uk-text-center@m">
                    <div class=module-text__content>
                        <h2><strong>Security at {{ env('APP_NAME') }}</strong></h2>
                        <p><br>
                    </div>
                </section>
            </div>
        </section>
        <div class="default uk-padding-remove-top uk-section">
            <div class=uk-container>
                <div class=bp3-grid style="--bp3-grid-template-columns:1fr 1fr;--bp3-grid-template-columns-tablet:1fr 1fr">
                    <div class="bp3-card bp3-card--black bp3-card--column bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>Financial Transparency</h4>
                            <p>Not only are we the leading United States crypto investment platform, we are also one of the most regulated. We believe in doing things the right way, not the easy way, which is why we choose to be fully transparent, to acquire licences that see us monitored by multiple financial market authorities, and to have our funds and business practices regularly validated by external parties.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--green bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>User data protection</h4>
                            <p>{{ env('APP_NAME') }} only processes your personal data for the purposes permitted according to GDPR. We do not use personal data for automated decision-making, including profiling, and we have several security measures in place to make sure your data is safely stored and processed.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--green bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>Regulations, licences, registrations</h4>
                            <p>The {{ env('APP_NAME') }} Group diligently follows United States laws and regulations. We operate our businesses based on various VASP registrations, as well as MiFID II, E-Money and PSD II licences amongst all our core markets.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--black bp3-card--column bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>Asset protection</h4>
                            <p>We prioritise keeping your assets safe, incorporating multiple security measures to protect them from potential threats. Crypto assets are stored in highly-secure cold storage facilities that are examined by an external auditor. Your assets are yours.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--black bp3-card--column bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>Advanced Encryption</h4>
                            <p>{{ env('APP_NAME') }} infrastructure and systems are secured with the most modern encryption technologies and supported by our dedicated security teams.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                    <div class="bp3-card bp3-card--column bp3-card--green bp3-card--image-bottom-right">
                        <div class=bp3-card__content>
                            <h4>24/7 Coverage</h4>
                            <p>As the markets are open 24/7, so are we. Our Operations, Security and Engineering teams operate on a 24/7 coverage model to respond to any changes within the markets.
                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="default uk-section">
            <div class="uk-container uk-flex uk-flex-right">
                <section class=bp-teaser>
                    <picture>
                        <source data-srcset=https://cdn.bitpanda.com/media/security/Thumbnail_Licences_EN_16x9_Website-modified.png type=image/webp>
                        <source data-srcset=https://cdn.bitpanda.com/media/security/Thumbnail_Licences_EN_16x9_Website-modified.png type=image/png>
                        <img class="bp-teaser__image lazyload" data-src=https://cdn.bitpanda.com/media/security/Thumbnail_Licences_EN_16x9_Website-modified.png height=720 width=1280>
                    </picture>
                    <div uk-lightbox="autoplay: true; video-autoplay: true;"><a class=bp-teaser__video-play-button href="https://www.youtube.com/watch?v=lFfUyv_Go4k"></a> </div>
                    <div class=bp-teaser__content>
                        <div>
                            <h3>Which licences should a trustworthy crypto broker have?</h3>
                        </div>
                        <div class="js-bp3-cta-button module-text__buttons uk-text-left"></div>
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
        <section class="default uk-section">
            <div class="default uk-container">
                <div class="bp3-card bp3-card--column bp3-card--gray bp3-card--image-bottom-right">
                    <div class=bp3-card__content>
                        <h3>{{ env('APP_NAME') }} customer funds are 100% backed</h3>
                        <p class=bp-text--lg>We continuously undergo internal as well as external reviews by KPMG, one of the most reputable auditors worldwide, to confirm that {{ env('APP_NAME') }} customer’s assets are covered at all times. If you are a {{ env('APP_NAME') }} customer, you can request and download the most recent <a href="register"><span class=bp-text--lg><strong>KPMG report here</strong></span></a>.
                    </div>
                    <div class=bp3-card__image>
                        <picture>
                            <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                            <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="default uk-padding-small-top uk-section">
            <div class="uk-container uk-flex uk-flex-center">
                <svg class=uk-hidden>
                    <defs>
                        <g id=svg-icon-check>
                            <path d="M27.3 4.5L31 8.2 11.7 27.5 1 16.9l3.7-3.7 6.9 6.9L27.3 4.5z"></path>
                        </g>
                        <g id=svg-icon-info>
                            <path d="M18.2 10.6v20.5h-4.5V10.6h4.5zM16 .9c.8 0 1.6.3 2.1.9.6.6.9 1.3.9 2.1s-.3 1.6-.9 2.1c-.6.6-1.3.9-2.2.9-.8 0-1.5-.3-2.1-.9S13 4.8 13 3.9c0-.8.3-1.5.9-2.1S15.2.9 16 .9z"></path>
                        </g>
                    </defs>
                </svg>
                <section class="module-bullets uk-section">
                    <div class=uk-container>
                        <div class=uk-margin-large-bottom>
                            <h2 class=uk-width-2-3@s> Keeping your account secure </h2>
                        </div>
                        <div class="bp-grid bp-grid-1-2@t">
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>Password Management</h3>
                                    <p>User passwords are stored using the most trusted and modern hashing algorithms. Nobody can read or decrypt them, including us.
                                </div>
                            </div>
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>MFA</h3>
                                    <p>If activated by the user (highly recommended by {{ env('APP_NAME') }}) time-based one-time passwords and multi-factor authentication to defend against security threats and additional 2FA in case of user password compromise.
                                </div>
                            </div>
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>KYC / AML</h3>
                                    <p>Robust KYC onboarding and verification procedures, and fully compliant with United States regulation.
                                </div>
                            </div>
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>Account Lock</h3>
                                    <p>Users are prompted via email to verify every password reset request and to freeze their account if the request was not initiated by them.
                                </div>
                            </div>
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>Session Management</h3>
                                    <p>{{ env('APP_NAME') }} allows users to see which browsers and devices they are logged in from to control their account access.
                                </div>
                            </div>
                            <div class=bp-bullet>
                                <div class=bp-bullet__icon>
                                    <svg viewbox="0 0 32 32">
                                        <use fill=currentColor xlink:href=#svg-icon-check></use>
                                    </svg>
                                </div>
                                <div class=bp-bullet__content>
                                    <h3>Account monitoring</h3>
                                    <p>Important notifications to the user to ensure overview of user account activity.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="background-gray default uk-padding-remove-bottom uk-section">
            <div class="default uk-container">
                <section class="module-text uk-padding-remove-bottom uk-padding-small-top uk-section uk-text-center uk-text-center@m">
                    <div class=module-text__content>
                        <h2>Platform Security</h2>
                    </div>
                </section>
            </div>
        </section>
        <section class="background-gray default uk-section">
            <div class=uk-container>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center uk-flex-top uk-grid uk-grid-match" uk-grid="">
                    <div class="uk-flex uk-flex-center">
                        <div class="bp3-card bp3-card--column bp3-card--image-bottom-right bp3-card--white">
                            <div class=bp3-card__content>
                                <h3>Infrastructure <br>safeguards</h3>
                                <p>We have a system of layered technical defences in place to safeguard our platform and to uphold the confidentiality, integrity and availability of our infrastructure. Additionally, we practise secure software development lifecycle in order to build our products
                            </div>
                            <div class=bp3-card__image>
                                <picture>
                                    <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                    <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center">
                        <div class="bp3-card bp3-card--column bp3-card--image-bottom-right bp3-card--white">
                            <div class=bp3-card__content>
                                <h3>Internal <br>security <br>measures</h3>
                                <p>Our internal security teams ensure the day-to-day activities of our colleagues take place in a secure manner as part of a safe and controlled environment. We build and run our insider threat monitoring programme and regularly conduct training exercises to increase awareness of security topics across the organisation.
                            </div>
                            <div class=bp3-card__image>
                                <picture>
                                    <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                    <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center">
                        <div class="bp3-card bp3-card--column bp3-card--image-bottom-right bp3-card--white">
                            <div class=bp3-card__content>
                                <h3>Continuous <br>security <br>assessment</h3>
                                <p>Routine assessments of our security controls and processes through exercises like penetration tests completed by reputable external parties, proactive internal threat hunting, as well as our public Bug Bounty programme ensure that we can prevent potential attacks and minimise risk.
                            </div>
                            <div class=bp3-card__image>
                                <picture>
                                    <source data-srcset=https://cdn.bitpanda.com/media/ type=image/png>
                                    <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="default uk-section">
            <div class=uk-container>
                <div class=bp3-grid style=--bp3-grid-template-columns:1fr;--bp3-grid-template-columns-tablet:1fr>
                    <div class="bp3-card bp3-card--green bp3-card--image-middle-center bp3-card--row-reverse">
                        <div class=bp3-card__content>
                            <h3><strong>{{ env('APP_NAME') }} Custody&nbsp;</strong></h3>
                            <p>{{ env('APP_NAME') }} Custody is the insured, user-friendly custodial wallet platform for institutional-grade security, automation and management of crypto assets across blockchains and DeFi.

                        </div>
                        <div class=bp3-card__image>
                            <picture>
                                <source data-srcset=https://cdn.bitpanda.com/media/Feature%203.0/security-page/property-1home-b.png type=image/png>
                                <img alt="" class=lazyload data-src=https://cdn.bitpanda.com/media/Feature%203.0/security-page/property-1home-b.png>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="uk-padding-small-bottom uk-padding-small-top uk-section">
            <div class="default uk-container">
                <script type=application/ld+json>
                    {
                        "@context": "https://schema.org",
                        "@type": "FAQPage",
                        "mainEntity": [{
                            "@type": "Question",
                            "name": "Is Bitpanda safe?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>We take our users’ safety very seriously. Security is a natural and foundational part of everything we do from developing and deploying code to building and running our platform.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Is Bitpanda regulated?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>We operate our businesses based on various VASP registrations, as well as MiFID II, E-Money and PSD II licences amongst all our core markets. The Bitpanda Group diligently follows United States law and regulations, and Bitpanda Payments GmbH possesses a payment service provider licence under PSD2, recently becoming an E-Money Institute. Our stringent user verification processes are also fully compliant with AML5.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Who owns my assets?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>When you invest with Bitpanda, you do. You are the beneficial owner of your assets (crypto assets and metals) and we hold them in custody, as a trustee. It’s your investment, your assets - we just keep them safe. All assets are held in a highly-secure environment and we as Bitpanda are regularly assessed by an external auditor. As a result, if something goes wrong, you will not be treated as an unsecured creditor and you don’t risk losing your assets. Instead, you assert the right of separation under Austrian law. For Bitpanda Stocks we have implemented a pledge system and all underlyings are held with a licensed custodian for securities (please refer to our <a href=\"https://cdn.bitpanda.com/media/stocks/en-prospectus-1.pdf\">prospectus<\/a>). So whether you want to move it, trade it, invest it or grow it; it’s your investment, your choice.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Does Bitpanda really have all client assets (all Crypto assets, BCI, Bitpanda Stocks,  ETFs &amp; Commodities and Metals) backed 1:1?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>Yes, all of our customers' assets are physically backed up 1:1 and are stored in a highly secure environment.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Do we speculate with client assets at all?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>No, we do not speculate with customers’ assets in any of the asset classes we offer to our customers (crypto assets, BCI, Bitpanda Stocks, ETFs & Commodities and Metals).<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Bitpanda operates as a trustee - what does that mean for our clients?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>Bitpanda manages client assets as a trustee, the client remains the beneficial owner. But what does that mean?<\/p><p>Bitpanda holds clients crypto assets as trustee under a legally binding trust agreement with its customers and therefore there is a legally binding separation between our own assets and those of our customers.<\/p><p>We do not speculate with customers’ assets we hold.&nbsp;<\/p><p>Customers have a right to separation and are not treated as unsecured creditors; therefore customers cannot lose their crypto assets in custody.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "How does ownership of the assets included in the crypto indices work?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>Ownership works just like with other assets. You are acquiring each single asset and not a basket.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "Do we plan on integrating hardware wallet interoperability?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>Thanks for your suggestion. We are working around the clock to improve our blockchain infrastructure, so our customers have all deposit/withdrawal options they need. Withdrawing or depositing to and from Bitpanda to your Ledger is already possible, by simply using your ERC-20 deposit/withdrawal address.  A deeper integration is not planned right now, but we can consider it for the future. Hope this answers your question.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "What about 99% of BEST being in 3 wallets? Are funds safe?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>We are the safe custodian for our users and our distribution of user funds within these wallets is distributed between our many BEST holders.<\/p><p>These funds are on Bitpanda wallets, as BEST is our ecosystem token and users benefit most from the loyalty program, when they are holding it on our platform.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "What does cold wallet storage mean? How does it work?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>Bitpanda holds all assets of customers as a trustee and these are 100% backed by real assets and kept in a highly secure environment (warm and cold wallets). We do not speculate with our clients’ assets and they are never used as collateral.<\/p>"
                            }
                        }, {
                            "@type": "Question",
                            "name": "How does this work when Staking is involved?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "<p>With staking, we simply delegate the crypto assets, so the funds are always under our control.<\/p>"
                            }
                        }]
                    }

                </script>
                <div class="brand-3-0 module-faq">
                    <ul uk-accordion="">
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Is {{ env('APP_NAME') }} safe?</a>
                            <div class=uk-accordion-content>
                                <p>We take our users’ safety very seriously. Security is a natural and foundational part of everything we do from developing and deploying code to building and running our platform.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Is {{ env('APP_NAME') }} regulated?</a>
                            <div class=uk-accordion-content>
                                <p>We operate our businesses based on various VASP registrations, as well as MiFID II, E-Money and PSD II licences amongst all our core markets. The {{ env('APP_NAME') }} Group diligently follows United States law and regulations, and {{ env('APP_NAME') }} Payments GmbH possesses a payment service provider licence under PSD2, recently becoming an E-Money Institute. Our stringent user verification processes are also fully compliant with AML5.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Who owns my assets?</a>
                            <div class=uk-accordion-content>
                                <p>When you invest with {{ env('APP_NAME') }}, you do. You are the beneficial owner of your assets (crypto assets and metals) and we hold them in custody, as a trustee. It’s your investment, your assets - we just keep them safe. All assets are held in a highly-secure environment and we as Bitpanda are regularly assessed by an external auditor. As a result, if something goes wrong, you will not be treated as an unsecured creditor and you don’t risk losing your assets. Instead, you assert the right of separation under Austrian law. For {{ env('APP_NAME') }} Stocks we have implemented a pledge system and all underlyings are held with a licensed custodian for securities (please refer to our <a href="resources/cdn.bitpanda.com/media/stocks/en-prospectus-1.pdf">prospectus</a>). So whether you want to move it, trade it, invest it or grow it; it’s your investment, your choice.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Does {{ env('APP_NAME') }} really have all client assets (all Crypto assets, BCI, {{ env('APP_NAME') }} Stocks, ETFs &amp; Commodities and Metals) backed 1:1?</a>
                            <div class=uk-accordion-content>
                                <p>Yes, all of our customers' assets are physically backed up 1:1 and are stored in a highly secure environment.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Do we speculate with client assets at all?</a>
                            <div class=uk-accordion-content>
                                <p>No, we do not speculate with customers’ assets in any of the asset classes we offer to our customers (crypto assets, BCI, {{ env('APP_NAME') }} Stocks, ETFs & Commodities and Metals).
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">{{ env('APP_NAME') }} operates as a trustee - what does that mean for our clients?</a>
                            <div class=uk-accordion-content>
                                <p>{{ env('APP_NAME') }} manages client assets as a trustee, the client remains the beneficial owner. But what does that mean?
                                <p>{{ env('APP_NAME') }} holds clients crypto assets as trustee under a legally binding trust agreement with its customers and therefore there is a legally binding separation between our own assets and those of our customers.
                                <p>We do not speculate with customers’ assets we hold.&nbsp;
                                <p>Customers have a right to separation and are not treated as unsecured creditors; therefore customers cannot lose their crypto assets in custody.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">How does ownership of the assets included in the crypto indices work?</a>
                            <div class=uk-accordion-content>
                                <p>Ownership works just like with other assets. You are acquiring each single asset and not a basket.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">Do we plan on integrating hardware wallet interoperability?</a>
                            <div class=uk-accordion-content>
                                <p>Thanks for your suggestion. We are working around the clock to improve our blockchain infrastructure, so our customers have all deposit/withdrawal options they need. Withdrawing or depositing to and from Bitpanda to your Ledger is already possible, by simply using your ERC-20 deposit/withdrawal address. A deeper integration is not planned right now, but we can consider it for the future. Hope this answers your question.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">What about 99% of BEST being in 3 wallets? Are funds safe?</a>
                            <div class=uk-accordion-content>
                                <p>We are the safe custodian for our users and our distribution of user funds within these wallets is distributed between our many BEST holders.
                                <p>These funds are on {{ env('APP_NAME') }} wallets, as BEST is our ecosystem token and users benefit most from the loyalty program, when they are holding it on our platform.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">What does cold wallet storage mean? How does it work?</a>
                            <div class=uk-accordion-content>
                                <p>{{ env('APP_NAME') }} holds all assets of customers as a trustee and these are 100% backed by real assets and kept in a highly secure environment (warm and cold wallets). We do not speculate with our clients’ assets and they are never used as collateral.
                            </div>
                        <li class=bp-faq>
                            <a class=uk-accordion-title href="security.html#">How does this work when Staking is involved?</a>
                            <div class=uk-accordion-content>
                                <p>With staking, we simply delegate the crypto assets, so the funds are always under our control.
                            </div>
                    </ul>
                </div>
                <section class="module-text uk-padding-small-bottom uk-padding-small-top uk-section uk-text-left uk-text-left@m">
                    <div class=module-text__content>
                        <p>Please note that this is an abbreviated statement for informational purposes only and this statement is not legally binding. For all details regarding the legal customer relationship as well as the trust agreement the respective <a href="#">general terms and conditions</a> apply and please refer to them. Any insolvency procedure in any United States jurisdiction is subject to mandatory United States and local law and therefore the assessment of the competent insolvency administrator and the competent courts. For this reason, the statements in this information as well as the general terms and conditions are not conclusive and there remains a risk that this legal setup will be qualified differently.
                    </div>
                </section>
            </div>
        </section>
        <section class="default footerbanner uk-section" style="display: none;">
            <div class=uk-container>
                <div class=uk-grid>
                    <div class="uk-margin-medium-top uk-text-small">
                        <p><em>{{ env('APP_NAME') }} ve grup şirketleri ({{ env('APP_NAME') }}) Türk Parasının Kıymetini’nin Korunması Hakkında 32 sayılı Karar’ın 2/b maddesine göre Türkiye’de yerleşik sayılan hiçbir kişiye yönelik olarak 6362 sayılı Sermaye Piyasası Kanunu başta olmak üzere Türkiye Cumhuriyeti Devleti mevzuatı hükümleri gereği Türkiye’de faaliyet izni gerektiren hiçbir sermaye piyasası faaliyetine dair hizmet sunmamaktadır. Şayet Bitpanda’nın yabancı sermaye piyasalarında vermiş olduğu hizmetlerden Türkiye’de yerleşik kişilerin faydalandığı tespit edilecek olursa tüm zararları kullanıcıya ait olmak üzere bu hizmetler ivedilikle sona erdirilecektir.</em>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection