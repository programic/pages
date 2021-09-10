<div class="max-w-7xl mx-auto py-4">
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        <div class="flex space-x-2">
            <button type="submit" class="mt-5 py-2 px-4 rounded-md text-white bg-blue-500 hover:bg-blue-700">
                {{ __('Save site') }}
            </button>
            <button type="button" wire:click="resetForm" class="mt-5 py-2 px-4 rounded-md text-white bg-red-500 hover:bg-red-700">
                {{ __('Reset') }}
            </button>
        </div>
    </form>
</div>
