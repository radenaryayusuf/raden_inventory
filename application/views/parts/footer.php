
            <footer id="footer">
                Copyright &copy; 2017 Raden Arya

               
            </footer>

        </section>

        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__container">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
 <script>
$(document).ready(function () {
    $('#combox select').change(function(){
        var selnisn = $(this).val();
        console.log(selnisn);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
        $.ajax({
            url: "<?=site_url("transaksi/get_nama")?>",       //memanggil function controller dari url
            async: false,
            type: "POST",     //jenis method yang dibawa ke function
            data: "nisn="+selnisn,   //data yang akan dibawa di url
            dataType: "html",
            success: function(data) {
                $('#nm_siswa').html(data);   //hasil ditampilkan pada combobox id=kota
            }
        })
    });
 });
</script>
<script>
$(document).ready(function () {
    $('#combod select').change(function(){
        var selnama = $(this).val();
        console.log(selnama);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
        $.ajax({
            url: "<?=site_url("transaksi/get_nisn")?>",       //memanggil function controller dari url
            async: false,
            type: "POST",     //jenis method yang dibawa ke function
            data: "nm_siswa="+selnama,   //data yang akan dibawa di url
            dataType: "html",
            success: function(data) {
                $('#nisn').html(data);   //hasil ditampilkan pada combobox id=kota
            }
        })
    });
 });
</script>

        <!-- Malihu ScrollBar -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <!-- Bootgrid -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.min.js"></script>
          <!-- Moment -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/moment/min/moment.min.js"></script>

 <!-- Bootstrap Date/Time Picker -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- NoUiSlider -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
 <!-- Select 2 -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

      
        <!-- FullCalendar -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Simple Weather -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

        <!-- Salvattore -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
  <!-- jQuery Mask -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

        <!-- Flot Charts -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

        <!-- Sparkline Charts -->
        <script src="<?php echo base_url()?>assets/vendors/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- EasyPie Charts -->
        <script src="<?php echo base_url()?>assets/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="<?php echo base_url()?>assets/demo/js/flot-charts/curved-line.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/flot-charts/line.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/easy-pie-charts.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/misc.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/sparkline-charts.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/calendar.js"></script>
        <script src="<?php echo base_url()?>assets/demo/js/data-table.js"></script>

        <!-- Site Functions & Actions -->
        <script src="<?php echo base_url()?>assets/js/app.min.js"></script>
       <script src="<?php echo base_url()?>assets/controljs.js"></script>
    </body>

<!-- Mirrored from bootstrapsale.com/projects/maed/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 11:36:42 GMT -->
</html>
