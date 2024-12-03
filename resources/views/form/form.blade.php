<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>
    <div class="">
        <div class="mx-auto py-3 bg-light border-gray-400 rounded container" style="width: 1080px">
            <div class="mx-auto py-2 bg-dark text-white rounded" style="width: 920px">
                <h1 class="text-center p-2 m-auto" style="width: 790px">LAYANAN KONSULTASI INSPEKTORAT</h1>
                <P class="text-justify p-2 m-auto" style="width: 790px">Lorem ipsum dolor sit amet, consectetur
                    adipiscing
                    elit.
                    Pellentesque non
                    hendrerit
                    sem, quis posuere purus. Sed venenatis, lorem molestie tempus faucibus, enim lectus pellentesque
                    augue,
                    ut hendrerit augue odio vel dui.</P>
            </div>
            <div class="mx-auto my-3" style="width: 920px">
                {{-- 
                email
                nama
                jabatan
                instansi
                no.hp
                jenis layanan
                pilih layanan
                jadwal
                permasalahan
                upload bukti dukung --}}
                <form action="{{ route('form.submit') }}" method="post" enctype="multipart/form-data"
                    class="container">
                    @csrf
                    <div class="form-group my-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email@email.com">
                    </div>
                    <div class="form-group my-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group my-3">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                    </div>
                    <div class="form-group my-3">
                        <label>Instansi</label>
                        <input type="text" name="instansi" class="form-control" placeholder="Instansi">
                    </div>
                    <div class="form-group my-3">
                        <label>Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group my-3">
                        <label>Jenis Layanan</label>
                        <select class="form-control" name="jenis_layanan" aria-label="Default select example">
                            <option>Pengadaan Barang dan Jasa</option>
                            <option>Pengelolaan Keuangan Daerah</option>
                            <option>Pengelolaan Barang Milik Daerah</option>
                            <option>Kepegawaian</option>
                            <option>SPIP, SAKIP, RB</option>
                            <option>Manajemen Risiko</option>
                            <option>Permasalahan Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label>Pilih Layanan</label>
                        <select class="form-control" name="pilih_layanan">
                            <option>Online</option>
                            <option>Offline</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label>Pilih Jadwal</label>
                        <div class="row">
                            <div class="col">
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="col">
                                <select class="form-control" name="waktu" aria-label="Default select example">
                                    <option>08.00 - 10.00</option>
                                    <option>10.00 - 12.00</option>
                                    <option>13.00 - 15.00</option>
                                    <option>15.00 - 17.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label>Permasalahan</label>
                        <input type="text" name="permasalahan" class="form-control" placeholder="Permasalahan">
                    </div>
                    <div class="form-group my-3">
                        <label>Upload Bukti Dukung</label>
                        <input type="link" name="link" class="form-control" placeholder="Upload Bukti Dukung">
                        <small class="form-text text-muted">atau</small>
                        <br>
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
