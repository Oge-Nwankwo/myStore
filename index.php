
  <?php
  
require_once('head.php');


?>



<body>
<div id="container">

<nav>

     

    <div class="logo">MyStore</div>
   <div class="icons">
    <div class="icon search"><a href=""><i class="fas fa-search" aria-hidden="true"></i> </a> </div>
    <div class="icon profile"> <a href=""><i class="fas fa-user" aria-hidden="true"></i></a>  </div>
    <div class="icon cart"> <a href=""><i class="fas fa-shopping-cart" aria-hidden="true"></i></a> </div>
</div>
    <div class="navbar" id="navbar">
        <ul class="navList"> 
        <button id="close-btn" class="close-modal hidden">&times;</button>

            <li><a href="index.php">Home</a></li>
            <li><a href="#">Nighties</a></li>
            <li><a href="#">Lingeries</a></li>
            <li><a href="#">Shapewears</a></li>
            <li><a href="#">Clothing</a></li>
            <li><a href="#">Offers</a></li>
           

        </ul>
    </div>

     <div class="checkbtn"> 
            <i class="fas fa-bars" id="bars"></i>


    </div> 
</nav>
<div class="content">


    <h1>Dream <br> <span> In </span><br>Luxury</h1>
    
<a href="#"><button class= "btn-shop"> Shop now </button></a>

</div>


    
</div>

<section id="New" class="new">
<h1>New Arrivals</h1>
<div class="new-gallery">

<div class="new-img">
    
    <a href="#"><img src="imgs/l11.jpg" alt=""></a> 
<div class="img-text">
        <h4> panties</h4>
</div>
</div>


<div class="new-img">
    
    <a href="#"><img src="imgs/n19.jpg" alt=""></a> 
<div class="img-text">
        <h4> lingeries</h4>

</div>
</div>

<div class="new-img">
  <a href=""><img src="imgs/n15.jpg" alt=""></a>  
  <div class="img-text">
        <h4> sleep wear</h4>
       
</div>
</div>

<div class="new-img">
   <a href=""><img src="imgs/l6.jpg" alt=""></a> 
  <div class="img-text">
        <h4>bra set</h4>
        
</div>
</div>


<div class="new-img">
   <a href=""><img src="imgs/l14.jpg" alt=""></a> 
  <div class="img-text">
        <h4>Clothing</h4>
        
</div>
</div>


<div class="new-img">
   <a href=""><img src="imgs/l1.jpg" alt=""></a> 
  <div class="img-text">
        <h4>bra set</h4>
        
</div>
</div>


</div>

</section>


<section id="Trend" class="trend">
        <h1>Trending</h1>
        <div class="trend-gallery">
        
        <div class="trend-img">
            
            <a href="#"><img src="imgs/l9.jpg" alt=""></a> 
        <div class="img-text">
                <h4> G-string panties</h4>
        </div>
        </div>
        
        <div class="trend-img">
            <a href=""><img src="imgs/n10.jpg" alt=""></a>  
          <div class="img-text">
                <h4> Nighties</h4>
                
        </div>
        </div>
        
        
        
        
        <div class="trend-img">
          <a href=""><img src="imgs/s1.jpg" alt=""></a>  
          <div class="img-text">
                <h4> shape wear</h4>
                
        </div>
        </div>
        <div class="trend-img">
           <a href=""><img src="imgs/l8.jpg" alt=""></a> 
          <div class="img-text">
                <h4> net lingerie</h4>
               
        </div>
        </div>

        <div class="trend-img">
           <a href=""><img src="imgs/l3.jpg" alt=""></a> 
          <div class="img-text">
                <h4> 2-piece nighty</h4>
               
        </div>
        </div>


        <div class="trend-img">
           <a href=""><img src="imgs/n20.jpg" alt=""></a> 
          <div class="img-text">
                <h4> cotton g-string</h4>
               
        </div>
        </div>
        
        </div>

        
        </section>

        <!-- <div class="set">
        <h4 class= "set-title"> Sexy Bra sets</h4>

        <a href=""><img src="imgs/l4.jpg" alt=""></a>  -->
          
<?php
require_once('footer.php');
?>


<script src="script.js"></script>

</body>
</html>