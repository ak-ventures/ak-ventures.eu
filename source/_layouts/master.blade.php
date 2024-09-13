<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <script>
            window.env = "{{ $page->env }}"
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-55HLH3M');</script>
        <!-- End Google Tag Manager -->

        <!-- Google tag (gtag.js) - GA4 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X3VVFV5MJ2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-X3VVFV5MJ2');
        </script>

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
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55HLH3M"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="app">
            <div class="hero bg-cover bg-center relative flex justify-end text-white" style="background-image: url('/assets/images/tallinn_panorama_1200_675.jpg');">
                <div class="w-full md:w-3/5 lg:w-1/2 pt-20 pb-20 md:py-20 lg:py-32 px-4 flex justify-center lg:justify-start">
                    <div class="max-w-xl text-center md:text-left">
                        <h1 class="mb-8 text-4xl lg:text-5xl font-bold leading-normal"><a href="/">A&K Ventures OÜ</a></h1>
                        <h2 class="text-2xl font-light leading-normal">
                            Profitable ventures powered by Estonian e-residency.
                        </h2>
                    </div>
                </div>
            </div>

            @yield('body')

            <footer class="text-gray-100">
                <div class="bg-gray-900 px-4 py-2 text-sm">
                    <div class="container flex flex-wrap justify-center items-center mx-auto">
                        <div class="flex flex-col sm:flex-row items-center gap-2">
                            <a href="/privacy">Privacy Policy</a>  
                            <span class="hidden sm:inline-block">|</span>
                            <a href="javascript:CookieScript.instance.show()">Cookie Settings</a>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700 px-4 py-8 font-thin text-sm">
                    <div class="container mx-auto text-center">
                        <p class="mb-1">
                            © 2016-{{ date('Y') }} A&amp;K Ventures OÜ. All rights reserved.
                        </p>
                        <p class="mb-1 text-gray-200">
                            A&K Ventures OÜ | Sepapaja 6 | Tallinn 15551 | Estonia | +372 71 22 225 | info@ak-ventures.eu
                        </p>
                        <p class="mb-1 text-gray-200">
                            Board Members: Karol Kaczmarek, Amadeusz Annissimo | Registered at Tartu County Court Registration Department
                        </p>
                        <p class="mb-1 text-gray-200">
                            Registry Code: 14080385 | EU VAT: EE102039335
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
        </script><script type="text/javascript">window.Beacon('init', '0cc4700a-8697-42f4-86cd-62fbc9500cfb')</script>
    </body>
</html>
