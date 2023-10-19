<x-app-layout>
    <div class="py-6 md:px-5 w-full">
        <div class="w-full py-6">
            <h3 class="text-[20pt] md:text-[35pt] text-gray-600">Your ROI History</h3>
        </div>

        <div class="w-full pt-10 bg-gray-50 shadow-lg flex justify-center items-center flex-col py-6 px-4 rounded-2xl">
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
                            Plan
                        </th>

                        <th>
                            Amount
                        </th>

                        <th>
                            Type
                        </th>

                        <th>
                            Date Created
                        </th>
                    </tr>
                </thead>

                <tbody>
                    {{-- <tr class="with-data">
                        <td>
                            Plan
                        </td>

                        <td>
                            Amount
                        </td>

                        <td>
                            Type
                        </td>

                        <td>
                            Date Created
                        </td>
                    </tr> --}}

                    <tr class="no-data w-full px-5 py-5 grid">
                        <div colspan="2" class="mx-auto w-auto py-5">
                            No data available in table
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>