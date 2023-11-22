<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Agent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('agents.update', $agent->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- AgentFullName -->
                    <div class="mb-4">
                        <label for="AgentFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Agent Full Name:</label>
                        <input type="text" name="AgentFullName" value="{{ $agent->AgentFullName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- LastName -->
                    <div class="mb-4">
                        <label for="LastName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Last Name:</label>
                        <input type="text" name="LastName" value="{{ $agent->LastName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- FirstName -->
                    <div class="mb-4">
                        <label for="FirstName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">First Name:</label>
                        <input type="text" name="FirstName" value="{{ $agent->FirstName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- Brokerage -->
                    <div class="mb-4">
                        <label for="Brokerage" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Brokerage:</label>
                        <input type="text" name="Brokerage" value="{{ $agent->Brokerage }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- PartnerType -->
                    <div class="mb-4">
                        <label for="PartnerType" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Partner Type:</label>
                        <input type="text" name="PartnerType" value="{{ $agent->PartnerType }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- MentorPrimary -->
                    <div class="mb-4">
                        <label for="MentorPrimary" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Mentor Primary:</label>
                        <input type="text" name="MentorPrimary" value="{{ $agent->MentorPrimary }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- MentorSecondary -->
                    <div class="mb-4">
                        <label for="MentorSecondary" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Mentor Secondary:</label>
                        <input type="text" name="MentorSecondary" value="{{ $agent->MentorSecondary }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- CellNumber -->
                    <div class="mb-4">
                        <label for="CellNumber" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Cell Number:</label>
                        <input type="text" name="CellNumber" value="{{ $agent->CellNumber }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- EmailAddress -->
                    <div class="mb-4">
                        <label for="EmailAddress" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Email Address:</label>
                        <input type="email" name="EmailAddress" value="{{ $agent->EmailAddress }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- HomeAddress -->
                    <div class="mb-4">
                        <label for="HomeAddress" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Home Address:</label>
                        <textarea name="HomeAddress" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full" required>{{ $agent->HomeAddress }}</textarea>
                    </div>

                    <!-- Birthday -->
                    <div class="mb-4">
                        <label for="Birthday" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Birthday:</label>
                        <input type="date" name="Birthday" value="{{ $agent->Birthday }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- EffectiveDate -->
                    <div class="mb-4">
                        <label for="EffectiveDate" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Effective Date:</label>
                        <input type="date" name="EffectiveDate" value="{{ $agent->EffectiveDate }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- AssociatePeriodEndDate -->
                    <div class="mb-4">
                        <label for="AssociatePeriodEndDate" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Associate Period End Date:</label>
                        <input type="date" name="AssociatePeriodEndDate" value="{{ $agent->AssociatePeriodEndDate }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- Notes -->
                    <div class="mb-4">
                        <label for="Notes" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Notes:</label>
                        <textarea name="Notes" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">{{ $agent->Notes }}</textarea>
                    </div>

                    <!-- PartnerTypeSelected -->
                    <div class="mb-4">
                        <label for="PartnerTypeSelected" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Partner Type Selected:</label>
                        <input type="text" name="PartnerTypeSelected" value="{{ $agent->PartnerTypeSelected }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- _ComputedName -->
                    <div class="mb-4">
                        <label for="_ComputedName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Computed Name:</label>
                        <input type="text" name="_ComputedName" value="{{ $agent->_ComputedName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDeals -->
                    <div class="mb-4">
                        <label for="relatedPreConDeals" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals:</label>
                        <input type="text" name="relatedPreConDeals" value="{{ $agent->relatedPreConDeals }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByListingAgent -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByListingAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Listing Agent:</label>
                        <input type="text" name="relatedResaleDealsByListingAgent" value="{{ $agent->relatedResaleDealsByListingAgent }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByBuyerAgent -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByBuyerAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Buyer Agent:</label>
                        <input type="text" name="relatedResaleDealsByBuyerAgent" value="{{ $agent->relatedResaleDealsByBuyerAgent }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByListingReferralAgentsFullName -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByListingReferralAgentsFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Listing Referral Agents Full Name:</label>
                        <input type="text" name="relatedResaleDealsByListingReferralAgentsFullName" value="{{ $agent->relatedResaleDealsByListingReferralAgentsFullName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedResaleDealsByBuyerReferralAgentsFullName -->
                    <div class="mb-4">
                        <label for="relatedResaleDealsByBuyerReferralAgentsFullName" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Resale Deals By Buyer Referral Agents Full Name:</label>
                        <input type="text" name="relatedResaleDealsByBuyerReferralAgentsFullName" value="{{ $agent->relatedResaleDealsByBuyerReferralAgentsFullName }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByFacilitatingAgent -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByFacilitatingAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By Facilitating Agent:</label>
                        <input type="text" name="relatedPreConDealsByFacilitatingAgent" value="{{ $agent->relatedPreConDealsByFacilitatingAgent }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseDealsByLandlordAgent -->
                    <div class="mb-4">
                        <label for="relatedLeaseDealsByLandlordAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Deals By Landlord Agent:</label>
                        <input type="text" name="relatedLeaseDealsByLandlordAgent" value="{{ $agent->relatedLeaseDealsByLandlordAgent }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseDealsByTenantRepAgent -->
                    <div class="mb-4">
                        <label for="relatedLeaseDealsByTenantRepAgent" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Deals By Tenant Rep Agent:</label>
                        <input type="text" name="relatedLeaseDealsByTenantRepAgent" value="{{ $agent->relatedLeaseDealsByTenantRepAgent }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseTrackers -->
                    <div class="mb-4">
                        <label for="relatedLeaseTrackers" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Trackers:</label>
                        <input type="text" name="relatedLeaseTrackers" value="{{ $agent->relatedLeaseTrackers }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedLeaseTrackersByAgentEmail -->
                    <div class="mb-4">
                        <label for="relatedLeaseTrackersByAgentEmail" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Lease Trackers By Agent Email:</label>
                        <input type="text" name="relatedLeaseTrackersByAgentEmail" value="{{ $agent->relatedLeaseTrackersByAgentEmail }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByMentor -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByMentor" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By Mentor:</label>
                        <input type="text" name="relatedPreConDealsByMentor" value="{{ $agent->relatedPreConDealsByMentor }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedpreConDealsByISA -->
                    <div class="mb-4">
                        <label for="relatedpreConDealsByISA" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By ISA:</label>
                        <input type="text" name="relatedpreConDealsByISA" value="{{ $agent->relatedpreConDealsByISA }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <!-- relatedPreConDealsByISAManager -->
                    <div class="mb-4">
                        <label for="relatedPreConDealsByISAManager" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Related Pre-Con Deals By ISA Manager:</label>
                        <input type="text" name="relatedPreConDealsByISAManager" value="{{ $agent->relatedPreConDealsByISAManager }}" required
                            class="mt-1 p-2 border border-gray-300 dark:border-gray-700 rounded-md w-full">
                    </div>

                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300 ease-in-out">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
