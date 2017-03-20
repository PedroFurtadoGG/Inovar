<?php require_once('head.php');?>
  <body>
  <div class="site">
    

<!-- /.site-top .style-01 -->

<?php include('header.php');?>
<!-- /.site-header .style-01 -->


<!-- /.primary-menu -->

	<!-- SLIDE  -->
		
        <!-- MAIN IMAGE -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
		<img src="<?php echo URL;?>images/page-home/projetos.jpg" style='background-color:#666666' alt=""  data-lazyload="images/page-home/03.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina>
		</div>
        <!-- LAYERS -->
     
      <!-- SLIDE  -->
      
    
<!-- /.big-title -->

<section class="page-title_content">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
       <br>
	   <?php 
				/*
				1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
				2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
				3 - $limit = NULL - LIMITE DE REGISTROS; 
				4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
				5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
				*/
				$sql = Cms::conteudoPrincipal(1, NULL, 1, 'ORDER BY ctn.listorder ASC');
				$row = mysql_fetch_assoc($sql);
		?>
        <h2 class="heading-title"><?php echo utf8_encode($row['titulo']); ?></h2>
		
        <p><?php echo utf8_encode($row['texto']); ?></p>
      </div>
    </div>
  </div>
    
    </section>
	<section class="our-works" data-parallax="scroll" data-image-src="images/page-home/home01_our_work_bg.jpg">
	

  <div class="grid" style="position: relative; height: 380px;">
	<?php for($x=0;$x <5;$x++){?>
     <div class="element-item plumbing item-dir" data-category="plumbing" style="position: absolute; overflow: hidden; left: 0px; top: 0px;">
      <img src="images/page-home/project01.jpg" alt="projects">
      <div class="grid-overlay" style="position: absolute; top: 0px; left: 285px;">
        <div class="grid-overlay-wrapper">
          
          <a class="grid-overlay-tittle" href="#">Bathroom Plumbing</a>
          
        </div>
      </div>
    </div>
    
  
	<?php }?>
    
    </div>


</section>
<!-- /.page-title_content -->

<!-- /.piece-of-us -->


<?php include('footer.php');?>
<!-- /.copyright -->


  </div>
	<!-- Map-About us -->
	<script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>

    <script src="<?php echo URL;?>components/jquery/jquery.js"></script>
    <script src="<?php echo URL;?>components/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo URL;?>components/owl.carousel/owl.carousel.js"></script>
    <script src="<?php echo URL;?>components/parallax.js/parallax.js"></script>
  	<script src="<?php echo URL;?>components/scrollup/jquery.scrollUp.js"></script>
  	<script src="<?php echo URL;?>components/lightgallery/js/lightgallery.js"></script>

    <!-- Mobile Menu -->
    <script src="<?php echo URL;?>components/mmenu/jquery.mmenu.min.all.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="<?php echo URL;?>components/slider/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo URL;?>components/slider/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo URL;?>components/slider/extensions/revolution.extension.video.min.js"></script>

    <!-- ISOTOPE -->
    <script src="<?php echo URL;?>components/isotope.pkgd.min.js"></script>

    <!-- HOVER ISOTOPE -->
    <script src="<?php echo URL;?>components/jquery.directional-hover.min.js"></script>

    <!-- Image loaded ISOTOPE -->
    <script src="<?php echo URL;?>components/imagesloaded.pkgd.min.js"></script>

    <script src="<?php echo URL;?>js/main.js"></script>
  </body>
</html>
