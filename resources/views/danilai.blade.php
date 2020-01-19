@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Nilai | <a href="/danilai/tambah" class="btn btn-outline-secondary btn-sm"> + Tambah Data Nilai</a></h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
          </p>
          
          <table id="datatable-responsive" class="table table-hover table-striped table-dark table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
               	<th>Kode Mapel</th>
				<th>NISN</th>
				<th>Nilai</th>
				<th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($danilai as $p)
				<tr>
					<td>{{ $p->kdmapel }}</td>
					<td>{{ $p->nisn }}</td>
					<td>{{ $p->nilai }}</td>
					<td>
						<a class="btn btn-info btn-sm" href="/danilai/edit/{{ $p->id }}">Edit</a>
						|
						<a class="btn btn-dark btn-sm" href="/danilai/hapus/{{ $p->id }}">Hapus</a>
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

