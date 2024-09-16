@props(['update' => 'update', 
        'delete' => 'delete',
        'updateAction' => false,
        ])

<form method="POST" action="{{ $updateAction }}" class="flex space-x-4 font-semibold">
    @csrf
    @method('PATCH')
    <button class="p-1 w-20 text-black border border-black bg-green-500 rounded-2xl"> {{ $update }} </button>
    <button class="p-1 w-20 text-white border border-black bg-red-500 rounded-2xl" form="delete-form" > {{ $delete }} </button>
</form>

<form method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form> 