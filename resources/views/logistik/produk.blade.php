@include('layouts.header');
@include('layouts.sidebar');


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="produk.html">produk</a></li>
                                <li class="breadcrumb-item active">Data produk</li>
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
                                    <h3 class="card-title">Tabel data produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <a href="iframe.html" data-toggle="modal" data-target="#form-produk"
                                            class="btn btn-primary mb-3"><i class="fas fa-calendar-plus mr-2"></i>Tambah
                                            Data</a>
                                        <thead class="bg-dark ">
                                            <tr>
                                                <th class="col-1">No</th>
                                                <th class="col-2">Nama Produk</th>
                                                <th class="col-2">Kategori</th>
                                                <th class="col-2">Deskripsi Produk</th>
                                                <th class="col-3">Kode Produk</th>
                                                <th class="col-3">Harga Produk</th>
                                                <th class="col-2">Status Produk</th>
                                                <th class="col-2 text-center">Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody class="text-ce">
                                          @php
                                              $no = 1;

                                          @endphp
                                            @foreach ($produk as $item)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item->nama_produk}}</td>
                                                <td>{{$item->id_kategori}}</td>
                                                <td>{{$item->deskripsi_produk}}</td>
                                                <td>{{$item->kode_produk}}</td>
                                                <td>{{$item->harga_produk}}</td>
                                                <td>{{$item->status_produk}}</td>
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

        <div class="modal fade" id="form-produk">
         <!-- Modal for Create -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create-modal-label">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('produk.store') }}" method="POST">
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
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
          </div>
          <div class="form-group">
            <label for="deskripsi_produk">Deskripsi Produk</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" required></textarea>
          </div>
          <div class="form-group">
            <label for="kode_produk">Kode Produk</label>
            <input type="text" class="form-control" id="kode_produk" name="kode_produk" required>
          </div>
          <div class="form-group">
            <label for="harga_produk">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
          </div>
          <div class="form-group">
              <label for="status_produk">Status Produk</label>
              <input type="number" class="form-control" id="status_produk" name="status_produk" required>
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
           @foreach ($produk as $item)
    <div class="modal fade" id="edit-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modal-label-{{$item->id}}">Edit Data produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.update', $item->id) }}" method="POST">
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
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" value="{{$item->nama_produk}}" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi_produk"  name="deskripsi_produk" required>{{$item->deskripsi_produk}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kode_produk">Kode Produk</label>
                            <input type="text" class="form-control" id="kode_produk"  value="{{$item->kode_produk}}" name="kode_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="harga_produk">Harga Produk</label>
                            <input type="number" class="form-control" id="harga_produk" value="{{$item->harga_produk}}" name="harga_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="status_produk">Status Produk</label>
                            <input type="number" class="form-control" id="status_produk" value="{{$item->status_produk}}" name="status_produk" required>
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

  @foreach ($produk as $item)
    <div class="modal fade" id="delete-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label-{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-modal-label-{{$item->id}}">Hapus Data produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus data produk {{$item->nama_produk}} ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST">
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
