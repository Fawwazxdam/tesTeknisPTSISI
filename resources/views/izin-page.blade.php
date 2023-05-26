<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absen Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="border shadow m-5 p-4" style="width: 90vh">
            @isset($data3)
            <h2 class="text-center mb-4">Izin</h2>
            <form action="{{url('/prosesizin')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" name="keperluan" id="">
                </div>
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Hingga tanggal</label>
                    <input type="date" class="form-control" name="checked" id="">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @endisset
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
