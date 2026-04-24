@extends('welcome')
@section('content')

<div>
    {{ $notes->id }}  {{ '   ' }}  {{ $notes->body }}
</div>
     
<a href="{{route('notes.edit', $notes->id)}}">Изменить</a>
 <form action="{{route('notes.delete', $notes->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Удалить</button>
 </form> 

@endsection