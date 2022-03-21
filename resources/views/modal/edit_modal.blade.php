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
                    <input type="text" class="form-control" id="Rekening" name="Rekening" value="{{ $post->Rekening }}">
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $post->Nama }}">
                </div>
                <div class="mb-3">
                    <label for="Jumlah" class="form-label">Jumlah Yang Dibayar</label>
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah" value="{{ $post->Jumlah }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $post->tanggal }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </div>
        </form>
    </div>
</div>

