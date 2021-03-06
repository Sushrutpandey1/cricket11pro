<!DOCTYPE html>

<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title><?php echo $title; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
  <link href="<?php// echo  base_url('web_assets/css/master.css');?>" rel="stylesheet"/>
  <link href="<?php // echo base_url('web_assets/css/footer.css');?> " rel="stylesheet"/>


      <style>
      @media (max-width: 780px){
        .header-settings {
            max-height: 0px !important;
            line-height: 32px;
           
          }

          .desktop-navbar{
              
              
            display:none;

              
         }

         .logo-hide{
           

           display:none;


         }

         
     

       
      }

      @media screen and (min-width: 380px) {
        


          .desktop-navbar{
            
            display:none;



          }

          .logo-hide{
            

            display:none;


          }


  
      }

      @media screen and (min-width: 300px) {
        
          .desktop-navbar{
            
            display:none;

          }

          .logo-desktop{
            

            display:none;

          }

          .logo-hide{
            
            display:block;


          }

      }
    
      @media screen and (min-width: 800px) {
        
        .desktop-navbar{
            
            display:block;

          }

          .logo-hide{
            

            display:none  ;


          }

            .logo-desktop{
            

            display:block;

          }
      }

    
     

      @media screen and (min-width: 1200px) {
        

          .header-settings {
              height: 100px;
              line-height: 70px;
              position: absolute;
              width: 100%;
              top: 0;

              }

          .desktop-navbar{
            
            display:block;

          }
  
        .logo-hide{
          
          display:none;


        }  

        .logo-desktop{
            

            display:block;

          }
        
        .mobi-nav{
           

           display:none;

         }

    }

    
    
    @media (min-width: 992px)
.navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
    display: none;
}

  </style>
</head>
<body>
  <div>

    <header class="header-settings">
      <div class="container" style="padding:0px;">
        
        <div class="cross"></div>
        <nav class="menu desktop-navbar">
          <ul>
            <li id="how_to_play"><a href="<?php // echo base_url('website/how_to_play');?>" target="_blank">HOW TO PLAY</a></li>
            <li id="termsandconditions"><a href="<?php // echo  base_url('website/termsandconditions');?> " target="_blank">TERMS AND CONDITIONS</a></li>
            <li id="pointsystem"><a href="<?php // echo base_url('website/pointsystem');?> " target="_blank">POINT SYSTEM</a></li>
          </ul>
        </nav>

        <nav style="padding: 10px; width:100%" class="mobi-nav menu navbar navbar-expand-lg ">
          
         <div class="col-sm-6 col-xs-6">
          <button  style="float:right; left:22; top:15px; height:20px; width:27; position: initial;" class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

         

          <ul>
           
            <li id="aboutUs"><a target="_blank" href="<?php // echo base_url('website/aboutUs');?> ">ABOUT US</a></li>
            <li id="how_to_play"><a href="<?php // echo base_url('website/how_to_play');?>" target="_blank">HOW TO PLAY</a></li>
            <li id="termsandconditions"><a href="<?php //echo base_url('website/termsandconditions');?> " target="_blank">TERMS AND CONDITIONS</a></li>
            <li id="pointsystem"><a href="<?php // echo base_url('website/pointsystem');?> " target="_blank">POINT SYSTEM</a></li>
          </ul>
          </div>
        </nav>
        <div class="clr"></div>
      </div>
    </header>
<script type="text/javascript" src="<?php // echo base_url('web_assets/js/jquery-3.2.1.js'); ?>"> </script>
    <script type="text/javascript">
      $( document ).ready(function() {
      var id = "<?php echo $this->uri->segment('2')?>";

      $("#"+id).addClass('active');
});
    </script>