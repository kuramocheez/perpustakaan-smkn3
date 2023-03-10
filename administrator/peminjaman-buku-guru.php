 <h2>PEMINJAMAN BUKU GURU</h2><br>
 <div><a href="?page=tambah-peminjam-guru" class="btn btn-success square-btn-adjust"><span class="glyphicon glyphicon-plus"></span> TAMBAH</a></div><br>
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             TABEL PEMINJAMAN BUKU GURU
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA GURU</th>
                                            <th>KODE BUKU</th>
                                            <th>JUDUL BUKU</th>
                                            <th>TANGGAL PEMINJAMAN</th>
                                            <th>TANGGAL HARUS KEMBALI</th>
                                            <th>JUMLAH PINJAM</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $nomor=1;
                                    $ambil=mysqli_query($koneksi,"SELECT * FROM transaksi_guru LEFT JOIN buku ON transaksi_guru.id_buku=buku.id_buku ORDER BY tanggal_pinjam DESC");
                                    while($array=mysqli_fetch_assoc($ambil)){
                                     ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo ucwords($array['nama_guru']) ?></td>
                                            <td><?php echo $array['kode_buku']; ?></td>
                                            <td><?php echo ucwords($array['judul_buku']) ?></td>
                                            <td><?php echo date('d M Y',strtotime($array['tanggal_pinjam'])) ?></td>
                                            <td><?php echo date('d M Y',strtotime($array['tanggal_harus_kembali'])) ?></td>
                                            <td><?php echo $array['jumlah_pinjam']; ?></td>
                                            <td><?php echo $array['status']; ?></td>
                                        </tr>
                                    <?php
                                    $nomor++;
                                 }
                                    ?>
                                    </tbody>
                                </table>
                                 
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>