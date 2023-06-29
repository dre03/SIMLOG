@include('layouts.header');
@include('layouts.sidebar');


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data toko</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="toko.html">toko</a></li>
                                <li class="breadcrumb-item active">Data toko</li>
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
                                    <h3 class="card-title">Tabel data toko</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <a href="iframe.html" data-toggle="modal" data-target="#form-toko"
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
                                          @php
                                              $no = 1;

                                          @endphp
                                            @foreach ($toko as $item)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item->nama_toko}}</td>
                                                <td>{{$item->no_telp_toko}}</td>
                                                <td>{{$item->alamat_toko}}</td>
                                                <td>
                                                    @if($item->status_toko == 0)
                                                        Aktif
                                                    @else
                                                        Nonaktif
                                                    @endif
                                                    </td>
                                                <td class="text-center"> 
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal-{{$item->id}}"><i class="fas fa-pencil-alt"></i></button>
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{$item->id}}"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            @php
                                                $no++
                                            @endphp
                                        @endforeach
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

        <div class="modal fade" id="form-toko">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Data toko</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('toko.store')}}" method="POST">
                          @csrf
                          <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <input id="text" name="nama_toko" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_telp" class="col-4 col-form-label">No Telp</label>
                                <div class="col-8">
                                    <input id="no_telp" name="no_telp_toko" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                                <div class="col-8">
                                    <input id="alamat" name="alamat_toko" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-4 col-form-label">Status</label>
                                <div class="col-8">
                                    <input id="status" name="status_toko" type="text" class="form-control">
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
           @foreach ($toko as $item)
    <div class="modal fade" id="edit-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modal-label-{{$item->id}}">Edit Data toko</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('toko.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_toko">Nama toko</label>
                            <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="{{$item->nama_toko}}">
                        </div>
                        <div class="form-group">
                            <label for="no_telp_toko">Nomor Telepon toko</label>
                            <input type="text" class="form-control" id="no_telp_toko" name="no_telp_toko" value="{{$item->no_telp_toko}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_toko">Alamat toko</label>
                            <textarea class="form-control" id="alamat_toko" name="alamat_toko">{{$item->alamat_toko}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status_toko">Status toko</label>
                            <select class="form-control" id="status_toko" name="status_toko">
                                <option value="0" {{$item->status_toko == '0' ? 'selected' : 'Aktive'}}>Aktif</option>
                                <option value="1" {{$item->status_toko == '1' ? 'selected' : 'Aktive'}}>Nonaktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

  @foreach ($toko as $item)
    <div class="modal fade" id="delete-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-modal-label-{{$item->id}}">Hapus Data toko</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus data toko {{$item->nama_toko}} ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('toko.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach



@include('layouts.footer');
