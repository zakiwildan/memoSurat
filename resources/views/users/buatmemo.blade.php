@extends('layouts.main')

@section('app-name', 'MEMO ~ 2K21')
@section('page', 'Dashboard')
@section('main-page', 'Memo')
@section('sub-page', 'Buat Memo')`
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- DataTables -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Tambah User</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <!-- Form -->
                        <form action="/BuatMemo/Simpan" method="post" onsubmit="return validateForm()" name="formBuatMemo">
                            {{ csrf_field() }}
                            @if ($errors->any())
                                <div class="form-group">
                                    <div class="alert alert-danger alert-block" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li><strong>{{ $error }}</strong></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="inputNIP">Nomor Surat<sup style="color: red">*</sup></label>
                                        <input type="text" name="nip" class="form-control" id="inputNIP"
                                            placeholder="Masukkan Nomor Surat">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputNama">Lampiran<sup style="color: red">*</sup></label>
                                        <input type="text" name="nm_pegawai" class="form-control" id="inputNama"
                                            placeholder="Masukkan Lampiran">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-6">
                                        <label for="inputNIP">Perihal<sup style="color: red">*</sup></label>
                                        <input type="text" name="nip" class="form-control" id="inputNIP"
                                            placeholder="Masukkan Perihal Memo">
                                    </div>

                                    <div class="col-6">
                                        <label>Tembusan Memo</label>
                                        <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Tembusan"
                                            style="width: 100%;">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="textarea">Isi Memo<sup style="color: red">*</sup></label>
                                        <textarea class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    </textarea>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    </div>
                                    <div class="col-2">
                                        <a href="Home" class="btn btn-danger btn-block">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- ./form -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- ./datatables -->

            </div>
        </div>
    </div><!-- /.container-fluid -->

    <script>
        function validateForm() {
            if (document.forms["formBuatMemo"]["nip"].value == "") {
                document.forms["formBuatMemo"]["nip"].focus();
                Swal.fire({
                    title: "Error!",
                    confirmButtonText: "Kembali",
                    html: "Kolom <b>NIP</b> Masih Kosong!!",
                    icon: 'warning',
                    showConfirmButton: true,
                    timer: 3000
                })
                return false;
            } else if (document.forms["formBuatMemo"]["nm_pegawai"].value == "") {
                document.forms["formBuatMemo"]["nm_pegawai"].focus();
                Swal.fire({
                    title: "Error!",
                    confirmButtonText: "Kembali",
                    html: 'Kolom <b>Nama Pegawai</b> Masih Kosong!!!',
                    icon: 'warning',
                    timer: 3000
                })
                return false;
            }
        }
    </script>

@endsection
