<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('client-lists.update', $clientList) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="clientName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Client Name:
                        </label>
                        <input type="text" name="clientName" value="{{ $clientList->clientName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Address:
                        </label>
                        <input type="text" name="address" value="{{ $clientList->address }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            City:
                        </label>
                        <input type="text" name="city" value="{{ $clientList->city }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="prov" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Provience:
                        </label>
                        <input type="text" name="prov" value="{{ $clientList->Prov }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="country" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Country:
                        </label>
                        <input type="text" name="country" value="{{ $clientList->country }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="postalCode" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Postal Code:
                        </label>
                        <input type="text" name="postalCode" value="{{ $clientList->postalCode }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Phone:
                        </label>
                        <input type="text" name="phone" value="{{ $clientList->phone }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="Email" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Email:
                        </label>
                        <input type="email" name="Email" value="{{ $clientList->Email }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="dob" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Dath of Birth:
                        </label>
                        <input type="date" name="dob" value="{{ $clientList->dob }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="age" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Age:
                        </label>
                        <input type="number" name="age" value="{{ $clientList->age }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="firstDeal" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            First Deal :
                        </label>
                        <input type="number" name="firstDeal" value="{{ $clientList->firstDeal }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="ageAtP" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Age @ P:
                        </label>
                        <input type="number" name="ageAtP" value="{{ $clientList->ageAtP }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="occupation" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Occupation:
                        </label>
                        <input type="text" name="occupation" value="{{ $clientList->occupation }}" required
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
                        <input type="text" name="hubspotID" value="{{ $clientList->hubspotID }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedpreConDealsByBuyer1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related preConDeals By Buyer #1:
                        </label>
                        <input type="text" name="relatedpreConDealsByBuyer1" value="{{ $clientList->relatedpreConDealsByBuyer1 }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedpreConDealsByBuyer2" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related preConDeals By Buyer #2:
                        </label>
                        <input type="text" name="relatedpreConDealsByBuyer2" value="{{ $clientList->relatedpreConDealsByBuyer2 }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedresaleDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related resaleDeals:
                        </label>
                        <input type="text" name="relatedresaleDeals" value="{{ $clientList->relatedresaleDeals }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedresaleDealsByBuyersName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related resaleDeals By Buyers Name:
                        </label>
                        <input type="text" name="relatedresaleDealsByBuyersName" value="{{ $clientList->relatedresaleDealsByBuyersName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedleaseDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related leaseDeals:
                        </label>
                        <input type="text" name="relatedleaseDeals" value="{{ $clientList->relatedleaseDeals }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedPreConTrackersByBuyer1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related PreConTrackers By Buyer 1:
                        </label>
                        <input type="text" name="relatedPreConTrackersByBuyer1" value="{{ $clientList->relatedPreConTrackersByBuyer1 }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="relatedPreConTrackersByBuyer2" class="block text-sm font-medium text-gray-600 dark:text-gray-300">
                            Related PreConTrackers By Buyer 2:
                        </label>
                        <input type="text" name="relatedPreConTrackersByBuyer2" value="{{ $clientList->relatedPreConTrackersByBuyer2 }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <button type="submit"
                        class="border bg-blue-500 hover:bg-blue-600 hover:text-white text-black py-2 px-4 rounded-md transition duration-300 ease-in-out">
                        Update Client
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
