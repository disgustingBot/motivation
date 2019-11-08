<?php get_header(); ?>

<section class="hero" id="hero" data-target="hHome">
  <video class="heroBackground sup1" autoplay loop muted playsinline><source src="<?php echo get_template_directory_uri(); ?>/videos/background-city.mp4"></video>
  <h1 class="heroTitle sup1 title">Keep
    <span class="typewrite" data-period="4000" data-type='[ "creating", "working", "trusting", "growing" ]'></span>
  </h1>
</section>


<?php while(have_posts()){the_post();the_content();} ?>

<section class="nosotros" id="nosotros" data-target="hNosotros">
  <img class="nosotrosBG" src="<?php echo get_template_directory_uri(); ?>/img/KD_01.jpg" alt="">
  <img class="nosotrosLogo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
  <p class="nosotrosTxt">
    Somos de poner <span class="specialTxt">pocos límites</span><br>
    y buscar la mejor forma de producir una idea.<br>
    Nos gusta lo que hacemos, <span class="specialTxt">nos implicamos al máximo‍</span><br>
    y damos valor añadido a tu proyecto.
  </p>
  <img class="nosotrosIso" src="<?php echo get_template_directory_uri(); ?>/img/iso.png" alt="">
</section>

<section class="servicios" id="servicios" data-target="hServicios">
  <h3 class="serviciosTitle title">Keep
    <span class="typewrite" data-period="4000" data-type='[ "creating" ]'></span>
  </h3>
  <ul class="serviciosList grColumnMC">
    <li>
      <figure>
        <img src="" alt="">
        <figcaption>
          <h6 class="serviciosListTitle">DISEÑO</h6>
          <p class="serviciosListTxt">
            DISEÑO GRÁFICO<br>
            MAQUETACIÓN 3D
          </p>
        </figcaption>
      </figure>
    </li>
    <li>
      <figure>
        <img src="" alt="">
        <figcaption>
          <h6 class="serviciosListTitle">IMPRESIÓN</h6>
          <p class="serviciosListTxt">
            OFFSET/DIGITAL<br>
            PACKAGING<br>
            MERCHANDISING
          </p>
        </figcaption>
      </figure>
    </li>
    <li>
      <figure>
        <img src="" alt="">
        <figcaption>
          <h6 class="serviciosListTitle">EVENTOS</h6>
          <p class="serviciosListTxt">
            STANDS & FERIAS<br>
            ACCIONES ESPECIALES
          </p>
        </figcaption>
      </figure>
    </li>
    <li>
      <figure>
        <img src="" alt="">
        <figcaption>
          <h6 class="serviciosListTitle">AUDIOVISUAL</h6>
          <p class="serviciosListTxt">
            REALIZACIÓN<br>
            POSTPRODUCCIÓN<br>
            EDICIÓN
          </p>
        </figcaption>
      </figure>
    </li>
    <li>
      <figure>
        <img src="" alt="">
        <figcaption>
          <h6 class="serviciosListTitle">DIGITAL</h6>
          <p class="serviciosListTxt">
            WEB<br>
            REDES SOCIALES
          </p>
        </figcaption>
      </figure>
    </li>
  </ul>
  <img class="nosotrosIso" src="<?php echo get_template_directory_uri(); ?>/img/isoG.png" alt="">
</section>

