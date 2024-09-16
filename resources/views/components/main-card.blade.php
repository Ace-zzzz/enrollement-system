<div {{ $attributes->merge(['class' => 'border mt-4 border-blue-300 bg-gradient-to-br from-white to-green-200 rounded-xl shadow-xl h-36  w-80 p-4 flex  items-center font-bold space-x-4']) }}>
    <div>
        <img src="https://via.placeholder.com/80" alt="">
    </div>

    <div>
        {{ $slot }}
    </div>
</div>
