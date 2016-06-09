<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.Szablon_Akwa-Hobby
 * @author		Mateusz Stanek
 * @license		Private
 */

// No direct access.
defined('_JEXEC') or die;

?>

<!doctype html >

<html lang="pl" >


	<head>

		<meta name="author" content="Mateusz Stanek" />
		<meta name="msvalidate.01" content="D2853CDE91009131E571A861E9FB65DF" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/szablonakwa-hobby.pl/css/gl-uklad.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/szablonakwa-hobby.pl/css/modules.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/szablonakwa-hobby.pl/css/blog.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/szablonakwa-hobby.pl/css/elem_wsp.css" type="text/css" />
		
		<script>
 		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 		 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-29185453-1', 'auto');
 		 ga('send', 'pageview');

		</script>
		
		<!-- Quantcast Tag -->
		<script type="text/javascript">
		var _qevents = _qevents || [];

		(function() {
		var elem = document.createElement('script');
		elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		elem.async = true;
		elem.type = "text/javascript";
		var scpt = document.getElementsByTagName('script')[0];
		scpt.parentNode.insertBefore(elem, scpt);
		})();

		_qevents.push({
		qacct:"p-SzXBTVQ2LEb4-"
		});
		</script>
		
		<jdoc:include type="head" />

	</head>

	<body>

		<!-- POZIOMA GORNA REKLAMA -->
		<div id="reklama">
			<script type="text/javascript"><!--
				google_ad_client = "ca-pub-4170003174900502";
				/* GĂłrna */
				google_ad_slot = "6052330905";
				google_ad_width = 728;
				google_ad_height = 90;
				//-->
			</script>
			<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>

		<div id="all">

			<!-- NAGLOWEK STRONY - TytuL + logo -->
			<header id="naglowek_strony" >
				<div id="gorna-belka">
					<jdoc:include type="modules" name="gorna-belka" />
				</div>
			</header>

			<!-- GORNY BOX NA CALEJ SZEROKOSCI STRONY -->
			<div id="box-gora-caly">
				<jdoc:include type="modules" name="box-pod-menu-calosc" />
			</div>

			<!-- GORNE MENU  -->
			<nav id="menu_gorne">
				<jdoc:include type="modules" name="menu-gorne" />
			</nav>

			<!-- 3 BOXY W GORNEJ CZESCI STRONY -->
			<div id="trzy-boxy-gora">
				<div id="box-g-1">
					<jdoc:include type="modules" name="box-gora-lewa-strona" style="xhtml" />
				</div>

				<div id="box-g-2">
					<jdoc:include type="modules" name="box-gora-srodek" style="xhtml" />
				</div>

				<div id="box-g-3">
					<jdoc:include type="modules" name="box-gora-prawa-strona" style="xhtml" />
				</div>
			</div>

			<!-- KONTENER - ZAWARTOSC STRONY -->
			<div id="kontener">

				<!-- LEWA KOLUMNA -->
				<div id="lewa">
					<jdoc:include type="modules" name="srodek" />
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>

				<!-- SRODKOWA KOLUMNA -->
				<div id="srodek">
					<jdoc:include type="modules" name="lewa-str-menu" style="xhtml" />
					<jdoc:include type="modules" name="lewa-str-ank" style="xhtml" />
					<jdoc:include type="modules" name="prawa-str-log" style="xhtml" />
				</div>

				<!-- PRAWA KOLUMNA -->
				<div id="prawa">
					<jdoc:include type="modules" name="prawa-str-menu" style="xhtml" />
					
				</div>

			</div>


			<!-- DOLNY BOX NA CALEJ SZEROKOSCI STRONY -->
			<div id="box-dol-caly">
				<jdoc:include type="modules" name="box-dol-caly" />
			</div>

			<!-- 3 BOXY W DOLNEJ CZESCI STRONY -->
			<div id="trzy-boxy-dol">
				<div id="box-d-1">
					<jdoc:include type="modules" name="box-dol-lewa-strona" />
				</div>

				<div id="box-d-2">
					<jdoc:include type="modules" name="box-dol-srodek" />
				</div>

			  	<div id="box-d-3">
					<jdoc:include type="modules" name="box-dol-prawa-strona" />
				</div>
			</div>

			<!-- STOPKA -->
			<footer id="stopka">
				<jdoc:include type="modules" name="stopka" />
			</footer>
		</div>
	</body>
</html>