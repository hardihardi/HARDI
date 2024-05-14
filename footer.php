<footer class="footer">
                    © 2024 <span class="d-none d-sm-inline-block">- Universitas Pelita Bangsa</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            

        <!-- jQuery  -->
        <script src="http://localhost:8080/Hardi/assets/js/jquery.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/js/metisMenu.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/js/jquery.slimscroll.js"></script>
        <script src="http://localhost:8080/Hardi/assets/js/waves.min.js"></script>

        <script src="http://localhost:8080/Hardi/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="http://localhost:8080/Hardi/assets/plugins/peity/jquery.peity.min.js"></script>

        <script src="http://localhost:8080/Hardi/assets/plugins/morris/morris.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/raphael/raphael-min.js"></script>

        <script src="http://localhost:8080/Hardi/assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="http://localhost:8080/Hardi/assets/js/app.js"></script>

        <!-- Required datatable js -->
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/jszip.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="http://localhost:8080/Hardi/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="http://localhost:8080/Hardi/assets/pages/datatables.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

        <script>
            $('.alert_notif_logout').on('click',function(){ 
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "are you sure to logout?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "No"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>
    </body>

</html>