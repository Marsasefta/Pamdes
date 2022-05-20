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
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" >
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" >
            </div>
            <div class="mb-3">
                <label for="Biaya" class="form-label">Biaya Pemakaian</label>
                <input type="text" class="form-control" id="Biaya" name="Biaya" placeholder="Biaya" onchange="sum()" >
            </div>
            <div class="mb-3">
                <label for="Administrasi" class="form-label">Administrasi</label>
                <input type="text" class="form-control" id="Administrasi" name="Administrasi" placeholder="Administrasi" onchange="sum()" >
            </div>
            <div class="mb-3">
                <label for="Pemeliharaan" class="form-label">Pemeliharaan</label>
                <input type="text" class="form-control" id="Pemeliharaan" name="Pemeliharaan" placeholder="Pemeliharaan" onchange="sum()">
            </div>
            <div class="mb-3">
                <label for="Denda" class="form-label">Denda</label>
                <input type="text" class="form-control" id="Denda" name="Denda" placeholder="Denda" onchange="sum()" >
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Yang Dibayar</label>
                <input type="text" class="form-control" id="Jumlah" name="Jumlah" placeholder="Jumlah" >
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
    
    function sum(){
        var Biaya = document.getElementById('Biaya').value;
        var Administrasi = document.getElementById('Administrasi').value;
        var Pemeliharaan = document.getElementById('Pemeliharaan').value;
        var Denda = document.getElementById('Denda').value;

        var total = parseFloat(Biaya) + parseFloat(Administrasi) + parseFloat(Pemeliharaan) + parseFloat(Denda);
        if (!isNaN(total)) {
         document.getElementById('Jumlah').value = total;
      }
    }


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

    var Biaya = document.getElementById('Biaya');
    Biaya.addEventListener('keyup', function(e)
    {
        Biaya.value = formatRupiah(this.value, 'Rp. ');
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

    var Denda = document.getElementById('Denda');
    Denda.addEventListener('keyup', function(e)
    {
        Denda.value = formatRupiah(this.value, 'Rp. ');
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

    var Administrasi = document.getElementById('Administrasi');
    Administrasi.addEventListener('keyup', function(e)
    {
        Administrasi.value = formatRupiah(this.value, 'Rp. ');
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

    var Pemeliharaan = document.getElementById('Pemeliharaan');
    Pemeliharaan.addEventListener('keyup', function(e)
    {
        Pemeliharaan.value = formatRupiah(this.value, 'Rp. ');
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

