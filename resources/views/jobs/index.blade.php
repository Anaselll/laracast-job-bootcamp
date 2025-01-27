<x-layout >
<x-slot:heading>
    <h1>hi from jobs page</h1>
</x-slot:heading>
 
  <table class="border">
    <tr>
      <th class="border">employer_id</th>
        <th class="border">title</th>
        <th class="border">salary</th>
        <th class="border">actions</th>
    </tr>
  @if (!$jobs->isEmpty())
  @foreach ($jobs as $job)
  <tr>
    <td class="border">{{$job->employer_id}}</td>
  <td class="border">{{$job["title"]}}</td>
  <td class="border">{{$job["salary"]}}</td>
  <td class="border"><a href="/jobs/{{$job['id']}}"><button>show</button></a></td>
  </tr>
  @endforeach
  @endif
  <div>
    {{$jobs->links()}}
  </div>
  
  </table>
</x-layout>