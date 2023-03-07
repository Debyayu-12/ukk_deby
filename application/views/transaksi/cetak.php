<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }

        /* hr {
            border: 0;
            border-top: 2px solid #AEBAF8;
        } */

        .tabel {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            font-size: 14px;
            font-family: sans-serif;
            background: lightblue;
        }

        table tr tr {
            font-size: 13;
        }
    </style>
</head>

<body>

    <center>
        <table>
            <tr>
                <td><img src="<?= base_url('assets/img/icon2.jpg') ?>" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="3">STRUK LAPORAN</font>
                    </center><br>
                    <center>
                        <font size="5"><b>DEBY LAUNDRY</b></font>
                    </center><br>
                    <center>
                        <font size="2">
                            <i>
                                <b>
                                    Ds.Semboro Pasar RT.04/RW.16 - Semboro
                                    email : debyayuwulan@gmail.com
                                    Telp. 082257390370
                                </b>
                            </i>
                        </font>
                    </center>
                </td>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            </tr>
        </table>

        <table width="700">

        <tr>
            <td>Kode Invoice :</td>
            <td class="text"><?= $transaksi['kode_invoice'] ?></td>
        </tr>
        <!-- <tr> 
            <td>Nama Member :</td>
            <td class="text"><?= $member['nama'] ?></td>
         </tr> -->

         <tr>
            <td>Tanggal Masuk :</td>
            <td class="text"><?= $transaksi['tgl'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Ambil :</td>
            <td class="text"><?= $transaksi['tgl_bayar'] ?></td>
        </tr>
    </table><br>


        <table width="700" class="tabel">
            <tr>
                <th class="tabel text-center">Nama Paket</th>
                <th class="tabel text-center">Harga</th>
                <th class="tabel text-center">QTY</th>
                <th class="tabel text-center">Status Pembayaran</th>
                <th class="tabel text-center">Total Bayar</th>
            </tr>

            <tr>
                <td class="tabel text-center"><?= $transaksi['nama_paket'] ?></td>
                <td class="tabel text-center"><?= $transaksi['harga'] ?></td>
                <td class="tabel text-center"><?= $transaksi['qty'] ?></td>
                <td class="tabel text-center"><?= $transaksi['dibayar'] ?></td>
                <td class="tabel text-center"><?= "Rp. " . number_format($transaksi['total_harga']) ?></td>
            </tr>

        </table><br>

        <table width="700">
            <tr>
                <td>Keterangan</td>
            </tr>
            <tr>
                <td>
                    <p>1. Pengambilan cucian harus membawa nota</p>
                    <p>2. Cuci luntur bukan tanggung jawab kami</p>
                    <p>3. Hitung dan periksa sebelum pergi</p>
                    <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidal dilayani</p>
                </td>
            </tr>
        </table>

</body>
</thml>
<script>
    window.print();
</script>