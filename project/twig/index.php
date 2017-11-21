<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="initial-scale=1.0, width=device-width" />
   <link rel="stylesheet/less" type=text/css href="ds9.less">
   <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
   <title>Space Flight</title>
</head>
<?php 
   include 'fragments/load_twig.php'
   ?>
<body>
   <?php
      include 'fragments/header.php';
      include 'fragments/menubar.php';
      include 'fragments/back-to-top.php';      
      ?>
   <div class="container">
      <h2>Our services</h2>
      <p>Space Flight is the largest company provides fixed-base oporation service for space fleet, founded in 2346, in Earth's Galaxy. </p>
      <p>We are granted the right by the starport sponsor to operate on an starport, providing starnautical services such as bussard ramscoop fueling, storaging, hangaring, tie-down and parking, starship rental, starship maintenance, fleet instruction, etc. </p>
      <img src="res/port2.jpg" alt="starport"> 
      <!-- https://kidhds.deviantart.com/art/space-426724859 -->
      <p>"Flight long and prosper." Choose Space Flight, you are now free to move about the universe. </p>
      <div class="service">
         <div class="service-left">
            <h3 >Ground Service</h3>
            <ul>
               <li>Executive passenger lounge</li>
               <li>Conference room</li>
               <li>Pilot lounge with computer stations</li>
               <li>Complimentary WIFI</li>
               <li>Weather and flight planning facilities</li>
               <li>Courtesy shuttle to terminal and tunnel</li>
            </ul>
         </div>
         <div class="service-right">
            <h3>Spacecraft Services</h3>
            <ul>
               <li>Refueling services</li>
               <li>Baggage handling</li>
               <li>Rental of secure hangar and ramp</li>
               <li>De-icing</li>
               <li>Coffee, ice, and onboard catering available</li>
               <li>Maintenance services</li>
            </ul>
         </div>
      </div>
   </div>
   <?php
      include 'fragments/footer.php';
      ?>
</body>
<!-- 
   UPDATE 2017-10-30
   CURRENT TODO:
   CSS change current-menu-item color when change pages SEE https://stackoverflow.com/questions/11418977/parallelogram-navigation-background-with-css
   JS hamburger button
   
   DONE:
   1. SQL setup scripts
       setup the necessary database
       tables
       and insert any testing data
   2. Contains at least 6 pages not related to the logon
   3. At least 2 Twig templates for pages
   4. A Small PHP library to generate common components of page: fragments dir
   5. Each page contains navigation to the whole site and a footer
   6. Use LESS style sheets
   
   WORKING:
   7. The page must be responsive, that is it must look good at various resolutions 
   8. Contains a logon system, using SQL as a back end
   11. Contains at least 1 page which using AJAX that pulls data from a SQL back end
   
   
   TODO:
   9. Use jQuery to implement at least 2 non-trivial features
   10. Contain at least 1 jQuery animation: http://webdesignerwall.com/tutorials/animated-scroll-to-top
   -->