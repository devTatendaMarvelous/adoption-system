 

<script type="text/javascript" src="{{asset('datatable/datatablejQueryMin.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/buttondatatablejQueryMin.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/pdf.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/pdf2.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/html5buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/print.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/dataTable.swf')}}"></script>

<script>
        $(document).ready( function () {
            $('#example').DataTable( {

                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Export to excel',
                        className: 'btn btn-default btn-xs'
                    },
                    {
                        extend: 'print',
                        text: 'Send to Print',
                        className: 'btn btn-default btn-xs'
                    }
                ]
            } );
        } );

    </script>

    <style>
        .dataTables_filter input {
            width: 300px ;
            height:40px ;
            font-size:20px;
            border:1px solid}

        .dataTables_wrapper .dataTables_filter {
            text-align:center;

        }
        #example {
            /*text-transform: uppercase;*/
            font-size: 13px;

        }