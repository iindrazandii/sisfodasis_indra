@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Kelas | <a href="/dakel/tambah" class="btn btn-outline-secondary btn-sm"> + Tambah Data Kelas</a></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
          </p>
          
          <table id="datatable-responsive" class="table table-striped table-hover table-dark table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
               	<th>ID Guru</th>
				<th>Kode Kelas</th>
				<th>Nama Kelas</th>
				<th>Wali Kelas</th>
				<th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($dakel as $p)
				<tr>
					<td>{{ $p->dagur->id }}</td>
					<td>{{ $p->kdkelas }}</td>
					<td>{{ $p->namakls }}</td>
					<td>{{ $p->dagur->namaguru }}</td>
					<td>
						<a class="btn btn-info btn-sm" href="/dakel/edit/{{ $p->id }}">Edit</a>
						|
						<a class="btn btn-dark btn-sm" href="/dakel/hapus/{{ $p->id }}">Hapus</a>
					</td>
				</tr>
				@endforeach                      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

