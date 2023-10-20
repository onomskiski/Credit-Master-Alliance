<x-app-layout>

    <script>
        const active = "bg-white text-gray-700"
        const regular = "bg-gray-100 text-gray-400"

        const setActiveTab = id => {
            $('.tab').removeClass(active)
            $('.tab').addClass(regular)

            $('.tab-content').hide()
            
            $(`.tab-${id}`).addClass(active)
            $(`.tab-${id}-content`).show()
        }

        window.addEventListener('load', () => setActiveTab(1) )
        
        
    </script>
    
    
    <div class="py-6 md:px-5 w-full">
        <div class="w-full">
            <h3 class="text-[20pt] md:text-[25pt] text-gray-600">Transactions on your account</h3>
        </div>

        <div class="w-full pt-10">
            <div class="w-full bg-gray-50 shadow-lg flex justify-center items-center flex-col py-6 px-4 rounded-2xl">
                {{-- tabs --}}
                    <div class="w-full flex items-center text-gray-700">
                        <div onclick="setActiveTab(1)" class="tab tab-1 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Desposits
                        </div>

                        <div onclick="setActiveTab(2)" class="tab tab-2 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Withdrawals
                        </div>

                        <div onclick="setActiveTab(3)" class="tab tab-3 py-4 w-full flex justify-center items-center shadow-md my-4 cursor-pointer">
                            Others
                        </div>
                    </div>
                {{-- ? tabs --}}
                
                <div class="tab-contents w-full">
                    {{-- tab1 content --}}
                        <div class="tab-1-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th>
                                            Amount
                                        </th>
                
                                        <th>
                                            Payment Mode
                                        </th>
                
                                        <th>
                                            Status
                                        </th>
                
                                        <th>
                                            Date Created
                                        </th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr class="no-data w-full px-5 py-5 grid">
                                        <div colspan="2" class="mx-auto w-auto py-5">
                                            No data available in table
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab1 content --}}


                    {{-- tab2 content --}}
                        <div class="tab-2-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th>
                                            Amount requested
                                        </th>
                
                                        <th>
                                            Amount + charges
                                        </th>
                
                                        <th>
                                            Receiving Mode
                                        </th>
                
                                        <th>
                                            Status
                                        </th>
                
                                        <th>
                                            Date created
                                        </th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr class="no-data w-full px-5 py-5 grid">
                                        <div colspan="2" class="mx-auto w-auto py-5">
                                            No data available in table
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab2 content --}}

                    {{-- tab2 content --}}
                        <div class="tab-3-content tab-content">
                            <div class="w-full flex justify-between items-center space-x-3">
                                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                
                                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
                            </div>
                            <table class="w-full mt-10 table table-auto overflow-x-auto">
                                <thead class="w-full text-sm text-gray-500">
                                    <tr>
                                        <th>
                                            Amount
                                        </th>
                
                                        <th>
                                            Type
                                        </th>
                
                                        <th>
                                            Plan/Naration
                                        </th>
                
                                        <th>
                                            Date created
                                        </th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr class="no-data w-full px-5 py-5 grid">
                                        <div colspan="2" class="mx-auto w-auto py-5">
                                            No data available in table
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- ? tab2 content --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>