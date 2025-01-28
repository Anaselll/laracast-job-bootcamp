    <x-layout>
        
     <x-slot:heading>
        login
     </x-slot:heading>
<form method="POST"  action="/login">
  @csrf
        <x-form-field>
            <x-form-label for="salary" >email</x-form-label >
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input 
                name='email' :value="old('email')" type='email'  placeholder="email" />
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
                <x-form-input name='password' :value="old('password')" type='password'  placeholder="password" />
                                @error('password')
                    {{$message}}
                @enderror
              </div>
            </div>
          </div>
        </div>
      </x-form-field>
         <div class="mt-6 flex items-center justify-end gap-x-6">
        <x-form-button type='submit'>login</x-form-button>
      </div>
      </form>
    </x-layout> 
     
 