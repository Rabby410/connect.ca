<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto my-8">
                    <div class="flex justify-between items-center bg-gray-200 py-4 px-6">
                        <h1 class="text-3xl font-semibold text-gray-800">Agents</h1>

                        <a href="{{ route('agents.create') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-300 ease-in-out">Create
                            Agent</a>
                    </div>

                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Agent Full Name</th>
                                <th class="px-4 py-2">Last Name</th>
                                <th class="px-4 py-2">First Name</th>
                                <!-- Add other headers as needed -->
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agents as $agent)
                                <tr>
                                    <td class="border px-4 py-2">{{ $agent->_RowNumber }}</td>
                                    <td class="border px-4 py-2">{{ $agent->AgentFullName }}</td>
                                    <td class="border px-4 py-2">{{ $agent->LastName }}</td>
                                    <td class="border px-4 py-2">{{ $agent->FirstName }}</td>
                                    <!-- Add other columns as needed -->
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('agents.edit', $agent->id) }}" class="text-blue-500">Edit</a>
                                        <form action="{{ route('agents.destroy', $agent->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $agents->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
