<html lang="en-US" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('partial.style')
  </head>
  <body class="archive category category-aktual category-2 fbq-layout fbq-layout--wide fbq-layout-responsive fbq-layout--topnav fbq-layout--topnav-inline" data-scheme="light" data-layout="wide" data-arrow_style="angle" data-arrow_background="square" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <div class="fbq-page-load fbq-p-bg-bg">
      <div class="fbq-page-load-spinner">
        <div class="fbq-loading fbq-loading--fade-logo fbq-p-border-border"><img src="{{asset('assets/wp-content/uploads/2018/02/logo-roll1.png')}}" alt="logo" /></div>
      </div>
    </div>
    <div class="fbq-wrapper fbq-p-bg-bg fbq-wrapper--parallax-footer fbq-wrapper--header-transparent">
      <header class="fbq-header" data-transparent="1" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        @include('partial.navbar')
      </header>
      <div class="fbq-content fbq-content--no-header">
        <div class="fbq-content-wrapper">
          @yield('bread')
          <div class="fbq-container js-dynamic-navbar" id="main" class="fbq-main fbq-main--single blueprint-inactive" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
            @yield('main')
          </div>
        </div>
      </div>
      <!-- #primary -->
      @include('partial.dll_footer')
    </div>
    @include('partial.script')
  </body>
</html>

