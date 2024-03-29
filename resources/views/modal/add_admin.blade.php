<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Admin Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="adduser" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmpass" class="form-label"> Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Confirm Password" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Role</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" name="role" id="role"
                            required>
                            <option selected disabled>-- Pilih --</option>
                            <option value="Kepala">Kepala PDAM</option>
                            <option value="Staff">Staff PDAM</option>
                            <option value="Pelanggan">Pelanggan</option>
                            {{-- <option value="Lainnya">lainnya</option> --}}
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>