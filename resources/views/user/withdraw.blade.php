<x-app-layout>

    <script>
        const withdrawalMethods = [
            {
                name: 'Skrill',
                amount: {
                    min: 100,
                    max: 10000,
                },
                charge: {
                    type: 'percentage',
                    amount: '0%',
                },
                duration: 'Automated Payment'
            },

            {
                name: 'Doge',
                amount: {
                    min: 10,
                    max: 10000,
                },
                charge: {
                    type: 'percentage',
                    amount: '2%',
                },
                duration: 'Instant Payment'
            },

            {
                name: 'Bank Transfer',
                amount: {
                    min: 10,
                    max: 10000,
                },
                charge: {
                    type: 'percentage',
                    amount: '0%',
                },
                duration: 'Instant Payment'
            },

            {
                name: 'Litecoin',
                amount: {
                    min: 100,
                    max: 10000,
                },
                charge: {
                    type: 'fixed',
                    amount: '$0',
                },
                duration: 'Instant Payment'
            },

            {
                name: 'Ethereum',
                amount: {
                    min: 10,
                    max: 2100,
                },
                charge: {
                    type: 'percentage',
                    amount: '0%',
                },
                duration: 'Instant Payment'
            },

            {
                name: 'Bitcoin',
                amount: {
                    min: 10,
                    max: 10000,
                },
                charge: {
                    type: 'percentage',
                    amount: '0%',
                },
                duration: 'Instant Payment'
            }
        ]

        $('.methods').html('')
        
        $('document').ready(() => {
            withdrawalMethods.map((method, id) => {
                $('.methods').append(`
                    <div class="p-3 w-full md:w-1/2 lg:w-1/3" key='${id}'>
                        <div class="shadow-xl rounded-lg w-full p-5 py-10 flex flex-col space-y-4 text-lg text-gray-800">
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5 font-semibold">
                                    ${method.name}
                                </div>
                            </div>
                
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5">
                                    Minimum amount:
                                </div>
                                <div class="w-full px-5 text-right">
                                    $${method.amount.min}
                                </div>
                            </div>
                
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5">
                                    Maximum amount:
                                </div>
                                <div class="w-full px-5 text-right">
                                    $${method.amount.max}
                                </div>
                            </div>
                
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5">
                                    Charge type:
                                </div>
                                <div class="w-full px-5 text-right">
                                    ${method.charge.type}
                                </div>
                            </div>
                
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5">
                                    Charge amount:
                                </div>
                                <div class="w-full px-5 text-right">
                                    ${method.charge.amount}
                                </div>
                            </div>
                
                            <div class="w-full flex justify-between items-center">
                                <div class="w-full px-5">
                                    Duration:
                                </div>
                                <div class="w-full px-5 text-right">
                                    ${method.duration}
                                </div>
                            </div>
                
                            <form action="/withdraw-funds">
                                <div class="w-full grid pt-5">
                                    <input type="hidden" name="method" value="${method.name}" />
                                    <input type="hidden" name="amountMin" value="${method.amount.min}" />
                                    <input type="hidden" name="amountMax" value="${method.amount.max}" />
                                    <button type="submit" class="mx-auto bg-btn-100 hover:bg-btn-300 transition-colors text-btntext-100 hover:text-btntext-300 shadow-md rounded-lg px-3 py-2 text-sm border-2 border-btn-100 font-bold">
                                        <span class="font-black text-lg">
                                            &plus;
                                        </span>
                                        Request Withdrawal
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                `)
            })
        })
    </script>

    <div class="w-full px-[30pt] pt-4 text-3xl font-semibold">
        Withdraw Your Funds
    </div>
    
    <div class="w-full flex flex-wrap justify-around items-center md:px-[30pt] py-[20pt] methods">
        
    </div>
    
</x-app-layout>