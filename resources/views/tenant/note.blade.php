<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="text-end">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-primary">Logout</button>
            </form>
        </div>
        <h1>Notes</h1>
        <form action="/note/store" method="POST">
            @csrf
            <div class="d-flex">
                <div class="form-group">
                    <input class="form-control" type="text" name="note" required>
                </div>
                <div class="ms-2">
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
        @if ($notes->isNotEmpty())
            @foreach ($notes as $note)
                <div class="row">
                    <div class="col-10">
                        <h4>{{ $note->note }}</h4>
                    </div>
                    <div class="col-2">
                        <form action="/note/delete/{{ $note->id }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">Aucune note</h4>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>