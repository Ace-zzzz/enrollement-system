<x-layout>
    <x-header> Create Section </x-header>

    <x-form class="space-y-4" action="{{ route('section.store') }}">
        <x-select name="grade_level_id" label="Grade">
            <option class="hidden"></option>

            @foreach ($gradeLevel as $grade)
                <option value="{{ $grade->id }}"> {{ $grade->grade }} </option>
            @endforeach
        </x-select>

        <x-input name="name" :value="old('name')" placeholder="Section Name"/>
        @error('name')
            {{ $message }}
        @enderror
        <x-button class="bg-blue-600"> Create </x-button>
    </x-form>
</x-layout>