@props(['active' => false])

<a class="{{ $active ? 'w-full text-blue-600' : 'border-2 rounded-xl border-transparent hover:text-blue-600 duration-300 group w-full'}}"
    {{ $attributes }}
    aria-current="{{ $active ? 'page' : 'false' }}"> 
    <div class="{{ $active ? 'flex items-center border-b-2 border-green-500 rounded-xl p-4 ': 'flex items-center p-4 group-hover:text-blue-600  duration-300'}}">
        <span class="{{ $active ? 'mr-4 block w-2 h-2 bg-blue-600 rounded-full' : 'mr-4 block w-2 h-2 bg-green-600 rounded-full' }}"></span>
        {{$slot}}
    </div>
</a>

