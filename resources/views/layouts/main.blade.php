<!doctype html>
<html lang="zxx">
   <head>

      @yield('meta')
      
   </head>
   <body onblur="isLeaving()">
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
                </div>
            </div>
        </div>
        
        @yield('nav')

            
        @yield('slider')

            
        @yield('featured')


        @yield('about')


        @yield('services')


        @yield('trainings')


        @yield('case') 


        @yield('testimonials')


        @yield('partners')


        @yield('team')

        
        @yield('news')


        @yield('preview')


        @yield('calltoaction')


        @yield('footer')


      <div class="go-top"><i class='bx bx-chevron-up'></i></div>

      @yield('scripts')
      
   </body>
</html>