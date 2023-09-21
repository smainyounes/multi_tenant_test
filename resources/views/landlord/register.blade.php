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
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1>register</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company" placeholder="company" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>