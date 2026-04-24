@extends('welcome')

@section('content')

<div class="container my-4">


    <div class="card">
        <div class="card-body">


            <form action="{{route('notes.store')}}" method="post" class="d-flex flex-column gap-3">
                @csrf
                @method('post')

                <div>
                    <label for="body" class="form-label">Напишите заметку</label>
                    <input type="text"
                        class="form-control"
                        name="body"
                        id="body"
                        placeholder="Заметки" value="{{old('body')}}">
                    @error('body')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-2">Создать</button>
            </form>

        </div>
    </div>

</div>

@endsection