<section class="proyectos" id="proyectos" data-target="hProyectos">

  <h3 class="serviciosTitle title">Keep
    <span class="typewrite" data-period="4000" data-type='[ "creating" ]'></span>
  </h3>

  <ul class="filter grColumnMC">
    <li class="filterItem">
      <p>TODOS</p>
    </li>
    <li class="filterItem">
      <p>IMPRESIÓN</p>
    </li>
    <li class="filterItem">
      <p>EVENTOS</p>
    </li>
    <li class="filterItem">
      <p>AUDIOVISUAL</p>
    </li>
    <li class="filterItem">
      <p>DIGITAL</p>
    </li>
    <li class="filterItem">
      <p>DISEÑO</p>
    </li>
  </ul>

  <article class="gridContainer">
    <figure class="gridProject gridProject1">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/1.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject2">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/2.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject3">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/3.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject4">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/4.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject5">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/5.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject6">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/6.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject7">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/7.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject8">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/8.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject9">
      <img class="projectImg" src="<?php echo get_template_directory_uri(); ?>/img/grid/9.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
    <figure class="gridProject gridProject10">
      <img  class="projectImg"src="<?php echo get_template_directory_uri(); ?>/img/grid/10.jpg" alt="">
      <figcaption class="projectFigcaption"><p class="projectFigcaptionTxt">Lorem ipsum dolor</p></figcaption>
      <div class="projectStripe"></div>
      <div class="projectTriangle">
        <svg class="projectTriangleSvg" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 47.297 30.801" enable-background="new 0 0 47.297 30.801" xml:space="preserve">
          <g>
	          <circle fill="#3D4543" cx="23.649" cy="23.649" r="7.151"/>
	          <path fill="#3D4543" d="M7.095,23.648c0-9.142,7.412-16.554,16.554-16.554c9.144,0,16.555,7.412,16.555,16.554
		        c0,0.06-0.008,0.117-0.009,0.176h7.099c0-0.059,0.004-0.117,0.004-0.176C47.297,10.588,36.709,0,23.648,0
		        C10.588,0,0,10.588,0,23.648c0,0.059,0.004,0.117,0.004,0.176h7.099C7.103,23.766,7.095,23.708,7.095,23.648z"/>
          </g>
        </svg>
      </div>
    </figure>
  </article>

  <img class="nosotrosIso" src="<?php echo get_template_directory_uri(); ?>/img/iso.png" alt="">
</section>

<section class="equipo" id="equipo" data-target="hEquipo">
  <h3 class="equipoTitle title">Keep
    <span class="typewrite" data-period="4000" data-type='[ "team" ]'></span>
  </h3>
  <h5 class="equipoSubTitle">Hola. Somos <span class="specialTxt">Keep Doing</span></h5>
  <ul class="equipoList">
    <li class="equipoItem">
      <figure class="card">
        <img class="cardImg" src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="">
        <figcaption class="cardCaption">
          <p class="cardName">Fernando Marciel</p>
          <p class="cardPos">CEO</p>
        </figcaption>
      </figure>
    </li>
    <li class="equipoItem">
      <figure class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="" class="cardImg">
        <figcaption class="cardCaption">
          <p class="cardName">Fernando Marciel</p>
          <p class="cardPos">CEO</p>
        </figcaption>
      </figure>
    </li>
    <li class="equipoItem">
      <figure class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="" class="cardImg">
        <figcaption class="cardCaption">
          <p class="cardName">Fernando Marciel</p>
          <p class="cardPos">CEO</p>
        </figcaption>
      </figure>
    </li>
    <li class="equipoItem">
      <figure class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="" class="cardImg">
        <figcaption class="cardCaption">
          <p class="cardName">Fernando Marciel</p>
          <p class="cardPos">CEO</p>
        </figcaption>
      </figure>
    </li>
    <li class="equipoItem">
      <figure class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="" class="cardImg">
        <figcaption class="cardCaption">
          <p class="cardName">Fernando Marciel</p>
          <p class="cardPos">CEO</p>
        </figcaption>
      </figure>
    </li>
    <li class="equipoItem cardAlternate">
      <p>¿Quieres ser parte de nuestro equipo?</p>
      <p><a class="cardAlternateLink" href="#contacto">Contactanos…</a></p>
    </li>
  </ul>
  <img class="nosotrosIso" src="<?php echo get_template_directory_uri(); ?>/img/iso.png" alt="">
</section>

<section class="clientes" id="clientes" data-target="hClientes">
  <h3 class="title specialTxt">Keep
    <span class="typewrite" data-period="4000" data-type='[ "trusting" ]'></span>
  </h3>
  <div class="clientesGrid">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
    <img class="clienteLogo" src="<?php echo get_template_directory_uri(); ?>/img/clientes/aeagp.png" alt="">
  </div>
  <img class="nosotrosIso" src="<?php echo get_template_directory_uri(); ?>/img/iso.png" alt="">
</section>

<section class="contacto" id="contacto" data-target="hContacto">
  <div class="map"></div>
  <div class="contactInfo">
    <h3 class="contactoTitle title">Keep
      <span class="typewrite" data-period="4000" data-type='[ "in contact" ]'></span>
    </h3>
    <p class="contactoMail">hola@keepdoing.pro</p>
    <p class="contactoAddress">C/ Sebastián Elcano 32 1º10 - Madrid 28012</p>
    <p class="contactoPhone">t. +34 91 939 64 59</p>
  </div>
</section>

<?php get_footer(); ?>
