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
            <a href="/dakel" class="btn btn-round btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dakel/store">
 
                        {{ csrf_field() }}
                        
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">ID Guru</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="id_dagur" class="form-control" placeholder="ID Guru ..">
                            </div> 
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Kode Kelas</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="kdkelas" class="form-control" placeholder="Kode Kelas ..">
                            </div> 
                            
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Nama Kelas</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="namakls" class="form-control" placeholder="Nama Kelas ..">
                            </div> 
                            
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3">Wali Kelas</label>
                            <div class="col-md-9 col-sm-3  form-group has-feedback">
                                <input type="text" name="walikls" class="form-control" placeholder="Wali Kelas ..">
                            </div> 
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-round btn-success" value="Simpan">
                        </div>
 
                    </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

