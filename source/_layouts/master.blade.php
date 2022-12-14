<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LCXJZK1NY"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0LCXJZK1NY');
        </script>

        <!-- Fathom -->
        <script src="https://kings-leon-open.ak-ventures.eu/script.js" data-site="XZZTLBTC" defer></script>
        <!-- / Fathom -->

        <title>{{ $page->title }}</title>

        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:locale" content="{{ $page->locale }}" />
        <meta name="description" content="{{ $page->description }}" />
        <meta property="og:description" content="{{ $page->ogDescription ?? $page->description }}" />
        <link rel="canonical" href="{{ $page->cannonical ?? rtrim($page->getUrl()) . '/' }}" />
        <meta property="og:url" content="{{ $page->cannonical ?? rtrim($page->getUrl()) . '/' }}" />
        <!-- <meta property="og:image" content="{{ $page->ogImage ?? rtrim($page->baseUrl) . '/assets/images/social-share.jpg' }}" /> -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@akventuresou" />

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    </head>
    <body class="font-serif">
        <div id="app">
            @yield('body')
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
        </script><script type="text/javascript">window.Beacon('init', '0cc4700a-8697-42f4-86cd-62fbc9500cfb')</script>
    </body>
</html>
