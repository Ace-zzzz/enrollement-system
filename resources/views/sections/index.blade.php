<x-layout>
    <x-header> Sections </x-header>

    <a href="{{ route('section.create')}}" 
      class="ml-10 mt-4 w-24 border border-black rounded-lg font-semibold bg-blue-200"> 
      Add Section 
    </a>

   @if ($sections->count() == 0)
       <x-empty> NO SECTIONS </x-empty>
   @else
      <div class="grid grid-cols-3 p-4">
         @foreach ($sections as $section)
            <a href="{{ route('section.info', ['section' => $section->id] ) }}">
               <x-main-card> 
                  <h3> Grade: {{ $section->gradeLevel->grade }} </h3>  
                  <h3> Section: {{ $section->name }} </h3>  
               </x-main-card>
            </a>
         @endforeach
      </div>
      {{ $sections->links() }}
   @endif

</x-layout>