<x-card-layout :profile="$student->profile">
    <x-slot:name>
        {{ $student->last_name }}
        {{ $student->first_name }}
    </x-slot:name>

    <h3>
        Class:
        {{ $student->section->gradeLevel->grade}} 
        {{ $student->section->name}} 
    </h3>

    @if (! $student->section->teacher)
        <h3> No assigned adviser</h3>
    @else
        <h3>
            Adviser:
            {{ $student->section->teacher->last_name}} 
            {{ $student->section->teacher->first_name}} 
        </h3>
    @endif
</x-card-layout>