<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Commission Triggers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="flex justify-between items-center bg-gray-200 py-4 px-6">
                        <h1 class="text-3xl font-semibold text-gray-800">Commission Triggers</h1>

                        <a href="{{ route('commission-triggers.create') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-300 ease-in-out">Create
                            Commission Trigger</a>
                    </div>

                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Trigger Event</th>
                                <th class="px-4 py-2">Deposit Event</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($commissionTriggers as $commissionTrigger)
                                <tr>
                                    <td class="border px-4 py-2">{{ $commissionTrigger->id }}</td>
                                    <td class="border px-4 py-2">{{ $commissionTrigger->triggerEvent }}</td>
                                    <td class="border px-4 py-2">{{ $commissionTrigger->depositEvent }}</td>
                                    <td>
                                        <a href="{{ route('commission-triggers.show', $commissionTrigger) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('commission-triggers.edit', $commissionTrigger) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('commission-triggers.destroy', $commissionTrigger) }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $commissionTrigger->id }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $commissionTrigger->id }}" action="{{ route('commission-triggers.destroy', $commissionTrigger) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No commission triggers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $commissionTriggers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
