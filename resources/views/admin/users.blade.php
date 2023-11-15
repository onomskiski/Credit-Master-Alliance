@extends('layouts.admin')

@section('content')

    <div>
        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">New Users</h3>
        </div>

        <div class="w-full overflow-x-auto h-auto md:p-2 text-sm p-2 bg-gray-50 shadow-lg px-4 py-5 rounded-lg min-h-[100pt] mb-10 flex flex-col space-y-5">
            <table class="text-gray-600 table table-auto w-full text-left my-5">
                <thead>
                    <tr class="min-w-full py-3 px-3 bg-primary-400 text-blue-50">
                        <th class="py-3 px-3">S/N</th>
                        <th class="py-3 px-3">Name</th>
                        <th class="py-3 px-3">Username</th>
                        <th class="py-3 px-3">Email Address</th>
                        <th class="py-3 px-3">Phone Number</th>
                        <th class="py-3 px-3">Country</th>
                        <th class="py-3 px-3">Referred By</th>
                        <th class="py-3 px-3">Balance</th>
                        <th class="py-3 px-3">View</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 0;
                    @endphp
                    @foreach($users as $user)
                        <tr class="table-row hover:bg-gray-100 cursor-pointer">
                            <td class="py-3 px-3">{{ ++$id }}</td>
                            <td class="py-3 px-3">{{ $user -> name}}</td>
                            <td class="py-3 px-3">{{ $user -> username}}</td>
                            <td class="py-3 px-3">{{ $user -> email}}</td>
                            <td class="py-3 px-3">{{ $user -> phone_number}}</td>
                            <td class="py-3 px-3">{{ $user -> country}}</td>
                            <td class="py-3 px-3">{{ $user -> referred_by}}</td>
                            <td class="py-3 px-3">{{ "$" . number_format(json_decode($user -> balances, false) -> usd) ?? "N/A" }}</td>
                            <td class="py-3 px-3">
                                <button class="text-primary-400 hover:text-primary-200 h-[30pt] w-[30pt] rounded-md flex justify-center items-center text-sm">
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