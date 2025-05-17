@extends('admins.layout.base')
@push('title')
    Dashboard | Manage Users
@endpush
@section('body')
    <div class="ml-0 md:ml-64 p-6 min-h-screen">
        <h2 class="text-3xl font-bold mb-6 animate-slide-in">Manage Users</h2>
        <div class="card animate-slide-in" style="animation-delay: 0.2s;">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-gray-700">
                        <th class="py-2">Username</th>
                        <th class="py-2">Email</th>
                        <th class="py-2">Balance</th>
                        <th class="py-2">Profile Picture</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">PlayerOne</td>
                        <td class="py-2">player1@example.com</td>
                        <td class="py-2">$50.00</td>
                        <td class="py-2">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
                        </td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-blue-600 hover:bg-blue-500 mr-2"
                                onclick="showEditUserForm(1)">Edit</button>
                            <button class="btn btn-sm bg-red-600 hover:bg-red-500" onclick="deleteUser(1)">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">GamerX</td>
                        <td class="py-2">gamerx@example.com</td>
                        <td class="py-2">$20.00</td>
                        <td class="py-2">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
                        </td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-blue-600 hover:bg-blue-500 mr-2"
                                onclick="showEditUserForm(2)">Edit</button>
                            <button class="btn btn-sm bg-red-600 hover:bg-red-500" onclick="deleteUser(2)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Edit User Form (Hidden by Default) -->
            <div id="edit-user-form" class="hidden mt-6">
                <h3 class="text-xl font-bold mb-4">Edit User</h3>
                <form id="editUserForm">
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editUsername">Username</label>
                        <input type="text" id="editUsername" class="w-full p-3 rounded bg-gray-700 text-white"
                            value="PlayerOne" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editEmail">Email</label>
                        <input type="email" id="editEmail" class="w-full p-3 rounded bg-gray-700 text-white"
                            value="player1@example.com" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editProfilePic">Profile Picture URL</label>
                        <input type="url" id="editProfilePic" class="w-full p-3 rounded bg-gray-700 text-white"
                            placeholder="https://example.com/image.jpg">
                    </div>
                    <button type="submit" class="btn">Save Changes</button>
                    <button type="button" class="btn bg-gray-600 hover:bg-gray-500 ml-2"
                        onclick="hideEditUserForm()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
