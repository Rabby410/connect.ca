<!-- resources/views/commission_triggers/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Commission Trigger') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('commission-triggers.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="triggerEvent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Trigger Event:
                        </label>
                        <input type="text" name="triggerEvent" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="depositEvent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Deposit Event:
                        </label>
                        <input type="text" name="depositEvent" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <button type="submit"
                        class="border bg-blue-500 hover:bg-blue-600 hover:text-white text-black py-2 px-4 rounded-md transition duration-300 ease-in-out">
                        Create Commission Trigger
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
