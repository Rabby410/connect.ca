<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Brokarages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="flex justify-between items-center bg-gray-200 py-4 px-6">
                        <h1 class="text-3xl font-semibold text-gray-800">Brokarages</h1>

                        <a href="{{ route('brokerages.create') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-300 ease-in-out">Create
                            Brokarage</a>
                    </div>

                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Brokerage Name</th>
                                <th class="px-4 py-2">Brokerage Address</th>
                                <th class="px-4 py-2">Brokerage Phone</th>
                                <th class="px-4 py-2">Related Agents</th>
                                <th class="px-4 py-2">Related resaleDeals By Listing Referral Agents Brokerage</th>
                                <th class="px-4 py-2">Related resaleDeals By Buyer Referral Agents Brokerage</th>
                                <th class="px-4 py-2">Related leaseDeals</th>
                                <!-- Add other headers as needed -->
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brokerages as $brokerage)
                                <tr>
                                    <td class="border px-4 py-2">{{ $agent->_RowNumber }}</td>
                                    <td class="border px-4 py-2">{{ $agent->AgentFullName }}</td>
                                    <td class="border px-4 py-2">{{ $agent->LastName }}</td>
                                    <td class="border px-4 py-2">{{ $agent->FirstName }}</td>
                                    <!-- Add other columns as needed -->
                                    <td>
                                        <a href="{{ route('brokerages.show', $brokerage) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('brokerages.edit', $brokerage) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('brokerages.destroy', $brokerage) }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $brokerage->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $brokerage->id }}" action="{{ route('brokerages.destroy', $brokerage) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No brokerages found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $brokerages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
