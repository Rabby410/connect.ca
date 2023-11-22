<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Brokerage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('brokerages.store') }}" method="POST">
                    @csrf

                    <!-- BrokerageFullName -->
                    <div class="mb-4">
                        <label for="brokerageName"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Brokerage Name:</label>
                        <input type="text" name="brokerageName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- brokerageAddress -->
                    <div class="mb-4">
                        <label for="brokerageAddress"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Brokerage Address:</label>
                        <input type="text" name="brokerageAddress" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- brokeragePhone -->
                    <div class="mb-4">
                        <label for="brokeragePhone"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Brokerage Phone:</label>
                        <input type="text" name="brokeragePhone" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- relatedAgents -->
                    <div class="mb-4">
                        <label for="relatedAgents"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Agents:</label>
                        <input type="text" name="relatedAgents" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- relatedresaleDealsByListingReferralAgentsBrokerage -->
                    <div class="mb-4">
                        <label for="relatedresaleDealsByListingReferralAgentsBrokerage"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related resaleDeals By Listing Referral Agents Brokerage:</label>
                        <input type="text" name="relatedresaleDealsByListingReferralAgentsBrokerage" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- relatedresaleDealsByBuyerReferralAgentsBrokerage -->
                    <div class="mb-4">
                        <label for="relatedresaleDealsByBuyerReferralAgentsBrokerage"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related resaleDeals By Buyer Referral Agents Brokerage:</label>
                        <input type="text" name="relatedresaleDealsByBuyerReferralAgentsBrokerage" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <!-- relatedleaseDeals -->
                    <div class="mb-4">
                        <label for="relatedleaseDeals"
                            class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related leaseDeals:</label>
                        <input type="text" name="relatedleaseDeals" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <button type="submit"
                        class="border bg-blue-500 hover:bg-blue-600 hover:text-white text-black py-2 px-4 rounded-md transition duration-300 ease-in-out">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
