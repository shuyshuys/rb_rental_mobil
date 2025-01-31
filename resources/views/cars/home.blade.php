<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{App\Setting::where('slug','nama-toko')->get()->first()->description}} | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('depan') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('depan') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('depan') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('depan') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('depan') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{ asset('depan') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('depan') }}/css/style.css">
   
    


  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">{{App\Setting::where('slug','nama-toko')->get()->first()->description}}</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('depan.home')}}" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="{{route('depan.about')}}" class="nav-link">Tentang</a></li>
	          <li class="nav-item"><a href="{{route('depan.services')}}" class="nav-link">Jasa</a></li>
	          <li class="nav-item"><a href="{{route('depan.contact')}}" class="nav-link">Kontak</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('depan') }}/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">{{App\Setting::where('slug','nama-toko')->get()->first()->description}}</h1>
	            <p style="font-size: 18px;">{{App\Setting::where('name','Banner')->get()->first()->description}}</p>
	            
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div style="position:relative; left:182px;">
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Cara Lebih Baik untuk Menyewa Mobil Sesuai Kebutuhan</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Tentukan Lokasi Anda</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Lakukan Pemesanan dan Dapatkan Penawaran Terbaik</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Sewa Mobil Sesuai Kebutuhan Anda</h3>
                          <br><br>

					              </div>
                        
					            </div> 
                         
					          </div>
                    
                    <button type="submit" class="btn btn-secondary py-3 px-5 d-flex align-items-center mx-auto" ><a class="text-white" href="https://wa.me/089694527599">Sewa Mobil Sekarang</a></button>  
					        </div>
					        
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>

    <!--Mobil-->
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Mobil Yang Tersedia</span>
            <h2 class="mb-2">Pilih Mobil Sesuai Kebutuhan Anda</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url({{asset('depan')}}/images/innova.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Kijang Innova 2023</a></h2><br>
		    						<div class="d-flex mb-3">
			    						<span class="cat btn btn-secondary py-2 ml-0">Tersedia</span>
			    						<p class="price ml-auto">Rp 500.000 <span>/hari</span></p>
		    						</div>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url({{asset('depan')}}/images/veloz.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Veloz 2023</a></h2><br>
		    						<div class="d-flex mb-3">
										<span class="cat btn btn-secondary py-2 ml-0">Tersedia</span>
			    						<p class="price ml-auto">Rp 400.000 <span>/hari</span></p>
		    						</div>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url({{asset('depan')}}/images/rush.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Toyota Rush 2023</a></h2><br>
		    						<div class="d-flex mb-3">
										<span class="cat btn btn-secondary py-2 ml-0">Tersedia</span>
			    						<p class="price ml-auto">Rp 500.000 <span>/hari</span></p>
		    						</div>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url({{asset('depan')}}/images/fortuner.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Toyota Fortuner 2023</a></h2><br>
		    						<div class="d-flex mb-3">
										<span class="cat btn btn-secondary py-2 ml-0">Tersedia</span>
			    						<p class="price ml-auto">Rp 800.000 <span>/hari</span></p>
		    						</div>
		    						</div>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    
    <!--END Mobil-->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo"></a><span>{{App\Setting::where('slug','nama-toko')->get()->first()->description}}</span></h2>
              <p>{{App\Setting::where('name','Banner')->get()->first()->description}}</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a target="_blank" href="https://twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://instagram.com"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Dukungan Pelanggan</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Kartiasa ,Kec. Sambas, Sambas</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">089694527599</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">yusril.riandi16@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('depan') }}/js/jquery.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('depan') }}/js/popper.min.js"></script>
  <script src="{{ asset('depan') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('depan') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('depan') }}/js/aos.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('depan') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('depan') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('depan') }}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('depan') }}/js/google-map.js"></script>
  <script src="{{ asset('depan') }}/js/main.js"></script>
    
  </body>
</html>