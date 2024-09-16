<x-layout>
   <x-header>
        Welcome Admin {{ strtoupper(Auth::user()->username) }}
   </x-header>

   <div class="mt-4 ">
        <x-main-card>
            <h1> {{ $students->count() }} </h1>
            <h3> All students  </h3>
        </x-main-card>

        <x-main-card>
            <h1> {{ $enrollees->count() }} </h1>
            <h3> New Enrollees </h3>
        </x-main-card>

        <x-main-card>
            <h1> {{ $teachers->count() }} </h1>
            <h3> All teachers </h3>
        </x-main-card>

        <x-main-card>
            <h1> {{ $sections->count() }} </h1>
            <h3> All Section </h3>
        </x-main-card>
   </div>

    
</x-layout>