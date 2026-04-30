<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Phytagoras</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header text-center">
            PHYTAGORAS
        </div>
        <div class="card-body p-4">
            <h5 class="text-center fw-bold mb-4">Form Perhitungan Sisi Miring Segitiga</h5>

            <form action="/phytagoras/hitung" method="POST">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <input type="number" name="sisi_alas" class="form-control"
                            placeholder="Nilai Sisi Alas"
                            value="{{ isset($a) ? $a : '' }}" required>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="sisi_tegak" class="form-control"
                            placeholder="Nilai Sisi Tegak"
                            value="{{ isset($b) ? $b : '' }}" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control"
                            placeholder="Nilai Sisi Miring"
                            value="{{ isset($hasil) ? $hasil : '' }}" readonly>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Hitung Sisi Miring</button>
                    <a href="/" class="btn btn-success px-4">Kembali ke Beranda</a>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>