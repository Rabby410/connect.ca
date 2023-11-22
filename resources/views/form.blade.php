<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precon Deal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: url({{ asset('bg-3.jpg') }});
            background-size: cover;

        }

        .steps-container {
            background-color: #1a202c;
        }

        .steps-container button {
            color: #cbd5e0;
        }

        .form-container::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .formview::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center">

    <?php
    $stepNames = ['Deal Admin', 'Comm. Info', 'Comm. Payment', 'Commission Payouts', 'Cashflow Reporting'];
    $maxVisibleSteps = 3;
    ?>

    <div class="bg-white max-w-md w-full p-0 rounded-lg shadow-lg relative">
        <!-- Steps Container -->
        <div class="flex items-center overflow-hidden whitespace-nowrap steps-container">
            <!-- Left Arrow -->
            <button
                class="px-4 py-2 transition duration-300 ease-in-out focus:outline-none focus:shadow-outline
                hover:bg-blue-500 hover:text-white rounded-l-md"
                onclick="scrollSteps(-1)">&lt;</button>
            {{-- window.location.href='{{ route('form', ['step' => $i]) }}' --}}
            <!-- Visible Steps -->
            <div id="stepsContainer" class="flex items-center space-x-4 overflow-x-hidden mx-auto">
                <!-- Updated loop to always show at least three steps -->
                @for ($i = 1; $i <= count($stepNames); $i++)
                    <button
                        class="px-6 py-2 text-xs font-medium transition duration-300 ease-in-out focus:outline-none focus:shadow-outline
                        {{ $i == $step ? 'bg-blue-500 text-white' : 'bg-gray-800 hover:bg-blue-500 hover:text-white' }}"
                        onclick="window.location.href='{{ route('form', ['step' => $i]) }}'">
                        {{ $stepNames[$i - 1] }}
                    </button>
                @endfor
            </div>

            <!-- Right Arrow -->
            <button
                class="px-4 py-2 transition duration-300 ease-in-out focus:outline-none focus:shadow-outline
               hover:bg-blue-500 hover:text-white rounded-r-md"
                onclick="scrollSteps(1)">&gt;</button>
        </div>

        <!-- Form Container -->
        <form action="{{ route('form.process', ['step' => $step]) }}" method="post"
            class="mt-0 space-y-4 p-2 formview bg-gray-700 rounded-b-lg">
            @csrf

            <div class="mt-2 space-y-4 p-2 formview" style="height: 500px; overflow-y: auto;">
                <!-- Customize form fields based on the step -->
                @if ($step == 1)
                    <!-- Step 1 Fields -->
                    <label for="field1" class="block text-xs font-small text-gray-100">Development Name:</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Suite Number</label>
                    <input type="text" id="additionalField1" name="additionalField1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Purchase Price</label>
                    <input type="text" id="additionalField1" name="additionalField1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Written/Executed
                        Date</label>
                    <input type="date" id="additionalField1" name="additionalField1"
                        class="p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Connect Agent</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Buyer</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Deal Type</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <label for="anyCASHBACKToClient" class="block text-xs font-medium text-gray-100">Any CASHBACK to
                        Client?</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('No')">No</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('%')">%</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('$')">$</button>
                    </div>

                    <input type="hidden" id="anyCASHBACKToClient" name="anyCASHBACKToClient" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <label for="doestheClientWant1-YRFreeManagementFromMarco"
                        class="block text-xs font-medium text-gray-100">Does the Client Want
                        1-YR Free Management From Marco?</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('yes')">Yes</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('no')">No</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="doestheclientwantacomplementorylegalreviewfromWeAreLaw"
                        class="block text-xs font-medium text-gray-100">Does the client want
                        a complementory legal review from We Are Law?</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('yes')">Yes</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('no')">No</button>
                    </div>

                    <input type="hidden" id="doestheclientwantacomplementorylegalreviewfromWeAreLaw"
                        name="doestheclientwantacomplementorylegalreviewfromWeAreLaw" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Unique Id</label>
                    <input type="text" id="additionalField1" name="additionalField1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="additionalField1" class="block text-xs font-medium text-gray-100">Lead Source</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                @elseif ($step == 2)
                    <!-- Step 2 Fields -->
                    <label for="estFirmDate" class="block text-xs font-medium text-gray-100">Est. Firm Date</label>
                    <select id="estFirmDate" name="estFirmDate"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>

                    <label for="field2" class="block text-xs font-medium text-gray-100">APS (Page 1) Image</label>
                    <label for="field2" class="block text-xs font-medium text-gray-100 text-center">
                        <div class="flex items-center justify-center p-4 border rounded cursor-pointer">
                            <span class="fas fa-file-pdf text-red-500"><img src="{{ asset('pdf-svgr.svg') }}"
                                    width="20px" /></span>
                        </div>
                    </label>
                    <input type="file" id="field2" name="field2" class="hidden" accept=".pdf">

                    <label for="field2" class="block text-xs font-medium text-gray-100">Confirmation of
                        Co-Op</label>
                    <label for="field2" class="block text-xs font-medium text-gray-100 text-center">
                        <div class="flex items-center justify-center p-4 border rounded cursor-pointer">
                            <span class="fas fa-file-pdf text-red-500"><img src="{{ asset('pdf-svgr.svg') }}"
                                    width="20px" /></span>
                        </div>
                    </label>
                    <input type="file" id="field2" name="field2" class="hidden" accept=".pdf">

                    <label for="field2" class="block text-xs font-medium text-gray-100">Checklist Completed</label>
                    <label for="field2" class="block text-xs font-medium text-gray-100 text-center">
                        <div class="flex items-center justify-center p-4 border rounded cursor-pointer">
                            <span class="fas fa-file-pdf text-red-500"><img src="{{ asset('pdf-svgr.svg') }}"
                                    width="20px" /></span>
                        </div>
                    </label>
                    <input type="file" id="field2" name="field2" class="hidden" accept=".pdf">

                    <label for="field2" class="block text-xs font-medium text-gray-100">Trade Sunmitted to KW
                        Deals</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('n')">N</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <label for="field2" class="block text-xs font-medium text-gray-100">Invoice sent by KW
                        Deals</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('n')">N</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('y')">Y</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                @elseif ($step == 3)
                    <label for="field2" class="block text-xs font-medium text-gray-100">Is this is fixed Commission
                        deal?</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('yes')">Yes</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('no')">No</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <label for="field2" class="block text-xs font-medium text-gray-100">Commission Rate (%)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Number of
                        Installments</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Net of HST (may not include
                        parking/locker or incentives)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Total Commission ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                @elseif ($step == 4)
                    <h3 class="text-gray-100 font-bold">Installment #1</h3>
                    <label for="field2" class="block text-xs font-medium text-gray-100">Is the Installment 1 a fixed
                        cash amount or a percentage?</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('$')">$</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('%')">%</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <label for="field2" class="block text-xs font-medium text-gray-100">#1 Installment: Amount
                        (%)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">#1 Installment: Amount
                        ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">What triggers the first
                        installment to be paid?</label>
                    <select id="field1" name="field1"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <label for="field2" class="block text-xs font-medium text-gray-100">How many days after is the
                        commission inslament due?</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                @elseif ($step == 5)
                    <label for="field2" class="block text-xs font-medium text-gray-100">Manyal Override for
                        installment Payouts</label>
                    <div class="mt-1 flex space-x-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('yes')">Yes</button>

                        <button type="button"
                            class="flex-1 px-4 py-2 text-sm border rounded focus:outline-none focus:border-blue-500 focus:bg-blue-500"
                            onclick="setCashbackOption('no')">No</button>
                    </div>

                    <input type="hidden" id="additionalField1" name="additionalField1" value="No"
                        class="hidden mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <label for="field2" class="block text-xs font-medium text-gray-100">#1 Installment: Agent Amount
                        ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">'s Commission Total
                        ($)'</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Connect Commission Total Net
                        of Expenses ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Connect Commission Total Net
                        of Bonuses ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                    <label for="field2" class="block text-xs font-medium text-gray-100">Connect Commission Total Net
                        of Expenses and Bonuses ($)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">

                    <h3 class="text-gray-100 font-semibold">Manager Payout</h3>
                    <label for="field2" class="block text-xs font-medium text-gray-100">Manager Percon Split
                        (%)</label>
                    <input type="text" id="field2" name="field2"
                        class="mt-1 p-2 w-full border rounded focus:outline-none focus:border-blue-500">
                @endif

                <div class="flex flex-col sm:flex-row justify-between items-center">
                    @if ($step > 1)
                        <button type="button"
                            onclick="window.location.href='{{ route('form', ['step' => $step - 1]) }}'"
                            class="bg-gray-500 text-white px-6 py-3 rounded focus:outline-none hover:bg-gray-600 transition duration-300 ease-in-out mb-2 sm:mb-0 sm:mr-2">Previous</button>
                    @endif

                    @if ($step < 5)
                        <button type="submit"
                            class="bg-blue-500 text-white px-6 py-3 rounded focus:outline-none hover:bg-blue-600 transition duration-300 ease-in-out">Next</button>
                    @else
                        <button type="submit"
                            class="bg-green-500 text-white px-6 py-3 rounded focus:outline-none hover:bg-green-600 transition duration-300 ease-in-out">Submit</button>
                    @endif
                </div>

            </div>
        </form>

        @if ($step == 5 && request()->isMethod('post'))
            <div class="text-green-500 mt-4">
                Form submitted successfully!
            </div>
        @endif
    </div>

    <script>
        function scrollSteps(direction) {
            const container = document.getElementById('stepsContainer');
            container.scrollLeft += 150 * direction;
        }
    </script>

</body>

</html>
