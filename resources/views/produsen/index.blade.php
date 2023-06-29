 @include('layouts.header')
 @include('layouts.sidebar')
 <div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h4 class="modal-title">Logout</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <p>Apakah anda yakin ingin keluar?</p>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    <button type="button" class="btn btn-primary"><a href="index.html"
            class="text-white">Logout</a></button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Data Produsen</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="produsen.html">Produsen</a></li>
            <li class="breadcrumb-item active">Data Produsen</li>
        </ol>
    </div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel data Produsen</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <a href="iframe.html" data-toggle="modal" data-target="#form-produsen"
                        class="btn btn-primary mb-3"><i class="fas fa-calendar-plus mr-2"></i>Tambah
                        Data</a>
                    <thead class="bg-dark ">
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-2">Nama</th>
                            <th class="col-2">Nomor Telepon</th>
                            <th class="col-3">Alamat</th>
                            <th class="col-2">Status</th>
                                <th class="col-2 text-center">Action</th> 
                        </tr>
                    </thead>
                    <tbody class="text-ce">
                        <tr>
                            <td>1</td>
                            <td>Zaki Raihansan</td>
                            <td>0821938101</td>
                            <td>Jl. Lenteng Agung No.21</td>
                            <td>Customer</td>
                            <td class="text-center"><button class="btn btn-warning"><i
                                        class="fas fa-pencil-alt"></i></button> <button
                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td> 
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Andre</td>
                            <td>0821938101</td>
                            <td>Jl. Lenteng Agung No.21</td>
                            <td>Customer</td>
                            <td class="text-center"><button class="btn btn-warning"><i
                                class="fas fa-pencil-alt"></i></button> <button
                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td> 
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sulastri</td>
                            <td>0821938101</td>
                            <td>Jl. Lenteng Agung No.21</td>
                            <td>Customer</td>
                            <td class="text-center"><button class="btn btn-warning"><i
                                class="fas fa-pencil-alt"></i></button> <button
                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td> 
                        </tr>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<div class="modal fade" id="form-produsen">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h4 class="modal-title">Form Data Produsen</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="text" name="text" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_telp" class="col-4 col-form-label">No Telp</label>
            <div class="col-8">
                <input id="no_telp" name="no_telp" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-4 col-form-label">Status</label>
            <div class="col-8">
                <input id="status" name="status" type="text" class="form-control">
            </div>
        </div>

        
    </form>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    <button type="button" class="btn btn-primary"><a onclick="klik()"
            class="text-white">Simpan</a></button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /.content-wrapper -->

@include('layouts.footer')