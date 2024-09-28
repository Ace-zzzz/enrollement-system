<x-layout>
    <x-header> New Enrollees </x-header>

    @if(($enrollees->count() == 0))
        <x-empty> NO ENROLLEES </x-empty>
    @else
      <div class="overflow-x-auto p-2">
            <div class="relative overflow-x-auto">
                <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search-users" class="border border-gray-400  rounded-lg block pt-2 ps-10 text-sm text-gray-900 " placeholder="Search Student">
                    </div>
                </div>
            </div>

            <x-table>
                @foreach ($enrollees as $enrollee)
                    <x-td :$enrollee/>
                @endforeach
            </x-table>
        </div>
    @endif
   
    <div class="p-4">
        {{ $enrollees->links() }}
    </div>
   
</x-layout>