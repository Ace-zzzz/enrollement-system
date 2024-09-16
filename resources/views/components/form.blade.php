<div class="self-center w-4/5 m-4 rounded-2xl border border-black p-4 shadow-xl shadow-green-180 overflow-y-auto">
    <form {{ $attributes->merge(['class' => 'text-gray-500 m-2 grid']) }} 
            method="POST" 
            enctype="multipart/form-data" >
            @csrf

        {{ $slot }}            
    </form>
</div>