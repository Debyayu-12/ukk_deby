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
        </table><br><br>


        <table width="700" class="tabel">
            <tr>
                <th class="tabel text-center">Id Member</th>
                <th class="tabel text-center">Tanggal Masuk</th>
                <th class="tabel text-center">Nama Member</th>
                <th class="tabel text-center">Total Bayar</th>
                <th class="tabel text-center">Status Pembayaran</th>
                <th class="tabel text-center">Tanggal Ambil</th>
            </tr>

            <tr>
                <td class="tabel"><?= $transaksi['id_member'] ?></td>
                <td class="tabel"><?= $transaksi['tgl'] ?></td>
                <td class="tabel"><?= $transaksi['nama'] ?></td>
                <td class="tabel"><?= "Rp. " . number_format($transaksi['total_bayar']) ?></td>
                <td class="tabel"><?= $transaksi['dibayar'] ?></td>
                <td class="tabel"><?= $transaksi['tgl_bayar'] ?></td>
            </tr>

        </table><br>

        <table>
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