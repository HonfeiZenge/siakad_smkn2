        </div>
        <!-- End of content Wrapper -->
    </div>
    <!-- end of navbar -->
    <script src="<?php echo base_url() ?>assets/js/jadwalPelajaran.js"></script>
    <script>
      const pilihGuru = document.getElementById('pilihGuru')
      const getSelected = document.querySelectorAll('input[name="selectGuru"]')
      const namaGuru = document.getElementById('nama_guru')
      const idGuru = document.getElementById('id_guru')
      console.log(namaGuru.value)
      console.log(idGuru.value)

      pilihGuru.addEventListener('click', () => {
        let selectedGuru = ''
        for (const selected of getSelected) {
          if (selected.checked) {
            selectedGuru = selected.value
          }
        }
        let indexGuru = selectedGuru.split(',')
        namaGuru.value = indexGuru[1]
        console.log(namaGuru.value)
        idGuru.value = indexGuru[0]
        console.log(idGuru.value)
      })
    </script>
	  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
  </body>
</html>