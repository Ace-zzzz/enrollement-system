<x-layout>
   <div class="mt-4 flex space-x-10">
        <div>
            <x-main-card :image="Vite::asset('resources/images/studentImage.png')">
                <h1> {{ $students->count() }} </h1>
                <h3> All students  </h3>
            </x-main-card>
            
            <x-main-card :image="Vite::asset('resources/images/newEnrollees.png')">
                <h1> {{ $students->count() }} </h1>
                <h3> All students  </h3>
            </x-main-card>
    
            <x-main-card :image="Vite::asset('resources/images/teacherImage.png')">
                <h1> {{ $students->count() }} </h1>
                <h3> All students  </h3>
            </x-main-card>
    
            <x-main-card :image="Vite::asset('resources/images/subjectImage.png')">
                <h1> {{ $students->count() }} </h1>
                <h3> All students  </h3>
            </x-main-card>
        </div>
        
        <div class="mt-8 ">
            <div class="flex">
                <x-chart 
                :maleStudent="$male->count() " 
                :femaleStudent=" $female->count() "/>
            </div>


            <div class="bg-white h-[336px] w-[798px] rounded-[40px] mt-7">
                <h3 class="text-center text-[40px]"> TOP STUDENTS </h3>
                <div class="flex ml-20 space-x-2">
                    <div class="bg-green h-[228px] w-[160px] rounded-[20px] text-center">
                        <img src="{{ Vite::asset('resources/images/teacherImage.png') }}" class="h-[99px]" alt="">
                        <h3>Casey Escobia </h3>
                        <h3>Class A </h3>
                        <h3>GWA 1.5 </h3>
                    </div>
                    
                    <div class="bg-green h-[228px] w-[160px] rounded-[20px] text-center">
                        <img src="{{ Vite::asset('resources/images/teacherImage.png') }}" class="h-[99px]" alt="">
                        <h3>Casey Escobia </h3>
                        <h3>Class A </h3>
                        <h3>GWA 1.5 </h3>
                    </div>
    
                    <div class="bg-green h-[228px] w-[160px] rounded-[20px] text-center">
                        <img src="{{ Vite::asset('resources/images/teacherImage.png') }}" class="h-[99px]" alt="">
                        <h3>Casey Escobia </h3>
                        <h3>Class A </h3>
                        <h3>GWA 1.5 </h3>
                    </div>
    
                    <div class="bg-green h-[228px] w-[160px] rounded-[20px] text-center">
                        <img src="{{ Vite::asset('resources/images/teacherImage.png') }}" class="h-[99px]" alt="">
                        <h3>Casey Escobia </h3>
                        <h3>Class A </h3>
                        <h3>GWA 1.5 </h3>
                    </div>
                </div>
            </div>
        </div>
   </div>

 </x-layout>