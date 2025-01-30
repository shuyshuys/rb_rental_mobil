<form wire:submit.prevent="authenticate" class="space-y-8">

    <div>
        @if (config('filament-breezy.enable_registration'))
            <p class="mt-2 text-sm text-center">
                {{ __('filament-breezy::default.or') }}
                <a class="text-primary-600" href="{{ route(config('filament-breezy.route_group_prefix') . 'register') }}">
                    {{ __('filament-breezy::default.registration.heading') }}
                </a>
            </p>
        @endif
    </div>

    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
</form>
