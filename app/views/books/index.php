<div class="container">

	<?php $id_bf = 0; ?>
	<?php foreach ($data['buku'] as $b): ?>
		<div class="height d-flex justify-content-center align-items-center">
			<div class="container mt-5 mb-5">
				<div class="d-flex justify-content-center row">
					<div class="col-md-10">
						<div class="row p-2 bg-white border rounded">
							<div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
									src="<?= BASEURL; ?>/img/<?= $b['cover']; ?>"></div>
							<div class="col-md-6 mt-1">
								<h5>
									<?= $b['judul']; ?>
								</h5>
								<p class="text-justify para mb-0">
									<?= $b['deskripsi']; ?><br><br>
								</p>
								<a href="<?= BASEURL; ?>/books/author/<?= $b['id_user']; ?>" style="text-decoration: none;">
									<?= $b['nama']; ?>
								</a>
							</div>
							<div class="align-items-center align-content-center col-md-3 border-left mt-1">
								<div class="d-flex flex-row align-items-center">
									<h4 class="mr-1">Rp.
										<?= number_format($b['harga'], 2); ?>
									</h4>
								</div>

								<h6 class="text-success">Cash on Delivery</h6>
								<div class="d-flex flex-column mt-4">
									<button type="button" class="btn btn-primary btn-sm" id="detail" data-idbuku="<?= $b['id_buku']; ?>"
										data-iduser="<?= $b['id_user']; ?>" data-judul="<?= $b['judul']; ?>"
										data-harga="<?= $b['harga']; ?>" data-no="<?= $b['no_telp']; ?>"
										data-deskripsi="<?= $b['deskripsi']; ?>" data-cover="<?= $b['cover']; ?>"
										data-nama="<?= $b['nama']; ?>" data-bukufav="<?= $id_bf; ?>">
										Lihat Detail
									</button>
								</div>
								<div class="d-flex flex-column mt-1">
									<button class="btn btn-light btn-sm" style="background-color: rgb(37,211,102); ">
										<a href="https://api.whatsapp.com/send?phone=62<?= $b['no_telp']; ?>"
											style="color: white; text-decoration: none;" target="blank">Chat Ke
											WA
										</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>


<!-- Modal Box Detail -->
<div class="modal modal-xl" tabindex="-1" id="modal-detail">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Buku</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<div class="container ">
					<img src="<?= BASEURL; ?>/img/<?= $b['cover']; ?>" alt="" class="img-fluid" id="cover">
				</div>

				<div class="penjual" id="penjual">
					<a href="" style="text-decoration: none;">
						<h4></h4>
					</a>
				</div>
				<img src="" alt="">
				<div class="input-group flex-nowrap mt-2 mb-2">
					<input type="text" class="form-control" id="judul" name="judul" placeholder="<?= $b['judul']; ?>" readonly>
				</div>
				<div class="input-group flex-nowrap mt-2 mb-2">
					<h5>
						Rp.
						<?= number_format($b['harga'], 2); ?>
					</h5>
				</div>
				<div>
					<p>
						<?= $b['deskripsi']; ?>
					</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button class="btn btn-light" id="no" style="background-color: rgb(37,211,102); ">
					<a href="" style="color: white; text-decoration: none;" target="blank">Chat Ke WA</a>
				</button>
				<button class="btn btn-outline-primary" id="favorite" style="<?php if (!isset($_SESSION['login'])) {
					echo "display: none;";
				} ?>">
					<a href="" style="color:black; text-decoration: none; text-shadow: 1px 1px 1px 1px;">
						Tambah Ke Favorite
					</a>
				</button>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal Box Tambah -->
<div class="modal modal-lg" tabindex="-1" id="modal-tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Buku</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= BASEURL; ?>/books/tambah" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<h3>Buku Aldi</h3> <!-- ganti dengan nama usernya -->
					<input type="hidden" class="form-control" id="id-user" value="<?= $_SESSION['id_user']; ?>"
						name="id">
					<div class="col-md-6">
						<label for="judul" class="form-label">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" required>
					</div>
					<div class="col-md-6">
						<label for="harga" class="form-label">Harga</label>
						<input type="number" class="form-control" id="harga" name="harga" required>
					</div>
					<div class="mb-3">
						<label for="cover" class="form-label">Pilih Cover</label>
						<input class="form-control form-control-sm" id="formFileSm" type="file" name="gambar" required>
					</div>
					<div class="form-floating">
						<textarea class="form-control" id="deskripsi" style="height: 100px" name="deskripsi"
							required></textarea>
						<label for="deskripsi">Deskripsi</label>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Box Favorite (TIDAK TERPAKAI) -->
<div class="modal modal-xl" tabindex="-1" id="modal-favorite">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Buku Ke Favorite</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<img src="" alt="" id="cover"><br><br><br>
				<div class="penjual" id="penjual">
					<a href="" style="text-decoration: none;">
						<h4></h4>
					</a>
				</div><br>
				<input type="hidden" class="form-control" id="id-buku" name="id-buku">
				<input type="hidden" class="form-control" id="id-user" name="id-user">
				<div class="input-group flex-nowrap mt-2 mb-2">
					<span class="input-group-text" id="addon-wrapping">Judul : </span>
					<input type="text" class="form-control" id="judul" name="judul" readonly>
				</div>
				<div class="input-group flex-nowrap mt-2 mb-2">
					<span class="input-group-text" id="addon-wrapping">harga : </span>
					<input type="text" class="form-control" id="harga" name="harga" readonly>
				</div>
				<div>
					<label for="deskripsi">Deskripsi :</label>
					<textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px"
						readonly></textarea>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button class="btn btn-light" id="no" style="background-color: rgb(37,211,102); ">
					<a href="" style="color: white; text-decoration: none;" target="blank">Chat Ke WA</a>
				</button>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
	$(document).on("click", "#detail", function () {
		$('.modal-footer #favorite').show();
		const idB = $(this).data('idbuku');
		const idU = $(this).data('iduser');
		const judul = $(this).data('judul');
		const harga = $(this).data('harga');
		const no = $(this).data('no').slice(1);
		const deskripsi = $(this).data('deskripsi');
		const cover = $(this).data('cover');
		const nama = $(this).data('nama');
		const favorite = $(this).data('favorite');

		const idBF = $(this).data('bukufav');

		console.log(idBF);
		if (idBF === idB) {
			$('.modal-footer #favorite').hide();
		}
		$('.modal-footer #favorite a').attr('href', '<?= BASEURL; ?>/Books/favorite/'+i                                         d B);
		$('.modal-body #id-buku').val(idB);
		$('.modal-body #id-user').val(idU);
		$('.modal-body #penjual a h4').text(nama);
		$('.modal-body #penjual a').attr("href", '<?= BASEURL; ?>/Books/author/'+i                                         d U);
		$('.modal-body #judul').val(judul);
		$('.modal-body #harga').val('Rp.' + harga);
		$('.modal-body #judul').val(judul);
		$('.modal-body #deskripsi').val(deskripsi);
		$('.modal-body #cover').attr("src", '<?= BASEURL; ?>/img/' + c                       o ver);
		$('.modal-footer #no a').attr("href", 'https://api.whatsapp.com/send?phone=62' + no);
		
	});
});

</script>