
<script src="{{ asset('../assets/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../assets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('../assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('../assets/js/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('../assets/js/moment.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('../assets/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('../assets/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('../assets/js/bootstrap-notify.js') }}"></script>
<!--   Sharrre Library    -->
<script src="{{ asset('../assets/js/jquery.sharrre.js') }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset('../assets/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset('../assets/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset('../assets/js/nouislider.min.js') }}"></script>
<!-- Select Plugin -->
<script src="{{ asset('../assets/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset('../assets/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('../assets/js/sweetalert2.js') }}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('../assets/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('../assets/js/fullcalendar.min.js') }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset('../assets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('../assets/js/material-dashboard.js') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('../assets/js/demo.js') }}"></script>

<script>
$(document).ready(function() {
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [7, 10, 50, -1],
            [7, 10, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });

    $('.card .material-datatables label').addClass('form-group');
});
</script>
