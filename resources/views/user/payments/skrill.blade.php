<x-app-layout>

    <div class="w-full px-[30pt] pt-4 text-3xl font-semibold">
        Make Payment
    </div>
    
    <div class="w-full flex justify-center items-center px-5 md:px-[30pt] py-[20pt]">
        <div class="bg-gray-50 shadow-xl rounded-lg w-full md:w-2/3 min-h-[400pt]">
            <div class="w-full text-gray-700 text-lg p-10">
                <p>
                    You are about to make payment of <span class="font-semibold">${{ $amount }}</span> using your selected payment method. Screenshot and upload the proof of payment
                    <span class="capitalize font-semibold">{{ $method }}</span>
                </p>
            </div>
            <div class="w-full px-10">
                <div class="md:w-2/3 w-full">
                    <label for="amount" class="w-full text-sm">Wallet Address</label>
                    <div class="flex space-x-2">
                        <input type="text" name="amount" id="amount" class="w-full mx-auto rounded-md shadow-md border-gray-400 bg-gray-200 text-gray-700" disabled value="{{ env('SKRILL_ADDRESS')}}" />
                        <button type="button" name="amount" id="amount" class="w-auto mx-auto rounded-md shadow-md px-5 bg-gray-200 border-2 border-gray-300">
                            Copy
                        </button>
                    </div>
                </div>
            </div>

            <div class="w-full px-10 mt-8">
                <div class="md:w-2/3 w-full">
                    <label for="amount" class="w-full text-sm">Evidence of Payment</label>
                    <div class="flex space-x-2">
                        <input type="file" name="amount" id="amount" class="w-full mx-auto rounded-md shadow-md border-gray-400 bg-gray-200 text-gray-700 p-2 file:border-none file:bg-gray-600 file: file:text-gray-50 file:p-2 file:rounded-xl file:mx-3 file:text-sm" />
                    </div>
                </div>
            </div>

            <div class="w-full px-10 mt-8">
                <div class="md:w-2/3 w-full">
                    <div class="">
                        <button type="button" name="amount" id="amount" class="w-auto mx-auto rounded-xl shadow-md px-5 border-2 border-gray-300 py-3 bg-blue-500 hover:bg-blue-600 transition-colors text-blue-50 font-bold text-sm">
                            Submit
                        </button>
                    </div>
                </div>
            </div>


            <script src="resources/3/payment.js"></script>

            <input type="hidden" class="method" value="{{ $method }}" />
            <input type="hidden" class="amount" value="{{ $amount }}" />
            
        </div>
    </div>
    
</x-app-layout>