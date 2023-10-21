@extends('layouts.admin')

@section('content')

    <script>
        $('document').ready(() => {
            $.get('/api2/datacards', res => {
                console.log(res)

                // users
                $('.users-balance').html(`$${res.response.user.balance}`)
                $('.users-count').html(`${res.response.user.all}`)
                $('.active-users').html(`${res.response.user.active}`)
                $('.new-users').html(`${res.response.user.newbies}`)
                // investments
                $('.users-profit').html(`$${res.response.investment.profit}`)
                $('.active-investments').html(`$${res.response.investment.active}`)
                $('.total-investments').html(`$${res.response.investment.sum}`)
                $('.total-investments-count').html(`${res.response.investment.total}`)
            })
        })
    </script>

    <div class="py-12 md:px-5 w-full">
        <div class="">
            <div class="overflow-hidden sm:rounded-lg">
                <script defer src="resources/www.livecoinwatch.com/static/lcw-widget.js"></script>
                <div class="livecoinwatch-widget-5 w-full h-auto" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10"></div>
            </div>
        </div>
        <div class="w-full p-5 text-xl font-semibold">
            <h3>Welcome, {{ auth() -> user() -> name }}!</h3>
        </div>
        <div class="flex justify-between flex-wrap space-y-5 md:space-y-0">
            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-indigo-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg users-balance">
                            $0.00
                        </div>
                        <div class="text-sm text-gray-600">
                            Users Balance
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-green-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg users-profit">
                            $0.00
                        </div>
                        <div class="text-sm text-gray-600">
                            Total User's Profit
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-indigo-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                                <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg active-investments">
                            $5.00
                        </div>
                        <div class="text-sm text-gray-600">
                            Total Active Investments
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-sky-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg total-investments">
                            $0.00
                        </div>
                        <div class="text-sm text-gray-600">
                            Total Investments
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-red-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg users-count">
                            0
                        </div>
                        <div class="text-sm text-gray-600">
                            All Users
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-green-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg active-users">
                            $0.00
                        </div>
                        <div class="text-sm text-gray-600">
                            Active Users
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-yellow-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg total-investments-count">
                            0
                        </div>
                        <div class="text-sm text-gray-600">
                            Total Investments
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/4 md:py-5 md:px-3">
                <div class="shadow-lg flex items-center space-x-5 p-4 w-full h-auto rounded-lg bg-gray-50">
                    <div class="bg-pink-600 text-white font-bold h-[30pt] w-[30pt] text-sm grid rounded-xl">
                        <div class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="font-bold text-lg new-users">
                            0
                        </div>
                        <div class="text-sm text-gray-600">
                            New Users
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">Personal Trading Chart</h3>
        </div>

        <div class="w-full overflow-hidden h-auto md:p-2">
            <iframe 
                title="advanced chart TradingView widget" 
                lang="en" 
                id="tradingview_fb9c8" 
                frameborder="0" 
                allowtransparency="true" 
                scrolling="no" 
                allowfullscreen="true" 
                src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22COINBASE%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_fb9c8%22%2C%22interval%22%3A%221%22%2C%22hidesidetoolbar%22%3A%220%22%2C%22symboledit%22%3A%221%22%2C%22saveimage%22%3A%221%22%2C%22studies%22%3A%22BB%40tv-basicstudies%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%229%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22247cointrading.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22COINBASE%3ABTCUSD%22%2C%22page-uri%22%3A%22247cointrading.com%2Fapp%2Fdashboard%22%7D" 
                style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"
                class="min-h-[400pt] shadow rounded-xl"
            >
            </iframe>
            <div class="text-xs text-blue-600 p-4 text-center font-bold">
                <h4>Personal Trading Chart</h4>
            </div>
        </div>

        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">Forex Market Fundamental Data</h3>
        </div>

        <div class="w-full overflow-hidden h-auto md:p-2">
            <iframe 
                scrolling="no" 
                allowtransparency="true" 
                frameborder="0" 
                src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22BTC%22%2C%22ETH%22%2C%22LTC%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22light%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22utm_source%22%3A%22247cointrading.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22247cointrading.com%2Fapp%2Fdashboard%22%7D" 
                title="forex cross-rates TradingView widget" 
                lang="en" 
                style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"
                class="min-h-[400pt]"
            >
            </iframe>
            <div class="text-xs text-blue-600 p-4 text-center font-bold">
                <h4>Forex Market Fundamental Data</h4>
            </div>
        </div>
    </div>
@endSection