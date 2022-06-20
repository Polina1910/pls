<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
<link rel="manifest" href="/manifest.json">

@foreach ($_GET as $param => $val)
	@if (strncmp($param, 'utm_', 4) === 0 || $param == 'gclid')
		<meta name="robots" content="noindex,nofollow"/>
	@endif
@endforeach

@if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'facebook') !== false)
	<meta property="og:image" content="{{url('/images/og-fb.jpg')}}">
@else
	<meta property="og:image" content="{{url('/images/og.jpg')}}">
@endif

@if (Lang::get_langs()->count() > 1)
	@foreach (Lang::get_langs() as $lang)
		<link rel="alternate" hreflang="{{$lang->tag}}" href="{{Lang::get_url($lang->tag)}}"/>
	@endforeach
@endif

<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/152x152.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/57x57.png">
<link rel="apple-touch-icon-precomposed" href="/images/57x57.png">

<link rel="manifest" href="/manifest.json">

<script>
	if (navigator.serviceWorker.controller) {
		// console.log('[PWA Builder] active service worker found, no need to register')
	} else {
		navigator.serviceWorker.register('/sw.js', {
			scope: './'
		}).then(function(reg) {

		});
	}
</script>

<script>
	var is_mobile = {{(Agent::isMobile() && !Agent::isTablet()) ? 'true' : 'false'}}
	
	var lang = document.querySelector('html').getAttribute('lang')
	
	if (lang === '{{ Lang::get_main() }}') 
		lang = ''
	else 
		lang = '/' + lang;
		
</script>