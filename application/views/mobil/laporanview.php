<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<h2 align="center">Daftar Transaksi</h2>
<?php
    echo "<br>";
    echo "<table class = 'table-bordered' width='500px' align='center'>
        <thead align='center' class='table-dark'>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Merk</th>
                                <th>Harga</th>
                                <th>Tanggal</th>
                </thead>
                ";
                foreach ($datatransaksi as $k) {
                    echo"
                       <tr align='center'>
                                <td>$k->id_transaksi</td>
                                <td>$k->nama</td>
                                <td>$k->merk</td>
                                <td>$k->harga</td>
                                <td>$k->tgl</td>
                        </tr>
                                ";
                }
     echo "</table>";
?>