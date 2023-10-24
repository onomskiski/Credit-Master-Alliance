@extends('layouts.admin')

@section('content')

    <script>
        const showdetails = (details) => {
            console.log(details)
            $('.modal').fadeIn(200)
            $('.modal-text').html(`
                <div class="min-w-[100pt] md:border-r-2 border-r-gray-300 p-4 flex flex-col items-center">
                    <div>
                        <img src="/resources/3/user.png" alt="Username" class="w-[30pt] h-300pt] rounded-full">
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold">{{ auth() -> user() -> name }}</h3>
                        <p class="text-sm italic">{{ auth() -> user() -> username }}</p>
                    </div>

                    <div class="mt-8">
                        <button class="px-3 py-2 rounded-lg bg-red-600 text-red-100 font-bold text-xs hover:text-red-600 hover:bg-red-100 transition-all shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class='w-full p-3'>
                    <h4 class="text-xl font-bold">
                        User Information
                    </h4>

                    <div class="my-5 flex flex-col space-y-5">
                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Username
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3" disabled value="${details.user }" />
                        </div>

                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Invested Amount
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3" disabled value="$${details.capital }" />
                        </div>

                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Profit Earned
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3" disabled value="$${details.profit }" />
                        </div>

                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Active Plan
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3 capitalize" disabled value="${details.plan }" />
                        </div>

                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Investment Status
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3 capitalize" disabled value="${details.status }" />
                        </div>

                        <div class=" px-1 rounded-lg relative">
                            <label class="text-xs absolute -top-2.5 left-3 bg-gray-50 px-2 py-1 rounded">
                                Date
                            </label>
                            <input type="text" class="text-sm bg-gray-50 rounded-lg w-full border-2 border-gray-400 py-3" disabled value="${details.created_at }" />
                        </div>
                    </div>
                </div>
            `)
        }
    </script>

    <div>
        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">New Users</h3>
        </div>

        <div class="w-full overflow-x-auto h-auto md:p-2 text-sm p-2 bg-gray-50 shadow-lg px-4 py-5 rounded-lg min-h-[100pt] mb-10 flex flex-col space-y-5">
            <table class="text-gray-600 table table-auto w-full text-left my-5">
                <thead>
                    <tr class="min-w-full py-3 px-3 bg-blue-500 text-blue-50">
                        <th class="py-3 px-3">S/N</th>
                        <th class="py-3 px-3">User</th>
                        <th class="py-3 px-3">Capital</th>
                        <th class="py-3 px-3">Profit</th>
                        <th class="py-3 px-3">Plan</th>
                        <th class="py-3 px-3">Date</th>
                        <th class="py-3 px-3">View</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 0;
                    @endphp
                    @foreach($data['data'] as $data)
                        <tr class="table-row hover:bg-gray-100 cursor-pointer">
                            <td class="py-3 px-3">{{ ++$id }}</td>
                            <td class="py-3 px-3">{{ $data -> user}}</td>
                            <td class="py-3 px-3">${{ number_format($data -> capital)}}</td>
                            <td class="py-3 px-3">${{ number_format($data -> profit)}}</td>
                            <td class="py-3 px-3">{{ $data -> plan}}</td>
                            <td class="py-3 px-3">{{ $data -> created_at}}</td>
                            <td class="py-3 px-3">
                                <button onclick="showdetails({{{ $data }}})" class="text-blue-500 hover:text-blue-700 h-[30pt] w-[30pt] rounded-md flex justify-center items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <div class="px-3 py-5 flex justify-end">
                <div class="w-auto px-3 flex justify-center items-center space-x-3">
                    <div class="w-[20pt] h-[20pt] text-xs font-bold shadow rounded-md text-gray-600 bg-blue-200 flex justify-center items-center p-3">1</div>
                    <div class="w-[20pt] h-[20pt] text-xs font-bold shadow rounded-md text-gray-600 bg-blue-200 flex justify-center items-center p-3">2</div>
                </div>
            </div> --}}
            
        </div>
    </div>
@endSection