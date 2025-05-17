@extends('admins.layout.base')
@push('title')
    Dashboard | Manage Tournaments
@endpush
@section('body')
     <div class="ml-0 md:ml-64 p-6 min-h-screen">
        <h2 class="text-3xl font-bold mb-6 animate-slide-in">Manage Tournaments</h2>
        <div class="card animate-slide-in" style="animation-delay: 0.2s;">
            <button class="btn mb-6" onclick="showAddTournamentForm()">Add Tournament</button>
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-gray-700">
                        <th class="py-2">Type</th>
                        <th class="py-2">Entry Fee</th>
                        <th class="py-2">Prize Pool</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">1v1</td>
                        <td class="py-2">$5.00</td>
                        <td class="py-2">$100.00</td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-blue-600 hover:bg-blue-500 mr-2" onclick="showEditTournamentForm(1)">Edit</button>
                            <button class="btn btn-sm bg-red-600 hover:bg-red-500" onclick="deleteTournament(1)">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-700">
                        <td class="py-2">4v4</td>
                        <td class="py-2">$20.00</td>
                        <td class="py-2">$500.00</td>
                        <td class="py-2">
                            <button class="btn btn-sm bg-blue-600 hover:bg-blue-500 mr-2" onclick="showEditTournamentForm(2)">Edit</button>
                            <button class="btn btn-sm bg-red-600 hover:bg-red-500" onclick="deleteTournament(2)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Add Tournament Form (Hidden by Default) -->
            <div id="add-tournament-form" class="hidden mt-6">
                <h3 class="text-xl font-bold mb-4">Add Tournament</h3>
                <form id="addTournamentForm">
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="tournamentType">Type</label>
                        <input type="text" id="tournamentType" class="w-full p-3 rounded bg-gray-700 text-white" placeholder="e.g., 1v1" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="entryFee">Entry Fee ($)</label>
                        <input type="number" id="entryFee" class="w-full p-3 rounded bg-gray-700 text-white" placeholder="e.g., 5.00" step="0.01" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="prizePool">Prize Pool ($)</label>
                        <input type="number" id="prizePool" class="w-full p-3 rounded bg-gray-700 text-white" placeholder="e.g., 100.00" step="0.01" required>
                    </div>
                    <button type="submit" class="btn">Add Tournament</button>
                    <button type="button" class="btn bg-gray-600 hover:bg-gray-500 ml-2" onclick="hideAddTournamentForm()">Cancel</button>
                </form>
            </div>
            <!-- Edit Tournament Form (Hidden by Default) -->
            <div id="edit-tournament-form" class="hidden mt-6">
                <h3 class="text-xl font-bold mb-4">Edit Tournament</h3>
                <form id="editTournamentForm">
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editTournamentType">Type</label>
                        <input type="text" id="editTournamentType" class="w-full p-3 rounded bg-gray-700 text-white" value="1v1" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editEntryFee">Entry Fee ($)</label>
                        <input type="number" id="editEntryFee" class="w-full p-3 rounded bg-gray-700 text-white" value="5.00" step="0.01" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm mb-2" for="editPrizePool">Prize Pool ($)</label>
                        <input type="number" id="editPrizePool" class="w-full p-3 rounded bg-gray-700 text-white" value="100.00" step="0.01" required>
                    </div>
                    <button type="submit" class="btn">Save Changes</button>
                    <button type="button" class="btn bg-gray-600 hover:bg-gray-500 ml-2" onclick="hideEditTournamentForm()">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection