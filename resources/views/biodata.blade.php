@extends('layouts.app')

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title>COVID-19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="content">
  <div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm border-0">
        <br>
        <div class="card-body">
          <div class="content" >
        <form action="{{ route('biodata.create') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
 	      <div class="form-group">
 			<div class="col s6 m6 no-margin">
 	      	<label> Nama </label>
 		   <input type="text" name="name" placeholder="nama"  class="form-control" id="name">
 	      </div>
 	       </div>
 	      <br>
 	     <div class="col s12 m12 no-margin">
            <label for="jk" class="black-text">Jenis Kelamin</label>
            <div class="input-field custom-input-field-1">
            <p>
                <label>
                <input name="jk" type="radio" value="M">
                <span>Laki-laki</span>
                </label>
                <label>
                <input name="jk" type="radio" value="F">
                <span>Perempuan</span>
                </label>
            </p>
            </div>
         </div>
         <div class="col s6 m6 no-margin">
                <label for="umur" class="black-text">Usia</label>
                <div class="input-field">
                <input type="text" name="umur" id="umur" value="">
                </div>
             </div>
             <br>
             <button type="submit" class="btn btn-primary float-right btn-sm">Kirim</button>
        </form>
 	  </div>
 	</div>
 </div>
</div>
</div>
 </div>


</body>
</html>
@endsection