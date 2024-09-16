<x-layout>
   <x-profile-layout 
     :profile="$student->profile"
     form="update-form"
     type="file"
     name="profile"
     id="update-profile"
     >
          <x-slot:info>
               <h3 class="mb-10 text-gray-500"> LRN: {{ $student->LRN }}128973 </h3>
               <h3>
                    {{ $student->last_name }} 
                    {{ $student->first_name }} 
               </h3>
               <h3> 
               
               @if (! $student->section->teacher)
                   <h3> No Adviser Assigned </h3>
               @else
                    <a href="{{ route('teacher.profile', ['teacher' => $student->section->teacher->id]) }}">
                         Adviser: 
                         {{ $student->section->teacher->last_name  }} 
                         {{ $student->section->teacher->first_name }} 
                    </a>
               @endif

          </h3>
               <a href="{{ route('section.info', ['section' => $student->section->id ]) }}">
                    Class:
                    {{ $student->section->gradeLevel->grade }} ,
                    {{ $student->section->name }}
               </a>
          </x-slot:info>

          <x-form class="space-y-2"
                  id="update-form"
                  action="{{ route('student.update', ['student' => $student->LRN]) }}">
                  @method('PATCH')
     
               <label> First Name </label>
               <x-input name="first_name" value="{{ $student->first_name }}"/>

               <label> Last Name </label>
               <x-input name="last_name" value="{{ $student->last_name }}"/>

               <label for=""> Section </label>
               <x-select name="section_id">
                    @foreach ($sections as $section)
                        <option 
                              value="{{ $section->id }}" 
                              {{ $section->name == $student->section->name ? 'selected' : false}}>
                              Grade
                              {{ $section->gradeLevel->grade }} 
                              {{ $section->name }}
                        </option>
                    @endforeach
               </x-select>

               <label> Birthday </label>
               <x-input name="birthday" type="date" value="{{ $student->birthday }}"/>

               <label> Gender </label>
               <x-select name="gender">
                    <option value="male" {{ $student->gender == 'male' ? 'selected' : false}} >
                         Male
                    </option>
                    
                    <option value="female" {{ $student->gender == 'female' ? 'selected' : false}} >
                         Female
                    </option>
               </x-select>

               <label> Address </label>
               <x-input name="address" value="{{ $student->address }}"/>

               <label> Contact No. </label>
               <x-input name="contact_no" value="{{ $student->contact_no }}"/>

               <label> Email </label>
               <x-input name="email" value="{{ $student->email }}"/>
               @error('email')
                   {{ $message }}
               @enderror
               <div>
                    <x-button class="bg-green-600"> Update </x-button>
                    <x-button class="bg-red-600" form="delete-form"> Delete </x-button>
               </div>
          </x-form>

          <form class="hidden" 
                method="POST" 
                action="{{ route('student.delete', ['student' => $student->LRN] )}}"
                id="delete-form">
               @csrf
               @method("DELETE")
          </form>
   </x-profile-layout>
</x-layout>