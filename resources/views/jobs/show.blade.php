<x-layout >
<x-slot:heading>
    <h1>hi from job page</h1>
</x-slot:heading>
 
  <table class="border">
    <tr>
        
        <th class="border">title</th>
        <th class="border">description</th>
        <th class="border">salary</th>
        <th class="border">action</th>
    </tr>
  <tr>
  <td class="border">{{$job["title"]}}</td>
  <td class="border">{{$job["description"]}}</td>
  <td class="border">{{$job["salary"]}}</td>
  <td class="border"><x-form-button><a href="/jobs/{{$job->id}}/edit" >edit</a> </x-form-button></td>
  </tr>
  </table>
</x-layout>