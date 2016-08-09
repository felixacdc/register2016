@if( count($errors) > 0 )
    <script type="text/javascript">
        var errors = <?php echo json_encode($errors->all()) ?>;
    </script>
@endif

@if( Session::has('error') )
    <script type="text/javascript">
        var error = '<?php echo Session::get('error'); ?>';
    </script>
@endif

@if( Session::has('success') )
    <script type="text/javascript">
        var success = '<?php echo Session::get('success'); ?>';
    </script>
@endif
