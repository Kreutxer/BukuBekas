<div class="container shadow-sm p-3 mb-4 bg-white rounded mt-4" style="width: 800px;">
	<!-- <?php var_dump($data['user']); ?> -->
	<p style="font-size: 30px;">Biodata</p>
	<form>
		<div class="form-group row mt-1">
			<label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" value="Nama User">
			</div>
		</div>
		<div class="form-group row mt-1">
			<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword" value="Password">
			</div>
		</div>
		<div class="form-group row mt-1">
			<label for="inputPassword" class="col-sm-2 col-form-label">No. Telp.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPassword" placeholder="Password">
			</div>
		</div>
	</form>
	<div class="d-flex flex-row-reverse mt-2">
		<button class="btn btn-primary">Simpan</button>
	</div>
</div>
<hr>
<div class="container shadow-sm p-3 mb-4 bg-white rounded mt-4" style="width: 800px;">
	<p style="font-size: 30px;">Buku</p>
	<form>
		<div class="form-group row mt-1">
			<label for="Judul" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Judul" placeholder="Judul Buku">
			</div>
		</div>
		<div class="form-group row mt-1">
			<label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
			<div class="col-sm-10">
				<input type="Text" class="form-control" id="inputDeskripsi" placeholder="Deskripsi">
			</div>
		</div>
		<div class="form-group row mt-1">
			<label for="inputGambar" class="col-sm-2 col-form-label">Cover</label>
			<div class="col-sm-10">
				<input type="file" class="form-control-file mt-2" id="inputGambar">
			</div>
		</div>
	</form>
	<div class="d-flex flex-row-reverse mt-2">
		<button class="btn btn-primary">Simpan</button>
	</div>
</div>
<div class="container justify-content-center shadow-sm p-3 mb-4 bg-white rounded mt-4" style="width: 800px;">
	<a href="">
		<button class="btn btn-success m-2" style="width: 760px;">Etalase Buku Anda</button>
	</a>
	<a href="">
		<button class="btn btn-danger m-2" style="width: 760px;">Back</button>
	</a>
</div>