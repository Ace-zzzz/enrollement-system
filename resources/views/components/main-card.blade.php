@props(['image' => false])

<div {{ $attributes->merge(['class' => 'border mt-[30px] border-blue-300 bg-white rounded-[40px] shadow-xl h-[153px]  w-[288px] p-4 flex  items-center font-bold space-x-4']) }}>
    <div>
        <img src="{{ $image }}" alt="error" class="h-[124px]">
    </div>

    <div>
        {{ $slot }}
    </div>
</div>
