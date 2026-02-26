<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "EMS"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "EMS"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "EMS"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "EMS"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "EMS"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20240405084931" type="text/javascript"></script>
	<script src="js/a18dbc0f6eba00c70efddc1df646de5b-bundle.js?ts=20240405084931" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240405084931" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="css/a18dbc0f6eba00c70efddc1df646de5b-bundle.css?ts=20240405084931" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="icon" href="/gallery/customcolor_icon_transparent_background.png" type="image/png" /><meta name="google-site-verification" content="" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18dbc0f6eba00c70efddc1df646de5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095b4bec9ff3271d27df86" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b5c11e775006afa005c66bc00256b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18e8d7b7c6700f0408b1a3b6e25db4a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img alt="" src="gallery_gen/fd962a80b0a7c5aff21c518d2ab0a953_214x154_fit.png?ts=1712296178"></a></div></div></div></div></div><div id="a18b5c13296b0021d9c3b4448c101d25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095d116ba911db31eb005f" class="wb_element wb-menu wb-prevent-layout-click" data-plugin="Menu"><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class="wb_this_page_menu_item"><a href="EMS/">EMS</a></li><li class=""><a href="IT/">IT</a></li><li class=""><a href="Contacts/">Contacts</a></li><li class=""><a href="Resources/">Resources</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a18dbc0f6eba00c70efddc1df646de5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dbc0f74f600e1c136d5ebc7fb708f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dbc0f74f8045ca12f086ba28524ad" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dbc0f74f6013c0b38f3d292615738" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a18dbc0f74f602fdb537746f18543712" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#f8f9fa;">EMS </span></h1>

<h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#f8f9fa;">Solutions</span></h1>
</div></div></div></div></div><div id="a18dbc0f74f8058fb21de28f7c07b63a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dbc0f74f60338c3842e752fb1a538" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:#f8f9fa;">Our services</span></h2>
</div><div id="a18dbc0f74fa02019aa345f101cd01ce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dbc0f74f6049784c925f15fd4518e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dbc0f74f6054bf69d96a9b628658c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dbc0f74f8070a52558032e3bf1eed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#f8f9fa;">Imagetrend</span></h3>
</div></div></div><div id="a18dbc0f74f808f7a9c4155d1e27b411" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dbc0f74f606d0b219340b1872d75f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dbc0f74f900588bf244ff04137416" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#f8f9fa;">Complience</span></h3>
</div></div></div><div id="a18dbc0f74fa0579f75358b3972d5396" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dbc0f74f7002cc7ffab8c11f41838" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dbc0f74f9010ede128bcda53dd1aa" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#ffffff;">Training</span></h3>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_a18dbc0f6eba00c70efddc1df646de5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda2010a19ad9e992146380b7007" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18e1f802fe4006ba0a6fd9ffdc8b901" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda2010a1de0929bab8628903d54" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;"><span style="color:#ffffff;"><strong>Copyright Exosphere Solutions</strong></span></p>
</div><div id="a18e1f8013e300452b909e713d86d4dc" class="wb_element wb-prevent-layout-click" data-plugin="BookmarksShare"><script type="text/javascript">$(function () { 
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
			})</script><div class="wb_share_button_wrap colored"><a target="_blank" id="a18e1f8013e300452b909e713d86d4dc_facebook" class="wb_share_button share_button_facebook size_32x32" style=""><span class="fa fa-facebook"></span></a><a target="_blank" id="a18e1f8013e300452b909e713d86d4dc_twitter" class="wb_share_button share_button_twitter size_32x32" style=" margin-left: 4px;"><span class="ico-pl-twitter-x"></span></a><a target="_blank" id="a18e1f8013e300452b909e713d86d4dc_email" class="wb_share_button share_button_email size_32x32" style=" margin-left: 4px;"><span class="fa fa-envelope"></span></a></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
