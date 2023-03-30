<?php get_header(); ?>
<div id="preloader">
	<div class="container text-center">
		<div class="conteudo">
<!-- 			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_nkjljwhf.json" background="transparent" speed="0.5"   autoplay>
			</lottie-player> -->

			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_2sxb44vu/LOGO COR/LogoCor.json" background="transparent" speed="0.5"  autoplay>
				
			</lottie-player>			
		</div>
	</div>
</div>
<section class="portfolio">

	<div class="container">
		
	  
	      <!-- Slides -->
			<?php echo do_shortcode('[ajax_load_more post_type="post, videos" posts_per_page="15" button_label="Carregar Mais"]'); ?>				      
		
	</div>
</section>

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
   $("#preloader").delay(9500).fadeOut("slow"); 
});
</script>
<?php get_footer(); ?>


