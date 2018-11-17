
<!DOCTYPE html>


<html>

<head>


	<title>inicio</title>


	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="zoolandia Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> Zoolandia <span class="desc"> zoologico </span></a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav navbar-right">
							

						</ul>
						<ul class="nav navbar-nav">

							

							<li class="active"><a href="inicio">Inicio</a></li>
							<li><a href="acerca">Acerca de</a></li>

							<li><a href="portafolio">Portafolio</a></li>
							<li><a href="contacto">Contacto</a></li>
							
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
  <!-- banner -->
  
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                




	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3> zoologico </h3>
						<p>animales salvajes</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="https://leyendas.gob.pe/">animales</a>
							</div>
							<div class="bnr-button">
								<a href="https://leyendas.gob.pe/" class="two scroll ">plantas</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3> zoologico </h3>
						<p>animales salvajes</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="https://leyendas.gob.pe/">animales</a>
							</div>
							<div class="bnr-button">
								<a href="https://leyendas.gob.pe/" class="two scroll ">plantas</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3> zoologico </h3>
						<p>animales salvajes</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="https://leyendas.gob.pe/">animales</a>
							</div>
							<div class="bnr-button">
								<a href="https://leyendas.gob.pe/" class="two scroll ">plantas</a>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3> zoologico </h3>
						<p>animales salvajes</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="https://leyendas.gob.pe/">animales</a>
							</div>
							<div class="bnr-button">
								<a href="https://leyendas.gob.pe/" class="two scroll ">plantas</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">

			
			<h3 class="tittle-w3ls">zoologico</h3>

			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">


						<img src="images/carol.jpg" alt=" " class="img-responsive">

					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>El mejor Zoologico Huancayo</h4>
						<p>Uno de los mejores Zoologicos de huancayo .</p>
						<p>El mas visitado por los turitas</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="" role="button">ingresar </a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="news-main">
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-laptop" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4> En linea </h4>
								<p> podra observas todos los animales en  nuetra pagina</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-pencil-square-o" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4>ubicacion</h4>
								<p>podras ubicarnos en el centro de huancayo N°413.</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-newspaper-o" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4> Prioridad</h4>
								<p>El mejor establecimiento para los animales .</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//ab-->
	<!--/what-->
	<div class="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">ZOOLANDIA</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-shield" aria-hidden="true"></span>
						<h3>TURISTICOS</h3>
						<p>El Zoológico ZOOLANDIA está listo para recibir a grupos de excursionistas y agencias de viajes, ya que, además de ser una experiencia divertida el recorrer uno de los parques más importantes en peru, su visita les permite estar en contacto con la naturaleza y con especies de animales de los 5 continentes en un mismo sitio.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<h3>CAMPAMENTOS NOCTURNOS</h3>
						<p>Si te agradan los animales y deseas observarlos de una manera diferente a tu visita convencional al zoológico, los CAMPAMENTOS NOCTURNOS pueden ser tu mejor opción. Puedes organizar a tu grupo de amigos o de compañeros de tu escuela y pasar una experiencia inolvidable.

						En nuestros campamentos comprobarás que: ¡no todo es como parece!: </p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-star" aria-hidden="true"></span>
						<h3>EVENTOS ESPECIALES</h3>
						<p>¿Quieres celebrar de una manera diferente? El Zoológico  te dice como:

						Invita a tu pareja a una cena romántica en las locaciones especiales que tenemos para ti, haremos de tu idea un evento inolvidable.
						Celebra tu aniversario o el de tus papás, o haz una cena exclusiva para tus amigos más cercanos.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<h3>PAQUETES ESTUDIANTES</h3>
						<p>Nos gustaría invitarle a conocer y utilizar los servicios educativos preparados especialmente para grupos escolares. Hemos diseñado un paquete en el cual podrán hacer uso de todos los servicios con los que cuenta el zoológico, además de enriquecer su visita con el programa de atención escolar, este ofrece distintas opciones para que elijan y programen su visita según sus propios intereses tomando en cuenta que contamos con platicas elaboradas de acuerdo al nivel escolar que va desde preescolar hasta universidad.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
	<div class="banner_bottom">
		<div class="banner_bottom_in">
			<h3 class="tittle-w3ls we">"ZOOLANDIA" LA MEJOR EXPERIENCIA QUE VIVIRAS EN LA NATURALEZA.</h3>

			<p>Visitanos y vive una experiencia inolvidable nuestras puertas estan abiertas los 7 dias alas semana .</p>


			<img src="images/ww.jpg" class="img-responsive" alt="">
		</div>
	</div>
	<!--//banner_bottom-->
	<!--/projects-->
	<div class="banner_bottom proj">
		<div class="wrap_view">
			<h3 class="tittle-w3ls">ZOOLANDIA</h3>
			<div class="inner_sec">
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">TODOS ANIMALES</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Animales 1</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Animales 2</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Animales3</a>
					</li>
					<li class="cat-item-4">
						<a href="#" title="Category 4">Animales4</a>
					</li>
				</ul>


				<ul class="portfolio-area">

					<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block img-hover">
							<a class="image-zoom" href="images/g1.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
							
									<img src="images/3.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>OSO PANDA</h5>
											<p>El oso panda es un animal solitario. Tiene mayor actividad durante las puestas de sol y suele delimitar su territorio con orina, olores y marcas de garras; así evitan enfrentamientos entre ellos.
											A diferencia de otros osos, el panda gigante no hiberna pero sí desciende a elevaciones más bajas durante el frío invierno en busca de temperaturas más altas. En esa época busca cuevas, árboles huecos y grietas donde puede mantenerse caliente.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g2.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
								
									<img src="images/4.jpg" class="img-responsive" alt="Conceit">
								<div class="port-info">
											<h5>GORILA</h5>
											<p>Lo impresionante de su dieta alimenticia es que aunque pasen la mayor parte de su tiempo comiendo y descansando, y dependiendo de las zonas en donde convivan estos pueden inclinarse o por las hojas, las frutas e incluso hasta algunos insectos como las termitas.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g3.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
							
									<img src="images/8.jpg" class="img-responsive" alt="Conceit">
								<div class="port-info">
											<h5>ELEFANTE</h5>
											<p>Los elefantes son considerados uno de los animales más grandes de tierra, estos son capaces de medir entre 10 y 12 pies de altura, su peso al nacer puede ser hasta de 120 kilos y su vida útil se encuentra entre los 50 y 70 años de edad, suelen consumir grandes cantidades de comida donde incluyen raíces, vegetaciones, cortezas, árboles y hojas.
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g4.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
								
									<img src="images/10.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>TIGRE</h5>
											<p>El tigre es el felino más grande del mundo, con un crecimiento de alrededor de 2.5 metros de longitud. Es el más poderoso de todos los grandes felinos y es nativo del este y el sur de Asia. El tigre es temido por la mayoría de los seres humanos que habitan los asentamientos en el territorio de este animal,Puede alcanzar velocidades de hasta 90 km por hora, por lo que es extremadamente rápido. Incluso se han conocido por entrar en conflicto con los rinocerontes y los elefantes con el tigre generalmente como ganador.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/6.jpg" width="100" height="100"  rel="prettyPhoto[gallery]">
								
									<img src="images/6.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>TIGRILLO</h5>
											<p>Al parecer se distinguen por su pelo y por las huellas de sus patas. Expertos mexicanos aseguran que la cola del ocelote es más corta, y que el tamaño de su cuerpo en mucho mayor que el del tigrillo. El ocelote puede medir 1.5 metros y pesar unos 20 kilos, Hay una variación en el patrón de sus manchas y en la tonalidad del cuerpo que marca la diferencia.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/7.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
								
									<img src="images/7.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>HIPOPOTAMO</h5>
											<p>que están en tierra.Puesto que el hipopótamo es una criatura muy grande, a menudo las personas piensan que consumen carne, cuando son  animales herbívoros,principal fuente de alimento, o sea, lo que come el hipopótamo es el pasto corto. Pasan cinco o más horas de pastoreo cada noche y para conseguir el alimento caminan hasta cinco kilómetros. Pueden consumir hasta 150 libras de alimento por día.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/tukan.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
							
									<img src="images/tukan.jpg" class="img-responsive" alt="Conceit">
								      <div class="port-info">
											<h5>TUKAN</h5>
											<p>Los tucanes son aves de la familia Ramphastide, que engloba a cerca de 42 especies. Son fácilmente reconocibles por características peculiares, tales como son su pico largo y colorido y su plumaje negro. Según la especie, oscilan entre los 29 y 63 centímetros de largo y no suelen llegar al kilo de peso,La base de su alimentación está formada por frutos, bayas e insectos y, en ocasiones, también por animales más grandes, como lagartos, e incluso huevos y pichones de otras especies de aves.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g8.jpg" width="100" height="100" rel="prettyPhoto[gallery]">
								
									<img src="images/11.jpg" class="img-responsive" alt="Conceit">
										<div class="port-info">
											<h5>FOCA MARINA</h5>
											<p>Lo más resaltante de las focas es que las mismas cuentan con más de 19 especies diferentes, habitando las costas de gran parte del mundo y siendo conocidas por su prominente porte y figura tan característica,La alimentación de la foca, al ser esta un animal mamífero, puede llegar a ser muy variada y hasta extravagante. Prácticamente, cualquier clase de pez y marisco puede ser fácilmente engullida por las focas.</p>
										</div>
							
							</a>
						</span>
						</div>
					</li>

					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->

			</div>

		</div>
	</div>

	<!--//projects-->
	<!--/blog-->
	<div class="blog_sec">
		<h3 class="tittle-w3ls">FECHAS IMPORTANTES</h3>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>nov.05.2018</h4>

					</div>
					<h6><a href="single.html">Dia del gorila</a></h6>
					<p class="paragraph">se les permite fotos cerca del nuetro gorila por ser su dia especial.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">ver</a>
				</div>
				<div class="banner-btm-inner a2">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a3">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>nov.28.2018</h4>

					</div>
					<h6><a href="single.html">dia de nuestro leon</a></h6>
					<p class="paragraph">junto a ti celebrarempos el dia de nuestro Leon Alex.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Ver</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>dic.02.2018</h4>

					</div>
					<h6><a href="single.html">Dia del Lobo Marino</a></h6>
					<p class="paragraph">Dia dond everas numeros de lobos marinos pas auna tarde divertida apartir de las 4:pmS</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Ver</a>
				</div>
				<div class="banner-btm-inner a5">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a6">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>dic.05.2018</h4>

					</div>
					<h6><a href="single.html">dia de los animales salvajes</a></h6>
					<p class="paragraph">fecha donde podra vivir entretenidos numeros respesto a nuestros nimales salvajes.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Ver</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<!--//blog-->
	<!--/bottom-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">ZOLANDIA
			</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_left">
						<h4>se creo este zologico con la finalidad de brindar a su público satisfacción de pasar un día en familia o amigos para que se entretengan visitando los habitad y de la variedad de animales domesticos exoticos marinos salvajes, etc que tenemos.

						</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Ver </a>
						</div>


					</div>

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/5.jpg" alt="#" class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//bottom-->
	<!--/testimonials-->
	<div class="tesimonials">
		<div class="container">
			<h3 class="tittle-w3ls cen">Nuestros Colaboradores </h3>
			<div class="inner_sec">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/pompi.jpg" class="img-responsive" alt="">

											</div>
											<div class="col-sm-9 test_img_info">
												<p>hermoso lugar donde me diverti con mi familia se siente un habitad perfecto para los animales</p>
												<h6>Angela Pompi</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/carol1.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>la parte mas hermosa del zoologico fue el lugar de los hipopotamos les recomiendo visitar zoolandia.</p>
												<h6>Carol Yohana</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/juanita.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>los monos fueron muy graciosos espero volver pronto a zoolandia</p>
												<h6>Juanita Silvestre</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//testimonials-->

	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">
		<div class="col-sm-6 newsleft">
			<h3>correo electronico !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="ttps://www.facebook.com/pompaquispe.angelajackeline" method="post">
				<input type="email" placeholder="Enter your email..." name="email" >
				<input type="submit" value="enviar">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> concetra </a></h2>
				<p>nuestro zoologico ofrece la mejor experiencia con tu familia, amigos etc.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/pompaquispe.angelajackeline" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>nuestra <span>Informacion</span> </h4>
						<ul>
							<li><a href="index.html">Acerca de </a></li>
							<li><a href="about.html">busqueda</a></li>
							<li><a href="404.html">Servicios</a></li>
							<li><a href="signin.html">registro</a></li>
							<li><a href="contact.html">Contacto</a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>nuestros <span>animales</span></h4>
						<ul>
							<li><a href="single.html"><img src="images/1.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/2.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/3.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/4.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/5.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/6.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/7.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/8.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/g4.jpg" width="100" height="100" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="col-md-5 sign-gd-two">
						<h4>Contacto<span>Información</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Cel</h6>
									<p>963334899</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">Conce
									<h6>Correo</h6>
									<p>Facebook :<a href="https://www.facebook.com/pompaquispe.angelajackeline"> jackelinepompaquispe@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Localización</h6>
									<p>Av.san carlos N°413

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2018 Conceit. Todos los derechos reservados | <a href="#">POMPI</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>



      

    