<div class="modal fade" id="editpelangganModal{{ $customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('datacustomers.update', ['datacustomer' => $customer->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama pelanggan</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $customer->nama }}">
                </div>
                <div class="mb-3">
                    <label for="rekening" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="rekening" name="rekening" value="{{ $customer->rekening }}">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $customer->gender }}">
  
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $customer->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="rt" class="form-label">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt" value="{{ $customer->rt }}">
                </div>
                <div class="mb-3">
                    <label for="rw" class="form-label">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw" value="{{ $customer->rw }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </div>
        </form>
    </div>
</div>

