


    <h3 class="mb-4 text-lg font-medium leading-none text-gray-900 dark:text-white">Step 2: Urine Tests</h3>
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="urine-culture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Urine Culture</label>
            <input type="text" wire:model="urineCulture" id="urine-culture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="protein-levels" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Protein Levels</label>
            <input type="text" wire:model="proteinLevels" id="protein-levels" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="glucose-levels" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Glucose Levels</label>
            <input type="text" wire:model="glucoseLevels" id="glucose-levels" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <label for="pap-smear" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pap Smear</label>
            <input type="text" wire:model="papSmear" id="pap-smear" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
    </div>
    <div class="flex justify-between">
         <button type="button" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-900" onclick="previousStep(1)">
                Back
            </button>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep(3)">
            Next Step
        </button>
    </div>


