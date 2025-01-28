<x-layout>
  <x-slot:heading>
    <h1> create job</h1>
  </x-slot:heading>
  
  <form method="POST" action="/register">
    @csrf
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)

            <li class="alert-warning">{{$error}}</li>
                
            @endforeach
        </ul>
        
    @endif
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">create a new jobe</h2>
        <p class="mt-1 text-sm/6 text-gray-600">we just need a handfull details from you</p>

        <x-form-field>
            <x-form-label for='first_name'>first_name</x-form-label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input name='first_name' placeholder='first_name'/>
                <x-form-error name='first_name'/>
              </div>
            </div>
          </div>
        </x-form-field>      
          <x-form-field>
            <x-form-label for='last_name'>last_name</x-form-label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input name='last_name' placeholder='last_name'/>
             <x-form-error name='last_name'/>
              </div>
            </div>
          </div>
        </x-form-field>

        <x-form-field>
            <x-form-label for="salary" >email</x-form-label >
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <x-form-input name='email' type='email'  placeholder="email" />
                                  @error('email')
                      {{$message}}
                  @enderror
              </div>
            </div>
          </div>
        </div>
      </x-form-field>
        <x-form-field>
            <x-form-label for="password" >password</x-form-label >
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input name='password' type='password'  placeholder="password" />
                                @error('password')
                    {{$message}}
                @enderror
              </div>
            </div>
          </div>
        </div>
      </x-form-field>
   <x-form-field>
            <x-form-label for="password_confirmation" >password confirm</x-form-label >
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input name='password_confirmation' type='password'  placeholder="password_confirmation" />
                                @error('password_confirmation')
                    {{$message}}
                @enderror
              </div>
            </div>
          </div>
        </div>
      </x-form-field>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <x-form-button type='submit'>save</x-form-button>
      </div>
    </div>
  </form>
</x-layout>
