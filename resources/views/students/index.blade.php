<x-layout>
    <x-header> All Students </x-header>

    <a href="{{ route('student.create')}}" 
      class="ml-10 mt-4 w-32 p-2 border border-black rounded-lg font-semibold bg-orangeYellow"> 
      Add Student 
    </a>
    
    <form action="{{ route('student.index') }}" method="GET">
        <input name="search">
        <button> Submit </button>
    </form>
    @if ($students->count() == 0)
        <x-empty> NO STUDENTS </x-empty>
    @else
        <div class="overflow-x-auto p-4 grid grid-cols-2">
            @foreach ($students as $student)
                <a href="{{ route('student.profile', ['student' => $student->LRN] ) }}">
                    <x-student-card :$student/>
                </a>
            @endforeach
        </div>
    @endif
  
    <div class="p-7">
        {{ $students->links() }}
    </div>

</x-layout>