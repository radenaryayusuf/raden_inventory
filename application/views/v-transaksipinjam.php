<?php 
$this->load->view("parts/header");
$this->load->view("parts/nav");
 ?>
                         <!-- Modal Large -->
                         
                        <div class="modal fade data-barang" id="modal--large" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Silahkan tentukan barang yang ingin di pinjam<br><small>Maksimal 3 Barang</small></h4>
                                    </div>
                                    <div class="modal-body" id="tb-barang">
                                         <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Commands</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
                               foreach ($data_barang as $b) {
                                 echo "<tr>";
                                 echo "<td>".$b['br_kode']."</td>";
                                 echo "<td>".$b['br_nama']."</td>";
                                 echo "<td>".$b['jns_brg_kode']."</td>";
                                 echo "<td><input type = 'button' value ='pilih' class ='btn btn-default pilih-barang'></td>";
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
                        </div>
         <section id="content">
                <div class="content__header">
                    <h2>Daftar Peminjaman</h2>

                </div>
                <div class="card">
                     <div class="card__header">
                        <h2>Data Siswa <small>Silahkan isi terlebih dahulu data siswa yang akan melakukan peminjaman</small></h2>
                    </div>
<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('transaksi/proses','class="form-horizontal" role="form" id="fpinjam');

 ?>
                    <div class="card__body form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIS</label>
                            <div id="combox">
                            <div class="col-sm-4">
                               
                                    <select data-rel="chosen" name="nisn" id="nisn" class="select2" required>
                                        <option>...</option>    
                                   <?php 
                                   foreach ($qsiswanisn as $q) {
                                       ?>
                                       <option><?php echo $q->nisn ?></option>
                                       <?php
                                   }
                                    ?>
                                    </select>
                                </div>
                           </div>
                        </div>
                      <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Siswa</label>
                            <div id="combod">
                           <div class="col-sm-4">
                               
                                    <select data-rel="chosen" name="nm_siswa" id="nm_siswa" class="select2" required>
                                        <option>...</option>
                                         <?php foreach($qsiswanisn as $rownamasiswa){?>
           <option value="<?=$rownamasiswa->nm_siswa?>"><?=$rownamasiswa->nm_siswa?></option>
           <?php }?>
                                  
                                    </select>
                                </div>
                              </div>
                        </div>
                      <div class="card__header">
                        <h2>Data Barang <small>Silahkan isi data barang yang ingin dipinjam</small></h2>
                    </div>
                     <div class="card__body" id="proses">
                   
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lama Pinjam</label>
                            <div id="lamahari">
                            <div class="col-sm-4">
                                <input type="number" name="lamapinjam" min="1" max="3" class="form-control" id="lamanya" placeholder="Masukkan lama Hari">
                            </div>
                          </div>
                        </div>                     
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Dikembalikan<br></label> 
                            <div class="col-sm-4">
                                <input type="text" name="tgl_haruskembali" id="tgl_haruskembali" class="form-control" readonly>
                            </div>
                            <div class="col-sm-4" data-name="collection-plus" data-code="f14e">
                           <a data-toggle="modal"><button class="btn btn-default btn--icon" id="tambahbarang"><i class="zmdi zmdi-collection-plus zmdi-hc-fw"></button></i></a>
                       
                             </div>
                            </div>

                              <div class="table-responsive" id="barang-tbl">
                            <table class="table table-striped" id="tablebarang">
                                <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Jenis Barang</th>
                                    <th>Command</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>

                           
           <div class="form-group">
                             <div class="col-sm-offset-9 col-sm-5">
                                  <input type="submit" class="btn btn-default" name="submit" id="proses" value="Proses Peminjaman">
                            </div>
               </div>
                   
                     
                    </div>
            </section>
             
 <?php 
$this->load->view("parts/footer");

 ?>
 <script>
   $(document).ready(function(){
    $("#tambahbarang").click(function(){
        $("#modal--large").modal();
    });

});
 </script>