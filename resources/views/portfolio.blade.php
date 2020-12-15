<!doctype html>
<html lang="en">

    <head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>NextTV</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('carousel/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('carousel/css/style.css')}}">   
        <link rel="stylesheet" href="{{asset('carousel/css/carousel.css')}}">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
		<!-- css carusel vuetify -->
		<!-- link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"-->
		<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
		
		<style>
			/*css de flechitas carousel de canales*/
			.carousel-control-prev-icon,
			.carousel-control-next-icon {
			height:25px;
			width: 25px;
			}
		</style>
	</head>
	


	<!--body style="background:#2E2E2E;"-->
		<body style="background:black;">

			<!-- Menu vertical -->
			<nav class="navbar navbar-dark fixed-top navbar-expand-md">
					<a class="navbar-brand" href="#">
						<img src="{{ asset('posters/NextTV_logo1.png')}}" width="160" class="d-inline-block align-top" alt="" loading="lazy">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border:solid #ff6600;">
						<span class="navbar-toggler-icon" ></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav" >
						<ul class="navbar-nav ml-auto">
							<li class="nav-item" >
								<a class="nav-link " href="{{url('portfolio')}}" style="color: #fa1616;"><i class="fas fa-tv"></i> &nbsp;  TV </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('logout')}}" style="color: #fa1616;"> <i class="fas fa-external-link-alt"></i> &nbsp;  Salir</a>
							</li>
						</ul>
					</div>
			</nav>


        <!-- Top content  Banner-->

		<div id="app">
				<v-main>
					<v-card class="mt-8 elevation-23" >
						<v-carousel cycle :interval="intervalo" height="400px" hide-delimiters :show-arrows=false height="100">
							<v-carousel-item 
									v-for="(imagen,i) in imagenes" 
									:key="i"
									:src="imagen.src"
									>	
								</v-carousel-item>

						</v-carousel>
					</v-card>
				</v-main>
		</div>

<!--Fin de banner-->


		<!--Carouseles de canales segun categoria-->
		<div class="container-fluid">

			{{--Proceso para la creacion de carouselesdinamicos--}}


			
            
        
				<div class="row mx-auto my-auto">
					<h3 style="color: #fa1616; font-weight: bold;"><strong></strong></h3>
				</div>  

				{{--Paso 2 Creacion de carousel canales--}}
				<div id="" class="carousel slide"  data-interval="false" data-ride="carousel" >
					<div class="carousel-inner row w-100 mx-auto" role="listbox">
					
						{{--Paso 3 Recorrer canales--}}
					
							
							
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active" > 
										<a href="" class="btn"  name="url" >
										<img src="" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
										</a>
										
									</div>
									
								
								
								
									
								{{--Paso Creacion de items (Canales)--}}
								<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
									<a href="" class="btn"  name="url">
									<img src="" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150px;">
									</a>
								</div>
						
							 
							
					
					</div>
					<a class="carousel-control-prev" href="#" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true" style=""></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		

			<div class="row mx-auto my-auto">
				<h3 style="color: #fa1616;"><strong>Plataformas Digitales</strong></h3>
			</div> 
			<div id="carousel-platatormas_digitales"  class="carousel slide" data-interval="false" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto" >
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
						<a href="https://www.tntgo.tv/#!/envivo" class="btn"  name="url" >
							<img src="" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.netflix.com/sv/Login" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/Netflix.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.youtube.com/musicpremium" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/Youtube_Music.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.primevideo.com/region/na/?ref_=dvm_pds_amz_SV_kc_s_g|c_415541233605_m_KzX5K672-dc_s__" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/amazon_prime_video.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.youtube.com/?hl=es-419" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/YouTube.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.cartoonnetwork.es/juegos" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/CartoonNet Go.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.hbogola.com/landing" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/HBOGo.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
						<a href="https://www.foxplay.com/es-sv/" class="btn"  name="url" >
							<img src="{{ asset('posters/plataformas/FoxPlay.png')}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;">
						</a>
					</div>
				
				</div>
				<a class="carousel-control-prev" href="#carousel-platatormas_digitales" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-platatormas_digitales" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		</div>
<br><br>	







<style>
	 {
	  box-sizing: border-box;
	}
	
	.carousel-item {
	  padding: 50px;
	  
	  transition: transform .15s;
	  width: 200px;
	  height: 200px;
	  margin: 0 auto;
	}
	
	.carousel-item:hover {
	  -ms-transform: scale(1.4); /* IE 9 */
	 -webkit-transform: scale(1.4); /* Safari 3-8 */
	  transform: scale(1.4); 
	}
	</style>

     {{--fOOTER--}}
		<div class="footer-bottom" style="background: black;">
			<center>
			<div class="container">
				<div class="row">
					<div class="col-md-3 footer-copyright">
					     &copy; Derechos reservados Instel 2020 <a href="https://beenet.com.sv"></a>
					</div>
					<div class="col-md-6 footer"><img src="{{ asset('posters/NextTV_logo1.png')}}" width="160" class="d-inline-block align-top" alt="" loading="lazy"></div>
					<div class="col-md-3 footer-social">
						<a href=""><i class="fab fa-facebook-f"></i></a> 
						<a href=""><i class="fab fa-instagram"></i></a> 
						<a href=""><i class="fab fa-tv"></i></a> 
						info@beenetplay.com
					</div>
				</div>
			</div>
		</center>
		</div>


        <!-- Javascript -->
			<script src="{{asset('carousel/js/jquery-3.3.1.min.js')}}"></script>
			<script src="{{asset('carousel/js/jquery-migrate-3.0.0.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
			<script src="{{asset('carousel/js/jquery.backstretch.min.js')}}"></script>
			<script src="{{asset('carousel/js/wow.min.js')}}"></script>
			<script src="{{asset('carousel/js/scripts.js')}}"></script>
				
			<!-- Vuetify -->
			<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>


			<script>
				//
				new Vue({
					el: '#app',
					vuetify: new Vuetify(),
					data(){
						return {
							intervalo: 6000, //Tiempo de espera entre cambio
							imagenes:[
								{src:'{{asset('posters/banner1.png')}}'},
								{src:'{{asset('posters/banner2.png')}}'},
								{src:'{{asset('posters/banner3.png')}}'},
								{src:'{{asset('posters/banner4.png')}}'},
								{src:'{{asset('posters/banner6.png')}}'},
								{src:'{{asset('posters/banner7.jpg')}}'},
								{src:'{{asset('posters/banner9.png')}}'},
								{src:'{{asset('posters/banner8.png')}}'},
								{src:'{{asset('posters/banner10.png')}}'}
								
							]
						}
					}
				})
			</script>
    </body>
</html>
