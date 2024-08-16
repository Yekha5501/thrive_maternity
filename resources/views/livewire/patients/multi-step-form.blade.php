<div>
    <!-- Example for step 1 -->
    @if ($step == 1)
        <div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" wire:model="formData.first_name" class="mt-1 block w-full border-gray-300 rounded-md">
                @error('formData.first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" wire:model="formData.last_name" class="mt-1 block w-full border-gray-300 rounded-md">
                @error('formData.last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
    @endif

    <!-- Step Navigation -->
    <div class="flex justify-between mt-6">
        @if ($step > 1)
            <button type="button" wire:click="previousStep" class="bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
        @endif

        @if ($step < 2)
            <button type="button" wire:click="nextStep" class="bg-blue-500 text-white px-4 py-2 rounded">Next</button>
        @else
            <button type="button" wire:click="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
        @endif
    </div>
</div>
