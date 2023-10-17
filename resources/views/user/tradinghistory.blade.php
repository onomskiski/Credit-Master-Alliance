<x-app-layout>
    <div class="py-6 md:px-5 w-full">
        <div class="w-full">
            <h3 class="text-[20pt] md:text-[35pt] ">Your ROI History</h3>
        </div>

        <div class="w-full pt-10">
            <div class="w-full flex justify-between items-center">
                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-700">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                
                <input type="text" class="text-md rounded-lg border-1 border-gray-700" />
            </div>
            <table class="w-full">
                <thead>
                    
                </thead>
            </table>
        </div>
    </div>
</x-app-layout>