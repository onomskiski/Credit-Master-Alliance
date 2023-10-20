<x-app-layout>

    <script>
        plans = [
            {
                id: 'strt',
                name: 'starter',
                deposit: {
                    max: 0,
                    min: 0,
                },
                returns: {
                    max: 0,
                    min: 0,
                },
                gift: 0,
                duration: '4 Hours',
                amount: 0,
            },

            {
                id: 'prem',
                name: 'premium',
                deposit: {
                    max: 0,
                    min: 0,
                },
                returns: {
                    max: 0,
                    min: 0,
                },
                gift: 0,
                duration: '2 Months',
                amount: 0,
            },

            {
                id: 'prof',
                name: 'professional',
                deposit: {
                    max: 0,
                    min: 0,
                },
                returns: {
                    max: 0,
                    min: 0,
                },
                gift: 0,
                duration: '5 Months',
                amount: 0,
            }
        ]

        const planDOM = $('.plans')
        
        $('document').ready(() => {
            $('.plans').html('')

            plans.map(plan => {
                $('.plans').append(`
                    <div class="w-full md:w-1/3 md:p-2">
                        <div class="w-full h-auto rounded-xl shadow-md py-5 px-6 bg-gray-50 text-sm text-gray-700">
                            <div>
                                <h3 class="text-2xl text-gray-700 px-3 font-bold">${plan.name}</h3>
                            </div>
                            <div class="h-[100pt] w-full flex justify-center items-center">
                                <div class="w-full flex justify-center items-baseline text-gray-800">
                                    <span class="text-[16pt]">$</span>
                                    <span class="text-7xl capitalize">${plan.amount}</span>
                                </div>
                            </div> 

                            <div class="w-full my-10 flex flex-col space-y-3">
                                <div class="flex justify-between">
                                    <div>
                                        Minimum Possible Deposit:
                                    </div>
                                    <div>
                                        $${plan.deposit.min}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Maximum Possible Deposit:
                                    </div>
                                    <div>
                                        $${plan.deposit.max}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Minimum Return:
                                    </div>
                                    <div>
                                        $${plan.returns.min}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Maximum Return:
                                    </div>
                                    <div>
                                        $${plan.returns.max}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Gift Bonus:
                                    </div>
                                    <div>
                                        $${plan.gift}
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div>
                                        Duration:
                                    </div>
                                    <div>
                                        ${plan.duration}
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                Amount to invest: ($${plan.amount} default)
                            </div>
                            <form>
                                <div class="w-full py-2">
                                    <input type="number" name="amount" class="${plan.name}-amount w-full rounded border-1 border-gray-900 py-2 px-3 shadow bg-gray-100 placeholder:text-gray-600 text-sm" placeholder="$0" required />
                                </div>
            
                                <div class="w-full py-2">
                                    <input type="button" onClick="subscribe('${plan.name}')" class="w-full rounded border-1 bg-blue-600 hover:bg-blue-500 transition-colors border-none text-white py-3 px-3 shadow text-sm cursor-pointer" value="Join Plan" />
                                </div>
                            </form>
                        </div>
                    </div>
                `)
            })
        })

        function subscribe(name){
            const plan = `${name}`
            const amount = Number($(`.${name}-amount`).val())

            data = {plan, amount}

            $.get('/api/investments/subscribe', data, res => {
                console.log(res)
                alert(res.message)
            })
            
            console.log(data)
        }
        
    </script>
    
    <div class="p-2 md:p-5 flex flex-wrap">
        <div class="w-full">
            <h3 class="text-3xl text-gray-700">
                Available Packages
            </h3>
        </div>
        <div class="plans w-full flex flex-wrap justify-around flex-col md:flex-row mb-[100pt]">
            <div class="w-full md:w-1/3 p-2">
                <div class="w-full h-auto rounded-xl shadow-lg py-5 px-6 bg-gray-50 text-sm text-gray-700">
                    <div>
                        <h3 class="text-2xl text-gray-700 px-3 font-bold">Starter</h3>
                    </div>
                    <div class="h-[100pt] w-full flex justify-center items-center">
                        <div class="w-full flex justify-center items-baseline text-gray-800">
                            <span class="text-[16pt]">$</span>
                            <span class="text-7xl">0</span>
                        </div>
                    </div> 

                    <div class="w-full my-10 flex flex-col space-y-3">
                        <div class="flex justify-between">
                            <div>
                                Minimum Possible Deposit:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Maximum Possible Deposit:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Minimum Return:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Maximum Return:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Gift Bonus:
                            </div>
                            <div>
                                $0
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Duration:
                            </div>
                            <div>
                                4 Hours
                            </div>
                        </div>
                    </div>

                    <div class="">
                        Amount to invest: ($0 default)
                    </div>
                    <form>
                        <div class="w-full py-2">
                            <input type="number" name="amount" id="amount" class="w-full rounded border-1 border-gray-900 py-2 px-3 shadow bg-gray-100 placeholder:text-gray-600 text-sm" placeholder="$0" />
                        </div>
    
                        <div class="w-full py-2">
                            <input type="submit" class="w-full rounded border-1 bg-blue-600 hover:bg-blue-500 transition-colors border-none text-white py-3 px-3 shadow text-sm cursor-pointer" value="Join Plan" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>