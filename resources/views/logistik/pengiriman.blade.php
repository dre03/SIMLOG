@include('layouts.header');
@include('layouts.sidebar');


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data pengiriman</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="pengiriman.html">pengiriman</a></li>
                                <li class="breadcrumb-item active">Data pengiriman</li>
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
                                    <h3 class="card-title">Tabel data pengiriman</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <a href="iframe.html" data-toggle="modal" data-target="#form-pengiriman"
                                            class="btn btn-primary mb-3"><i class="fas fa-calendar-plus mr-2"></i>Tambah
                                            Data</a>
                                        <thead class="bg-dark ">
                                            <tr>
                                                <th class="col-1">No</th>
                                                <th class="col-2">Nama pengiriman</th>
                                                <th class="col-2">Kategori</th>
                                                <th class="col-2">Deskripsi pengiriman</th>
                                                <th class="col-3">Kode pengiriman</th>
                                                <th class="col-3">Harga pengiriman</th>
                                                <th class="col-2">Status pengiriman</th>
                                                <th class="col-2 text-center">Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody class="text-ce">
                                          @php
                                              $no = 1;

                                          @endphp
                                            @foreach ($pengiriman as $item)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item->nama_pengiriman}}</td>
                                                <td>{{$item->id_kategori}}</td>
                                                <td>{{$item->deskripsi_pengiriman}}</td>
                                                <td>{{$item->kode_pengiriman}}</td>
                                                <td>{{$item->harga_pengiriman}}</td>
                                                <td>{{$item->status_pengiriman}}</td>
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

        <div class="modal fade" id="form-pengiriman">
         <!-- Modal for Create -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create-modal-label">Tambah pengiriman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('pengiriman.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <!-- Form inputs -->
          <div class="form-group">
            <label for="id_produsen">ID Produsen</label>
            <input type="text" class="form-control" id="id_produsen" name="id_produsen" required>
          </div>
          <div class="form-group">
            <label for="id_kategori">ID Kategori</label>
            <input type="text" class="form-control" id="id_kategori" name="id_kategori" required>
          </div>
          <div class="form-group">
            <label for="nama_pengiriman">Nama pengiriman</label>
            <input type="text" class="form-control" id="nama_pengiriman" name="nama_pengiriman" required>
          </div>
          <div class="form-group">
            <label for="deskripsi_pengiriman">Deskripsi pengiriman</label>
            <textarea class="form-control" id="deskripsi_pengiriman" name="deskripsi_pengiriman" required></textarea>
          </div>
          <div class="form-group">
            <label for="kode_pengiriman">Kode pengiriman</label>
            <input type="text" class="form-control" id="kode_pengiriman" name="kode_pengiriman" required>
          </div>
          <div class="form-group">
            <label for="harga_pengiriman">Harga pengiriman</label>
            <input type="number" class="form-control" id="harga_pengiriman" name="harga_pengiriman" required>
          </div>
          <div class="form-group">
              <label for="status_pengiriman">Status pengiriman</label>
              <input type="number" class="form-control" id="status_pengiriman" name="status_pengiriman" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
           @foreach ($pengiriman as $item)
    <div class="modal fade" id="edit-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modal-label-{{$item->id}}">Edit Data pengiriman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pengiriman.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <!-- Form inputs -->
                        <div class="form-group">
                            <label for="id_produsen">ID Produsen</label>
                            <input type="text" class="form-control" id="id_produsen" value="{{$item->id_produsen}}" name="id_produsen" required>
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">ID Kategori</label>
                            <input type="text" class="form-control" id="id_kategori" value="{{$item->id_kategori}}"  name="id_kategori" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengiriman">Nama pengiriman</label>
                            <input type="text" class="form-control" id="nama_pengiriman" value="{{$item->nama_pengiriman}}" name="nama_pengiriman" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_pengiriman">Deskripsi pengiriman</label>
                            <textarea class="form-control" id="deskripsi_pengiriman"  name="deskripsi_pengiriman" required>{{$item->deskripsi_pengiriman}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kode_pengiriman">Kode pengiriman</label>
                            <input type="text" class="form-control" id="kode_pengiriman"  value="{{$item->kode_pengiriman}}" name="kode_pengiriman" required>
                        </div>
                        <div class="form-group">
                            <label for="harga_pengiriman">Harga pengiriman</label>
                            <input type="number" class="form-control" id="harga_pengiriman" value="{{$item->harga_pengiriman}}" name="harga_pengiriman" required>
                        </div>
                        <div class="form-group">
                            <label for="status_pengiriman">Status pengiriman</label>
                            <input type="number" class="form-control" id="status_pengiriman" value="{{$item->status_pengiriman}}" name="status_pengiriman" required>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

  @foreach ($pengiriman as $item)
    <div class="modal fade" id="delete-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-modal-label-{{$item->id}}">Hapus Data pengiriman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus data pengiriman {{$item->nama_pengiriman}} ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('pengiriman.destroy', $item->id) }}" method="POST">
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
