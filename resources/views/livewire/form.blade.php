<form wire:submit="submit" class="max-w-3xl mx-auto w-full p-8 space-y-6">
    {{ $this->form }}

    {{ json_encode($this->data) }}

    <div class="flex items-center gap-3">
        <x-filament::button type="button" wire:click="search">
            Search
        </x-filament::button>
        <x-filament::button type="submit">
            Submit
        </x-filament::button>
    </div>
</form>