@extends('layouts.admin')

@section('content')

    <div>
        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">New Users</h3>
        </div>

        <div class="w-full overflow-x-auto h-auto md:p-2 text-sm p-2 bg-gray-50 shadow-lg px-4 py-5 rounded-lg min-h-[100pt] mb-10 flex flex-col space-y-5">
            <table class="text-gray-600 table table-auto w-full text-left my-5">
                <thead>
                    <tr class="min-w-full py-3 px-3 bg-blue-500 text-blue-50">
                        <th class="py-3 px-3">S/N</th>
                        <th class="py-3 px-3">Name</th>
                        <th class="py-3 px-3">Username</th>
                        <th class="py-3 px-3">Email Address</th>
                        <th class="py-3 px-3">Phone Number</th>
                        <th class="py-3 px-3">Country</th>
                        <th class="py-3 px-3">Referred By</th>
                        <th class="py-3 px-3">Balance</th>
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