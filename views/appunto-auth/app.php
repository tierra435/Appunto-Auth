<!DOCTYPE html>
<html>
<head>
    <title>AppuntoAuth 0.0.1</title>
<link rel="SHORTCUT ICON" href="<?=base_url()?>resources/appunto-auth/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/appunto-auth/css/loading_mask.css" />
</head>
<body>
<div id="loading-mask"></div>
<div id="loading">
  <div class="loading-indicator">
    <span id="loading-msg">Loading styles and images...</span>
  </div>
</div>

<div id='script-includes'>

	<!-- ExtJS style sheets -->
	<!-- <link rel="stylesheet" type="text/css" href="http://extjs.cachefly.net/ext-4.0.7-gpl/resources/css/ext-all.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="extjs/resources/css/ext-all.css"> -->
	<link rel="stylesheet" type="text/css" href="/lib/extjs-4.1.1/resources/css/ext-all.css">

	<!-- Application style sheets -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/appunto-auth/css/appunto_auth_icons.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/appunto-auth/css/appunto_auth_app.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/appunto-auth/css/appunto_auth_custom.css" /> 

	<!-- set base url, display type -->
	<script type="text/javascript">
		var ci_site_url = "http://192.168.3.10/auth/index.php",
			ci_base_url	= "http://192.168.3.10/auth/",
			appunto_auth_display_type = 'viewport';
	</script>

	<!-- ExtJS library -->
	<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Sencha ExtJS...';</script>
	<!-- <script type="text/javascript" src="http://extjs.cachefly.net/ext-4.0.7-gpl/ext-dev.js"></script> -->
	<!-- <script type="text/javascript" src="extjs/ext.js"></script> -->
	<script type="text/javascript" src="/lib/extjs-4.1.1/ext.js"></script>

	<!-- Application requirements -->
	<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Application...';</script>
	<script type="text/javascript" src="<?=base_url()?>resources/appunto-auth/appunto-auth-all.js"></script>
	<script type="text/javascript" src="<?=base_url()?>resources/appunto-auth/appunto-auth-start.js"></script>

</div>

<div id="login-header">
<? echo login_header(); ?>
</div>

</body>
</html>
