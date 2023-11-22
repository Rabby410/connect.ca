<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Agent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('agents.store') }}" method="POST">
                    @csrf

                    <!-- AgentFullName -->
                    <div class="mb-4">
                        <label for="AgentFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Agent Full Name:</label>
                        <input type="text" name="AgentFullName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- LastName -->
                    <div class="mb-4">
                        <label for="LastName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Last Name:</label>
                        <input type="text" name="LastName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- FirstName -->
                    <div class="mb-4">
                        <label for="FirstName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">First Name:</label>
                        <input type="text" name="FirstName" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- Brokerage -->
                    <div class="mb-4">
                        <label for="Brokerage" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Brokerage:</label>
                        <input type="text" name="Brokerage" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- PartnerType -->
                    <div class="mb-4">
                        <label for="PartnerType" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Partner Type:</label>
                        <input type="text" name="PartnerType" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- MentorPrimary -->
                    <div class="mb-4">
                        <label for="MentorPrimary" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Mentor Primary:</label>
                        <input type="text" name="MentorPrimary" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- MentorSecondary -->
                    <div class="mb-4">
                        <label for="MentorSecondary" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Mentor Secondary:</label>
                        <input type="text" name="MentorSecondary" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- CellNumber -->
                    <div class="mb-4">
                        <label for="CellNumber" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Cell Number:</label>
                        <input type="text" name="CellNumber" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- EmailAddress -->
                    <div class="mb-4">
                        <label for="EmailAddress" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Email Address:</label>
                        <input type="email" name="EmailAddress" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- HomeAddress -->
                    <div class="mb-4">
                        <label for="HomeAddress" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Home Address:</label>
                        <textarea name="HomeAddress" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full"></textarea>
                    </div>

                    <!-- Birthday -->
                    <div class="mb-4">
                        <label for="Birthday" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Birthday:</label>
                        <input type="date" name="Birthday" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- EffectiveDate -->
                    <div class="mb-4">
                        <label for="EffectiveDate" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Effective Date:</label>
                        <input type="date" name="EffectiveDate" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- AssociatePeriodEndDate -->
                    <div class="mb-4">
                        <label for="AssociatePeriodEndDate" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Associate Period End Date:</label>
                        <input type="date" name="AssociatePeriodEndDate" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- Notes -->
                    <div class="mb-4">
                        <label for="Notes" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Notes:</label>
                        <textarea name="Notes" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full"></textarea>
                    </div>

                    <!-- PartnerTypeSelected -->
                    <div class="mb-4">
                        <label for="PartnerTypeSelected" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Partner Type Selected:</label>
                        <input type="text" name="PartnerTypeSelected" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- _ComputedName -->
                    <div class="mb-4">
                        <label for="_ComputedName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Computed Name:</label>
                        <input type="text" name="_ComputedName" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDeals -->
                    <div class="mb-4">
                        <label for="relatedPreConDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals:</label>
                        <input type="text" name="relatedPreConDeals" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByListingAgent -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByListingAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Listing Agent:</label>
                        <input type="text" name="relatedResaleDealsByListingAgent" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByBuyerAgent -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByBuyerAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Buyer Agent:</label>
                        <input type="text" name="relatedResaleDealsByBuyerAgent" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByListingReferralAgentsFullName -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByListingReferralAgentsFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Listing Referral Agents Full Name:</label>
                        <input type="text" name="relatedResaleDealsByListingReferralAgentsFullName" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByBuyerReferralAgentsFullName -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByBuyerReferralAgentsFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Buyer Referral Agents Full Name:</label>
                        <input type="text" name="relatedResaleDealsByBuyerReferralAgentsFullName" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByFacilitatingAgent -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByFacilitatingAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By Facilitating Agent:</label>
                        <input type="text" name="relatedPreConDealsByFacilitatingAgent" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseDealsByLandlordAgent -->
                    <div class="mb-4">
                        <label for="relatedLeaseDealsByLandlordAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Deals By Landlord Agent:</label>
                        <input type="text" name="relatedLeaseDealsByLandlordAgent" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseDealsByTenantRepAgent -->
                    <div class="mb-4">
                        <label for="relatedLeaseDealsByTenantRepAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Deals By Tenant Rep Agent:</label>
                        <input type="text" name="relatedLeaseDealsByTenantRepAgent" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseTrackers -->
                    <div class="mb-4">
                        <label for="relatedLeaseTrackers" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Trackers:</label>
                        <input type="text" name="relatedLeaseTrackers" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseTrackersByAgentEmail -->
                    <div class="mb-4">
                        <label for="relatedLeaseTrackersByAgentEmail" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Trackers By Agent Email:</label>
                        <input type="text" name="relatedLeaseTrackersByAgentEmail" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByMentor -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByMentor" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By Mentor:</label>
                        <input type="text" name="relatedPreConDealsByMentor" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedpreConDealsByISA -->
                    <div class="mb-4">
                        <label for="relatedpreConDealsByISA" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By ISA:</label>
                        <input type="text" name="relatedpreConDealsByISA" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByISAManager -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByISAManager" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By ISA Manager:</label>
                        <input type="text" name="relatedPreConDealsByISAManager" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <button type="submit"
                        class="border bg-blue-500 hover:bg-blue-600 hover:text-white text-black py-2 px-4 rounded-md transition duration-300 ease-in-out">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
