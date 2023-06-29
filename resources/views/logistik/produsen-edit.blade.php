@include('layouts.header');
@include('layouts.sidebar');
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Merk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Merk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Data Task</h5>
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mata Kuliah</label>
                                <input type="text" class="form-control" name="matkul" id="matkul"
                                    value="{{ old('matkul', $task->matkul) }}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Task</label>
                                <input type="text" class="form-control" name="task" id="task"
                                    value="{{ old('task', $task->task) }}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date"
                                    value="{{ old('start_date', $task->start_date) }}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deadline</label>
                                <input type="date" class="form-control" name="deadline" id="deadline"
                                    value="{{ old('deadline', $task->deadline) }}">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Description</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"
                                    value="{{ old('deskripsi', $task->deskripsi) }}"></textarea>
                            </div>
                            <div class="modal-footer ms-2">
                                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer');