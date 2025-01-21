<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Weidel Coin Team">
      <meta name="robots" content="index, follow">
      <link rel="canonical" href="https://weidelcoin.com">
      <!-- Favicon and Icons -->
      <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
      <link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon.png')}}">
      <!-- Open Graph (OG) Tags -->
      <meta property="og:title" content="WeidelCoin - The Meme Crypto Inspired by Alice Weidel and Political Trends!">
      <meta property="og:description" content="WeidelCoin: A unique meme cryptocurrency inspired by Alice Weidel and the changing political landscape. Join a bold, humorous, and innovative crypto movement that's turning heads in Germany and beyond!">
      <meta property="og:image" content="{{url('assets/images/og-image.png')}}">
      <meta property="og:url" content="https://weidelcoin.com/">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Weidel Coin">

      <!-- Twitter Card Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="WeidelCoin - The Meme Crypto Inspired by Alice Weidel and Political Trends!">
      <meta name="twitter:description" content="WeidelCoin: A unique meme cryptocurrency inspired by Alice Weidel and the changing political landscape. Join a bold, humorous, and innovative crypto movement that's turning heads in Germany and beyond!">
      <meta name="twitter:image" content="">
      <meta name="twitter:site" content="@weidelcoin">
      <link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon.png')}}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/images/apple-touch-icon-180x180.png')}}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{url('assets/images/apple-touch-icon-152x152.png')}}">
      <link rel="apple-touch-icon" sizes="167x167" href="{{url('assets/images/apple-touch-icon-167x167.png')}}">
      <!-- Bootstrap CSS -->
      <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('assets/css/aos.css')}}" rel="stylesheet">
      <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
      <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet">
      <link href="{{url('assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <title>WeidelCoin - The Meme Crypto Inspired by Alice Weidel and Political Trends!</title>
   </head>
   <!-- Structured Data (JSON-LD) -->
   <script type="application/ld+json">
   {
   "@context": "https://schema.org",
   "@type": "Website",
   "url": "https://weidelcoin.com/",
   "name": "Weidel Coin",
   "description": "WeidelCoin: A unique meme cryptocurrency inspired by Alice Weidel and the changing political landscape. Join a bold, humorous, and innovative crypto movement that's turning heads in Germany and beyond!",
   "keywords": ["Weidel Coin", "meme coin", "Solana blockchain", "cryptocurrency", "funny crypto"],
   "image": "{{url('assets/images/og-image.png')}}"
   }
   </script>
   <body>
      <header>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="h-main d-flex justify-content-between align-items-center">
                     <div class="logo">
                        <a href="{{url('/')}}">
                           <img src="{{url('assets/images/logo.png')}}" alt="">
                        </a>
                     </div>
                     <div class="h-menu">
                        <nav class="navbar navbar-expand-lg p-0">
                           <div class="collapse navbar-collapse">
                              <div class="navbar-nav">
                                 <a class="nav-link" href="#elon-musk">Elon Musk</a>
                                 <a class="nav-link" href="#about" data-translate-key="about">About Us</a>
                                 <a class="nav-link" href="#roadmap"  data-translate-key="roadmap">Roadmap</a>
                                 <a class="nav-link" href="#weidelonomics"  data-translate-key="weidelonomics">Weidelonomics</a>
                                 <a class="nav-link" href="#faq"  data-translate-key="faqs">FAQS</a>
                                 <a class="nav-link" href="#team"  data-translate-key="team">Team</a>
                              </div>
                              <div class="responsive-btn">
                                 <button class="btn btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </nav>
                     </div>
                     <div class="h-btn d-flex align-items-center">
                        <button class="navbar-toggler" type="button">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                        </button>
                        <div class="buy-btn">
                           <button class="btn btn-primary" data-translate-key="buy now">Buy Now</button>
                        </div>
                        <div class="h--language position-relative notranslate ms-4">
                           <!-- <button class="language-btn" id="currentLanguage">en<img src="assets/images/flags/en.svg"></button> -->
                           <button class="language-btn" id="currentLanguage">en <img src="assets/images/flags/en.svg"></button>
                           <div class="language-dropdown" id="languageSwitcher">
                              <ul>
                                 <li class="p-2 cursor-pointer">
                                    <a href="javascript:void(0)" class="lang-en lang-select" data-lang="en"><img alt="" src="assets/images/flags/en.svg"><span>English</span></a>
                                 </li>
                                 <li class="p-2 cursor-pointer">
                                    <a href="javascript:void(0)" class="lang-en lang-select" data-lang="de"><img alt="" src="assets/images/flags/de.svg"><span>German</span></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="main-sec">
         <section class="hero">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6 col-12">
                     <div class="hero-media position-relative text-center" data-aos="fade-right">
                        <span class="position-relative">
                           <span class="h-text" data-translate-key="vote_for_alice_weidel">Vote for alice weidel</span>
                           <img src="{{url('assets/images/votting.gif')}}" alt="">
                        </span>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="hero-intro">
                        <div class="join-contract">
                           <div class="form-group position-relative mb-50" data-aos="fade-left">
                              <span class="form-control" id="copyText1">3SxYyBUo3qvRKaQummWV3Fpx1zoy3eEy4tWGqivyjXcp</span>
                              <button class="btn btn-primary" type="button" id="copy-btn" onclick="withJquery();" data-toggle="tooltip" data-placement="top" title="Copy Address">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-files">
                                    <path d="M20 7h-3a2 2 0 0 1-2-2V2"></path>
                                    <path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z"></path>
                                    <path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8"></path>
                                 </svg>
                                 <span data-translate-key="copy">Copy</span>
                              </button>
                           </div>
                           <div class="join-social d-flex justify-content-center" data-aos="fade-left">
                              <a href="https://t.me/Weidel_Coin" target="_blank" data-toggle="tooltip" data-placement="top" title="Telegram">
                                 <svg  width="40px" height="40px" version="1.1" id="fi_739260" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                       <g>
                                          <path d="M501.974,41.949c-8.237-7.547-19.944-10.062-30.555-6.565L21.231,183.785c-12.269,4.044-20.589,14.996-21.196,27.899
                                             c-0.606,12.904,6.649,24.589,18.483,29.768l111.335,48.712c0.543,2.52,32.504,150.756,33.591,155.795
                                             c1.395,6.472,4.68,12.237,11.639,14.01c7.039,1.793,12.012-2.054,17.264-5.986c2.923-2.188,82.62-61.865,82.62-61.865
                                             l96.589,79.039c5.626,4.606,12.502,7.008,19.513,7.008c3.338-0.001,6.708-0.545,9.986-1.657
                                             c10.166-3.447,17.702-11.744,20.159-22.193L511.18,71.813C513.737,60.938,510.211,49.496,501.974,41.949z M199.544,318.077
                                             c-0.055,0.13-0.109,0.277-0.16,0.453l-18.624,65.068l-20.784-96.395l142.917-79.405l-99.921,104.478
                                             C201.398,313.922,200.24,315.912,199.544,318.077z M205.455,406.602l8.459-29.555l8.091-28.269l28.991,23.724L205.455,406.602z
                                             M481.908,64.927l-89.965,382.502c-0.045,0.19-0.105,0.452-0.545,0.601c-0.436,0.148-0.648-0.021-0.798-0.145l-105.691-86.488
                                             c-0.003-0.002-0.005-0.005-0.008-0.007l-48.969-40.072L393.255,156.82c5.138-5.373,5.578-13.694,1.035-19.579
                                             c-4.545-5.886-12.707-7.567-19.204-3.955L142.135,262.715L30.572,213.902c-0.34-0.148-0.527-0.231-0.5-0.806
                                             c0.027-0.573,0.221-0.638,0.573-0.754l450.188-148.4c0.218-0.071,0.464-0.153,0.826,0.177
                                             C482.021,64.451,481.961,64.703,481.908,64.927z"></path>
                                       </g>
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                 </svg>
                              </a>
                              <a href="https://x.com/weidelcoin?s=11" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">
                                 <svg id="fi_5968958" width="40px" height="40px" enable-background="new 0 0 1226.37 1226.37" viewBox="0 0 1226.37 1226.37" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"></path>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                 </svg>
                              </a>
                              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Trade on Raydium">
                                 <svg width="40px" height="40px" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" data-sentry-element="svg" data-sentry-source-file="RaydiumLogo.tsx" data-sentry-component="RaydiumLogo">
                                    <path d="M34.3297 15.8661V28.7492L20 37.021L5.66234 28.7492V12.1978L20 3.91808L31.013 10.2797L32.6753 9.32068L20 2L4 11.2388V29.7083L20 38.947L36 29.7083V14.9071L34.3297 15.8661Z" fill="url(#a)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M15.988 28.7572H13.5904V20.7173H21.5824C22.3385 20.7089 23.061 20.4031 23.5934 19.8662C24.1259 19.3293 24.4255 18.6043 24.4276 17.8481C24.4319 17.4742 24.3597 17.1034 24.2154 16.7584C24.0711 16.4134 23.8577 16.1016 23.5884 15.8421C23.3278 15.5743 23.0158 15.362 22.6711 15.2178C22.3264 15.0736 21.9561 15.0005 21.5824 15.003H13.5904V12.5574H21.5904C22.991 12.5658 24.3319 13.1259 25.3222 14.1163C26.3126 15.1067 26.8727 16.4475 26.8811 17.8481C26.8897 18.9202 26.5627 19.9681 25.9461 20.8451C25.3785 21.6842 24.5786 22.3397 23.6444 22.7313C22.7193 23.0246 21.7537 23.1703 20.7832 23.1628H15.988V28.7572Z" fill="url(#b)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M26.8252 28.5574H24.028L21.8701 24.7932C22.7238 24.741 23.5659 24.5688 24.3716 24.2817L26.8252 28.5574Z" fill="url(#c)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M32.6593 13.1888L34.3137 14.1079L35.968 13.1888V11.2467L34.3137 10.2877L32.6593 11.2467V13.1888Z" fill="url(#d)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <defs data-sentry-element="defs" data-sentry-source-file="RaydiumLogo.tsx">
                                       <linearGradient id="a" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="b" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="c" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="d" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                              </a>
                              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Trade on Jupiter"><img src="{{url('assets/images/jupiter.png')}}" alt=""></a>
                           </div>
                        </div>
                        <div class="join-btn justify-content-center" data-aos="fade-left">
                           <!-- <a href="" class="btn btn-primary">Buy Weidel Coin</a>
                           <a href="" class="btn btn-primary">Join the Community</a> -->
                           <a href="#about" class="btn btn-primary nav-link" data-translate-key="learn_more">Learn More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-12">
                     <div class="join-contract">
                        <div class="form-group position-relative mb-40">
                           <input class="form-control" type="" name="" value="3SxYyBUo3qvRKaQummWV3Fpx1zoy3eEy4tWGqivyjXcp" readonly="">
                           <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-files"><path d="M20 7h-3a2 2 0 0 1-2-2V2"></path><path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z"></path><path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8"></path></svg> Copy</button>
                        </div>
                        <div class="join-social d-flex justify-content-center">
                           <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></a>
                           <a href="" target="_blank"><svg id="fi_5968958" width="24" height="24" enable-background="new 0 0 1226.37 1226.37" viewBox="0 0 1226.37 1226.37" xmlns="http://www.w3.org/2000/svg"><path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                        </div>
                     </div>
                  </div>
                  </div> -->
            </div>
         </section>
         <section class="prominent-supporter page-paddings pt-0 page-section" id="elon-musk">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="page-title mb-20 text-center" data-aos="fade-up">
                        <h2 data-translate-key="elon_musk_supporter">Elon Musk: Our Prominent Supporter</h2>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center">
                  <div class="col-md-6 col-12 first-sec">
                     <div class="prominent-box" data-aos="fade-right">
                        <h3 data-translate-key="elon_musk_publicly_supporter">Elon Musk has publicly supported Alice Weidel and the AfD on Twitter</h3>
                        <div class="page-btn">
                           <a href="https://x.com/elonmusk/status/1869986946031988780" target="_blank" class="btn btn-primary"><span data-translate-key="tweet">Tweet<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg></span></a>
                        </div>
                     </div>
                     <div class="prominent-box" data-aos="fade-right">
                        <h3 data-translate-key="conversation_between_elon_musk">A conversation between Elon Musk and Alice Weidel is scheduled to take place on Twitter on </h3>
                        <div class="page-btn">
                           <a href="https://x.com/Alice_Weidel/status/1875195415861293427" target="_blank" class="btn btn-primary"><span data-translate-key="tweet">Tweet<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12 last-sec">
                     <div class="supported text-center" data-aos="zoom-in">
                        <span class="position-relative">
                           <span class="s-text anim-typewriter" data-translate-key="only_the_afd_can_save_germany">Only the AfD can save Germany!</span>
                           <img src="{{url('assets/images/supporter.png')}}" alt="">
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="m-animation position-relative">
            <div class="marquee revers">
               <div class="animation-i d-flex">
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
               </div>
               <div class="animation-i d-flex">
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
               </div>
            </div>
            <div class="marquee">
               <div class="animation-i d-flex">
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
               </div>
               <div class="animation-i d-flex">
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
                  <span data-translate-key="weidel_coin">Weidel Coin</span>
               </div>
            </div>
         </section>
         <section class="about page-section" id="about">
            <div class="container">
               <div class="about-card">
                  <div class="row align-items-center">
                     <div class="col-12">
                        <div class="about-intro">
                           <div class="page-title" data-aos="fade-up">
                              <h2 data-translate-key="weidel_coin_solana">Weidel Coin – The Fun Coin on the Solana Blockchain!</h2>
                           </div>
                           <div class="about-des mb-30" data-aos="fade-up">
                              <p data-translate-key="weidel_coin_combines_fun">Weidel Coin combines fun, community, and technology. Supported by Elon Musk and built on the Solana blockchain, it’s a win-win for everyone involved. Created by the community, for the community – with a big dose of humor!</p>
                           </div>
                           <div class="page-btn d-flex justify-content-center" data-aos="zoom-in">
                              <button class="btn btn-primary" data-translate-key="buy_on_raydium" ><svg width="40px" height="40px" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" data-sentry-element="svg" data-sentry-source-file="RaydiumLogo.tsx" data-sentry-component="RaydiumLogo">
                                    <path d="M34.3297 15.8661V28.7492L20 37.021L5.66234 28.7492V12.1978L20 3.91808L31.013 10.2797L32.6753 9.32068L20 2L4 11.2388V29.7083L20 38.947L36 29.7083V14.9071L34.3297 15.8661Z" fill="url(#a)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M15.988 28.7572H13.5904V20.7173H21.5824C22.3385 20.7089 23.061 20.4031 23.5934 19.8662C24.1259 19.3293 24.4255 18.6043 24.4276 17.8481C24.4319 17.4742 24.3597 17.1034 24.2154 16.7584C24.0711 16.4134 23.8577 16.1016 23.5884 15.8421C23.3278 15.5743 23.0158 15.362 22.6711 15.2178C22.3264 15.0736 21.9561 15.0005 21.5824 15.003H13.5904V12.5574H21.5904C22.991 12.5658 24.3319 13.1259 25.3222 14.1163C26.3126 15.1067 26.8727 16.4475 26.8811 17.8481C26.8897 18.9202 26.5627 19.9681 25.9461 20.8451C25.3785 21.6842 24.5786 22.3397 23.6444 22.7313C22.7193 23.0246 21.7537 23.1703 20.7832 23.1628H15.988V28.7572Z" fill="url(#b)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M26.8252 28.5574H24.028L21.8701 24.7932C22.7238 24.741 23.5659 24.5688 24.3716 24.2817L26.8252 28.5574Z" fill="url(#c)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M32.6593 13.1888L34.3137 14.1079L35.968 13.1888V11.2467L34.3137 10.2877L32.6593 11.2467V13.1888Z" fill="url(#d)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <defs data-sentry-element="defs" data-sentry-source-file="RaydiumLogo.tsx">
                                       <linearGradient id="a" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="b" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="c" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="d" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>Buy on Raydium</button>
                              <button class="btn btn-primary" data-translate-key="buy_on_jupiter"><img src="assets/images/jupiter.png" alt="">Buy on Jupiter</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="roadmap-area page-paddings page-section" id="roadmap">
            <div class="container">
               <div class="row r-map">
                  <div class="col-12">
                     <div class="page-title mb-50 text-center" data-aos="fade-up">
                        <h2>Roadmap</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="roadmap-main position-relative">
                        <div class="roadmap-title">
                           <div class="r-title">
                              <h2 data-aos="zoom-in"  data-translate-key="roadmap">Roadmap</h2>
                           </div>
                        </div>
                        <div class="roadmap-right">
                           <div class="r-card position-relative" data-aos="fade-right">
                              <span class="year">Phase 1</span>
                              <h3 data-translate-key="team_building_promotion">Team Building & Promotion</h3>
                              <ul>
                                 <li data-translate-key="the_launch_weidel_coin">The launch of Weidel Coin is scheduled for <span class="yellow-text" data-translate-key='january_schedule'>January 9, 2025, at 9:00 AM UTC</span></li>
                                 <li data-translate-key="establishing_dedicated">Establishing a dedicated core team.</li>
                                 <li data-translate-key="marketing_campaigns">Marketing campaigns to build awareness.</li>
                                 <li data-translate-key="initial_community">Initial community activities.</li>
                              </ul>
                           </div>
                           <div class="r-card position-relative i-card" data-aos="fade-right">
                              <span class="year">Phase 2</span>
                              <h3 data-translate-key="listings_community_expansion">Listings & Community Expansion</h3>
                              <ul>
                                 <li data-translate-key="listings_well-known">Listing on well-known platforms like Raydium and Jupiter.</li>
                                 <li data-translate-key="community_growth_through">Community growth through viral campaigns and social media.</li>
                              </ul>
                           </div>
                           <div class="r-card position-relative" data-aos="fade-right">
                              <span class="year">Phase 3</span>
                              <h3 data-translate-key="exchange_listings">Exchange Listings & Growth</h3>
                              <ul>
                                 <li data-translate-key='listings_on_major_crypto'>Listings on major crypto exchanges.</li>
                                 <li data-translate-key='long-term_scaling'>Long-term scaling and international reach.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="tokenomics page-bg page-section" id="weidelonomics">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="page-title mb-50 text-center" data-aos="fade-up">
                        <h2 data-translate-key="weidelonomics">Weidelonomics</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="tokenomics-main d-flex justify-content-between align-items-center" id="counter">
                        <div class="l-tokenomics">
                           <div class="te-card position-relative shape1" data-aos="fade-right">
                              <div class="t-content">
                                 <span data-translate-key="wspan _cass"><span class="count percent" data-count="85">0</span>%</span>
                                 <h3 data-translate-key="liquidity">Liquidity</h3>
                                 <p data-translate-key="a_stable_foundation" >A stable foundation for trading.</p>
                              </div>
                           </div>
                           <div class="te-card position-relative shape2" data-aos="fade-right">
                              <div class="t-content">
                                 <span><span class="count percent" data-count="5">0</span>%</span>
                                 <h3 data-translate-key="the_team">The Team</h3>
                                 <p data-translate-key='support_and_motivation'>Support and motivation.</p>
                              </div>
                           </div>
                        </div>
                        <div class="i-tokenomics">
                           <img src="{{url('assets/images/tekonomics.png')}}" alt="" data-aos="zoom-in">
                        </div>
                        <div class="r-tokenomics">
                           <div class="te-card position-relative shape3" data-aos="fade-left">
                              <div class="t-content">
                                 <span><span class="count percent" data-count="5">0</span>%</span>
                                 <h3 data-translate-key='marketing'>Marketing</h3>
                                 <p data-translate-key='funding_viral_campaigns'>Funding viral campaigns.</p>
                              </div>
                           </div>
                           <div class="te-card position-relative shape4" data-aos="fade-left">
                              <div class="t-content">
                                 <span><span class="count percent" data-count="5">0</span>%</span>
                                 <h3 data-translate-key='major_exchanges'>Major Exchanges</h3>
                                 <p data-translate-key='listing_fee_and_partnerships'>Listing fees and partnerships.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="faq page-paddings page-section" id="faq">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="page-title text-center mb-50" data-aos="fade-up">
                        <h2 data-translate-key='frequently_asked'>Frequently Asked Questions</h2>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center">
                  <div class="col-md-6 col-12">
                     <div class="faq-media text-center">
                        <img src="{{url('assets/images/faq.png')}}" data-aos="fade-right">
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="faq-main">
                        <ul class="accordion-list">
                           <li data-aos="fade-up">
                              <h3 data-translate-key='is_this_a_joke_project'>Is this a joke project?</h3>
                              <div class="answer">
                                 <p data-translate-key='of_course_seriously'>Of course, but it’s seriously fun!</p>
                              </div>
                           </li>
                           <li data-aos="fade-up">
                              <h3 data-translate-key='whats_the_value_of_weidel_coin' >What’s the value of Weidel Coin?</h3>
                              <div class="answer">
                                 <p data-translate-key='priceless_but'>Priceless, but you can still buy it!</p>
                              </div>
                           </li>
                           <li data-aos="fade-up">
                              <h3 data-translate-key='why_should_i_invest'>Why should I invest?</h3>
                              <div class="answer">
                                 <p data-translate-key='because_winning_is'>Because winning is simply better! This section can be humorously designed, matching the meme theme.</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="team page-paddings pt-0 page-section" id="team">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="page-title text-center">
                        <div class="coin mb-40">
                           <img src="{{url('assets/images/logo.png')}}" alt="" data-aos="zoom-in">
                        </div>
                        <h2 data-aos="fade-up" data-translate-key='a_coin_everyone'>A Coin for Everyone – The Team is the Community!</h2>
                        <p data-aos="fade-up" data-translate-key='weidel_coin_is_supported'>Weidel Coin is supported by a dedicated community – millions of supporters who share Alice Weidel's vision make this project unique. Together, we achieve greatness!</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <footer>
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="footer-head d-flex justify-content-between align-items-center">
                        <div class="foat-left">
                           <div class="f-logo">
                              <a href=""><img src="{{url('assets/images/logo.png')}}" alt=""></a>
                           </div>
                        </div>
                        <div class="foat-right">
                           <div class="join-social d-flex justify-content-center">
                              <a href="https://t.me/Weidel_Coin" target="_blank" data-toggle="tooltip" data-placement="top" title="Telegram">
                                 <svg  width="40px" height="40px" version="1.1" id="fi_739260" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                       <g>
                                          <path d="M501.974,41.949c-8.237-7.547-19.944-10.062-30.555-6.565L21.231,183.785c-12.269,4.044-20.589,14.996-21.196,27.899
                                             c-0.606,12.904,6.649,24.589,18.483,29.768l111.335,48.712c0.543,2.52,32.504,150.756,33.591,155.795
                                             c1.395,6.472,4.68,12.237,11.639,14.01c7.039,1.793,12.012-2.054,17.264-5.986c2.923-2.188,82.62-61.865,82.62-61.865
                                             l96.589,79.039c5.626,4.606,12.502,7.008,19.513,7.008c3.338-0.001,6.708-0.545,9.986-1.657
                                             c10.166-3.447,17.702-11.744,20.159-22.193L511.18,71.813C513.737,60.938,510.211,49.496,501.974,41.949z M199.544,318.077
                                             c-0.055,0.13-0.109,0.277-0.16,0.453l-18.624,65.068l-20.784-96.395l142.917-79.405l-99.921,104.478
                                             C201.398,313.922,200.24,315.912,199.544,318.077z M205.455,406.602l8.459-29.555l8.091-28.269l28.991,23.724L205.455,406.602z
                                             M481.908,64.927l-89.965,382.502c-0.045,0.19-0.105,0.452-0.545,0.601c-0.436,0.148-0.648-0.021-0.798-0.145l-105.691-86.488
                                             c-0.003-0.002-0.005-0.005-0.008-0.007l-48.969-40.072L393.255,156.82c5.138-5.373,5.578-13.694,1.035-19.579
                                             c-4.545-5.886-12.707-7.567-19.204-3.955L142.135,262.715L30.572,213.902c-0.34-0.148-0.527-0.231-0.5-0.806
                                             c0.027-0.573,0.221-0.638,0.573-0.754l450.188-148.4c0.218-0.071,0.464-0.153,0.826,0.177
                                             C482.021,64.451,481.961,64.703,481.908,64.927z"></path>
                                       </g>
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                 </svg>
                              </a>
                              <a href="https://x.com/weidelcoin?s=11" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">
                                 <svg id="fi_5968958" width="40px" height="40px" enable-background="new 0 0 1226.37 1226.37" viewBox="0 0 1226.37 1226.37" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"></path>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                 </svg>
                              </a>
                              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Trade on Raydium">
                                 <svg width="40px" height="40px" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" data-sentry-element="svg" data-sentry-source-file="RaydiumLogo.tsx" data-sentry-component="RaydiumLogo">
                                    <path d="M34.3297 15.8661V28.7492L20 37.021L5.66234 28.7492V12.1978L20 3.91808L31.013 10.2797L32.6753 9.32068L20 2L4 11.2388V29.7083L20 38.947L36 29.7083V14.9071L34.3297 15.8661Z" fill="url(#a)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M15.988 28.7572H13.5904V20.7173H21.5824C22.3385 20.7089 23.061 20.4031 23.5934 19.8662C24.1259 19.3293 24.4255 18.6043 24.4276 17.8481C24.4319 17.4742 24.3597 17.1034 24.2154 16.7584C24.0711 16.4134 23.8577 16.1016 23.5884 15.8421C23.3278 15.5743 23.0158 15.362 22.6711 15.2178C22.3264 15.0736 21.9561 15.0005 21.5824 15.003H13.5904V12.5574H21.5904C22.991 12.5658 24.3319 13.1259 25.3222 14.1163C26.3126 15.1067 26.8727 16.4475 26.8811 17.8481C26.8897 18.9202 26.5627 19.9681 25.9461 20.8451C25.3785 21.6842 24.5786 22.3397 23.6444 22.7313C22.7193 23.0246 21.7537 23.1703 20.7832 23.1628H15.988V28.7572Z" fill="url(#b)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M26.8252 28.5574H24.028L21.8701 24.7932C22.7238 24.741 23.5659 24.5688 24.3716 24.2817L26.8252 28.5574Z" fill="url(#c)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <path d="M32.6593 13.1888L34.3137 14.1079L35.968 13.1888V11.2467L34.3137 10.2877L32.6593 11.2467V13.1888Z" fill="url(#d)" data-sentry-element="path" data-sentry-source-file="RaydiumLogo.tsx"></path>
                                    <defs data-sentry-element="defs" data-sentry-source-file="RaydiumLogo.tsx">
                                       <linearGradient id="a" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="b" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="c" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                       <linearGradient id="d" x1="35.9717" y1="11.2489" x2="2.04291" y2="24.817" gradientUnits="userSpaceOnUse" data-sentry-element="linearGradient" data-sentry-source-file="RaydiumLogo.tsx">
                                          <stop stop-color="#C200FB" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="0.489658" stop-color="#3772FF" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                          <stop offset="1" stop-color="#5AC4BE" data-sentry-element="stop" data-sentry-source-file="RaydiumLogo.tsx"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                              </a>
                              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Trade on Jupiter"><img src="{{url('assets/images/jupiter.png')}}" alt=""></a>
                           </div>
                        </div>
                     </div>
                     <div class="footer-bottom d-flex justify-content-center">
                        <div class="copyright">
                           <p data-translate-key='copyright'>© Weidel Coin 2024 - All Rights Reserved.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="{{url('assets/js/jquery.min.js')}}"></script>
      <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('assets/js/aos.js')}}"></script>
      <script src="{{url('assets/js/custom.js')}}"></script>
      <script type="text/javascript">
          $(document).ready(function () {
            // Detect language on page load
            $.ajax({
                  url: `{{url('/detect-lang')}}`,
                  type: 'GET',
                  success: function (response) {
                     const lang = localStorage.getItem('selectedLang') || response.lang || 'en'; // Fallback to English
                     setLanguage(lang);
                  }
            });

            // On language selection
            $(document).on('click', '.lang-select', function () {
                  const lang = $(this).data('lang');
                  setLanguage(lang);
                  localStorage.setItem('selectedLang', lang);
            });

            function setLanguage(lang) {
                  // Update button text and flag
                  const selectedLangElement = $(`.lang-select[data-lang="${lang}"]`);
                  const flagSrc = selectedLangElement.find('img').attr('src');
                  const langText = selectedLangElement.find('a').data('lang');
                  $('#currentLanguage').html(`${lang}<img src="${flagSrc}">`);

                  // Fetch translations
                  fetchTranslations(lang);
            }

            function fetchTranslations(lang) {
                  $.ajax({
                     url: `{{url('/change-lang')}}`,
                     type: 'POST',
                     data: {
                        lang: lang,
                        _token: '{{ csrf_token() }}'
                     },
                     success: function (response) {
                        if (response.success) {
                              const translations = response.translated;
                              for (const key in translations) {
                                 $(`[data-translate-key="${key}"]`).html(translations[key]);
                              }
                        }
                     }
                  });
            }
         });
         function withJquery(){
            let btn = $('#copy-btn').children('span')
            console.log(btn);
            lang = localStorage.getItem('selectedLang');
            if(lang == 'de'){
               btn.text('kopiert');
            }else{
               btn.text('Copied');
            }
           console.time('time1');
            var temp = $("<input>");
           $("body").append(temp);
          temp.val($('#copyText1').text()).select();
           document.execCommand("copy");
           temp.remove();
             console.timeEnd('time1');
             setTimeout(function(){
               // btn.text('COPY');
               if(lang == 'de'){
                  btn.text('Kopie');
               }else{
                  btn.text('COPY');
               }
             },2000)
         }
      </script>
   </body>
</html>