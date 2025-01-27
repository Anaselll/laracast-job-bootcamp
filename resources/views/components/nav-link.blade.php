@props(['active'=>false,"type"=>"a"])
<{{$type}} {{$attributes}} class="{{ $active ? 'bg-gray-900 text-black' : 'text-black'}}rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" 
    aria-current={{$active ?"page" :"false"}}>{{$slot}}</{{$type}}>



