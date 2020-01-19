@extends('templates/default')
@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Data Kelas</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive card-body">
            <a href="/dakel" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dakel/store">
 
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label>ID Guru</label>
                            <input type="text" name="id_dagur" class="form-control" placeholder="ID Guru ..">
                        </div>
                        <div class="form-group">
                            <label>Kode Kelas</label>
                            <input type="text" name="kdkelas" class="form-control" placeholder="Kode Kelas ..">
                        </div>
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" name="namakls" class="form-control" placeholder="Nama Kelas ..">
                        </div>
                        <div class="form-group">
                            <label>Wali Kelas</label>
                            <input type="text" name="walikls" class="form-control" placeholder="Wali Kelas ..">
 
                            @if($errors->has('walikls'))
                                <div class="text-danger">
                                    {{ $errors->first('walikls')}}
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

