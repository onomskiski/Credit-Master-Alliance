<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script>
            function canMakeRequest (){
                const lastRequstTime = localStorage.getItem('lastRequestTime')
                const now = new Date().getTime();
                
                // check if there was ever a previous request
                if(!lastRequstTime){
                    return false;
                }
    
                const sinceLastRequest = (now - lastRequstTime) / 1000
                console.log(sinceLastRequest)
    
                if(sinceLastRequest >= 100){
                    return true
                }
    
                return false;
            }
    
            function updateLastRequest () {
                const now = new Date().getTime()
                localStorage.setItem('lastRequestTime', now)
            }
    
            function makeNextRequest () {
                if(canMakeRequest()){
                    $.get('/api2/mine', res => {
                        const now = new Date().getTime()
                        localStorage.setItem('lastRequestTime', now)
                        console.log('Initiated')
                    })
                }
            }
    
            makeNextRequest()
            
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .already-hidden{
                width: auto;
            }
        </style>

        <script>
            const toggleNav = () => {
                $('.nav-links').toggle(500)
            }

            const toggleInvest = () => {
                $('.invest-sub-nav').toggle(500)
                $('.caret .open-caret').toggle()
                $('.caret .close-caret').toggle()
            }
        </script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="w-full">
                <div class="flex flex-col md:flex-row m-4">

                    {{-- side nav --}}
                        <div class="p-2 w-full md:w-[250pt] md:min-h-screen overflow-hidden sticky">
                            <div class="nav w-full shadow-lg h-auto md:min-h-1/3 bg-white rounded-2xl px-5 md:py-5 my-3 md:my-0">
                                <div class="px-3 py-2 rounded-lg my-3 bg-white flex justify-between items-center">
                                    <div class="font-bold nav-hidden">{{ auth() -> user() -> name}}</div>
                                    <div class="navig md:hidden" onclick="toggleNav()">
                                        <div class="navig-hover:hidden h-[25pt] w-[25pt] shadow-md flex justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </div>

                                        <div class="navig-hover:flex hidden h-[25pt] w-[25pt] shadow-md justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-links text-primary-100 hidden md:block py-4">
                                    <a href="/dashboard" class="{{request() -> route() -> uri == 'dashboard' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Dashboard
                                        </div>
                                    </a>
                                    
                                    {{-- <a href="tradinghistory" class="{{request() -> route() -> uri == 'tradinghistory' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Profit Record
                                        </div>
                                    </a> --}}

                                    <a href="fund" class="{{request() -> route() -> uri == 'fund' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Fund your Account
                                        </div>
                                    </a>

                                    <a href="withdraw" class="{{request() -> route() -> uri == 'withdraw' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Withdraw Funds
                                        </div>
                                    </a>

                                    <a href="/accounthistory" class="{{ request() -> route() -> uri == 'accounthistory' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                                <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Transaction History
                                        </div>
                                    </a>

                                    {{-- <a href="/asset-balance" class="{{request() -> route() -> uri == 'asset-balance' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Crypto Exchange
                                        </div>
                                    </a> --}}

                                    <div class="{{ (request() -> route() -> uri == 'buy-plan') || (request() -> route() -> uri == 'myplans') ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300'}} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="w-full flex items-center space-x-4 invest-toggler" onclick="toggleInvest()">
                                            <div class="w-flex justify-center items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-between w-full">
                                                <div class="w-full">
                                                    Invest
                                                </div>
                                                <div class="caret w-auto">
                                                    <div class="open-caret">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                        </svg>
                                                    </div>

                                                    <div class="close-caret hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                            <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full pt-5 invest-sub-nav hidden">
                                            <div class="flex flex-col space-y-3">
                                                <a href="/buy-plan" class="py-2 px-2 hover:bg-primary-300 transition-all hover:text-primary-100 rounded-lg w-full">
                                                    Subscribe to a Plan
                                                </a>

                                                <a href="/myplans" class="py-2 px-2 hover:bg-primary-300 transition-all hover:text-primary-100 rounded-lg w-full">
                                                    My Investment
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="/referuser" class="{{request() -> route() -> uri == 'referuser' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Refer user
                                        </div>
                                    </a>

                                    <a href="/support" class="{{request() -> route() -> uri == 'support' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Help/Support
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- ? side nav --}}
                    
                    <div class="w-full">
                        {{ $slot }}

                        {{-- site footer --}}

                            <footer class="w-full p-5 border-t-2 border-t-gray-600">
                                <div class=" text-gray-600 text-sm">
                                    All Rights Reserved &copy; {{ env('APP_NAME') }} {{ Date('Y') }}
                                </div>
                            </footer>

                        {{-- ? site footer --}}
                        
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
