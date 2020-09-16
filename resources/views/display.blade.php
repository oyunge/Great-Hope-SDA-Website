<h1>Posts</h1>
@if(count($posts) > 0)
@foreach ($events as $event)
<div class="well">
<h3>{{$event-> title}}</h3>
<h3>{{$event-> location}}</h3>
<h3>{{$event-> message}}</h3>
    {{-- <small>written on{{$post ->created_at}} by {{$post->user->name}}</small> --}}
    <small>written on{{$post ->created_at}} </small>
    </div>
@endforeach
   {{-- page pagination --}}
   {{-- {{$posts->links()}} --}}
@else
   <p>No events found</p>
@endif