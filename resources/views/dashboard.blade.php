<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="text-2xl font-semibold mb-4 text-center">Espresso News</h2>
                        <!-- Navigation Arrows -->
                        <!-- Single News Card -->
                        <div class="max-w-xl mx-auto bg-gray-100 rounded-lg shadow-md mb-6" style="height: 300px;">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold mb-2">News Title (Working on Dynamic Display)</h3>
                                <p class="text-sm mb-4">Brief summary or excerpt of the news article.</p>
                                <button class="text-blue-500 hover:text-blue-700 font-semibold">Read More</button>
                            </div>
                        </div>
                        <!-- End Single News Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




