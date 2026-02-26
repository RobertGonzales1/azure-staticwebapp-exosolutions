<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "IT"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "IT"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "IT"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "IT"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "IT"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/fd962a80b0a7c5aff21c518d2ab0a953_fit.png"); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20250603053517" type="text/javascript"></script>
	<script src="js/a18ecadc3b6000779ac82e9dbca541c4-bundle.js?ts=20250603053517" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250603053517" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="css/a18ecadc3b6000779ac82e9dbca541c4-bundle.css?ts=20250603053517" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="apple-touch-icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="icon" type="image/png" sizes="120x120" href="gallery/favicons/favicon-120x120.png"><link rel="apple-touch-icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="icon" type="image/png" sizes="152x152" href="gallery/favicons/favicon-152x152.png"><link rel="apple-touch-icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="180x180" href="gallery/favicons/favicon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="gallery/favicons/favicon-192x192.png"><link rel="apple-touch-icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="icon" type="image/png" sizes="60x60" href="gallery/favicons/favicon-60x60.png"><link rel="apple-touch-icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" sizes="76x76" href="gallery/favicons/favicon-76x76.png"><link rel="icon" type="image/png" href="gallery/favicons/favicon.png">
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = true;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18ecadc3b6000779ac82e9dbca541c4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095b4bec9ff3271d27df86" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec3dcc18e009002c4b5168f63869a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/0c682ce6645e41d8dd342ce91160cca4_768x460_fit.png?ts=1748918121"></a></div></div></div><div id="a18ec6c64343000880a23f692d326f09" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec6c7690600af1fefd1595788cb61" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095d116ba911db31eb005f" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><?php MenuElement::render((object) array(
	'type' => 'hmenu',
	'dir' => 'ltr',
	'items' => array(
		(object) array(
			'id' => 1,
			'href' => '{{base_url}}',
			'name' => 'Home',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 2,
			'href' => 'Contacts/',
			'name' => 'Contact Us',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 3,
			'href' => 'Resources/',
			'name' => 'Resources',
			'class' => '',
			'children' => array()
		),
		(object) array(
			'id' => 4,
			'href' => 'https://exosphereblog.blogspot.com/',
			'target' => '_blank',
			'name' => 'Blog',
			'class' => '',
			'children' => array()
		)
	)
)); ?><div class="clearfix"></div></div></div></div><div id="a18ec6c5fcbc005de2d5f58576725730" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec6c7b8f000909ca0dcf47b0a466f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec6c7b8f001f7743ecdb016e15246" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ec6c7f53900a6e52777476261eb92" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.facebook.com/exosolutionsus" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4267b2"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a19187959bbc0040341b889b24edb279" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec6c94ab900f65bb90cac69f9c611" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/company/exosphere-solutions/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#2867b2"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a18ecbb3c9c6004a4f74aa041e3731fc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ec6c875000023959e1683254e3fc8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.youtube.com/@ExosphereSolutions" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ff0000"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a18ecbb56724002735fe56315ee0be7a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecbb3b5eb00f2755111fee005a05d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.yelp.com/biz/exosphere-solutions-martinez" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ff1a1a"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="wb_main_a18ecadc3b6000779ac82e9dbca541c4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecadc40b800092976cf966dcffa1f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18f8585f5e100150a0a3bd6a6063202" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecadc40b8020eeb04acbbf6cab931" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1">IT Solutions</h1>
</div></div></div></div></div><div id="a18ecadc40ba0140f6c64171418ad7b3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85bcbd9c003d33ba3be8e628e4a9" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85c857f900faa0ebabddaa1d6af7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/edda2049ac83cf7785a6821e045f566a_fit.png?ts=1748918121"></div></div></div></div></div><div id="a18f85cadf080043189ec56ad26cf6b1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f8950d6ec001b96f8a6f8b14e5098" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a18f8950d6ec001b96f8a6f8b14e5098");
					var lib = new GalleryLib({"id":"a18f8950d6ec001b96f8a6f8b14e5098","height":500,"type":"list","trackResize":true,"interval":3,"speed":400,"images":[{"thumb":"gallery_gen\/3326a97dc50c9079831b5ccacfcee4a4_266.66666666667x150_fill.png","src":"gallery_gen\/9d0519f78323013937feed5634c6cc9e_fit.png?ts=1748918121","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c490830a749cb82d3b702ee28f243ea6_266.66666666667x150_fill.png","src":"gallery_gen\/fcbae4d267620fcf86d85f07a88f8f4a_fit.png?ts=1748918121","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/941579d4fc2e805e378b8b2ead554f0e_266.66666666667x150_fill.png","src":"gallery_gen\/c491291169ec6a8db57eed8ee574b49e_fit.png?ts=1748918121","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/841ad8464debe84df3ed99760832d1d5_266.66666666667x150_fill.png","src":"gallery_gen\/8526500176bbe22f64d634de47435375_fit.png?ts=1748918121","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/ef738da393df9e8388c96ecf67b4726e_266.66666666667x150_fill.png","src":"gallery_gen\/13d38fcdaf5fac3149861ba2d3ef1a52_fit.png?ts=1748918121","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/aa5c1741bf057dad31f2a2944901209e_266.66666666667x150_fill.png","src":"gallery_gen\/6dd3616ad6abc76e45c69609d5d2717c_fit.png?ts=1748918122","width":960,"height":540,"title":"","link":null,"description":"","address":""}],"border":{"border":"5px none #00008c"},"padding":10,"thumbWidth":100,"thumbHeight":100,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":false,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"roadmap","markerIconTypeId":"thumbs","zoom":2,"mapCenter":{"latLng":{"lat":41.244772343082,"lng":-5.2734375},"text":"41.244772343082076, -5.2734375"},"key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div></div></div><div id="a18f85cd13f7006dbc32c91fa476fe57" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85cd14060090e87f6b1a4392cd5f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/b78803f98fd7e2cf898d68d93c2762fb_fit.png?ts=1748918122"></div></div></div></div></div><div id="a18f85d1cd21006035396d097203e8d8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85d2795000a0c739fc5744ccfa0a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">We Protect Your Business and Data with our <br>
"Layers of Security"</h2>
</div><div id="a18f85d345d400e6ca599359b9260e03" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/dc6443a35b6a459e87ff56c6ff440cb1_fit.gif?ts=1748918122"></div></div></div></div></div><div id="a18f8582624900fa9570b170476e09b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ef3d3a78c01fe9db7a8455c7b79d1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ef3d20d5300aa50d6678871316892" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Layers of your Network</h2>
</div><div id="a18ecadc40bb00058a22c71a0b2bd993" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ecadc40b9001670b0d7cac583ac72" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecadc40b9014f672cf8e6d9f87511" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ecadc40ba02228e0417a9ce928f4f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Perimeter</h3>
</div></div></div><div id="a18ecadc40ba03c50f6fcc0756bf4fff" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ef3c7ece7008e21a6d39e3111ee4c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="65.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ef3c7facd00850bbf7e82de6bef72" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Network</h3>
</div></div></div><div id="a18ecadc40bb028bb1b0923a24a6a014" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ef3cfa0c9000e4efb9cf5e2028f2e" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1921.02083 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ecadc40ba050a589e034eb2b5181b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Endpoint/<br>
Computer</h3>
</div></div></div><div id="a18ecaf782d8001cea8fb649db921043" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecaf782e2002386bb310a71d96c1a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ecaf782ed001371adbe521730f52e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Application</h3>
</div></div></div><div id="a18ecaf792f6005318f01d09dfc81925" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecaf792fe00f32f25fdba481cecec" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ecaf7930a00e10e7e541bd45193d3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Data</h3>
</div></div></div><div id="a18ecaf79a25009201b37af168e32be7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18ecaf79a2b00aa3ead48c04f7b6d81" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="257.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18ecaf79a33009674635284ed76ae70" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3">Human</h3>
</div></div></div></div></div></div></div></div></div><div id="a18f85d6394c00e8fae2a47b2ef32199" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f8952e89c006b6881ead59f8a8985" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a18f8952e89c006b6881ead59f8a8985");
					var lib = new GalleryLib({"id":"a18f8952e89c006b6881ead59f8a8985","height":500,"type":"list","trackResize":true,"interval":3,"speed":400,"images":[{"thumb":"gallery_gen\/bb99eee179394ad6cd9d573bd0dc1b16_266.66666666667x150_fill.png","src":"gallery_gen\/647b692b03fdf22f4194c803e91e305b_fit.png?ts=1748918123","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/0d96b8e1acedfddb6afc08c0fb3eb0e2_266.66666666667x150_fill.png","src":"gallery_gen\/23a277d2a45bd01cc7479f34b4c49eb4_fit.png?ts=1748918123","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/eb6865e48d6f5cd26a7affa85ea478e2_266.66666666667x150_fill.png","src":"gallery_gen\/33bd2089be3f62e644052b5e0846e2af_fit.png?ts=1748918123","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/ba9ecf36ecd5cc5c3e92f94242154444_266.66666666667x150_fill.png","src":"gallery_gen\/00db902f8281d04543517d8ae920fc4f_fit.png?ts=1748918123","width":960,"height":540,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/aebb6b425a3bf5e324d2a6b9f1ecbe93_266.66666666667x150_fill.png","src":"gallery_gen\/c2f282de1560d8ce22400981dd03db78_fit.png?ts=1748918123","width":960,"height":540,"title":"","link":null,"description":"","address":""}],"border":{"border":"5px none #00008c"},"padding":10,"thumbWidth":100,"thumbHeight":100,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":false,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"roadmap","markerIconTypeId":"thumbs","zoom":2,"mapCenter":{"latLng":{"lat":41.244772343082,"lng":-5.2734375},"text":"41.244772343082076, -5.2734375"},"key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div></div></div><div id="a18f85d84a90006aeeb10b0f20f9c000" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85d84a9d0037e71e43499aa2737a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/a8effcf2756489315231ac20c42a7ed9_fit.png?ts=1748918123"></div></div></div></div></div><div id="a18f85dc46af00967ac27ded09ef6bf7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18f85dc46c0006c6cf3a7ef16866f30" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/a7211afbae6c40ad880b0918011df46f_fit.png?ts=1748918123"></div></div></div></div></div><div id="a1908fc7149100326fcca2d05d978510" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1908fc73ec900e1d4575fefa5adf89c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom8"><a data-_="Link" href="https://security.pii-protect.com/security/?email=robert.gonzales@exosolutions.us&amp;brand_key=8net4" target="_blank"><span style="color:#ffffff;">Claim Your Complementary Dark web Scan Here</span></a></h4>
</div></div></div></div></div></div></div><div id="wb_footer_a18ecadc3b6000779ac82e9dbca541c4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a196ccc4b03500d361600fdc3832d42f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom20" style="text-align: center;"><span style="font-size: 8px; line-height: 12.21px;">500 Henrietta St</span></p>

<p class="wb-stl-custom20" style="text-align: center;"><span style="font-size:8px;">Maritnez. CA 94553</span></p>
</div><div id="a188dda2010a19ad9e992146380b7007" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18ec4012c9a006bc447f9fa34edb950" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda2010a1de0929bab8628903d54" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;"><b>Copyright Exosphere Solutions<br>
<br>
Share us with your friends:</b></p>
</div><div id="a18ec400c0ee00ed344dcf2277cde7c3" class="wb_element wb-prevent-layout-click" data-plugin="BookmarksShare"><script type="text/javascript">$(function () { 
			 $(".wb_share_button").map(function (key, item) {
			  var $item = $(item);
			  if ($item.hasClass("share_button_facebook")) $item.attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_twitter")) $item.attr("href", "https://twitter.com/intent/tweet?url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_pinterest")) $item.attr("href", "https://www.pinterest.com/pin/create/button/?&url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_linkedin")) $item.attr("href", "https://www.linkedin.com/sharing/share-offsite/?url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_reddit")) $item.attr("href", "https://www.reddit.com/submit?url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_tumblr")) $item.attr("href", "https://www.tumblr.com/widgets/share/tool?posttype=link&canonicalUrl=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_whatsapp")) $item.attr("href", "https://api.whatsapp.com/send?text=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_telegram")) $item.attr("href", "https://t.me/share/url?url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_email")) $item.attr("href", "mailto:?body=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_vk")) $item.attr("href", "https://vk.com/share.php?url=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_odnoklassniki_ru")) $item.attr("href", "https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=" + encodeURIComponent(window.location.toString()));
			  if ($item.hasClass("share_button_print")) $item.attr("href", "javascript:window.print()");
			 });
			})</script><div class="wb_share_button_wrap colored"><a target="_blank" id="a18ec400c0ee00ed344dcf2277cde7c3_facebook" class="wb_share_button share_button_facebook size_32x32" style=""><span class="fa fa-facebook"></span></a><a target="_blank" id="a18ec400c0ee00ed344dcf2277cde7c3_twitter" class="wb_share_button share_button_twitter size_32x32" style=" margin-left: 4px;"><span class="ico-pl-twitter-x"></span></a><a target="_blank" id="a18ec400c0ee00ed344dcf2277cde7c3_email" class="wb_share_button share_button_email size_32x32" style=" margin-left: 4px;"><span class="fa fa-envelope"></span></a><a target="_blank" id="a18ec400c0ee00ed344dcf2277cde7c3_linkedin" class="wb_share_button share_button_linkedin size_32x32" style=" margin-left: 4px;"><span class="fa fa-linkedin"></span></a></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div>
<div class="wb_pswp" tabindex="-1" role="dialog" aria-hidden="true">
</div>
</div>{{hr_out}}</body>
</html>
