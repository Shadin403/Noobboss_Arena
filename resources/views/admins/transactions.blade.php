@extends('admins.layout.base')
@push('title')
    Dashboard | Transactions
@endpush
@section('body')
     <div class="ml-0 md:ml-64 p-6 min-h-screen">
        <h2 class="text-3xl font-bold mb-6 animate-slide-in">Transactions</h2>
        <div class="card animate-slide-in" style="animation-delay: 0.2s;">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-gray-700">
                        <th class="py-2">User</th>
                        <th class="py-2">Amount</th>
                        <th class="py-2">Transaction ID</th>
                        <th class="py-2">Receipt</th>
                        <th class="py-2">Status</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">PlayerOne</td>
                        <td class="py-2">$50.00</td>
                        <td class="py-2">TX12345</td>
                        <td class="py-2">
                            <a href="https://via.placeholder.com/150" target="_blank" class="text-blue-400 hover:underline">View</a>
                        </td>
                        <td class="py-2">Pending</td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-green-600 hover:bg-green-500 mr-2" onclick="approveTransaction(1)">Approve</button>
                            <button class="btn btn-sm bg-red-600 hover:bg-red-500" onclick="rejectTransaction(1)">Reject</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">GamerX</td>
                        <td class="py-2">$30.00</td>
                        <td class="py-2">TX67890</td>
                        <td class="py-2">
                            <a href="https://via.placeholder.com/150" target="_blank" class="text-blue-400 hover:underline">View</a>
                        </td>
                        <td class="py-2">Approved</td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-gray-600" disabled>Approved</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection