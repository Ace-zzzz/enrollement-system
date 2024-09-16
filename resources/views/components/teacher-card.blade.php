<x-card-layout :profile="$teacher->profile">
    <x-slot:name>
        {{ $teacher->last_name }}
        {{ $teacher->first_name }}
    </x-slot:name>

    <h3> Teacher: {{ $teacher->rank }} </h3>

    @if (! $teacher->assignedSection )
        <h3> No assigned Section </h3>
    @else
        <h3> 
            Class:
            {{ $teacher->assignedSection->gradeLevel->grade  }} 
            {{ $teacher->assignedSection->name  }}
        </h3>
    @endif
</x-card-layout>