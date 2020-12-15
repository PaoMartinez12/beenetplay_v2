<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		 <title>NextTV</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		 <meta name="viewport" content="initial-scale=1, maximum-scale=1 user-scalable=no" />
		 <link rel="stylesheet" type="text/css"  href="content/global.css"/>
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
		 <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

		<script type="text/javascript" src="java/FWDUVPlayer.js"></script>
		<!-- Setup video player-->
		<script type="text/javascript">


			FWDUVPUtils.onReady(function(){

				new FWDUVPlayer({		
					//main settings
					instanceName:"player1",
					parentId:"myDiv",
					playlistsId:"playlists",
					mainFolderPath:"content",
					skinPath:"modern_skin_dark",
					displayType:"responsive",
					initializeOnlyWhenVisible:"no",
					fillEntireposterScreen:"yes",
					useVectorIcons:"no",
					fillEntireVideoScreen:"no",
					goFullScreenOnButtonPlay:"no",
					playsinline:"yes",
					privateVideoPassword:"428c841430ea18a70f7b06525d4b748a",
					youtubeAPIKey:"",
					useHEXColorsForSkin:"no",
					normalHEXButtonsColor:"#666666",
					googleAnalyticsTrackingCode:"",
					useResumeOnPlay:"no",
					useDeepLinking:"yes",
					showPreloader:"yes",
					preloaderBackgroundColor:"#000000",
					preloaderFillColor:"#FFFFFF",
					addKeyboardSupport:"yes",
					autoScale:"yes",
					showButtonsToolTip:"no", 
					stopVideoWhenPlayComplete:"no",
					playAfterVideoStop:"no",
					autoPlay:"yes",
					loop:"no",
					shuffle:"no",
					showErrorInfo:"yes",
                    maxWidth:1180,
					maxHeight:560,
					volume:.8,
					buttonsToolTipHideDelay:1.5,
					backgroundColor:"#000000",
					videoBackgroundColor:"#000000",
					posterBackgroundColor:"#000000",
					buttonsToolTipFontColor:"#5a5a5a",
					//logo settings
					showLogo:"no",
					hideLogoWithController:"yes",
					logoPosition:"topRight",
					logoLink:"http://www.webdesign-flash.ro/",
					logoPath:"",
					logoMargins:10,
					//playlists/categories settings
					showPlaylistsSearchInput:"no",
					usePlaylistsSelectBox:"yes",
					showPlaylistsButtonAndPlaylists:"no",
					showPlaylistsByDefault:"no",
					thumbnailSelectedType:"opacity",
					startAtPlaylist:0,
					buttonsMargins:15,
					thumbnailMaxWidth:350, 
					thumbnailMaxHeight:350,
					horizontalSpaceBetweenThumbnails:40,
					verticalSpaceBetweenThumbnails:40,
					inputBackgroundColor:"#333333",
					inputColor:"#999999",
					//playlist settings
					showPlaylistButtonAndPlaylist:"yes",
					playlistPosition:"right",
					showPlaylistByDefault:"yes",
					showPlaylistName:"yes",
					showSearchInput:"no",
					showLoopButton:"no",
					showShuffleButton:"no",
					showPlaylistOnFullScreen:"yes",
					showNextAndPrevButtons:"no",
					showThumbnail:"yes",
					forceDisableDownloadButtonForFolder:"yes",
					addMouseWheelSupport:"yes", 
					startAtRandomVideo:"no",
					stopAfterLastVideoHasPlayed:"no",
					addScrollOnMouseMove:"no",
					randomizePlaylist:'no',
					folderVideoLabel:"VIDEO ",
					playlistRightWidth:290,
					playlistBottomHeight:380,
					startAtVideo:0,
					maxPlaylistItems:50,
					thumbnailWidth:71,
					thumbnailHeight:71,
					spaceBetweenControllerAndPlaylist:1,
					spaceBetweenThumbnails:1,
					scrollbarOffestWidth:8,
					scollbarSpeedSensitivity:.5,
					playlistBackgroundColor:"#424242",
					playlistNameColor:"#FFFFFF",
					thumbnailNormalBackgroundColor:"#1b1b1b",  
					thumbnailHoverBackgroundColor:"#313131",  //foco
					thumbnailDisabledBackgroundColor:"#272727", 
					searchInputBackgroundColor:"transparent",
					searchInputColor:"#999999",
					youtubeAndFolderVideoTitleColor:"#FFFFFF",
					folderAudioSecondTitleColor:"#999999",
					youtubeOwnerColor:"#888888",
					youtubeDescriptionColor:"#888888",
					mainSelectorBackgroundSelectedColor:"#FFFFFF",
					mainSelectorTextNormalColor:"#FFFFFF",
					mainSelectorTextSelectedColor:"#000000",
					mainButtonBackgroundNormalColor:"#212021",
					mainButtonBackgroundSelectedColor:"#FFFFFF",
					mainButtonTextNormalColor:"#FFFFFF",
					mainButtonTextSelectedColor:"#000000",
					//controller settings
					showController:"yes",
					showControllerWhenVideoIsStopped:"yes",
					showNextAndPrevButtonsInController:"no",
					showRewindButton:"yes",
					showPlaybackRateButton:"no",
					showVolumeButton:"yes",
					showTime:"yes",
					showQualityButton:"yes",
					showInfoButton:"yes",
					showDownloadButton:"no",
					showShareButton:"no",
					showEmbedButton:"no",
					showChromecastButton:"yes",
					showFullScreenButton:"yes",
					disableVideoScrubber:"no",
					showScrubberWhenControllerIsHidden:"yes",
					showMainScrubberToolTipLabel:"yes",
					showDefaultControllerForVimeo:"no",
					repeatBackground:"yes",
					controllerHeight:43,
					controllerHideDelay:3,
					startSpaceBetweenButtons:10,
					spaceBetweenButtons:10,
					scrubbersOffsetWidth:2,
					mainScrubberOffestTop:17,
					timeOffsetLeftWidth:2,
					timeOffsetRightWidth:2,
					timeOffsetTop:-1,
					volumeScrubberHeight:80,
					volumeScrubberOfsetHeight:20,
					timeColor:"#888888",
					youtubeQualityButtonNormalColor:"#888888",
					youtubeQualityButtonSelectedColor:"#FFFFFF",
					scrubbersToolTipLabelBackgroundColor:"#FFFFFF",
					scrubbersToolTipLabelFontColor:"#5a5a5a",
					//advertisement on pause window
					aopwTitle:"Advertisement",
					aopwWidth:400,
					aopwHeight:240,
					aopwBorderSize:6,
					aopwTitleColor:"#FFFFFF",
					//subtitle
					subtitlesOffLabel:"Subtitle off",
					//popup add windows
					showPopupAdsCloseButton:"yes",
					//embed window and info window
					embedAndInfoWindowCloseButtonMargins:15,
					borderColor:"#333333",
					mainLabelsColor:"#FFFFFF",
					secondaryLabelsColor:"#a1a1a1",
					shareAndEmbedTextColor:"#5a5a5a",
					inputBackgroundColor:"#000000",
					inputColor:"#FFFFFF",
					//login
		            playIfLoggedIn:"no",
		            playIfLoggedInMessage:"Please <a href='https://google.com' target='_blank'>login</a> to play this video.",
					//audio visualizer
					audioVisualizerLinesColor:"#0099FF",
					audioVisualizerCircleColor:"#FFFFFF",
					//lightbox settings
					closeLightBoxWhenPlayComplete:"no",
					lightBoxBackgroundOpacity:.6,
					lightBoxBackgroundColor:"#000000",
					//sticky on scroll
					stickyOnScroll:"no",
					stickyOnScrollShowOpener:"yes",
					stickyOnScrollWidth:"700",
					stickyOnScrollHeight:"394",
					//sticky display settings
					showOpener:"yes",
					showOpenerPlayPauseButton:"yes",
					verticalPosition:"bottom",
					horizontalPosition:"center",
					showPlayerByDefault:"yes",
					animatePlayer:"yes",
					openerAlignment:"right",
					mainBackgroundImagePath:"content/minimal_skin_dark/main-background.png",
					openerEqulizerOffsetTop:-1,
					openerEqulizerOffsetLeft:3,
					offsetX:0,
					offsetY:0,
					//playback rate / speed
					defaultPlaybackRate:1, //0.25, 0.5, 1, 1.25, 1.2, 2
					//cuepoints
					executeCuepointsOnlyOnce:"no",
					//annotations
					showAnnotationsPositionTool:"no",
					//ads
					openNewPageAtTheEndOfTheAds:"no",
					adsButtonsPosition:"left",
					skipToVideoText:"You can skip to video in: ",
					skipToVideoButtonText:"Skip Ad",
					adsTextNormalColor:"#888888",
					adsTextSelectedColor:"#FFFFFF",
					adsBorderNormalColor:"#444444",
					adsBorderSelectedColor:"#FFFFFF",
					//a to b loop
					useAToB:"yes",
					atbTimeBackgroundColor:"transparent",
					atbTimeTextColorNormal:"#888888",
					atbTimeTextColorSelected:"#FFFFFF",
					atbButtonTextNormalColor:"#888888",
					atbButtonTextSelectedColor:"#FFFFFF",
					atbButtonBackgroundNormalColor:"#FFFFFF",
					atbButtonBackgroundSelectedColor:"#000000",
					//thumbnails preview
					thumbnailsPreviewWidth:196,
					thumbnailsPreviewHeight:110,
					thumbnailsPreviewBackgroundColor:"#000000",
					thumbnailsPreviewBorderColor:"#666",
					thumbnailsPreviewLabelBackgroundColor:"#666",
					thumbnailsPreviewLabelFontColor:"#FFF",
					// context menu
					showContextmenu:'no',
					showScriptDeveloper:"no",
					contextMenuBackgroundColor:"#1f1f1f",
					contextMenuBorderColor:"#1f1f1f",
					contextMenuSpacerColor:"#333",
					contextMenuItemNormalColor:"#666666",
					contextMenuItemSelectedColor:"#FFFFFF",
					contextMenuItemDisabledColor:"#333"
				});

				//
				registerAPI();
			});

			//Proceso para obtener la url
			
			//PASO1
			//--------------------------Funcion para extraer la url del canal que se esta reproduciendo -------------------
			//Register API (an setInterval is required because the player is not available until the youtube API is loaded).
			var registerAPIInterval;
			
			function registerAPI(){
				//se limpia el intervalo para registro de la API
				clearInterval(registerAPIInterval);

				//Condiciona si tiene la pantalla de player
				if(window.player1){
					
					player1.addListener(FWDUVPlayer.UPDATE_VIDEO_SOURCE, updateVideoSourceHandler);

				}else{
					registerAPIInterval = setInterval(registerAPI, 100);
				}

			};

			//PASO2
			//Funcion que distribuye cuando se modifica la fuente de vídeo actual de la instancia de Ultimate Video Player.
			function updateVideoSourceHandler(e){
				//guarda en la variable la url del video 
				var prueba= player1.getVideoSource();
				//comprobamos que se almacene correctamente
				console.log(prueba);

				//Se guarda valor en una cookie
				localStorage.setItem("urlCast", prueba);	
			}
		</script>	  
