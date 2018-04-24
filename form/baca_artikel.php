<?php 
	if (isset($_GET['artikel'])) {
		$id = $_GET['artikel'];

		$query = mysqli_query($koneksi,("SELECT a.judul, a.konten, a.foto, a.tanggal, b.nama 
										 FROM tb_berita AS a
										 INNER JOIN tb_user AS b USING(id_user)
										 WHERE slug = '$id'"));
		$data = mysqli_fetch_array($query);
	}
?>
<div class="box box-danger box-solid no-border">
	<div class="box-header">
		<i class="fa fa-tag"></i>
		<span class="box-title"><b><?php echo $data[0]; ?></b></span>
	</div>
	<div class="box-body">
		<a class="fancybox" href="/sharing-ilmu/admin/dashboard/<?php echo $data[2]; ?>">
			<img src="/sharing-ilmu/admin/dashboard/<?php echo $data[2]; ?>" class="img_berita">
		</a>
		<div class="btn bg-olive btn-flat" style="margin-bottom:10px;"><?php echo $data[3]; ?></div><br>
		<div class="btn bg-olive btn-flat" style="margin-bottom:10px;">Posted by : <?php echo $data[4]; ?></div><br>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox"></div>
		<!-- end button share -->
		<p align="justify"><?php echo $data[1]; ?></p>
		<div style="clear:both;border-bottom:3px solid #F4F4F4;margin-bottom:5px;"></div>
		<div style="clear:both;"></div>
		<a class="btn bg-olive btn-flat" style="margin-top:5px;" href="javascript:history.back()"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
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