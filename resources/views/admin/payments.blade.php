@extends('layouts.admin')

@section('content')

    <div>
        <div class="w-full text-gray-400 pt-7 p-4">
            <h3 class="text-xl">Payments</h3>
        </div>

        <div class="w-full overflow-x-auto h-auto md:p-2 text-sm p-2 bg-gray-50 shadow-lg px-4 py-5 rounded-lg min-h-[100pt] mb-10 flex flex-col space-y-5">
            <table class="text-gray-600 table table-auto w-full text-left my-5">
                <thead>
                    <tr class="min-w-full py-3 px-3 bg-primary-400 text-blue-50">
                        <th class="py-3 px-3">S/N</th>
                        <th class="py-3 px-3">Sender</th>
                        <th class="py-3 px-3">Amount</th>
                        <th class="py-3 px-3">Method</th>
                        <th class="py-3 px-3">Status</th>
                        <th class="py-3 px-3">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 0;
                    @endphp
                    @foreach($payments as $pay)
                        <tr class="table-row hover:bg-gray-100 cursor-pointer">
                            <td class="py-3 px-3">{{ ++$id }}</td>
                            <td class="py-3 px-3 capitalize">{{ $pay -> sender}}</td>
                            <td class="py-3 px-3">${{ number_format($pay -> amount) }}</td>
                            <td class="py-3 px-3 capitalize">{{ $pay -> method }}</td>
                            <td class="py-3 px-3 italic text-xs font-semibold {{ $pay -> validated ? 'text-primary-400' : 'text-red-600'}}">
                                {{ $pay -> validated ? "Validated" : "Pending Validation"}}
                            </td>
                            <td class="py-3 px-3">{{ $pay -> created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@endSection