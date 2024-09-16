<x-layout>
    <x-profile-layout 
     :profile="$teacher->profile"
     form=""
     type="file"
     name=""
     id=""
     >
          <x-slot:info>
               <h3 class="mb-10 text-gray-500"> License: {{ $teacher->license }} </h3>
          
               <h3> Teacher: {{ $teacher->rank }} </h3>
               
               <h3>
                    {{ $teacher->last_name }} 
                    {{ $teacher->first_name }} 
               </h3>

               @if (! $teacher->assignedSection)
                    <h3> No Section Assign </h3>
               @else
               <h3>
                    Class:
                    {{ $teacher->assignedSection->gradeLevel->grade }} ,
                    {{ $teacher->assignedSection->name }}
               </h3>
               @endif
          </x-slot:info>

          <x-form>
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 
               <label> First Name </label>
               <x-input/> 

               <div>
                    <x-button class="bg-green-600"> Update </x-button>
                    <x-button class="bg-red-600"> Delete </x-button>
               </div>
          </x-form>
         
    </x-profile-layout>
 </x-layout>