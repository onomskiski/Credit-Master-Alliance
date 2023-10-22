<x-app-layout>

    <div class="w-full px-[30pt] pt-4 text-3xl font-semibold">
        Request Withdraw
    </div>

    <script>
        $('document').ready(() => {
            $('.withdrawal-form').submit((e) => {
                e.preventDefault();
                
                $.get('/api2/withdrawal/create', $('.withdrawal-form').serializeArray(), (res) => {
                    console.log(res)

                    alert(res.response)
                })
            })
        })
    </script>
    
    <form class="withdrawal-form" method="post">
        <div class="w-full flex justify-start items-center px-5 md:px-[30pt] py-[20pt]">
            <div class="bg-gray-50 shadow-xl rounded-lg w-full md:w-2/3">
                <div class="w-full text-gray-700 text-lg p-10">
                    <p>
                        You are about to request for a payment via <span class="font-semibold">{{ $method }}</span>
                    </p>
                </div>
                <div class="w-full px-10 text-sm text-gray-500">
                    <div class="md:w-2/3 w-full py-3">
                        <label for="amount" class="w-full text-sm">Amount to Withdraw</label>
                        <div class="flex space-x-2">
                            <input type="number" min="{{$min}}" max="${{$max}}" name="amount" id="amount" class="w-full mx-auto rounded-md shadow-md border-gray-400 bg-gray-200 text-gray-700" placeholder="{{ $min . ' - ' . $max}}" required />
                        </div>
                    </div>

                    <div class="md:w-2/3 w-full py-3">
                        <label for="amount" class="w-full text-sm">{{$method}} Address</label>
                        <div class="flex space-x-2">
                            <input type="text" name="address" id="address" class="w-full mx-auto rounded-md shadow-md border-gray-400 bg-gray-200 text-gray-700" required />
                        </div>
                    </div>
                </div>
                <input type="hidden" name="method" value="{{ $method }}" />

                <div class="w-full px-10 my-2 mb-8">
                    <div class="md:w-2/3 w-full py-3">
                        <div class="">
                            <button type="submit" name="amount" id="amount" class="w-auto mx-auto rounded-xl shadow-md px-5 border-2 border-gray-300 py-3 bg-blue-500 hover:bg-blue-600 transition-colors text-blue-50 font-bold text-sm">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    <form>
    
</x-app-layout>