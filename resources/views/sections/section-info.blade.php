<x-layout>
    <x-header> Section {{ $section->name }} </x-header>

    <div class="flex space-x-6 justify-center">
        <x-main-card class="h-40 w-60">
            {{ $section->students->count() }} Students 
        </x-main-card>

        <x-main-card class="h-40 w-60">
            {{ $section->teachers->count() }} Teachers asdas
        </x-main-card>

        <x-main-card class="h-40 w-60">
            {{ $section->students->count() }} Adviser 
        </x-main-card>
    </div>

    <div class="flex space-x-10 ml-8 mt-4 max-w-4xl mx-auto overflow-hidden">
        <table class="w-full border border-black">
            <thead class="bg-gray-200 border-b border-black">
                <tr>
                    <th class="text-left px-6"> LRN </th>
                    <th class="text-left px-6"> First Name </th>
                    <th class="text-left px-6"> Last Name </th>
                </tr>
            </thead>
            
            @foreach ($section->students as $student)
                <tbody>
                    <tr>
                        <td class="text-left px-6"> {{ $student->LRN }}12345678909 </td>
                        <td class="text-left px-6"> {{ $student->first_name }} </td>
                        <td class="text-left px-6"> {{ $student->last_name }} </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-layout>