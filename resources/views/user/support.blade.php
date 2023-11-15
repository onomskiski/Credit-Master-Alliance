<x-app-layout>
    
    <div class="py-6 md:px-5 w-full">
        <div class="w-full py-[30pt] bg-gray-50 shadow-lg flex justify-center items-center flex-col px-4 rounded-2xl">
            <div class="text-2xl w-full pt-5 text-center pb-[50pt]">
                <h3 class="text-gray-800 font-bold text-3xl">
                    {{ env('APP_NAME') }} Support
                </h3>

                <h3 class="text-lg py-5">
                    For inquiries, suggestions or complains. Mail us
                </h3>

                <h3 class="text-blue-500 text-3xl">
                    {{ env('SUPPORT_EMAIL') }}
                </h3>
            </div>

            <div class="flex flex-col space-y-1 w-full md:w-2/3 justify-center items-center px-5">
                <label for="message" class="w-full">
                    Message
                    <span class="text-red-500">*</span>
                </label>
                <textarea name="message" class="text-md text-gray-700 bg-gray-50 shadow-md border-1 border-gray-700 rounded-lg w-full h-[100pt]">

                </textarea>

                <div class="w-full py-3">
                    <input type="submit" class="w-full bg-btn-100 hover:bg-btn-300 transition-colors text-btntext-100 hover:text-btntext-300 border-2 border-btn-100 font-bold cursor-pointer p-2 rounded text-sm" value="Send" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>