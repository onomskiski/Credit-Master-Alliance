<x-app-layout>

    <div class="w-full px-[30pt] pt-4 text-3xl font-semibold">
        Fund Your Account
    </div>
    
    <div class="w-full flex justify-center items-center px-5 md:px-[30pt] py-[20pt]">
        <div class="bg-gray-50 shadow-lg rounded-lg w-full min-h-[400pt] px-5">
            <form action="payment" method="GET">
                <div class="w-full grid py-6">
                    <div class="md:w-2/3 w-full mx-auto">
                        <label for="amount" class="w-full text-xl">Enter Amount</label>
                        <input type="number" name="amount" id="amount" class="w-full mx-auto rounded-md shadow-md border-gray-400" required />
                    </div>
                </div>

                <div class="w-full flex justify-center items-center my-10">
                    <div class="w-full md:w-2/3 flex justify-between items-center flex-wrap flex-col space-y-4">
                        <div class="w-full text-xl">
                            Choose Payment Method from the list below
                        </div>
                        <div class="w-full justify-between items-center flex flex-wrap text-sm">
                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id="Skrill" name="method" value="skrll" class="my-6">
                                    <label for="Skrill" class="w-full h-full py-6">
                                        Skrill
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id= "Transfer"name="method" value="bank-transfer" class="my-6">
                                    <label for="Transfer" class="w-full h-full py-6">
                                        Bank Transfer
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id="Paypal" name="method" value="paypal" class="my-6">
                                    <label for="Paypal" class="w-full h-full py-6">
                                        Paypal
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id= "Paystack"name="method" value="paystack" class="my-6">
                                    <label for="Paystack" class="w-full h-full py-6">
                                        Paystack
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id="Stripe" name="method" value="stripe" class="my-6">
                                    <label for="Stripe" class="w-full h-full py-6">
                                        Stripe
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id= "Litecoin"name="method" value="litecoin" class="my-6">
                                    <label for="Litecoin" class="w-full h-full py-6">
                                        Litecoin
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id= "Ethereum"name="method" value="ethereum" class="my-6">
                                    <label for="Ethereum" class="w-full h-full py-6">
                                        Ethereum
                                    </label>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 p-3">
                                <div class="w-full bg-white border-1 border-gray-200 cursor-pointer shadow-md rounded-lg px-4 border-2 flex space-x-3">
                                    <input type="radio" id= "Bitcoin" name="method" value="bitcoin" class="my-6">
                                    <label for="Bitcoin" class="w-full h-full py-6">
                                        Bitcoin
                                    </label>
                                </div>
                            </div>

                            <div class="w-full my-5 px-3">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-400 transition-colors text-white  shadow-md rounded-lg px-4 py-3 text-md border-2 border-gray-100">
                                    Proceed to Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>