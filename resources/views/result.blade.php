@extends('layouts.app')

@section('content')
  <div class="content">
  <div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card shadow-sm border-0">
        <br><br><br>
        <div class="card-body">
          <div class="content" align="center">
                <strong> Resiko anda untuk tertular virus covid-19 </strong>
        </div>
        <br>
        <div class="content" align="center">
        @if($melihat->yes>-1 & $melihat->yes<8)        
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong id="status" name="resiko">Resiko Rendah</strong>
                  </div>
              </div>
        @elseif($melihat->yes>7 & $melihat->yes<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong id="status"  name="resiko"> Resiko Sedang</strong>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong id="status" name="resiko"> Resiko Tinggi</strong>
                  </div>
              </div>
        @endif
        <br><br><br>
        <a href="/dashboard" type="submit" class="btn btn-primary float-right btn-sm">KELUAR</a>
      </div>
    </div>
  </div>
</div>
@endsection

