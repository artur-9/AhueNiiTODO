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

<div class="mb-3">
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Закрыть</a>
</div>

<div class="card p-4 bg-light">
    <form action="{{ route('notes.update', $notes->id) }}" method="post" class="d-flex flex-column gap-3">
        @csrf
        @method('patch')

        <div>
            <label for="body" class="form-label">Напишите заметку</label>
            <input
                type="text"
                class="form-control"
                name="body"
                id="body"
                placeholder="Заметки"
                value="{{ $notes->body }}"
            />
        </div>

        <div>
            <label for="status_id" class="form-label">Статус</label>
            <select class="form-select" name="status_id" id="status_id">
                @foreach($statuses as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $notes->status_id ? 'selected' : '' }}>{{ $item->status }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>