@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Siswa</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
                    <a href="/dapel" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($dapel as $dapels)
                    <form method="post" action="/dapel/update/{{ $dapels->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Kode Mapel</label>
                            <input type="text" name="kdmapel" class="form-control" value=" {{ $dapels->kdmapel }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mapel</label>
                            <input type="text" name="namamapel" class="form-control" value=" {{ $dapels->namamapel }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" value=" {{ $dapels->namaguru }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                    @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

