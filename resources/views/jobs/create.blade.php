<x-layout>
  <x-slot:heading>
    <h1> create job</h1>
  </x-slot:heading>
  
  <form method="POST" action="/jobs">
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
          <div class="sm:col-span-4">
            <x-form-label for='title'>title</x-form-label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <x-form-input placeholder='title'/>
             <x-form-error name='title'/>
              </div>
            </div>
          </div>
        </x-form-field>

        <x-form-field>
          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm/6 font-medium text-gray-900">salary</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="salary">
                                @error('salary')
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
