<!-- resources/views/client_lists/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Client Lists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="flex justify-between items-center bg-gray-200 py-4 px-6">
                        <h1 class="text-3xl font-semibold text-gray-800">Client Lists</h1>

                        <a href="{{ route('client-lists.create') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-300 ease-in-out">Create
                            Client</a>
                    </div>

                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Client Name</th>
                                <th class="px-4 py-2">Address</th>
                                <th class="px-4 py-2">City</th>
                                <th class="px-4 py-2">Province</th>
                                <th class="px-4 py-2">Country</th>
                                <th class="px-4 py-2">Postal Code</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Date of Birth</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">First Deal</th>
                                <th class="px-4 py-2">Age @ P</th>
                                <th class="px-4 py-2">Occupation</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientLists as $clientList)
                                <tr>
                                    <td class="border px-4 py-2">{{ $clientList->id }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->clientName }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->address }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->city }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->prov }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->country }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->postalCode }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->phone }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->Email }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->dob }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->age }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->firstDeal }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->ageAtP }}</td>
                                    <td class="border px-4 py-2">{{ $clientList->occupation }}</td>
                                    <td>
                                        <a href="{{ route('client-lists.show', $clientList) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('client-lists.edit', $clientList) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('client-lists.destroy', $clientList) }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $clientList->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $clientList->id }}" action="{{ route('client-lists.destroy', $clientList) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="15">No clients found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $clientLists->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
