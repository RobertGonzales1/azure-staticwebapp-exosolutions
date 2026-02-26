<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "IT"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "IT"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "IT"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "IT"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "IT"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20240405084931" type="text/javascript"></script>
	<script src="js/a18dd3fbc4830057cefcb50d82b7216c-bundle.js?ts=20240405084931" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240405084931" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="css/a18dd3fbc4830057cefcb50d82b7216c-bundle.css?ts=20240405084931" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a18dd3fbc4830057cefcb50d82b7216c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095b4bec9ff3271d27df86" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b5c11e775006afa005c66bc00256b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18e8d7b7c6700f0408b1a3b6e25db4a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img alt="" src="gallery_gen/fd962a80b0a7c5aff21c518d2ab0a953_214x154_fit.png?ts=1712296180"></a></div></div></div></div></div><div id="a18b5c13296b0021d9c3b4448c101d25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda201095d116ba911db31eb005f" class="wb_element wb-menu wb-prevent-layout-click" data-plugin="Menu"><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="EMS/">EMS</a></li><li class="wb_this_page_menu_item"><a href="IT/">IT</a></li><li class=""><a href="Contacts/">Contacts</a></li><li class=""><a href="Resources/">Resources</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a18dd3fbc4830057cefcb50d82b7216c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc853006f909e5213fb268cd7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dd3fbc85603dd34997f3cc34013a0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dd3fbc854003e97713570f8bcd770" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a18dd3fbc85401e7dfa8c29fef2a8dbb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#ffffff;">IT </span></h1>

<h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#ffffff;">Solutions</span></h1>
</div></div></div></div></div><div id="a18dd3fbc8560496c093f2f7dd3206ee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc854022ef2597b26aafa4425" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:#ffffff;">Our services</span></h2>
</div><div id="a18dd3fbc858029c2d568e5e11a85af7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dd3fbc85403233cbf220b4c512a33" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc854045f3eaca6a11973bcb4" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dd3fbc85606222210ff4bc6890095" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#ffffff;">Hosting</span></h3>
</div></div></div><div id="a18dd3fbc85607e3ebd043ba3fffbb2a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc85405609eb217638de83e8b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dd3fbc856080cc0f8ebe6df6630a6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#ffffff;">Solutions</span></h3>
</div></div></div><div id="a18dd3fbc85805ef7814eef2d08d4fae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc85406af86f43b3c14ba4ca9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#4e19fc"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a18dd3fbc856097782cbc424f1df3ac2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#ffffff;">Managed IT</span></h3>
</div></div></div></div></div></div></div><div id="a18dd3fbc8590395331b406c4a27763a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc85706e91e37cc55b25af1b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18dd3fbc859000606a97515f8e04b59" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18dd3fbc8580084ef7ebebef2b1527a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><ul>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Backup and Storage Solutions</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Network Solutions</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Systems Setup and Support</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Managed IT</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Domains</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Hosting</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Email</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Procurement</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Vendor Management</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Training and Education</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">Cloud Services</span></h3>
</li>
<li>
<h3 class="wb-stl-heading3"><span style="color:#ffffff;">And Much More</span></h3>
</li>
</ul>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_a18dd3fbc4830057cefcb50d82b7216c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda2010a19ad9e992146380b7007" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18e1f802fe4006ba0a6fd9ffdc8b901" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda2010a1de0929bab8628903d54" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;"><span style="color:#ffffff;"><strong>Copyright Exosphere Solutions</strong></span></p>
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
