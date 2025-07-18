<!DOCTYPE html>
<html lang="en">
   <head>
         <!-- in this section css call from the home/css.blade.php -->
        @include('home.css') 
   </head>

                         <!-- .....................body .......................-->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->

      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <!-- end header -->

      <!-- banner -->
        @include('home.slider')
      <!-- end banner -->

      <!-- about -->
      @include('home.about')
      <!-- end about -->

      <!-- our_room -->
      @include('home.room')
      <!-- end our_room -->

      <!-- gallery -->
      @include('home.galary')
      <!-- end gallery -->
      <!-- blog -->

      <!--  contact -->
       @include('home.contact')
      <!-- end contact -->

      <!--  footer -->
      @include('home.footer')
      <!--end footer -->
      
   </body>
</html>