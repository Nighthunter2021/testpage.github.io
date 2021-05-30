<style type="text/css">
.{ margin:0; padding:0; box-sizing: border-box;}
/*Body & html*/
body, html {
    height: 100%;
    width: 100%;
    margin: 0px;  
  }
/*---------------------------- preloader area ----------------------------*/
 
.titlepage {
    text-align: center;
    padding-bottom: 60px;
}
/*Parallax effect*/
.parallax {
    /* The image used */
    background-image: url("images/banner.png");
      
    /* Set a specific height & width */
    min-height: 70%; 
    max-width: 100%;
         
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  /*Topic heading*/
  
  .photog {
     z-index: 9999;
     position: absolute;
     text-align: left;
     top: 20%;
     left: 10%;
     margin-right: 20%
     display: inline-block;
         
}

.photog h1 {
    
     font-size: 4rem;
     line-height: 90px;
     color: #fff;
     font-weight: bold;
     text-align: left;
     padding: 1vw;
     letter-spacing: 10px;
}


.photog img{
    padding: 1px;
    margin-bottom:10px;
    animation: corona 3s linear infinite;
}
@keyframes corona {
    0%{transform: rotate(0);}
    100%{transform: rotate(360deg);}
}

/** about section **/

.about {
    background: #fff;
    padding: 6vw 4vw;;
    position: relative;
    margin: 0 8vw;
    box-shadow: 3px 0 62px rgba(13, 3, 3, 0.18);
    border-radius: 60px;
    margin-top: -130px;
}

.container_width {max-width: 1380px;
 padding: 0 15px;
 display: block;
 margin: 0 auto;
 clear: both;


}

.about .titlepage {
     padding-bottom: 0;
}
.about .titlepage h1 {
    position: relative;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-size:2.5rem;
    color: #353d47;
    line-height: 50px;
    font-weight: bold;
    padding: 0;
    display: inline-block;
    
}
.about .titlepage hr {
   background: #f81018;
   height: 3px;
   left: 0;
   border-radius: 20px; 
}

.about .titlepage p {
    font-weight: normal;
    font-size: 20px;
    line-height: 30px;
    color: #111111;
    padding: 35px 0px 50px 0px;
}


/** end about section **/

/** coronata section **/

.coronata {
    background: #fff;
    padding-top: 100px;
    
  
}

.coronata .titlepage {
     padding-bottom: 0;
}

.coronata .titlepage h2{
    margin-top: 20px;
}
.coronata .titlepage p {
    font-weight: normal;
    font-size: 17px;
    line-height: 30px;
    color: #111111;
    padding: 35px 0px 50px 0px;
}

/** end coronata section **/

/*\//////////codiv_updates/////////\*/
.codiv_updates{
    margin:30px 0 30px 0;
    padding:5px;
    background-color: #fdfafd;
    width:100%

}

.codiv_updates h3 {
 color:#ff7675
}

.codiv_updates h1 {
    font-size: 2rem;
    text-align: center;
   }

   .codiv_updates p {
    text-align: center;
    font-size:14px;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;

   }

/*\//////////End codiv_updates/////////\*/

/** protect **/

.protect {
    /*padding: 0 30px;
     padding-top: 80px;
    padding-bottom: 25px;*/
}


.protect_bg  {
  
    /* The image used */
     background-image: url("images/banner.png");
      
     /* Set a specific height & width */
     max-width: 100%;
    /* border-radius: 20px;
          
     /* Create the parallax scrolling effect */
     background-attachment: fixed;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
}

.protect .titlepage p {
     padding-top: 5px;   
}

.protect_bg .fcontainer{
    padding: 15px;
    hight:50vh;
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
    flex-wrap: wrap;

}

.protect_bg .fitems{
    margin:12px;
    width:318px;
    height:318px;
    }

.protect_box{
    box-shadow: 3px 0 62px rgba(0.183, 3, 5, 1);
    border-radius: 20px;
}
.desktop {
    padding: 45px 20px 30px 20px;
    background: #fff;
    border-radius: 20px;
    width: 100%;
    
}

.protect_box h3 {
    color: #0d0e0e;
    font-size: 17px;
    font-weight: bold;
    padding-top: 25px;
    padding-bottom: 5px;

}

.protect_box span {
    color: #081419;
    font-weight:normal;
}

/** end protect **/


@media only screen and (max-width:786px){
    .parallax {
     
     /* Set a specific height & width */
     min-height: 70%; 
     max-width: 100%;
          
      }
    
    .photog {
     z-index: 9999;
     position: absolute;
     text-align: left;
     top: 10%;
     left: 10%;
     display: inline-block;
         }

    .photog h1 {    
    font-size: 3rem;
    line-height: 90px;
    color: #fff;
    font-weight: bold;
    text-align: left;
    padding: 1vw;
    letter-spacing: 10px;
}
}

</style>



