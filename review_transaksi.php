<!-- Begin Page Content -->
<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

//Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['us'])) {
    if (us($_POST) > 0) {
         echo "<script>
                alert('Status Berhasil Diubah!');
                document.location.href ='?url=admin_transaksi.php';
            </script>";
    
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Maaf Anda Gagal Melakukan Penyewaan');
            </script>";
    }
}
?>

<div class="container-fluid">
<div class="card">
    <div class="card-body">
    <div class="card-title">
    </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Transaksi</h4>
        </div>
        <div class="card-body">
        <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Bayar</th>
                <th>ID Sewa</th>
                <th>Nama Penyewa</th>
				<th>Total</th>
				<th>Bukti Pembayaran</th>
				
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
			
		
			
            <?php 
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM transaksi_sewa INNER JOIN sewa on transaksi_sewa.id_sewa = sewa.id_sewa
              ORDER BY id_bayar DESC");

            while($hasil = mysqli_fetch_array($tampil)){
            ?>
                       
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $hasil['id_bayar']; ?></td>
                    <td><?= $hasil['id_sewa']; ?></td>
                    <td><?= $hasil['nama_penyewa']; ?></td>
					<td><?= $hasil['totalbayar']; ?></td>
					<td><a href="img/<?= $hasil['foto']; ?>">Klik Disini</a></td>
					
					<!--  intruksi status --> 
					<td> <a><?php if ($hasil['status'] == 1) : ?>
                            <span class="badge badge-pill badge-success">Success</span>
                         <?php elseif ($hasil['status'] == 2) : ?>
                           <span class="badge badge-pill badge-danger">Ditolak</span>
						 <?php else : ?>
                           <span class="badge badge-pill badge-warning">Pending</span>
                         <?php endif ?></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
		</div>
        </div>
		

		
        </div>
        </div>
        </div>