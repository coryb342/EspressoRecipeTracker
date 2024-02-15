<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('recipes.store') }}">
            @csrf
            <div class="text-center mb-4">
                <label for="brand" class="block font-bold text-gray-700 text-pretty text-xl">Brand</label>
                <textarea
                    id="brand"
                    name="brand"
                    placeholder="{{ __('What are we brewing?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('brand') }}</textarea>
                <x-input-error :messages="$errors->get('brand')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="blend" class="block font-bold text-gray-700 text-pretty text-xl">Blend</label>
                <textarea
                    id="blend"
                    name="blend"
                    placeholder="{{ __('Which blend is this?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('blend') }}</textarea>
                <x-input-error :messages="$errors->get('blend')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="roast" class="block font-bold text-gray-700 text-pretty text-xl">Roast</label>
                <textarea
                    id="roast"
                    name="roast"
                    placeholder="{{ __('What type of roast?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('roast') }}</textarea>
                <x-input-error :messages="$errors->get('roast')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="dose" class="block font-bold text-gray-700 text-pretty text-xl">Dose</label>
                <textarea
                    id="dose"
                    name="dose"
                    placeholder="{{ __('How many grams of espresso is needed?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('dose') }}</textarea>
                <x-input-error :messages="$errors->get('dose')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="yield" class="block font-bold text-gray-700 text-pretty text-xl">Yield</label>
                <textarea
                    id="yield"
                    name="yield"
                    placeholder="{{ __('What is the expected yield?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('yield') }}</textarea>
                <x-input-error :messages="$errors->get('yield')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="grindsize" class="block font-bold text-gray-700 text-pretty text-xl">Grind Size</label>
                <textarea
                    id="grindsize"
                    name="grindsize"
                    placeholder="{{ __('What is the grind size?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('grindsize') }}</textarea>
                <x-input-error :messages="$errors->get('grindsize')" class="mt-2" />
            </div>
            <div class="text-center mb-4">
                <label for="notes" class="block font-bold text-gray-700 text-pretty text-xl">Notes</label>
                <textarea
                    id="notes"
                    name="notes"
                    placeholder="{{ __('Any special notes?') }}"
                    class="block mx-auto px-2 py-2 w-3/4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('notes') }}</textarea>
                <x-input-error :messages="$errors->get('notes')" class="mt-2" />
            </div>

            <div class="text-center">
                <x-primary-button class="mt-4 mx-auto">{{ __('Save') }}</x-primary-button>
            </div>

        </form>
    </div>
</x-app-layout>
