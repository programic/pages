<div class="max-w-7xl mx-auto py-4">
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        <button type="submit" class="mt-5 py-2 px-4 rounded-md text-white bg-blue-500 hover:bg-blue-700">
            {{ __('Save site') }}
        </button>
    </form>
</div>
