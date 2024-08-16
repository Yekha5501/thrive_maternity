<div id="step-1" class="step-content">
    <h3 class="mb-4 text-lg font-medium leading-none text-gray-900 dark:text-white">Step 1: Blood Tests</h3>
    
    <!-- Blood Type and Rh Factor -->
    <div class="mb-4">
        <h4 class="text-md font-medium leading-none text-gray-900 dark:text-white">Blood Type and Rh Factor</h4>
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="blood-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
                <select wire:model="bloodType" id="blood-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled>Select Blood Type</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
            <div>
                <label for="rh-factor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rh Factor</label>
                <select wire:model="rhFactor" id="rh-factor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled>Select Rh Factor</option>
                    <option value="positive">Positive</option>
                    <option value="negative">Negative</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Complete Blood Count (CBC) -->
    <div class="mb-4">
        <label for="cbc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complete Blood Count (CBC)</label>
        <input type="text" wire:model="cbc" id="cbc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter CBC results">
    </div>

    <!-- Immunity and Infection Screening -->
    <div class="mb-4">
        <h4 class="text-md font-medium leading-none text-gray-900 dark:text-white">Immunity and Infection Screening</h4>
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="rubella" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rubella Immunity</label>
                <input type="text" wire:model="rubella" id="rubella" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Rubella results">
            </div>
            <div>
                <label for="hepatitis-b-c" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hepatitis B and C</label>
                <input type="text" wire:model="hepatitisBC" id="hepatitis-b-c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Hepatitis B and C results">
            </div>
            <div>
                <label for="hiv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HIV</label>
                <input type="text" wire:model="hiv" id="hiv" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter HIV results">
            </div>
            <div>
                <label for="syphilis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syphilis</label>
                <input type="text" wire:model="syphilis" id="syphilis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Syphilis results">
            </div>
        </div>
    </div>

    <!-- Blood Sugar Levels -->
    <div class="mb-4">
        <label for="blood-sugar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Sugar Levels</label>
        <input type="text" wire:model="bloodSugar" id="blood-sugar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Blood Sugar Levels">
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between">
        <button type="button" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-900" onclick="resetForm()">
            Reset
        </button>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep(2)">
            Next Step
        </button>
    </div>
</div>
