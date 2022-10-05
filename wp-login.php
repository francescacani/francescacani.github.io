<!DOCTYPE html>
	<html lang="it-IT">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Login &lsaquo; Francesca Cani &#8212; WordPress</title>
	<meta name='robots' content='noindex, follow' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='http://www.francescacani.it/wp-includes/css/dashicons.min.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='http://www.francescacani.it/wp-includes/css/buttons.min.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='http://www.francescacani.it/wp-admin/css/forms.min.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='http://www.francescacani.it/wp-admin/css/l10n.min.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='http://www.francescacani.it/wp-admin/css/login.min.css?ver=5.9' type='text/css' media='all' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-it-it">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://it.wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://www.francescacani.it/wp-login.php" method="post">
			<p>
				<label for="user_login">Nome utente o indirizzo email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostra password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Ricordami</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Login" />
									<input type="hidden" name="redirect_to" value="http://www.francescacani.it/wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
								<a href="http://www.francescacani.it/wp-login.php?action=lostpassword">Password dimenticata?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="http://www.francescacani.it/">&larr; Torna a Francesca Cani</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Lingua</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="it_IT" lang="it" selected='selected' data-installed="1">Italiano</option></select>
					
					
					
						<input type="submit" class="button" value="Cambia">

					</form>
				</div>
				<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http:\/\/www.francescacani.it\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Efficacia della password sconosciuta","short":"Molto debole","bad":"Debole","good":"Media","strong":"Forte","mismatch":"Mancata corrispondenza"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-02-15 09:57:15+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"it"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s \u00e8 deprecata sin dalla versione %2$s! Usa %3$s al suo posto. Prova a scrivere del codice pi\u00f9 inclusivo."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script type='text/javascript' src='http://www.francescacani.it/wp-admin/js/password-strength-meter.min.js?ver=5.9' id='password-strength-meter-js'></script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.francescacani.it/wp-includes/js/wp-util.min.js?ver=5.9' id='wp-util-js'></script>
<script type='text/javascript' id='user-profile-js-extra'>
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"036149e9d9"};
/* ]]> */
</script>
<script type='text/javascript' id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-02-15 09:57:15+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"it"},"Your new password has not been saved.":["La tua nuova password non \u00e8 stata salvata."],"Hide":["Nascondi"],"Show":["Visualizza"],"Confirm use of weak password":["Conferma l'uso della password debole."],"Hide password":["Nascondi password"],"Show password":["Mostra password"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script type='text/javascript' src='http://www.francescacani.it/wp-admin/js/user-profile.min.js?ver=5.9' id='user-profile-js'></script>
	<div class="clear"></div>
	</body>
	</html>
	