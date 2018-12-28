
   $('#lamanya').blur(function(){   
   	 var tanggalSkg = new Date();
  		var lamahari = Number($(this).val());
		 if(lamahari < 0 || lamahari == 0 || lamahari > 3){

		    $('#lamanya').val('1');
 		 }

var tanggaldulu = tanggalSkg.getDate();
 var tahun = tanggalSkg.getFullYear();
  var bulan = tanggalSkg.getMonth();
  var jam = tanggalSkg.getHours();
  var menit = tanggalSkg.getMinutes();
var hitungday = tanggaldulu + lamahari;
  $('#tgl_haruskembali').val(tahun+'-'+bulan+'-'+'0'+hitungday+' '+jam+':'+menit+':'+'00');


  });
    $('#lamanya').click(function(){   
   	 var tanggalSkg = new Date();
  		var lamahari = Number($(this).val());
		 if(lamahari < 0 || lamahari == 0 || lamahari > 3){

		    $('#lamanya').val('1');
 		 }

var tanggaldulu = tanggalSkg.getDate();
 var tahun = tanggalSkg.getFullYear();
  var bulan = tanggalSkg.getMonth();
  var jam = tanggalSkg.getHours();
  var menit = tanggalSkg.getMinutes();
var hitungday = tanggaldulu + lamahari;
  $('#tgl_haruskembali').val(tahun+'-'+bulan+'-'+'0'+hitungday+' '+jam+':'+menit+':'+'00');
  });

    $(function(){
 $(document).on('click','.pilih-barang',function(){
     var kodebarang = $(this).closest('tr').find('td:eq(0)').text();
     var namabarang = $(this).closest('tr').find('td:eq(1)').text();
     var jenisbarang = $(this).closest('tr').find('td:eq(2)').text();
     var td = '<tr>';
     var jumlahrow = document.getElementById("tablebarang").rows.length;
     if(jumlahrow === 3){
       document.getElementById("tambahbarang").disabled = true;
      }
     td += '<td>'+kodebarang+'<input type = "hidden" name="brg_kode[]" value="'+kodebarang+'"></td>';
     td += '<td>'+namabarang+'</td>';
     td += '<td>'+jenisbarang+'</td>';
     td += '<td><input type="button" class="btn btn-default btn-danger btn--icon-text remove-barang" value="Remove"></a></td>';
     $('#tablebarang tbody').append(td);
     $(this).closest('tr').remove();
     $('.data-barang').modal('hide');
 

 	});
  $(document).on('click','.remove-barang',function(){
    var kodebarang2 = $(this).closest('tr').find('td:eq(0)').text();
     var namabarang2 = $(this).closest('tr').find('td:eq(1)').text();
     var jenisbarang2 = $(this).closest('tr').find('td:eq(2)').text();
     var td2 = '<tr>';
    
       document.getElementById("tambahbarang").disabled = false;
      
      td2 += '<td>'+kodebarang2+'</td>';
     td2 += '<td>'+namabarang2+'</td>';
     td2 += '<td>'+jenisbarang2+'</td>';
     td2 += '<td><input type = "button" value = "pilih" class ="btn btn-default pilih-barang"></td>';
     $('#tb-barang tbody').append(td2);
     $(this).closest('tr').remove();

  });
     $(document).on('change','#pbd_id',function(){
    var kodebarang3 = $(this).closest('tr').find('td:eq(0)').text();
     var namabarang3 = $(this).closest('tr').find('td:eq(1)').text();
     var jenisbarang3 = $(this).closest('tr').find('td:eq(2)').text();
     var status_barang = $(this).closest('tr').find('td:eq(2)').text();
     var td2 = '<tr>';
    
       document.getElementById("tambahbarang").disabled = false;
      
      td2 += '<td>'+kodebarang2+'</td>';
     td2 += '<td>'+namabarang2+'</td>';
     td2 += '<td>'+jenisbarang2+'</td>';
     td2 += '<td><input type = "button" value = "pilih" class ="btn btn-default pilih-barang"></td>';
     $('#tb-barang tbody').append(td2);
     $(this).closest('tr').remove();

  });
    // $('#f-peminjaman').submit(function(e){
    //   e.preventDefault();
    //   var url = "<?php echo site_url() ?>/transaksi/proses";
    //   $.post(url,$('#f-peminjaman').serializeArray(),function(i){
    //     alert(i);
    //   });
    // });
     $('#pilih-datapeminjaman').click(function(e){
      e.preventDefault();
      var url = "<?php echo site_url() ?>/transaksikembali/proses";
      $('#f-kembali').closest('tr').remove();
      $.post(url,$('#f-kembali').serializeArray(),function(i){
        alert(i);
      });
    });
});