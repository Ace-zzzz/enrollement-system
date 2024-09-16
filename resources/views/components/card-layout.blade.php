@props(['profile'])

<div class="border border-gray-300 hover:border-black hover:shadow-xl duration-700 group flex space-x-4 items-center bg-gradient-to-r from-lighterGreen via-lighterGreen to-orangeYellow rounded-xl p-4 font-bold mb-6 ml-4 w-[500px]">
    <div>
        <img src="{{ Storage::url('public/profile_pictures/' . $profile) }}" 
             class="rounded-full border-4 p-1 shadow-2xl border-transparent group-hover:border-blue-600 duration-700"
             style="width: 8rem; height: 8rem"
             alt="error" >
    </div>

    <div>
        <h3 class="text-3xl mb-6"> {{ $name }} </h3>
        <div class="text-sm text-gray-500">
           {{ $slot }}
        </div>
    </div>
</div>