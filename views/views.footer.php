<?php
defined('ACCESS') OR exit('No direct script access allowed');
?>
    <!-- jQuery 2.2.3 -->
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?= $var->sistemApp->site_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= $var->sistemApp->site_url() ?>/assets/js/app.min.js"></script>
    <!-- Select2 -->
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/select2/select2.full.min.js"></script>
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/moment/moment.js"></script>
    <script src="<?= $var->sistemApp->site_url() ?>/assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rekap-nilai').dataTable({
                "sScrollX": "100%",
                "sScrollXInner": "100%",
                "bScrollCollapse": true
            });
            $('.lihat-nilai').dataTable({
                "sScrollX": "100%",
                "sScrollXInner": "100%",
                "bScrollCollapse": true
            });
        });

    </script>
    <script type="text/javascript">
        $(function() {
            $('.timepicker').datetimepicker({
                format: 'H:mm'
            });
        });

    </script>
    <script type="text/javascript">
        $(function() {
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".selection").select2();
        });

    </script>
    <script src="<?= $var->sistemApp->site_url() ?>/assets/js/ajax.js"></script>
    <script>
        
        $(function() {
            var viewer;
            var element = $('#viewer');
            viewer = new PDFViewer(element);
        });
    </script>
    
    
    <!-- CKeditor -->
    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">


    </script>
    <script>
        $("textarea").each(function() {
            CKEDITOR.replace(this, {
                extraPlugins: 'mathjax',
                mathJaxLib: 'http://cdn.mathjax.org/mathjax/2.6-latest/MathJax.js?config=TeX-AMS_HTML',
                height: 320
            });
        });

    </script>
