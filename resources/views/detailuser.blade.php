<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>     Invoice Pembayaran</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body onload="">
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://4.bp.blogspot.com/-9smovTIsKaU/Wf_kf1SQI_I/AAAAAAAAEgQ/u6lInUv2X3QNeE3Xnga-1drQkPs-u3xNgCLcBGAs/s1600/PDAM.jpg" style="width: 150px; max-width: 300px" />
								</td>

								<td>
									<h2> Invoice Pembayaran Tagihan PDAM</h2> 
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Pelanggan</td>

					<td>Tanggal Tagihan : {{ $post->tanggal }}</td>
				</tr>

				<tr class="details">
					<td>
                        Nomor Rekening: {{ $post->Rekening }} <br>
                        
                        Nama Pelanggan: {{ $post->Nama }} <br>
                        Alamat        :
                    </td>
				</tr>
               

				<tr class="heading">
					<td>Pemakaian</td>

					<td>Biaya</td>
				</tr>

				<tr class="item">
					<td>Biaya Pemakaian</td>

					{{-- <td>$300.00</td> --}}
				</tr>

				<tr class="item">
					<td>Administrasi</td>

					{{-- <td>$75.00</td> --}}
				</tr>

				<tr class="item">
					<td>Pemeliharaan</td>

					{{-- <td>$10.00</td> --}}
				</tr>

                <tr class="item">
					<td>Denda</td>
				</tr>
                <tr class="item last">
					<td>Tagihan Air</td>
                    <td>{{ $post->Jumlah }}</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>{{ $post->Jumlah }}</td>
				</tr>
			</table>
		</div>
	</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Tagihan</title>
</head>
<body >
    <div class="card">
       
        <div class="container mt-5 p-5 border" >
       
            <div class="row">
            
                <div class="card-header py-3 text-center">
                    
                    <h6 class=" font-weight-bold  text-center">Detail Invoice Tagihan Bulanan PDAM</h6>
                </div>
                    <div class="col-4" style="padding-left: 0px;  padding-right: 0px;">
                    
                        <table>
                            <tr>
                                <th style="min-width: 180px;">Nomor Rekening:</th>
                                <td>{{ $post->Rekening }}</td>
                            </tr>
                            <tr>
                                <th style="min-width: 180px;">Nama Pelanggan:</th>
                                <td>{{ $post->Nama }}</td>
                            </tr>
                            <tr>
                                <th style="min-width: 180px;">Tanggal Tagihan:</th>
                                <td>{{ $post->tanggal }}</td>
                            </tr>
                            <tr>
                                <th style="min-width: 180px;">Jumlah Tagihan:</th>
                                <td>{{ $post->Jumlah }}</td>
                            </tr>
                        
                        </table>
                    </div>
            </div>
        </div>
    </div>

        @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous">
        </script>
        @endpush
</body>
</html>
 --}}
