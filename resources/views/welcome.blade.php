<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO list</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light p-4">

    <div class="container">
        <h1 class="mb-4 text-center">TODO list</h1>


        <div class="card mb-4">
            <div class="card-body">
                <form action="{{route('notes.store')}}" method="post" class="d-flex gap-2">
                    @csrf
                    @method('post')
                    <div class="flex-fill">
                        <label for="body" class="form-label">Напишите заметку</label>
                        <input type="text" class="form-control" name="body" id="body" placeholder="Заметки" />
                        @error('body')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary align-self-end">Создать</button>
                </form>
            </div>
        </div>
        <div class="mb-3">
            <a href="{{ route('notes.index') }}" class="btn btn-primary">Мои заметки</a>
        </div>

        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>