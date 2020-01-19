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
                <a href="/dagur" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($dagur as $dagurs)
                    <form method="post" action="/dagur/update/{{ $dagurs->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" value=" {{ $dagurs->nip }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control"  value=" {{ $dagurs->namaguru }}">
 
                         
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgllhr" class="form-control" value="{{ $dagurs->tgllhr }}">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="temlhr" class="form-control" value=" {{ $dagurs->temlhr }}">
 
                          
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" name="golongan" class="form-control"  value=" {{ $dagurs->golongan }}">
 
                       
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control">{{ $dagurs->alamat }}</textarea>
                       
 
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="text" name="foto" class="form-control" value=" {{ $dagurs->foto }}">
 
                    
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