<script>

  

</script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>
	</head>



	<body style="background-color:black; padding:0px; margin:0px;">	

		<!-- Top menu -->
		<nav class="navbar navbar-dark  navbar-expand-md "  style="background: black;" >
		<div class="container"><center>
			<div class="row">
			 
				<div class="col" >
				<a class="navbar-brand" href="#">
					<img src="{{asset('posters/NextTV_logo1.png')}}" width="100" class="d-inline-block align-top" alt="" loading="lazy">  
				</a>
				</div>
				<div  class="col">
					<a  class="btn " id="btn"  name="url" role="button" style="color: #fa1616; ">
						<span class="iconify" data-icon="fa-brands:chromecast" data-inline="false" style="width: 30px; height:30px;"></span>
					</a>
					
				</div>

				<div class="col">
					<a href="{{ url('portfolio')}}" class="btn"  name="url" role="button" style="color: #fa1616; ">
						<svg width="1.8em" height="1.8em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
						<path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
						</svg>
					</a>
				</div>
		
			</div>	</center>

				
			</div>

			
	    </nav>


		<!--player-->
		<div class="container-fluid">
			

			  
					<script>

						//PASO 3 Creacion de la funcion Chromecast
						var initializeCastApi = function() {
						console.log('initializeCastApi');

						var sessionRequest = new chrome.cast.SessionRequest(
						chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID);
						var apiConfig = new chrome.cast.ApiConfig(
						sessionRequest, sessionListener, receiverListener);
						chrome.cast.initialize(apiConfig, onInitSuccess, onError);
						};

						if (!chrome.cast || !chrome.cast.isAvailable) {
						setTimeout(initializeCastApi, 1000);
						}

						function onInitSuccess() {
						console.log('onInitSuccess');
						}

						function onError(e) {
						console.log('onError', e);
						}

						function sessionListener(e) {
						console.log('sessionListener', e);

						}

						function receiverListener(availability) {
						console.log('receiverListener', availability);

						if(availability === chrome.cast.ReceiverAvailability.AVAILABLE) {
						$(".button").removeAttr("disabled").text("Start");
						}
						}

						function onSessionRequestSuccess(session) {
						console.log('onSessionRequestSuccess', session);

						//Aqui almacena la url del canal con el formato correcto
						var mediaInfo = new chrome.cast.media.MediaInfo(
						//"https://xcdrsbsv-a.beenet.com.sv/foxsports1_720/foxsports1_720_out/playlist.m3u8",
						//"video/mp4"
							//Se obtiene el valor de la Cookie
							localStorage.getItem("urlCast")
											
						);
						
						//Carga la data que es enviada  por medio del chromecast
						var request = new chrome.cast.media.LoadRequest(mediaInfo);
						session.loadMedia(request, onMediaLoadSuccess, onError);
						}
						
						

						function onMediaLoadSuccess(e) {
						console.log('onMediaLoadSuccess', e);
						}



						document.getElementById("btn").onclick = function() {

						chrome.cast.requestSession(onSessionRequestSuccess, onError);
						};
						

				 </script>
			
			
			<center><div id="myDiv"  ></div></center>
		
		
	    
		<!--  Playlists -->
		<ul id="playlists" style="display:none;">
			<li data-source="reproduciendo" data-playlist-name="Reproduciendo Ahora" data-thumbnail-path="content/thumbnails/p-mixed.jpg">
        		<p class="fwduvp-categories-title"><span class="fwduvp-header">Title: </span><span class="fwduvp-title">Reproduciendo</span></p>
			</li>
			

		    @foreach($categories as $category)
				<li data-source="{{$category -> id}}" data-playlist-name="{{$category -> name}}" data-thumbnail-path="content/thumbnails/p-mixed.jpg">
					<p class="fwduvp-categories-title"><span class="fwduvp-header">Title: </span><span class="fwduvp-title">{{$category -> name}}</span></p>
				</li>
			@endforeach
		</ul>
		
		{{--Muestra la lista de reproduciendo ahora y selecciona el canal con el que se comenzo a reproducir la primera vez--}}
		<ul id="reproduciendo" style="display:no " hidden>
			@foreach($channels as $channel)
				@if($channel-> title == $_GET['channel'])	
				
					
					<li data-thumb-source="{{$channel -> icon_url}}" data-video-source="{{$channel -> stream_url}}" data-poster-source="{{$channel -> icon_url}}" data-downloadable="no">
						
						<div data-video-short-description="">
							<div>
								<p class="fwduvp-thumbnail-title">{{$channel -> title}}</p>
							</div>
						</div>
					</li>
				@endif
			@endforeach
		</ul>

		{{--Muestra la categorias y el listado de los canales--}}
		@foreach($categories as $category)
		<ul id="{{$category -> id}}" style="display:none;">
				
				@foreach($channels as $channel)
					@if($channel-> genre_id == $category-> id)	  		
						<li  data-thumb-source="{{$channel -> icon_url}}" data-video-source="{{$channel -> stream_url}}" data-poster-source="{{$channel -> icon_url}}" data-downloadable="no" >
							
							
							<div data-video-short-description="">
								<div>
									<p class="fwduvp-thumbnail-title">{{$channel -> title}}</p>
								</div>
							</div>
						</li>
						
						
						
					@endif
				@endforeach
			</ul>
		@endforeach
	
		


		
	</body>
</html>
