

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	@include('partial.style')
</head>
	<body class="home page-template-default page page-id-2273 fbq-layout fbq-layout--wide fbq-layout-responsive fbq-layout--topnav fbq-layout--topnav-inline" data-scheme="light" data-layout="wide" data-arrow_style="angle" data-arrow_background="square" itemscope="itemscope" itemtype="http://schema.org/WebPage">
	  @include('partial.dll_header')
	  <div class="fbq-wrapper fbq-p-bg-bg fbq-wrapper--parallax-footer fbq-wrapper--header-transparent">
	  	@include('partial.header')
	    @yield('main')
	    @include('partial.footer')
	  </div>
	  @include('partial.dll_footer')
	  @include('partial.script')
	</body>
</html>
