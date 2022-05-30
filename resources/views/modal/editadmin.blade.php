<div class="modal fade" id="editadminModal{{ $admin->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin Pengguna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('users.update', ['user' => $admin->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $admin->email }}">
                </div>
                <div class="mb-3">
                    <label for="confirmpass" class="form-label">Password</label>
                    <input type="text" class="form-control" id="confirmpass" name="confirmpass" value="{{ $admin->confirmpass }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="role" name="role" value="{{ $admin->role }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </div>
        </form>
    </div>
</div>

