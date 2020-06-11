<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="<?= base_url() ?>assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/adminlte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- <script src="<?= base_url() ?>assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?= base_url() ?>assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="<?= base_url() ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- <script src="<?= base_url() ?>assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url() ?>assets/adminlte/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/adminlte/dist/js/demo.js"></script> -->
<script src="<?= base_url() ?>assets/adminlte/bower_components/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#table1").DataTable();
    $('.input-daterange input').each(function() {
    $(this).datepicker('clearDates');
    });
  });
</script>
<script>
      $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>Schedule/load",
            selectable:true,
            selectHelper:true,
            eventClick: function (event, element) {
                    var id = event.id;
                    // console.log(id);
                    $.ajax({
                        
                        type : "GET",
                        url  : "<?php echo base_url('schedule/getOne')?>",
                        dataType : "json",
                        data : {id:id},
                        success: function(data){
                                $('#ModalCalendar').modal('show');
                                $('#name').val(data.name);
                                $('#email').val(data.email);
                                $('#address').val(data.address);
                                console.log(data);
                        }
                        
                    });
                
            }
           
        });

    });
</script>