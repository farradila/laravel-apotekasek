@extends('master')

@extends('layouts.app')

@section('title','Home')

@section('judul_halaman','Data Obat')

<?= var_dump($obat); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Obat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Obat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- COLOR PALETTE -->
            <div class="card">
                <div class="card-header">


                    <div class="col-6">
                        <i class="fas fa-user"></i>
                        User
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#add_user" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add User
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th>No</th>
                            <th>test</th>
                            <th>test</th>
                            <th>test</th>
                            <th>test</th>
                            <th>test</th>
                        </thead>

                         <tbody>
                            <?php $no = 1; ?>
                            @foreach($obat as $obt) 
                            <tr>
                                <td>{{ $no }} <?php $no++; ?></td>
                                <!--td>{{ $obt['merk_obat'] }}</td-->
                                <td>{{ $obt['jenis_obat'] }}</td>
                                <td>{{ $obt['harga'] }}</td>
                                <td>{{ $obt['tanggal_kadaluarsa'] }}</td>
                                <td>{{ $obt['stok'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/obat/add" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="merk_obat">Merk Obat</label>
                                <input type="text" class="form-control" id="merk_obat" name="merk_obat"
                                    placeholder="merk_obat" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="jenis_obat">Jenis Obat</label>
                                <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" placeholder="jenis_obat"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" placeholder="tanggal_kadaluarsa"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="stok"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
