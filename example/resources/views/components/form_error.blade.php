@props(['name'])
@error($name)
<p class="mt-1 text-red-600 italic">{{$message}}</p>
@enderror

