<?php get_header(); ?>
<div id="preloader">
	<div class="container text-center">
		<div class="conteudo">


			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_2sxb44vu/LOGO COR/LogoCor.json" background="transparent" speed="1"  autoplay>
				
			</lottie-player>			
		</div>
	</div>
</div> 
<div id="fullpage">			
	<section class="banner section" id="section0">
		<video  loop="true"  data-keepplaying autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
		  <source src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/01-ATIVIDADE-LOOP.mp4" type="video/mp4">					 
		</video>		
		<div class="content">
			<div class="container">
				<p class="title" id="title1">
					<?php the_field('titulo_principal1'); ?>
				</p>
				<div class="texto">
					<?php the_field('texto1'); ?>
					<?php 

						$link = get_field('link_video_1', false);
						if (!empty($link)) {
					 ?>						
					<p class="saiba-mais"><a href="<?php the_field('link_video_1'); ?>" data-caption="" data-fancybox="play"><b>Clique e saiba mais!</b> </a></p>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<section class="sect1 section" id="section2">
		<video id="myVideo" width="100%" loop="true" autoplay="autoplay" muted="false" data-keepplaying playsinline>
		  <source src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/02-CRIATIVIDADE-LOOP.mp4" type="video/mp4">

		</video>
		<div class="content">
			<div class="container">
				<p class="title">
					<?php the_field('titulo_principal2'); ?>
				</p>
				<div class="texto">
					<?php the_field('texto2'); ?>
				<?php 

					$link2 = get_field('link_video_2', false);
					if (!empty($link2)) {
				 ?>						
				<p class="saiba-mais"><a href="<?php the_field('link_video_2'); ?>" data-caption="" data-fancybox="play"><b>Clique e saiba mais!</b> </a></p>
				<?php } ?>	
				</div>
			
			</div>
		</div>
	</section>
	<section class="sect2 section"  id="section3">
		<video id="myVideo" width="100%" loop="true" autoplay="autoplay" muted="false" playsinline data-keepplaying style="position: absolute;">
		  <source src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/WhatsApp-Video-2022-09-08-at-17.30.19.mp4" type="video/mp4">

		</video>
		<div class="content">
			<div class="container">
				<p class="title">
					<?php the_field('titulo_principal3'); ?>
				</p>
				<div class="texto">
					<?php the_field('texto3'); ?>
				<?php 

					$link3 = get_field('link_video_3', false);
					if (!empty($link3)) {
				 ?>						
				<p class="saiba-mais"><a href="<?php the_field('link_video_3'); ?>" data-caption="" data-fancybox="play"><b>Clique e saiba mais!</b> </a></p>
				<?php } ?>	
				</div>
				
			</div>
		</div>
	</section>
	<section class="sect4 section"  id="section4">
		<video id="myVideo" width="100%" loop="true" autoplay="autoplay" muted="false" playsinline="" data-keepplaying style="position: absolute;">
		  <source src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/04-TRABALHOS-LOOP.mp4" type="video/mp4">

		</video>
		<div class="content" id="mob">
			<div class="container">
				<div class="desc-title">
					<p class="conf">Confira abaixo alguns de nossos trabalhos:</p>
					<a href="<?php echo site_url(); ?>/portfolio">
						<p class="conf2">Clique aqui para ver todos</p>
					</a>					
				</div>
				<!-- partial:index.partial.html -->
				<!-- Slider main wrapper -->
				<div class="swiper-container-wrapper">
				  <!-- Slider main container -->
				  <div class="swiper-container gallery-top">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				      <!-- Slides -->
				 <?php     

			        $listagem_home = new WP_Query(array(
			        'video-categoria' => 'aparecer-na-home',
			        
			        'posts_per_page' => 4)
			        );
			                  

			        if($listagem_home->have_posts()) : 

			            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>				      
				      <div class="swiper-slide">
				      		<?php the_field('link_do_video'); ?>	
				      </div>
			            <?php endwhile; ?>  
			        <?php endif; ?> 				      

				    </div>
				    <!-- Add Arrows -->
<!-- 				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div> -->
				  </div>
				  <!-- Slider thumbnail container -->
				  <div class="swiper-container gallery-thumbs">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				      <!-- Slides -->
				 <?php     

			        $listagem_home = new WP_Query(array(
			        'video-categoria' => 'aparecer-na-home',
			        
			        'posts_per_page' => 4)
			        );
			                  

			        if($listagem_home->have_posts()) : 

			            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>					      
				      <div class="swiper-slide">
				      	
				      	<div class="video " style="    pointer-events: none;
    cursor: default;"><?php the_field('link_do_video'); ?></div>				      	
				      </div>
			            <?php endwhile; ?>  
			        <?php endif; ?> 					      
				    </div>

				  </div>



				</div>

			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>



<style>
	.contents .item iframe{

		    width: 100%;
		    height: 59vh;	
	}
	.contents .container .princ{
		padding-right: 0%;
	}	

	.vp-center{
		    justify-content: flex-start!important;
	}
	.contents .item .video2 iframe{
		width: 100%;
		height: fit-content;
	}
	.contents .container{
		max-width: 75%;
		padding-top: 4%;
		padding-right: 0%;

	}

	.contents .slider-nav .slick-slide{
		filter: grayscale(1);
		    opacity: 0.3;

	}
	.contents .slider-nav .slick-slide.slick-active.slick-current{
		filter: grayscale(0)!important;
		opacity: 1!important;
	}
	.contents .slider-for .item{
		padding-bottom: 0;
	}
	.contents .slider-nav .item{
		padding-top: 0;
		padding-left: 0.2%;
		padding-right: 0.2%;
	}
	.testevideoiframe html{
		background: red;
	}
	.contents .texto{

	    position: absolute;
	    right: 15%;
	    top: 28%;
	    text-align: right;

	}
	.contents .conteudo .title{
		color: white;
	    font-size: 20px;
	    letter-spacing: 2px;
	    line-height: 100%;
	    margin-bottom: 7%;		
	}
	@media(min-width:  1800px){
		.contents .item iframe{
		    width: 100%;
		    height: 58vh;		
	    	
		}
		.contents .container .princ{
			padding-right: 0%;
		}
		.contents .conteudo .title{
			font-size: 35px;
		}	
		.contents .conteudo .botao a button{
			    font-size: 15px;

		}	
	}
	.contents .conteudo .botao a button{
	    background: transparent;
	    color: white;
	    border: 1px solid white;
	    padding: 6% 7%;
	    text-transform: uppercase;
	    letter-spacing: 2px;
	    border-radius: 6px;		
	    transition: .5s;
	        font-size: 11px;

	}
/*	.slick-arrow.slick-disabled{
		opacity: 0.1!important;
pointer-events: none!important;
    cursor: default!important;		
	}*/
	.contents .conteudo .botao a button:hover{
		background: white;
		color: black;
	}
	.contents .slick-arrow{
	    bottom: 40%;
	    background: white;
	    width: 60px;
	    height: 60px;
	    transform: scale(0.8);
	    transition: .5s;
	    opacity: 0.7;
	}
	.contents .slick-arrow:before{
		filter: invert(1);
	}
	.contents .slick-arrow:hover{
		background: #da1566;
		opacity: 1;
	}
	.contents .slick-next{
		left: inherit;
		right: -7%;
	}
	@media(min-width:  1800px){
		.contents .slick-prev{
			left: -5%!important;
			/*right: 5%;*/
		}
		.contents .slick-next{
			left: inherit;
			right: -5%;
		}			
	}
	.contents .slick-prev{
		left: -7%;
		/*right: 5%;*/
	}
	button:focus{
		outline: none;
	}
	.contents .add{
		    padding-left: 1%;
    color: white;
    letter-spacing: 1px;
	}
	.contents.gale .conceito .botao button{
		    background: white;
    border: 1px solid white;
    padding: 1% 1%;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 1px;
    margin-bottom: 1%;
	}
	.contents.gale .conceito .title-video{
		color: white;
    letter-spacing: 2px;
	}
</style>

		<div class="contents gale" id="desk">
			<div class="container">
				<div class="conceito text-center">	
						<div class="botao">	
								<a href="<?php echo site_url(); ?>/portfolio">
									<button>Clique aqui e veja mais</button>
								</a>
						</div>
						<p class="title-video">Confira abaixo alguns dos nossos trabalhos:</p>	
				</div>	
				<div class="slider-container">


							  <div class="slider slider-for" >

				 <?php     

			        $listagem_home = new WP_Query(array(
			        'video-categoria' => 'aparecer-na-home',
			        
			        'posts_per_page' => 10)
			        );
			                  

			        if($listagem_home->have_posts()) : 

			            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>								  	
							    <div class="item ">
							    	<div class="princ">
							    		<?php the_field('link_do_video'); ?>
							    	</div>
							    </div>

			            <?php endwhile; ?>  
			        <?php endif; ?> 	

							  </div>




					<p class="add">Adicionados recentemente:</p>
				  <div class="slider slider-nav">
				 <?php     

			        $listagem_home = new WP_Query(array(
			        'video-categoria' => 'aparecer-na-home',
			        
			        'posts_per_page' => 10)
			        );
			                  

			        if($listagem_home->have_posts()) : 

			            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>					  	
				    <div class="item">
				      	<div class="video2 " style="    pointer-events: none;
    cursor: default;"><?php the_field('link_do_video'); ?></div>					    	
				    </div>
			            <?php endwhile; ?>  
			        <?php endif; ?>				    
				  </div>

 


				</div>	
<!-- 			<div class="texto">
				<div class="conteudo">
					<p class="title">
						Confira abaixo alguns <br> de nossos trabalhos
					</p>
					<div class="botao">
						<a href="#">
							<button>Clique aqui e veja mais!</button>
						</a>
					</div>
				</div>
			</div> -->								
			</div> 	
	
		</div>



<script>
  
  $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   infinite: false,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 6,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
   arrows: true,
   infinite: false,
   
   focusOnSelect: true
 });

</script>


	</section>	
	<section class="sect5 section"  id="section4">
		<div class="container">
			<div class="conteudo">
				<p class="title text-center">Tire sua dúvidas, fale conosco agora mesmo!</p>
				<div class="formulario">
					<?php echo do_shortcode('[contact-form-7 id="24" title="Formulário de contato 1"]'); ?>
				</div>			
			</div>
		</div>
	</section>	
</div>
<div class="bg-colorido"></div>
<section class="contato">
	<div class="fechar">
		<p><i class="fa-solid fa-xmark"></i></p>
	</div>
	<div class="voltar">
		<p>voltar ao site</p>
	</div>
	<div class="container">
		<div class="conteudo">
			<p class="title text-center">Tire sua dúvidas, fale conosco agora mesmo!</p>
			<div class="formulario">
				<?php echo do_shortcode('[contact-form-7 id="24" title="Formulário de contato 1"]'); ?>
			</div>			
		</div>
	</div>
</section>		

<script>
	$(window).on('load', function(){
   $("#preloader").delay(1000).fadeOut("slow"); 
});
</script>
<?php get_footer(); ?>












