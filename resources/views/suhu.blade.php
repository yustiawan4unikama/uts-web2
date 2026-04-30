<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi Suhu</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header text-center">
            KONVERSI SUHU
        </div>
        <div class="card-body p-4">
            <h5 class="text-center fw-bold mb-4">Form Perhitungan Konversi Suhu</h5>

            <form action="/suhu/hitung" method="POST">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col-md-2">
                        <select name="dari" class="form-select">
                            <option value="celsius"    {{ (isset($dari) && $dari=='celsius')    ? 'selected' : '' }}>Celcius</option>
                            <option value="fahrenheit" {{ (isset($dari) && $dari=='fahrenheit') ? 'selected' : '' }}>Fahrenheit</option>
                            <option value="kelvin"     {{ (isset($dari) && $dari=='kelvin')     ? 'selected' : '' }}>Kelvin</option>
                            <option value="reamur"     {{ (isset($dari) && $dari=='reamur')     ? 'selected' : '' }}>Reamur</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="nilai_awal" class="form-control"
                            placeholder="Nilai Awal"
                            value="{{ isset($nilai) ? $nilai : '' }}" required>
                    </div>
                    <div class="col-md-2">
                        <select name="ke" class="form-select">
                            <option value="celsius"    {{ (isset($ke) && $ke=='celsius')    ? 'selected' : '' }}>Celcius</option>
                            <option value="fahrenheit" {{ (isset($ke) && $ke=='fahrenheit') ? 'selected' : '' }}>Fahrenheit</option>
                            <option value="kelvin"     {{ (isset($ke) && $ke=='kelvin')     ? 'selected' : '' }}>Kelvin</option>
                            <option value="reamur"     {{ (isset($ke) && $ke=='reamur')     ? 'selected' : '' }}>Reamur</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control"
                            placeholder="Hasil"
                            value="{{ isset($hasil) ? $hasil : '' }}" readonly>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Hitung Konversi Suhu</button>
                    <a href="/" class="btn btn-success px-4">Kembali ke Beranda</a>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>