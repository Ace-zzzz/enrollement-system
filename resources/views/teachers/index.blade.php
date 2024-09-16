<x-layout>
    <x-header> Teachers </x-header>

    @if($teachers->count() == 0)
        <x-empty> NO TEACHERS </x-empty>
    
    @else
        <div class="overflow-x-auto grid p-4 grid-cols-2 ">
            @foreach ($teachers as $teacher)
                <a href="{{ route('teacher.profile', ['teacher' => $teacher->id ]) }}">
                    <x-teacher-card :$teacher />
                </a>
            @endforeach
        </div>
    @endif

    <div class="p-7">
        {{ $teachers->links() }}
    </div>
</x-layout>