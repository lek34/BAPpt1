@extends('layouts.app')
@section('title', 'Profil')
@section('content')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">BIODATA</p>
    <div class="container" style="max-width:70%">
        <div class="row bold-font">
            <div class="col-3">
                Nama
            </div>
            <div class="col-9">
                : Jefferson Luckianto
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Kelas
            </div>
            <div class="col-9">
                : 21SI2
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Alamat
            </div>
            <div class="col-9">
                : Jalan asia 34c 
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Tempat/Tanggal Lahir
            </div>
            <div class="col-9">
                : Medan, 14 Maret 2003
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                NIM
            </div>
            <div class="col-9">
                : 03081210033
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Fakultas
            </div>
            <div class="col-9">
                : Ilmu Komputer
            </div>
        </div>
        <div class="row bold-font" style="margin-bottom: 24px">
            <div class="col-3">
                Prodi
            </div>
            <div class="col-9">
                : Sistem Informasi
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>Dasar Manajemen Keuangan Perusahaan</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Pemrograman Aplikasi Bisnis</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Pemasaran Digital</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Audit & control Sistem Informasi</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Manajemen Strategis Perusahaan</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Sistem Informasi Perusahaan</td>
                <td>3</td>
            </tr>
        </table>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center
        }
        .bold-font {
            font-weight: bold;
        }
    </style>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center
        }
        .bold-font {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">BIODATA</p>
        <div class="container" style="max-width:70%">
            <div class="row bold-font">
                <div class="col-3">
                    Nama
                </div>
                <div class="col-9">
                    : Jacky Angelo
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Kelas
                </div>
                <div class="col-9">
                    : 21SI2
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Alamat
                </div>
                <div class="col-9">
                    : Perumahan EcoPark No.138B
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Tempat/Tanggal Lahir
                </div>
                <div class="col-9">
                    : Medan, 24 Desember 2002
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    NIM
                </div>
                <div class="col-9">
                    : 03081210013
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Fakultas
                </div>
                <div class="col-9">
                    : Ilmu Komputer
                </div>
            </div>
            <div class="row bold-font" style="margin-bottom: 24px">
                <div class="col-3">
                    Prodi
                </div>
                <div class="col-9">
                    : Sistem Informasi
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <table style="width:70%; margin-bottom: 24px">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
                <tr>
                    <td>Dasar Manajemen Keuangan Perusahaan</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Pemrograman Aplikasi Bisnis</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Pemasaran Digital</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Audit & control Sistem Informasi</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Manajemen Strategis Perusahaan</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Sistem Informasi Perusahaan</td>
                    <td>3</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html> --}}