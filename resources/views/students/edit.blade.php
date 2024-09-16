<x-layout>
    <x-header> {{ $student->last_name }}</x-header>
    <div class="self-center w-4/5 rounded-2xl border border-black p-4 shadow-xl m-4 shadow-green-180 overflow-y-auto">
        <div>
            <form method="POST" action="{{ route('student.update', ['student' => $student->LRN]) }}" enctype="multipart/form-data" class="text-gray-500 m-4 grid col-span-1 space-y-4 ">
                @csrf
                @method('PATCH')
                
                <div>
                    <img class="w-16 h-16 rounded-full border border-black" src="{{ Storage::url('profile_pictures/' . $student->profile) }}" alt="error">
                    <input name ="profile" type="file"/>
                    @error('profile')
                        {{ $message }}
                    @enderror
                </div>

                <label> First Name  </label>
                <x-input name="first_name" value="{{ $student->first_name }}" type="text"/>
                @error('first_name')
                    {{ $message }}
                @enderror

                <label> Last Name  </label>
                <x-input name="last_name" value="{{ $student->last_name }}" type="text"/>
                @error('last_name')
                    {{ $message }}
                @enderror

                <label> Birthday  </label>
                <x-input name="birthday" value="{{ $student->birthday }}" type="date"/>
                @error('birthday')
                    {{ $message }}
                @enderror

                <label> Gender  </label>
                <x-input name="gender" value="{{ $student->gender }}" type="text"/>
                @error('gender')
                    {{ $message }}
                @enderror

                <label> Address  </label>
                <x-input name="address" value="{{ $student->address }}" type="text"/>
                @error('address')
                    {{ $message }}
                @enderror

                <label> Contact  </label>
                <x-input name="contact_no" value="{{ $student->contact_no }}" type="text"/>
                @error('contact_no')
                    {{ $message }}
                @enderror

                <label> Email  </label>
                <x-input name="email" value="{{ $student->email }}" type="email"/>
                @error('email')
                    {{ $message }}
                @enderror

                <div class="space-x-2">
                    <x-button class="bg-green-300"> Update </x-button>
                    <x-button form="delete-form" class="bg-red-500"> Delete </x-button>
                </div>
            </form>

            <form action="{{ route('student.delete', ['student' => $student->LRN ])}}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-layout>