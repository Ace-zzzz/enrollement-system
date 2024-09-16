<tr class="border-b dark:hover:bg-blue-100">
    <th scope="row" class="flex items-center px-6 py-4  whitespace-nowrap">
        <img class="w-10 h-10 rounded-full border border-blue-600" src="{{ Storage::url('profile_pictures/' . $enrollee->profile) }}" alt="Erorr">
        <div class="ps-3">
            <div class="text-base text-black font-semibold">{{ $enrollee->last_name }} {{ $enrollee->first_name}} </div>
            <div class="font-normal text-gray-500">{{ $enrollee->email}}</div>
        </div>  
    </th>
    <td class="px-6 py-4">
        123456789012
    </td>
    <td class="px-6 py-4">
        {{ $enrollee->gender }}
    </td>
    <td class="px-6 py-4">
        {{ $enrollee->address }}
    </td>
    <td class="px-6 py-4">
        09876543211
    </td>
    <td class="px-6 py-4">
        <form action="{{ route('student.enrolled', ['student' => $enrollee->LRN]) }}" method="POST" class="flex space-x-3 font-semibold">
            @csrf
            @method('PATCH')
            <x-button class="bg-blue-600"> Accept </x-button>
            <x-button class="bg-red-500"> Deny </x-button>
        </form>
        <form id="delete-form" action="{{ route('student.deny', ['student' => $enrollee->LRN]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </td>
</tr>