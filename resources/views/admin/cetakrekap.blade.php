

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Pamdes</title>
</head>
<body onload="window.print()">
    <div class="table table-striped" id="tabledownload">

        <div>
            <div>
                <h3 class="font-bold text-center">Rekap Tagihan Bulanan Customer PAMDES Sendangsari</h3>
                
            </div>
        </div>
                
        <table class="table table-striped" id="table" width="100%" cellspacing="0">
            
            <thead>
                <thead>
                    <tr>
                        <th >Nomor Rekening</th>
                        <th id="nama_pelanggan" style="max-width: 30px;">Nama Pelanggan</th>
                        <th id="jumlah_tagihan" style="max-width: 30px;">Jumlah Tagihan</th>
                        <th id="tanggal" style="max-width: 30px;">Tanggal</th>
                    </tr>
                </thead>
               
            </thead>
            <tbody>
                @forelse ($prints as $print)
                <tr>
                    <td>
                        {{ $print->Rekening}}
                    </td>
                    <td>
                        {{ $print->Nama}}
                    </td>
                    <td>
                        {{ $print->Jumlah}}
                    </td>
                    <td>
                        {{ $print->tanggal}}
                    </td>
                </tr>
                {{-- @include('modal.edit_modal') --}}
                @empty
                {{-- {{-- <tr class="text-center">
                    <td colspan="6">
                        Belum Ada Data
                    </td>
                </tr> --}}
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>