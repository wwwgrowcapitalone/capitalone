<html lang="en" >
   <!--begin::Head-->
   <!-- Mirrored from preview.keenthemes.com/metronic8/demo2/authentication/layouts/corporate/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 10:13:59 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title></title>
      <meta charset="utf-8"/>
      <meta name="description" content="
         Prompt
         "/>
      <meta name="keywords" content="
         Prompt
         "/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="" />
      <meta property="og:url" content="https://keenthemes.com/metronic"/>
      <meta property="og:site_name" content="Keenthemes | Metronic" />
	  <!-- Latest compiled and minified CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
      <link rel="shortcut icon" href="favicon.ico"/>
      <!--begin::Fonts(mandatory for all pages)-->
      <link rel="stylesheet" href="style.css"/>
      <!--end::Fonts-->
      <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
      <link href="plugins.bundle.css" rel="stylesheet" type="text/css"/>
      <link href="style.css" rel="stylesheet" type="text/css"/>
	  <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <!--end::Global Stylesheets Bundle-->
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body  id="kt_body"  class="auth-bg" style="
    height: 88%;
">
      <!--begin::Theme mode setup on page load-->
      <script>
         var defaultThemeMode = "light";
         var themeMode;
         
         if ( document.documentElement ) {
         	if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
         		themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
         	} else {
         		if ( localStorage.getItem("data-bs-theme") !== null ) {
         			themeMode = localStorage.getItem("data-bs-theme");
         		} else {
         			themeMode = defaultThemeMode;
         		}			
         	}
         
         	if (themeMode === "system") {
         		themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
         	}
         
         	document.documentElement.setAttribute("data-bs-theme", themeMode);
         }            
      </script>
      <!--end::Theme mode setup on page load-->            
      <!--begin::Main-->
      <!--begin::Root-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Authentication - Sign-in -->
         <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
               <!--begin::Form-->
               <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                  <!--begin::Wrapper-->
                  <div class="w-lg-500px p-10">
                     <!--begin::Form-->
                     <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="dashboard.php" action="#">
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                           <!--begin::Title-->
                           <h1 class="text-white fw-bolder mb-3">
                              Log In
                           </h1>
                           <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group--->
                        <div class="fv-row mb-8">
                           <!--begin::Email-->
                           <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="Example@gmail.com"/> 
                           <!--end::Email-->
                        </div>
                        <!--end::Input group--->
                        <div class="fv-row mb-3">
                           <!--begin::Password-->
                           <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="123456789"/>
                           <!--end::Password-->
                        </div>
                        <!--end::Input group--->  
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10" onclick="this.classList.toggle('active')">
						   <button type="submit" class="btn btn-primary" style="margin-top: 2rem; background-image: linear-gradient(to right, red , Orange);">
	                          <a href="home.php" class="text-white">Log In</a>
                              <!--begin::Indicator progress-->
                              <span class="indicator-progress">
                              Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                              </span>
                              <!--end::Indicator progress-->      
                           </button>
                        </div>
			     <button type="submit" class="btn btn-primary">
	                          <a href="register.php" class="text-white">Register</a>
                              <!--begin::Indicator progress-->
                              <span class="indicator-progress">
                              Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                              </span>
                              <!--end::Indicator progress-->      
                           </button>
                        <!--end::Submit button-->
                     </form>
                     <!--end::Form--> 
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Form-->       
            </div>
            <!--end::Body-->
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(watch_image.png); height:100%;">
               <!--begin::Content-->
               <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                  <!--begin::Logo-->
                  <a href="#" class="mb-0 mb-lg-12">
                  <img alt="Logo" src="Logo.png" class="h-60px h-lg-75px"/>
                  </a>    
                  <!--end::Logo-->
                  <!--begin::Image-->                
                  <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="watch_image.png" alt=""/>                 
                  <!--end::Image-->
                  <!--begin::Title-->
                  <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7"> 
                     Grow Capital One
                  </h1>
                  <!--end::Title-->
                  <!--begin::Text-->
                  <div class="d-none d-lg-block text-white fs-base text-center">
                     Our principals are straight forward. We are here to be a stock that <br> steadily <a class="opacity-75-hover text-warning fw-bold me-1">grows</a> 
                     and provides investors a place to increase <br/> the value of their capital.  
                  </div>
                  <!--end::Text-->
               </div>
               <!--end::Content-->
            </div>
            <!--end::Aside-->
         </div>
         <!--end::Authentication - Sign-in-->
      </div>
      <!--end::Root-->
      <!--end::Main-->
      <!--begin::Javascript-->
      <script>
         var hostUrl = "assets/dashboard.php";
      </script>
      <!--begin::Global Javascript Bundle(mandatory for all pages)-->
      <script src="assets/plugins/global/plugins.bundle.js"></script>
      <script src="assets/js/scripts.bundle.js"></script>
      <!--end::Global Javascript Bundle-->
      <!--begin::Custom Javascript(used for this page only)-->
      <script src="assets/js/custom/authentication/sign-in/general.js"></script>
      <!--end::Custom Javascript-->
      <!--end::Javascript-->
   </body>
   <!--end::Body-->
</html>
