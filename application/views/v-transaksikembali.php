<?php 
$this->load->view("parts/header");
$this->load->view("parts/nav");
 ?>
        <section id="content">
                <div class="content__header">
                    <h2>Pengembalian Barang</h2>

                    <div class="actions">
                        <a href="#"><i class="zmdi zmdi-pin-help zmdi-hc-fw"></i></a>
                        
                    </div>
                </div>

<!-- <div class="modal fade data-pinjam" id="modal--large" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Data Barang<br><small>Berikut adalah data barang yang anda pinjam :</small></h4>
                                    </div>
                                    <div class="modal-body" id="data-pinjambarang">
                                         <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Status Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
                               foreach ($data_barang as $b) {
                                 echo "<tr>";
                                 echo "<td>".$b['br_kode']."</td>";
                                 echo "<td>".$b['br_nama']."</td>";
                                 echo "<td>".$b['br_status']."</td>";

                                 echo "</tr>";
                              }
                                ?>
                            </tbody>
                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
      <div class="card">
                    <div class="card__header">
                        <h2>Data Peminjaman <small>Silahkan Cari Data Peminjaman yang ingin dikembalikan.</small></h2>
                    </div>

                    <div class="card__body" id="f-kembali">
                         
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Peminjaman</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Harus Kembali</th>
                                        <th>Command</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php 
                                            $i = 1;
                               foreach ($data_pinjam as $p) {
                                 echo "<tr>";
                                 echo "<td>".$i."</td>";
                                 echo "<td>".$p['pb_id']."</td>";
                                 echo "<td>".$p['pb_no_siswa']."</td>";
                                 echo "<td>".$p['pb_nama_siswa']."</td>";
                                 echo "<td>".$p['pb_harus_kembali_tgl']."</td>";
                                 echo "<td><input type = 'button' value ='Proses' id='pilih-datapeminjaman' class ='btn btn-default pilih-datapinjam'></td>";
                                 echo "</tr>";
                                    $i++;
                              }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            </section>              
 <?php 
$this->load->view("parts/footer");

 ?>