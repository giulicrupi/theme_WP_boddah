<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="Keywords" content="Motion Graphics, Motion Design, Animação, 2D, Vídeo, Produtora, Vídeo Explicativo, Vídeo Animado, Vídeo Institucional, Ilustração, Motion, Estúdio de Animação, After Effects.">

	<!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->
	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50"> 

<header class="fixed-top">
	<nav>
		<div class="container">
			<div class="row text-right">
				<div class="col float-right">
					<a href="<?php the_field('link_do_video_aperte_play'); ?>" data-caption="" data-fancybox="video">
					<p class="play">aperte o play <i class="fa-solid fa-play"></i></p>
					</a>
				</div>
			</div>
		</div>		
	</nav>
<!-- 	<div class="menu-log">
	<a href="<?php echo site_url(); ?>/#home">
		<div class="logo">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 624.47 443.3"><defs><style>.cls-1{fill:#fff;}</style></defs><title>22Ativo 1logo-boddah</title><g id="Camada_2" data-name="Camada 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M171.78,350.78a7.51,7.51,0,0,0-5.51,2.24,7.76,7.76,0,0,0,11,11,7.51,7.51,0,0,0,2.22-5.5,7.67,7.67,0,0,0-7.7-7.7Z"/><path class="cls-1" d="M264.19,351c-1.9-1.38-4.61-2.07-8.11-2.07H255v16.27h1.07c3.54,0,6.25-.72,8.14-2.14a7.3,7.3,0,0,0,2.83-6.17A6.8,6.8,0,0,0,264.19,351Z"/><path class="cls-1" d="M351.51,351q-2.86-2.07-8.11-2.07h-1.07v16.27h1.07c3.54,0,6.24-.72,8.13-2.14a7.27,7.27,0,0,0,2.83-6.17A6.82,6.82,0,0,0,351.51,351Z"/><path class="cls-1" d="M85.74,348a6.51,6.51,0,0,0,2.5-5.48,6,6,0,0,0-2.5-5.18c-1.67-1.21-4-1.81-7.14-1.81h-1v14.38h1C81.7,349.91,84.07,349.27,85.74,348Z"/><path class="cls-1" d="M86.48,365.11c-1.86-1.36-4.48-2-7.88-2h-1V379h1q5.2,0,7.93-2.1a7.16,7.16,0,0,0,2.73-6.06A6.68,6.68,0,0,0,86.48,365.11Z"/><path class="cls-1" d="M0,305.86V415.1l624.47,28.2V277.67Zm122.43,79.06a19.72,19.72,0,0,1-6.86,7.31,25.48,25.48,0,0,1-9,3.62q-5.1,1.08-16.06,1.07H44.89V320.18H94.41q13.26,0,20.78,5.53a17.76,17.76,0,0,1,7.53,15.12,18.82,18.82,0,0,1-2.45,9.59,21.9,21.9,0,0,1-7.29,7.34,24.16,24.16,0,0,1,8.72,7.47,16.86,16.86,0,0,1,3,9.66A21.14,21.14,0,0,1,122.43,384.92Zm86.71-11.3a39,39,0,0,1-8.75,12.85,40.7,40.7,0,0,1-13.13,8.69,40.79,40.79,0,0,1-30.83,0,41.23,41.23,0,0,1-13.16-8.72,39.41,39.41,0,0,1-8.85-12.82,38.73,38.73,0,0,1,0-30.32,39.73,39.73,0,0,1,8.85-12.95,39.27,39.27,0,0,1,13-8.59,41.7,41.7,0,0,1,31,0,39.75,39.75,0,0,1,21.8,21.49,39.31,39.31,0,0,1,0,30.34Zm85.35,2.4a38.13,38.13,0,0,1-11.58,13.72,34.58,34.58,0,0,1-11,5.48,52.91,52.91,0,0,1-14.46,1.7H221.3V320.08h29.22a116,116,0,0,1,17,.89,35,35,0,0,1,9.54,2.94,38,38,0,0,1,21.47,34.57A38.69,38.69,0,0,1,294.49,376Zm75.73,13.72a34.58,34.58,0,0,1-11,5.48,52.91,52.91,0,0,1-14.46,1.7H308.61V320.08h29.23a116,116,0,0,1,17,.89,34.87,34.87,0,0,1,9.54,2.94,38,38,0,0,1,21.47,34.57A38.69,38.69,0,0,1,381.8,376,38.13,38.13,0,0,1,370.22,389.74Zm82.57,7.18-4.28-13.25H424.19L420,396.92H385.42l27.7-76.84h46.25l28.41,76.84Zm126.8,0H545.31v-29H528.43v29H494.06V320.08h34.37v27.53h16.88V320.08h34.28Z"/><polygon class="cls-1" points="430.56 365.72 442.34 365.72 436.47 347.51 430.56 365.72"/><path class="cls-1" d="M542.54,31.82c-6-29.62-31.72-40.54-57.18-24.27L353.92,109.47a4,4,0,0,0-.43.39,292.07,292.07,0,0,0-73.87-.09,3.08,3.08,0,0,0-.33-.3L141.35,7.55C115.89-8.72,90.15,2.2,84.17,31.82l-37.47,245,529.65-23.91ZM201.11,122.37l-68.35,26.47c-10.6,4.11-17.64-5.44-15.65-21.22L125,65.32c2-15.78,13.53-20.25,25.64-9.92l47.78,40.74C210.48,106.46,211.71,118.27,201.11,122.37Zm298.56,26.47-68.34-26.47c-10.6-4.1-9.37-15.91,2.73-26.23L481.84,55.4c12.11-10.33,23.65-5.86,25.64,9.92l7.85,62.3C517.32,143.4,510.28,153,499.67,148.84Z"/></g></g></svg>
		</div>		
	</a>		
	</div> -->

