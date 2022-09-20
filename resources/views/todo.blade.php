<x-main>
    <div
        class="max-w-7xl mx-auto mt-4 p-4 bg-gray-50 rounded-t-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <div class="grid grid-cols-3 border-b pb-4">

            <div class="col-span-2 sm:col-span-1">
                <button data-tooltip-target="default-table-example-full-screen-tooltip"
                    class="flex items-center p-2 text-xs font-medium text-gray-700 bg-white rounded-lg border border-gray-200 toggle-full-view hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><span
                        class="sr-only">Toggle full view</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </svg></button>
            </div>
        </div>

        <div class="overflow-auto relative">
            <x-table.list>

            </x-table.list>
        </div>

    </div>
</x-main>
