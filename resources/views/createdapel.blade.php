@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Mapel</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
            <a href="/dapel" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dapel/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Kode Mapel</label>
                            <input type="text" name="kdmapel" class="form-control" placeholder="Kode Mapel ..">
 
                            @if($errors->has('kdmapel'))
                                <div class="text-danger">
                                    {{ $errors->first('kdmapel')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Mapel</label>
                            <input type="text" name="namamapel" class="form-control" placeholder="Nama Mapel ..">
 
                            @if($errors->has('namamapel'))
                                <div class="text-danger">
                                    {{ $errors->first('namamapel')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" placeholder="Nama Guru ..">
 
                            @if($errors->has('namaguru'))
                                <div class="text-danger">
                                    {{ $errors->first('namaguru')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

