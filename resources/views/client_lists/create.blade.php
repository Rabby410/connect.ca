<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('client-lists.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="clientName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Client Name:
                        </label>
                        <input type="text" name="clientName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Address:
                        </label>
                        <input type="text" name="address" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            City:
                        </label>
                        <input type="text" name="city" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    
                    <div class="mb-4">
                        <label for="prov" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Provience:
                        </label>
                        <input type="text" name="prov" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Country:
                        </label>
                        <input type="text" name="country" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    <div class="mb-4">
                        <label for="postalCode" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Postal Code:
                        </label>
                        <input type="text" name="postalCode" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Phone:
                        </label>
                        <input type="text" name="phone" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="Email" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Email:
                        </label>
                        <input type="email" name="Email" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="dob" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Dath of Birth:
                        </label>
                        <input type="date" name="dob" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="age" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Age:
                        </label>
                        <input type="number" name="age" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="firstDeal" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            First Deal :
                        </label>
                        <input type="number" name="firstDeal" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="ageAtP" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Age @ P:
                        </label>
                        <input type="number" name="ageAtP" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="occupation" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Occupation:
                        </label>
                        <input type="text" name="occupation" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="driversLicense" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Drivers License:
                        </label>
                        <input type="file" name="driversLicense" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="hubspotID" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Hubspot ID:
                        </label>
                        <input type="text" name="hubspotID" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedpreConDealsByBuyer1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related preConDeals By Buyer #1:
                        </label>
                        <input type="text" name="relatedpreConDealsByBuyer1" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedpreConDealsByBuyer2" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related preConDeals By Buyer #2:
                        </label>
                        <input type="text" name="relatedpreConDealsByBuyer2" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedresaleDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related resaleDeals:
                        </label>
                        <input type="text" name="relatedresaleDeals" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedresaleDealsByBuyersName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related resaleDeals By Buyers Name:
                        </label>
                        <input type="text" name="relatedresaleDealsByBuyersName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedleaseDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related leaseDeals:
                        </label>
                        <input type="text" name="relatedleaseDeals" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedPreConTrackersByBuyer1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related PreConTrackers By Buyer 1:
                        </label>
                        <input type="text" name="relatedPreConTrackersByBuyer1" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedPreConTrackersByBuyer2" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related PreConTrackers By Buyer 2:
                        </label>
                        <input type="text" name="relatedPreConTrackersByBuyer2" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>
                    
                    

                    <!-- Add other input fields as needed -->

                    <button type="submit"
                        class="border bg-blue-500 hover:bg-blue-600 hover:text-white text-black py-2 px-4 rounded-md transition duration-300 ease-in-out">
                        Create Client
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>