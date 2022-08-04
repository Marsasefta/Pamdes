<div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('pelanggans.update', ['pelanggan' => $post->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="Rekening" class="form-label">Nomor Rekening</label>
                    <input type="number" class="form-control" id="Rekening" name="Rekening" placeholder="No. rekening" value="{{ $post->Rekening }}" required>
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama"  value="{{ $post->Nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" value="{{ $post->Alamat }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $post->tanggal }}">
                </div>
                <div class="mb-3">
                    <label for="Biaya" class="form-label">Biaya Pemakaian</label>
                    <input type="text" class="form-control" id="Biaya" name="Biaya" placeholder="Biaya" value="{{ $post->Biaya }}">
                </div>
                <div class="mb-3">
                    <label for="Administrasi" class="form-label">Administrasi</label>
                    <input type="text" class="form-control" id="Administrasi" name="Administrasi" placeholder="Administrasi" value="{{ $post->Administrasi }}">
                </div>
                <div class="mb-3">
                    <label for="Pemeliharaan" class="form-label">Pemeliharaan</label>
                    <input type="text" class="form-control" id="Pemeliharaan" name="Pemeliharaan" placeholder="Pemeliharaan"value="{{ $post->Pemeliharaan }}">
                </div>
                <div class="mb-3">
                    <label for="Denda" class="form-label">Denda</label>
                    <input type="text" class="form-control" id="Denda" name="Denda" placeholder="Denda" value="{{ $post->Denda }}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" name="status" id="status"
                            required>
                            <option selected disabled>-- Pilih --</option>
                            <option value="lunas">Lunas</option>
                            <option value="belum_lunas">Belum Lunas</option>
        
                            
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Jumlah" class="form-label">Jumlah Yang Dibayar</label>
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Jumlah" value="{{ $post->Jumlah }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </div>
        </form>
    </div>
</div>

