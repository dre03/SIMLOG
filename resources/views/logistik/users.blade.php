@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Users</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                                <li class="breadcrumb-item active">Data users</li>
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
                                    <h3 class="card-title">Tabel Data Users</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <a href="users" data-toggle="modal" data-target="#tambah-users"
                                            class="btn btn-primary mb-3"><i class="fas fa-calendar-plus mr-2"></i>Tambah
                                            Data</a>
                                        <thead class="bg-dark ">
                                            <tr>
                                                <th class="col-1">No</th>
                                                <th class="col-2">Nama</th>
                                                <th class="col-2">Alamat</th>
                                                <th class="col-2">Nomor Telepon</th>
                                                <th class="col-2">Email</th>
                                                <th class="col-1">Level</th>
                                                <th class="col-3 text-center">Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody class="text-ce">
                                            <tr>
                                                <td>1</td>
                                                <td>Zaki Raihansan</td>
                                                <td>Jl. Lenteng Agung No.21</td>
                                                <td>0821938101</td>
                                                <td><a href="#">example.gmail</a></td>
                                                <td>Beginer</td>
                                                <td class="text-center"> 
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal"> <i
                                                    class="fas fa-pencil-alt"></i></button>
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" > <i class="fas fa-trash"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Andre</td>
                                                <td>Jl. Lenteng Agung No.21</td>
                                                <td>0821938101</td>
                                                <td><a href="#">example.gmail</a></td>
                                                <td>Beginer</td>
                                                <td class="text-center"> 
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal"> <i
                                                    class="fas fa-pencil-alt"></i></button>
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" > <i class="fas fa-trash"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sulastri</td>
                                                <td>Jl. Lenteng Agung No.21</td>
                                                <td>0821938101</td>
                                                <td><a href="#">example.gmail</a></td>
                                                <td>Beginer</td>
                                                <td class="text-center"> 
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal"> <i
                                                      class="fas fa-pencil-alt"></i></button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-nama = "Sulastri"> <i class="fas fa-trash"></i></button>
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
        
        <div class="modal fade" id="tambah-users">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Data Users</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Nama User</label>
                                <div class="col-8">
                                    <input id="text" name="text" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <input id="email" name="email" type="email" class="form-control">
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
                                <label class="col-4 col-form-label">Level</label>
                                <div class="col-8 d-flex justify-content-start">
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">
                                            Petugas
                                        </label>
                                    </div>
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
        <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <form>
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama User</label>
                    <div class="col-8">
                        <input id="text" name="text" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input id="email" name="email" type="email" class="form-control">
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
                    <label class="col-4 col-form-label">Level</label>
                    <div class="col-8 d-flex justify-content-start">
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">
                                Admin
                            </label>
                        </div>
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Petugas
                            </label>
                        </div>
                </div>
            </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
            </div>
            </form>
          </div>
        </div>
    
        <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah anda yakin akan menghapus <span id="delete-nama"></span>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
          </div>
        </div>
  @include('layouts.footer')
