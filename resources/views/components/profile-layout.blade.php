<div  class="flex items-center mt-4 text-xl space-x-4 overflow-y-auto">
    <div class="bg-gradient-to-br from-green-600  to-white flex flex-col justify-center items-center border border-black rounded-2xl shadow-2xl shadow-300 w-1/2 h-4/6">
        <input form="{{ $form }}" 
               type="{{ $type }}" 
               name="{{ $name }}" 
               id="{{ $id }}" 
               class="hidden">
            @error($name)
               {{ $message }}
           @enderror

        <label for="{{ $id }}" 
                class="font-bold text-blue-300 hover:cursor-pointer hover:text-blue-500 duration-300">
                Update Profile
        </label> 

        <img class="rounded-full border-4 p-1 shadow-2xl border-blue-600" 
                src="{{ Storage::url('public/profile_pictures/' . $profile) }}" 
                style="width: 15rem; height: 15rem;"
                alt="error">
        
        <div class="mt-4 space-y-2 font-semibold">
            {{ $info }}
        </div>
    </div>

    {{ $slot }}
</div>