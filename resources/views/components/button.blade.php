<button {{ $attributes->merge(['class' => 'font-semibold text-white p-1 w-20 border border-black rounded-2xl']) }}> 
    {{ $slot }} 
</button>
