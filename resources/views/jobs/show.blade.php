<x-layout >
<x-slot:heading>
    <h1>hi from job page</h1>
</x-slot:heading>
 
  <table class="border">
    <tr>
        
        <th class="border">title</th>
        <th class="border">salary</th>
        @can('edit-job', $job)
        <th class="border">action</th>
            
        @endcan
    </tr>
  <tr>
  <td class="border">{{$job["title"]}}</td>
  <td class="border">{{$job["salary"]}}</td>
  @can('edit', $job)
  <td class="border"><x-form-button><a href="/jobs/{{$job->id}}/edit" >edit</a> </x-form-button></td>   
  @endcan
  </tr>
  </table>
</x-layout>