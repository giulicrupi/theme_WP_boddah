<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	



	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'paroller-js','https://tgomilar.github.io/paroller.js/dist/jquery.paroller.min.js');
	wp_enqueue_script( 'full-js','https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.js');
	wp_enqueue_script( 'swiper-bundle-js','https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js');

	
	 wp_enqueue_script( 'slick-carousel','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	
 	wp_enqueue_script( 'fontawe-js','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js');
 	
 	 wp_enqueue_style( 'slick-css','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fullPage-css','https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	wp_enqueue_style( 'swiper-css','https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800' ,'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');




// Create custom post type
function create_posttype() {
    register_post_type( 'videos',
        array(
            'labels' => array(
                'name' => __( 'Vídeos' ),
                'singular_name' => __( 'Vídeo' ),
				'menu_name' => _x('Vídeos', 'admin menu'),
				'name_admin_bar' => _x('Vídeos', 'admin bar'),
				'add_new' => _x('Adicionar Vídeo', 'add new'),
				'add_new_item' => __('Adicionar Novo'),
				'new_item' => __('Novo Vídeo'),
				'edit_item' => __('Editar Vídeo'),
				'view_item' => __('Ver Produto'),
				'all_items' => __('Todos os Vídeos'),
				'search_items' => __('Procurar Vídeos'),
				'not_found' => __('Nenhum Vídeo encontrado'),                
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video'),
            'taxonomies'  => array( 'video-categoria'),
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype', 9 );

//Create category for specific post type
function tr_create_my_taxonomy() {
    register_taxonomy(
        'video-categoria',
        'produtos',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'videos/categoria' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy', 6 );



function get_video_thumbnail_uri( $video_uri ) {
	
		$thumbnail_uri = '';
		
	
		
		// determine the type of video and the video id
		$video = parse_video_uri( $video_uri );
		
		
		
		// get youtube thumbnail
		if ( $video['type'] == 'youtube' )
			$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
		
		// get vimeo thumbnail
		if( $video['type'] == 'vimeo' )
			$thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
		// get wistia thumbnail
		if( $video['type'] == 'wistia' )
			$thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
		// get default/placeholder thumbnail
		if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
			$thumbnail_uri = ''; 
		
		//return thumbnail uri
		return $thumbnail_uri;
		
	}
	
	
	/**
	 * Parse the video uri/url to determine the video type/source and the video id
	 */
	function parse_video_uri( $url ) {
		
		// Parse the url 
		$parse = parse_url( $url );
		
		// Set blank variables
		$video_type = '';
		$video_id = '';
		
		// Url is http://youtu.be/xxxx
		if ( $parse['host'] == 'youtu.be' ) {
		
			$video_type = 'youtube';
			
			$video_id = ltrim( $parse['path'],'/' );	
			
		}
		
		// Url is http://www.youtube.com/watch?v=xxxx 
		// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
		// or http://www.youtube.com/embed/xxxx
		if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
		
			$video_type = 'youtube';
			
			parse_str( $parse['query'] );
			
			$video_id = $v;	
			
			if ( !empty( $feature ) )
				$video_id = end( explode( 'v=', $parse['query'] ) );
				
			if ( strpos( $parse['path'], 'embed' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
			
		}
		
		// Url is http://www.vimeo.com
		if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
		
			$video_type = 'vimeo';
			
			$video_id = ltrim( $parse['path'],'/' );	
						
		}
		$host_names = explode(".", $parse['host'] );
		$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
		// Url is an oembed url wistia.com
		if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
		
			$video_type = 'wistia';
				
			if ( strpos( $parse['path'], 'medias' ) == 1 )
					$video_id = end( explode( '/', $parse['path'] ) );
		
		}
		
		// If recognised type return video array
		if ( !empty( $video_type ) ) {
		
			$video_array = array(
				'type' => $video_type,
				'id' => $video_id
			);
		
			return $video_array;
			
		} else {
		
			return false;
			
		}
		
	}
	
	
	 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
	 */
	function get_vimeo_thumbnail_uri( $clip_id ) {
		$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
		$vimeo_response = wp_remote_get( $vimeo_api_uri );
		if( is_wp_error( $vimeo_response ) ) {
			return $vimeo_response;
		} else {
			$vimeo_response = unserialize( $vimeo_response['body'] );
			return $vimeo_response[0]['thumbnail_large'];
		}
		
	}
	/**
	 * Takes a wistia oembed url and gets the video thumbnail url.
	 */
	function get_wistia_thumbnail_uri( $video_uri ) {
		if ( empty($video_uri) )
			return false;
		$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
		$wistia_response = wp_remote_get( $wistia_api_uri );
		if( is_wp_error( $wistia_response ) ) {
			return $wistia_response;
		} else {
			$wistia_response = json_decode( $wistia_response['body'], true );
			return $wistia_response['thumbnail_url'];
		}
		
	}