<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 9</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <b>Perhatian</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
    <div class="row">
            <div class="col-lg-12">
                <form action="{{ url('produk/create') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nama_produk" class="col-sm-2 col-form-label">Kategori Produk</label>
                        <div class="col-sm-5">
                            <select name="kategori_produk" id="kategori_produk" class="form-control">
                                <option @selected(old('kategori_produk') == '') value="">- Pilih Kategori Produk -</option>
                                <option @selected(old('kategori_produk') == 'Sepatu') value="Sepatu">Sepatu</option>
                                <option @selected(old('kategori_produk') == 'Baju') value="Baju">Baju</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-5">
                            <input value="{{ old('nama_produk') }}" type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-5">
                            <input  value="{{ old('stok') }}" type="number" class="form-control" name="stok" id="stok" placeholder="Stok">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga_produk" class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-5">
                            <input value="{{ old('harga_produk') }}" type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="Harga Produk">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-5 offset-sm-2">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html