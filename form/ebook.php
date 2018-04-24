<div class="box box-danger box-solid no-border">
	<div class="box-header">
		<span class="box-title">Ebook</span>
	</div>
	<div class="box-body">

		<div class="row text-center">

			<!-- fungsi conver ukuran file -->
			<?php
				function bytes_converter($bytes) {
					$satuan= array('Bytes', 'KB', 'MB', 'GB', 'TB');
					$kali= floor(log($bytes, 1024));
					$bagi= round($bytes / pow(1024, $kali), 2);
					return $bagi.$satuan[$kali];
				}
			?>
			<!-- end -->

			<?php
				$query = mysqli_query($koneksi,("SELECT nama_file, ukuran_file, file, tipe_file FROM tb_ebook"));
				while($data = mysqli_fetch_array($query)){
			?>
			<div class="col-sm-4 col-xs-6">
				<div class="thumbnail">
				<div class="logo_free">.<?php echo $data[3]; ?></div>
				<img src="dist/img/ar4.png" width="140">
					<p><strong><?php echo $data[0]; ?></strong></p>
					<p><?php echo bytes_converter($data[1]); ?></p>
					<a href="admin/dashboard/<?php echo $data[2]; ?>" class="btn bg-olive btn-flat btn-block">download</a>
				</div>
			</div>
			<?php
				}
			?>
		</div>

	</div>
</div>

<div class="box no-border">
	<div class="box-body">
		<!-- disquss -->
		<div id="disqus_thread"></div>
		<script>
			(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//sharing-knowledge.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		<!-- end disquss -->
	</div>
</div>
