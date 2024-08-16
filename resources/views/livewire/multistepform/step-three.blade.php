<h3 class="mb-4 text-lg font-medium leading-none text-gray-900 dark:text-white">Step 3: Genetic Testing and Physical Exam</h3>

<!-- Genetic Testing -->
<div class="mb-6">
    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Genetic Testing</h4>
    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Depending on personal and family medical history, screening for genetic disorders such as cystic fibrosis, sickle cell disease, and others.</p>
    <input type="text" wire:model="geneticTesting" id="genetic-testing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details or Results" required>
</div>

<!-- Physical Exam -->
<div class="mb-6">
    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Physical Exam</h4>
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="blood-pressure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure Measurement</label>
            <input type="text" wire:model="bloodPressure" id="blood-pressure" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 120/80" required>
        </div>

        <div>
            <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight Measurement</label>
            <input type="text" wire:model="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 65 kg" required>
        </div>

        <div>
            <label for="pelvic-exam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelvic Exam</label>
            <input type="text" wire:model="pelvicExam" id="pelvic-exam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details or Results" required>
        </div>

        <div>
            <label for="uterus-measurement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Measurement of the Uterus</label>
            <input type="text" wire:model="uterusMeasurement" id="uterus-measurement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 20 cm" required>
        </div>
    </div>
</div>

<!-- Other Screenings -->
<div class="mb-6">
    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Other Screenings</h4>
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="other-blood-pressure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Pressure</label>
            <input type="text" wire:model="otherBloodPressure" id="other-blood-pressure" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 130/85" required>
        </div>

        <div>
            <label for="baseline-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Baseline Weight and Height</label>
            <input type="text" wire:model="baselineWeight" id="baseline-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 60 kg" required>
            <input type="text" wire:model="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g., 160 cm" required>
        </div>

        <div>
            <label for="mental-health" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mental Health Screening</label>
            <input type="text" wire:model="mentalHealth" id="mental-health" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details or Results" required>
        </div>

        <div>
            <label for="lifestyle-counseling" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lifestyle and Nutrition Counseling</label>
            <input type="text" wire:model="lifestyleCounseling" id="lifestyle-counseling" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details or Counseling Provided" required>
        </div>
    </div>
</div>

<div class="flex justify-between">
    <button type="button" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-900" onclick="previousStep(1)">
        Back
    </button>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep(4)">
        Next Step
    </button>
</div>