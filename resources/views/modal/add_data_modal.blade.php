<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/dashboard/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="Rekening" class="form-label">Nomor Rekening</label>
                <input type="number" class="form-control" id="Rekening" name="Rekening" placeholder="No. rekening" required>
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Yang Dibayar</label>
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Jumlah" >
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" >
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
<script>
    var Jumlah = document.getElementById('Jumlah');
    Jumlah.addEventListener('keyup', function(e)
    {
        Jumlah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

