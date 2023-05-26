<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class=" container text-center">
        <h1>Segitiga Angka</h1>
        <form action="{{url("baris")}}" method="post">
          @csrf
            <label for="" class="form-label mb-3">Masukkan Angka</label>
            <input type="number" class="form-control mb-3" name="numb" id="">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-5">
      <h1>Hasil</h1>
      @isset($a)
        @for($i = 1; $i <= $a; $i++)
          @for($j = $a; $j >= $i; $j--)
            &nbsp;&nbsp;
          @endfor
          @for($k = 1; $k <= $i; $k++)
            {{$k}}
          @endfor
          <br>
        @endfor
      @endisset
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>