@extends('welcome')
@section('content')

<div class="container my-4">

    @foreach($notes as $item)
    <div class="card mb-3">
        <div class="card-body d-flex flex-column gap-2">


            <a href="{{ route('notes.show', $item->id) }}" class="text-decoration-none text-dark">
                <h5 class="card-title">{{ $item->body }}</h5>
            </a>


            <div class="d-flex gap-2">
                <a href="{{ route('notes.edit', $item->id) }}" class="btn btn-warning btn-sm">Изменить</a>

                <form action="{{ route('notes.delete', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                </form>
            </div>


            @foreach($statuses as $elem)
            @if($item->status_id == $elem->id)
            <p class="mt-2 mb-0"><strong>Статус:</strong> {{ $elem->status }}</p>
            @endif
            @endforeach

        </div>
    </div>
    @endforeach

    <div>
{{ $notes->links() }}
    </div>

</div>

@endsection