@extends('layouts.main')

@section('app-name', 'MEMO ~ 2K21')
@section('page', 'Dashboard')
@section('main-page', 'Dashboard')
@section('sub-page', 'Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <!-- DataTables -->
            <div class="card">

                <!-- /.card-header -->

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:12%">NIP</th>
                                <th class="text-center" style="width:30%">Nama Pegawai</th>
                                <th class="text-center" style="width:13%">Tgl Lahir</th>
                                <th class="text-center" style="width:15%">Divisi</th>
                                <th class="text-center" style="width:15%">Jabatan</th>
                                <th class="text-center" style="width:14%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Get Data to Tables -->
                            @foreach ($daftaruser as $d)
                                <tr>
                                    <td class="text-center">-</td>
                                    <td>{{ $d->name }}</td>
                                    <td class="text-center">{{ $d->email }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="/InputDataPgw/Edit/" title="Edit Data" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="/InputDataPgw/Delete/" id="rmv" title="Hapus Data" class="btn btn-danger"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                            <!-- ./end get data to tables -->

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- ./datatables -->

        </div>
    </div>
</div><!-- /.container-fluid -->
@endsection
