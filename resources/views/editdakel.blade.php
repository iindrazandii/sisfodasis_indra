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
                    <a href="/dakel" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($dakel as $dakels)
                    <form method="post" action="/dakel/update/{{ $dakels->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Kode Kelas</label>
                            <input type="text" name="kdkelas" class="form-control" value=" {{ $dakels->kdkelas }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" name="namakls" class="form-control" value=" {{ $dakels->namakls }}">
                        </div>
                        <div class="form-group">
                            <label>Wali Kelas</label>
                            <input type="text" name="walikls" class="form-control" value=" {{ $dakels->dagur->namaguru }}">
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

