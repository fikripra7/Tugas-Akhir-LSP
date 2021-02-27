    <!-- Bootstrap core JavaScript-->
    <script src="my-theme/vendor/jquery/jquery.min.js"></script>
    <script src="my-theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="my-theme/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="my-theme/vendor/chart.js/Chart.min.js"></script>
    <script src="my-theme/vendor/datatables/jquery.dataTables.js"></script>
    <script src="my-theme/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="my-theme/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="my-theme/js/demo/datatables-demo.js"></script>
    <script src="my-theme/js/demo/chart-area-demo.js"></script>

    <!-- Datatables plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
		    $('#datasiswa').DataTable( {
		        dom: 'Bfrtip',
                fixedColumns: true,
                rowReorder: true,
                colReorder: true,
                fixedHeader: true,
		        buttons: [
		            'copy', 'print',
                    {
                        extend: 'excel',
                        title: 'Data Siswa/Siswi Baru RA ATTAQWA 35 Bekasi'
                    },
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    }
		        ]
		    } );
		} );
    </script>