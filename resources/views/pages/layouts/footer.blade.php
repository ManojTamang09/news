  <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">

          </footer>
          <!-- ============================================================== -->
          <!-- End footer -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
      <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
      <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
      <!--Wave Effects -->
      <script src="{{asset('admin/dist/js/waves.js')}}"></script>
      <!--Menu sidebar -->
      <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
      <!--Custom JavaScript -->
      <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
      <!--This page JavaScript -->
      <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
      <!-- Charts js Files -->
      <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
      <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
      <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>
      <script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>

      <script>
        $("#zero_config").DataTable();
      </script>
        <script src="{{asset('admin/assets/libs/quill/dist/quill.min.js')}}"></script>
        <script>
          var quill = new Quill("#editor", {
            theme: "snow",
          });
        </script>
    </body>
  </html>