</header>		
	<div class="menu-log">
	<a href="<?php echo site_url(); ?>/#home">
		<div class="logo">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 624.47 443.3"><defs><style>.cls-1{fill:#fff;}</style></defs><title>22Ativo 1logo-boddah</title><g id="Camada_2" data-name="Camada 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M171.78,350.78a7.51,7.51,0,0,0-5.51,2.24,7.76,7.76,0,0,0,11,11,7.51,7.51,0,0,0,2.22-5.5,7.67,7.67,0,0,0-7.7-7.7Z"/><path class="cls-1" d="M264.19,351c-1.9-1.38-4.61-2.07-8.11-2.07H255v16.27h1.07c3.54,0,6.25-.72,8.14-2.14a7.3,7.3,0,0,0,2.83-6.17A6.8,6.8,0,0,0,264.19,351Z"/><path class="cls-1" d="M351.51,351q-2.86-2.07-8.11-2.07h-1.07v16.27h1.07c3.54,0,6.24-.72,8.13-2.14a7.27,7.27,0,0,0,2.83-6.17A6.82,6.82,0,0,0,351.51,351Z"/><path class="cls-1" d="M85.74,348a6.51,6.51,0,0,0,2.5-5.48,6,6,0,0,0-2.5-5.18c-1.67-1.21-4-1.81-7.14-1.81h-1v14.38h1C81.7,349.91,84.07,349.27,85.74,348Z"/><path class="cls-1" d="M86.48,365.11c-1.86-1.36-4.48-2-7.88-2h-1V379h1q5.2,0,7.93-2.1a7.16,7.16,0,0,0,2.73-6.06A6.68,6.68,0,0,0,86.48,365.11Z"/><path class="cls-1" d="M0,305.86V415.1l624.47,28.2V277.67Zm122.43,79.06a19.72,19.72,0,0,1-6.86,7.31,25.48,25.48,0,0,1-9,3.62q-5.1,1.08-16.06,1.07H44.89V320.18H94.41q13.26,0,20.78,5.53a17.76,17.76,0,0,1,7.53,15.12,18.82,18.82,0,0,1-2.45,9.59,21.9,21.9,0,0,1-7.29,7.34,24.16,24.16,0,0,1,8.72,7.47,16.86,16.86,0,0,1,3,9.66A21.14,21.14,0,0,1,122.43,384.92Zm86.71-11.3a39,39,0,0,1-8.75,12.85,40.7,40.7,0,0,1-13.13,8.69,40.79,40.79,0,0,1-30.83,0,41.23,41.23,0,0,1-13.16-8.72,39.41,39.41,0,0,1-8.85-12.82,38.73,38.73,0,0,1,0-30.32,39.73,39.73,0,0,1,8.85-12.95,39.27,39.27,0,0,1,13-8.59,41.7,41.7,0,0,1,31,0,39.75,39.75,0,0,1,21.8,21.49,39.31,39.31,0,0,1,0,30.34Zm85.35,2.4a38.13,38.13,0,0,1-11.58,13.72,34.58,34.58,0,0,1-11,5.48,52.91,52.91,0,0,1-14.46,1.7H221.3V320.08h29.22a116,116,0,0,1,17,.89,35,35,0,0,1,9.54,2.94,38,38,0,0,1,21.47,34.57A38.69,38.69,0,0,1,294.49,376Zm75.73,13.72a34.58,34.58,0,0,1-11,5.48,52.91,52.91,0,0,1-14.46,1.7H308.61V320.08h29.23a116,116,0,0,1,17,.89,34.87,34.87,0,0,1,9.54,2.94,38,38,0,0,1,21.47,34.57A38.69,38.69,0,0,1,381.8,376,38.13,38.13,0,0,1,370.22,389.74Zm82.57,7.18-4.28-13.25H424.19L420,396.92H385.42l27.7-76.84h46.25l28.41,76.84Zm126.8,0H545.31v-29H528.43v29H494.06V320.08h34.37v27.53h16.88V320.08h34.28Z"/><polygon class="cls-1" points="430.56 365.72 442.34 365.72 436.47 347.51 430.56 365.72"/><path class="cls-1" d="M542.54,31.82c-6-29.62-31.72-40.54-57.18-24.27L353.92,109.47a4,4,0,0,0-.43.39,292.07,292.07,0,0,0-73.87-.09,3.08,3.08,0,0,0-.33-.3L141.35,7.55C115.89-8.72,90.15,2.2,84.17,31.82l-37.47,245,529.65-23.91ZM201.11,122.37l-68.35,26.47c-10.6,4.11-17.64-5.44-15.65-21.22L125,65.32c2-15.78,13.53-20.25,25.64-9.92l47.78,40.74C210.48,106.46,211.71,118.27,201.11,122.37Zm298.56,26.47-68.34-26.47c-10.6-4.1-9.37-15.91,2.73-26.23L481.84,55.4c12.11-10.33,23.65-5.86,25.64,9.92l7.85,62.3C517.32,143.4,510.28,153,499.67,148.84Z"/></g></g></svg>
		</div>		
	</a>		
	</div>

<div class="menu-princ">
	<ul>
		<li><a class="link-menu" href="<?php echo site_url(); ?>/#home">Atividade</a></li>
		<li><a class="link-menu" href="<?php echo site_url(); ?>/#criatividade">Criatividade</a></li>
		<li><a class="link-menu" href="<?php echo site_url(); ?>/#proposito">Propósito</a></li>
		<li id="desk"><a class="link-menu" href="<?php echo site_url(); ?>/#trabalhos">Trabalhos</a></li>
		<li id="mob"><a class="link-menu" href="<?php echo site_url(); ?>/portfolio">Trabalhos</a></li>
		<li><a class="link-menu" href="https://player.vimeo.com/video/682909008?h=f17c997329" data-caption="" data-fancybox="video">Aperte o Play</a></li>
		<li class="cta-contato"><a href="#">Contato</a></li>
	</ul>
</div>


