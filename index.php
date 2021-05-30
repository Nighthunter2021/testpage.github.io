<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links-->
    <?php include 'links/links.php';?>
    <!-- Link css -->
    <?php include 'css/style.php';?>
       
    <title>Covid-19</title>
</head>
<body>

         
   <!--Parallax Image and text--> 
      
      <div class="parallax">
       
         <div class="photog">
               <h1>C<span><img src="images/corona_icon.png"></span>VID-19</h1>
         </div>
       
      </div>
      
    <!--End Parallax Image and text-->

     <!-- about -->
     <div class="about">
        <div class="container_width">
           <div class="row d_flex">
                <div class="col-md-7">
                 <div class="titlepage text_align_left">
                    <h1>About Corona Virus </h1>
                    <hr>
                    <p>English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                    </p>
                 </div>
              </div>
              <div class="col-md-5">
                 <div class="about_img text_align_center">
                    <img width="100%" src="images/about.png" alt="#"/>
                 </div>
              </div>
             
           </div>
        </div>
     </div>
     <!-- end about -->

    <!-- coronata -->
       <div class="coronata">
        <div class="container">
           <div class="row d_flex grid">
            <div class="col-md-7">
                <div class="imgc">
                   <img width="100%" src="images/corona.png"/>
                </div>
            </div>
            <div class="col-md-5 oder1">
                <div class="titlepage text_align_left">
                 <h2>Coronavirus what it is?</h2>
                    <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                    </p>
                </div>
              </div>  
              
             </div>
        </div>
     </div>
     <!-- end coronata -->

     <!-- Updates -->
      <section class="codiv_updates">
         <div class="mb-3">
            <h3 class="text-uppercase text-center">COVID-19 Updates</h3>
         </div>
         <div class="container">
             <div class="row d_flex grid">
             <!--Total case-->
               <div class="col-md-4">
                  <h1 class="count">167,572,537</h1>
                  <p>Coronavirus Cases:</p>
               </div>
            <!--Total Recover-->
               <div class="col-md-4">
                  <h1 class="count">148,618,962</h1>
                  <p>Recovered:</p>
               </div>
            <!--Total Deaths-->
               <div class="col-md-4">
                  <h1 class="count">3,479,478</h1>
                  <p>Deaths:</p>
               </div>
            </div>
         </div>
      </section>   
    <!--End Updates -->

    <!-- Symptoms -->

    <!--End Symptoms -->

      <!-- protect -->
      <div class="protect">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>How to Protect Yourself</h2>
                     <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="protect_bg">
            <div class="fcontainer">
               
                  <!--   Wear Mask -->
                     <div class="fitems">
                        <div class="protect_box">
                          <div class="desktop">
                             <i><img src="images/pro1.png" alt="#"/></i>
                           <h3> Wear Mask</h3>
                           <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                          </div>
                          <p></p>
                        </div>
                     </div>                      

                  <!--  Wash Your Hands -->                    
                     <div class="fitems">
                        <div class="protect_box">
                        <div class="desktop">
                           <i><img src="images/handwash.png" alt="#"/></i>
                         <h3> Wash Your Hands</h3>
                         <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                        </div>
                         <p></p>
                      </div>
                     </div>
                    
                  <!--  Stay at Home -->                    
                     <div class="fitems">
                       <div class="protect_box">
                        <div class="desktop">
                           <i><img src="images/pro3.png" alt="#"/></i>
                         <h3> Stay at Home</h3>
                         <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                        </div>
                      <p></p>
                      </div>
                     </div>                    
             </div>
         </div>
     </div>
     <!-- end protect --> 

     <!-- Footer-->     
      <footer class="page-footer font-small blue">

         <!-- Copyright -->
         <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="#"> abc.com</a>
         </div>
         <!-- Copyright -->

      </footer>
     <!-- End Footer-->

  
      <!--JavaScript-->
      <script type="text/javascript">
         $('.count').counterUp({
            delay: 10,
            time: 3000
            });
      </script>

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>