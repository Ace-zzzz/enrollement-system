<x-headings :title="'login'">
    <div class="text-white mt-40 rounded-2xl flex flex-col justify-center px-6 py- lg:px-8 bg-white/20 max-w-sm mx-auto">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight ">Sign in to your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('login')}}" method="POST">
        @csrf
        <div>
          <label for="username" class="block text-sm font-medium leading-6 ">Admin Username</label>
          <div class="mt-2">
            <input id="username" name="username" type="text" value="{{ old('username') }}" required class="text-black block w-full rounded-md border-0 py-1.5   placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('username')
              {{ $message }}
          @enderror
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 ">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password"  required class="text-black block w-full rounded-md border-0 py-1.5   placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('password')
              {{ $message }}
            @enderror
         </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
        </div>
  </div>
</x-headings>