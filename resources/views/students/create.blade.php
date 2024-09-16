<x-layout>
    <x-header> Create Student </x-header>

    <x-form class="space-y-5" action="{{ route('student.store') }}">
        <x-input name="profile" :value="old('profile')" type="file"/>
        @error('profile')
            {{ $message }}
        @enderror

        <x-select name="section_id" label="Section" type="text"> 
            <option class="hidden"></option>
            @foreach ($sections as $section)
                <option value="{{ $section->id }}"> {{ $section->name }} </option>
            @endforeach
        </x-select>
        @error('section_id')
            {{ $message }}
        @enderror

        <x-input name="first_name" :value="old('first_name')"  type="text" placeholder="First Name"/>
        @error('first_name')
            {{ $message }}
        @enderror
        
        <x-input name="last_name" :value="old('last_name')" type="text"  placeholder="Last Name"/>
        @error('last_name')
            {{ $message }}
        @enderror

        <x-input name="birthday" :value="old('birthday')" type="date"  placeholder="Birthday"/>
        @error('birthday')
            {{ $message }}
        @enderror

        <x-select name="gender" label="Gender" type="text">
            <option class="hidden"></option>
            <option value="male" >    Male </option>
            <option value="female" > Female </option>
        </x-select>
        @error('gender')
            {{ $message }}
        @enderror

        <x-input name="address" :value="old('address')"  type="text" placeholder="Address"/>
        @error('address')
            {{ $message }}
        @enderror
        
        <x-input name="contact_no" :value="old('contact_no')"  type="text" placeholder="Contact No"/>
        @error('contact_no')
            {{ $message }}
        @enderror

        <x-input name="email" :value="old('email')" type="email"  placeholder="Email"/>
        @error('email')
            {{ $message }}
        @enderror

        <x-button class="bg-blue-600"> Create </x-button>
    </x-form>

</x-layout>