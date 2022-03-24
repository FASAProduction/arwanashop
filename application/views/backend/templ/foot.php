<?php
			foreach($produk as $prrr){
			$produc = $prrr->id_produk;
			$raa = $this->db->query("SELECT * FROM pemesanan JOIN produk ON produk.id_produk=pemesanan.id_produk WHERE pemesanan.id_produk='$produc'")->result();
			$raas = $this->db->query("SELECT * FROM pemesanan JOIN produk ON produk.id_produk=pemesanan.id_produk WHERE pemesanan.id_produk='$produc'")->num_rows();
			}
			?>

</div>
      <footer class="main-footer">
        <div class="footer-left">
          <?php echo date('Y'); ?> Arwana Store. Allright Reserved.</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>komponen/backend/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>komponen/backend/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url(); ?>komponen/backend/assets/js/custom.js"></script>
  <script src="<?php echo base_url(); ?>komponen/backend/assets/bundles/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>komponen/backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>komponen/backend/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>komponen/backend/assets/js/page/datatables.js"></script>
  <script src="https://use.fontawesome.com/bb21722b54.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: [
          <?php
            if ($produka > 0) {
              foreach ($produk as $prr) {
                echo "'" .$prr->nama_produk ."',";
              }
            }
          ?>
        ],
				datasets: [{
					label: '',
					data: [
					<?php
					if ($raas > 0) {
					foreach ($raa as $data1) {
                    echo $data1->total . ", ";
					}
					}
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(80, 206, 86, 0.2)',
					'rgba(120, 220, 86, 0.2)',
					'rgba(200, 210, 86, 0.2)'
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>