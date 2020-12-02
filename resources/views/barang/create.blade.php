@extends('layouts')
@section('content')
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Data Barang</div>
					<div class="card-body">
						<form action="{{route('barang.store')}}" method="post">
							@csrf
						<div class="form-group">
							<label>Kode Barang</label>
							<input type="text" name="kode_barang" placeholder="Kode Barang" required class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" placeholder="Nama Barang" required class="form-control">
						</div>
						<div class="form-group">
							<label>Harga Jual</label>
							<input type="number" name="harga_jual" placeholder="1234567890" required class="form-control">
						</div>
						<div class="form-group">
							<label>Harga Beli</label>
							<input type="number" name="harga_beli" placeholder="1234567890" required class="form-control">
						</div>
						<div class="form-group">
							<label>Satuan</label>
							<select class="form-control" name="satuan" required>
								<option value="Pax">Pax</option>
								<option value="Unit">Unit</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select class="form-control" name="kategori" required>
								<option value="Buku">Buku</option>
								<option value="Pensil">Pensil</option>
								<option value="Solasi">Solasi</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
						</form>
					</div>
				</div>
			</div>

		</div>

@endsection