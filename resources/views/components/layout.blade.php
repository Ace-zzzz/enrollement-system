<x-headings>
    {{-- main wrapper --}}
    <div class="flex h-screen p-3 space-x-3">
    {{-- side bar --}}
        <div class="w-1/5 text-white rounded-3xl font-bold text-xl">
            <div class="flex flex-col items-center">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/mnhsLogo.png') }}" alt="Placeholder Image" class="w-20 h-auto">
                </a>
                <h3 class="mt-4 text-2xl text-blue-600 "> Muntinlupa NHS </h3>
            </div>

            <div class="mt-20 flex text-green flex-col space-y-10">
                <x-nav-link href="/" :active="request()->is('/')"> Dashboard </x-nav-link>
                <x-nav-link href="{{ route('newEnrollees')  }}" :active="request()->is('new-enrollees')"> New Enrollees </x-nav-link>
                <x-nav-link href="{{ route('student.index') }}" :active="request()->is('students')"> Students </x-nav-link>
                <x-nav-link href="{{ route('teacher.index') }}" :active="request()->is('teachers')"> Teachers </x-nav-link>
                <x-nav-link href="{{ route('section.index') }}" :active="request()->is('sections')"> Section </x-nav-link>
                <form action="/logout" method="POST">
                    @csrf
                   <button class="p-4 hover:text-red-500"> Logout </button>
                </form>
            </div>
        </div>
    {{-- end of side bar --}}
    
    {{-- main --}}
        <main class="border border-black shadow-gray-700 shadow-lg w-[1216px] h-[774px] flex flex-col bg-green rounded-3xl text-black px-4">
            {{ $slot }}
        </main>
    {{-- End of main--}}

    </div>
{{-- end of  wrapper --}}
</x-headings>
