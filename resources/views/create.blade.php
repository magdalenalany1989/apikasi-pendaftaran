<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <div class="row">
        <div class="col">
     <h1>Tambah Peserta</h1>
        <form action="/post-siswa" method="POST">
        @csrf
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleInputname" name="nama_siswa" required >
  </div>

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Nis</label>
    <input type="text" class="form-control" id="exampleInputname" name="nis"required>
  </div>

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputname" name="kelas"required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">no_handphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="no_handphone"required >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" required >
  </div>


  <a href="/siswa" type="button" class="btn btn-danger">return<i class="bi bi-arrow-left-circle-fill"></i></button></a>
  <button type="submit" class="btn btn-primary">submit</button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</form>
        </div>
      </div>
  </div>
  </body>
</html>