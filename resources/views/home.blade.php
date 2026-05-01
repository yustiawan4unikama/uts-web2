<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UTS Web 2 - Yustiawan WH - 230403020007</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="card shadow-sm border border-primary" style="width: 400px">
        
        <div class="card-header text-center">
            UTS PEMROGRAMAN WEB 2
        </div>
        
        <div class="card-body text-center p-4">
            
            {{-- Judul --}}
            <h5 class="fw-bold mb-3">Aplikasi Perhitungan</h5>
            
            {{-- Identitas --}}
            <p class="mb-1">Nama : Yustiawan Winata Hadi</p>
            <p class="mb-1">NIM : 230403020007</p>
            <p class="mb-3">Kelas : R2</p>

            <hr>

            {{-- Menu --}}
            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="/phytagoras" class="btn btn-outline-primary px-4">Phytagoras</a>
                <a href="/suhu" class="btn btn-outline-warning px-4">Konversi Suhu</a>
            </div>

        </div>
    </div>
</div>
</body>
</html>