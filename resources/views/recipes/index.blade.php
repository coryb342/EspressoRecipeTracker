<x-app-layout>
    <div class="mt-12 px-12">
        <div class="mt-6 grid grid-cols-3 gap-12 mx-auto">
            @foreach ($recipes as $recipe)
                <div class="bg-yellow-50 shadow-lg rounded-xl ">
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-yellow-900 font-extrabold">{{ $recipe->user->name }}</span>
                                <small class="ml-2 text-sm text-yellow-900">{{ $recipe->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($recipe->created_at->eq($recipe->updated_at))
                                    <small class="text-sm text-yellow-900"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($recipe->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('recipes.edit', $recipe)">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('recipes.destroy', $recipe) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('recipes.destroy', $recipe)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Brand: ' . $recipe->brand }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Blend: ' . $recipe->blend }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Roast: ' . $recipe->roast }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Dose: ' . $recipe->dose }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Yield: ' . $recipe->yield }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Grind Size: ' . $recipe->grindsize }}</p>
                        <p class="mt-4 text-lg text-yellow-900">{{ 'Notes: ' . $recipe->notes }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

