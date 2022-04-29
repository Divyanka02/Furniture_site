<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKRIWALA || CONTACT</title>
  
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head> 
<style>
     /*CSS Reset*/
 *{
    margin: 0px;
    padding: 0px;

}

/*NAVIGATION BAR*/
.navbar{
   display: flex;
    flex-direction:row;
    position:absolute;
    top: 0px;
    width: 100%;
}

#logo{
   margin-left: 30px;
    margin-top: 20px;
}
#logo h3{
    width: 70px;
    height: 70px;
    font-weight: 700;
    font-size: 40px;
    text-shadow: 3px 3px 5px white;
    color: white;
}
.navbar ul{
    display: flex;
    flex-direction: row;
  
  
}
.navbar::before{
    content: " ";
   background-color: rgb(0, 0, 0);
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 1;

}
.navbar ul li{
    list-style: none;
    font-size: 1.3rem;
  
    

}
.navbar .marginlefthome{
    margin-left: 750px;
}

.navbar ul li a{
    display:block;
    width: 150px;
    border-radius: 25px;
  
   color: white;
   font-weight: 900;
    text-decoration: none;
    padding: 6px;
  margin-top: 25px;
    margin-left: 10px;
   
    font-family: 'Chela One', cursive;
}
.navbar ul li a:hover{
    background-color: white;
    color: black;
    

}
@media screen and (max-width: 1000px){
    #logo{
        margin-left: 20px;
         margin-top: 20px;
     }
     #logo h3{
        
         font-size: 30px;
         color: white;
        
     }
    
     .navbar::before{
        
         top: 0px;
         left: 0px;
         height: 100%;
         width: 100%;
         z-index: -1;
         opacity: 1;
     
     }
     .navbar ul li{
         list-style: none;
         font-size: 15px;
         
     
     }
     .navbar .help{
         display: none;
     }

     .navbar .marginlefthome{
         margin-left: 200px;
         margin-right: 0;
     }
     
     .navbar ul li a{
        
         width: 100px;
         border-radius: 10px;
        
       color: white;
       margin-top: 25px;
         margin-left: 0;
        
     }
     
    
}
@media screen and (max-width: 600px){
    .navbar{
       
         flex-direction:row;
       
     }
    #logo{
        margin-left: 10px;
         margin-top: 20px;
     }
     #logo h3{
        
         font-size: 20px;
         color: white;
        
     }
    
     .navbar::before{
        
         top: 0px;
         left: 0px;
         height: 100%;
         width: 100%;
         z-index: -1;
         opacity: 1;
     
     }
     .navbar ul li{
         list-style: none;
         font-size: 12px;
         
     
     }
     .navbar .help{
         display: none;
     }

     .navbar .marginlefthome{
         margin-left: 60px;
         margin-right: 0px;
     }
     
     .navbar ul li a{
        width: 79px;
        
         border-radius: 10px;
        
       color: white;
       margin-top: 26px;
         margin-left: 0;
       
        
     }
   
}





/*home section*/
#home{
    display: flex;
    flex-direction: column;
    padding: 100px 120px;
    justify-content: center;
    align-items: center;
    height: 60vh;
    font-family: 'Reggae One', cursive;
    
    
    
    }
    #home::before{
        content: " ";
        background-color: rgb(57, 60, 62);
   
        position: absolute;
        top: 0px;
        left: 0px;
        height: 50%;
        width: 100%;
        z-index: -1;
        opacity: 0.8;
    
    }
   
   #home h2{
       font-size: 40px;
       font-weight: 700;
       color: white;
       text-align: center;
   }
    @media screen and (max-width: 1000px){
       
            #home::before{
              
                top: 0px;
                
                opacity: 0.9;
            
            }
            #home h2{
       font-size: 30px;
      
   }
          
        
         
        
    }
    @media screen and (max-width: 600px){
        #home::before{
              
            top: 0%;
          height: 48%;
            opacity: 0.9;
        
        }
        #home h2{
       font-size: 20px;
      
   }
       
        
    }




    

h1{
text-align: center;
font-weight: 700;
font-size: 40px;
}
.p{
text-align: center;
margin-bottom: 100px;
}

.contact{
    margin-left: 370px;
    width: 50%;
}
.contact p{
   margin: 20px;
    font-size: 20px;
}
input[type="text"],
input[type="email"],
input[type="number"],
select{
    padding: 7px;
   font-size: 15px;
   width: 100%;
}
input[type="radio"]{
    padding: 7px;
   font-size: 15px;

}
input[type="submit"]{
    
   font-size: 18px;
    margin-left: 350px;
    margin-top: 50px;
    color: black;
    font-weight: 600;
    padding: 7px;
    margin-bottom: 50px;
}

@media screen and (max-width: 1000px){
       
    .contact{
    margin-left: 200px;
    width: 50%;
}
input[type="submit"]{
    
   
     margin-left: 120px;
    
 }
   
}
@media screen and (max-width: 600px){
    h1{
        font-size: 25px;
    }
    .p{

margin-bottom: 50px;
}
    .contact{
    margin-left: 80px;
    width: 70%;
}
.contact p{
    font-size: 15px;
}
input[type="submit"]{
    
   
     margin-left: 120px;
     font-size: 15px;
    
 } 
}



.footer{
    width: 100%;
    color: black;
    background-color: aliceblue;
   
}
.footer h2{
  text-align: center;
  font-weight: 500;
  font-size: 20px;

}


</style> 
<body>
    
    <nav id="navbar" class="navbar">
      <div id="logo">
        <h3>LAKRIWALA</h3>
    
    </div>
     
      <ul>
      <li class="item"><a href="homepage.html" class="marginlefthome">HOME</a></li>
          <li class="item"><a href="aboutus.html">About US</a></li>
          <li class="item"><a href="projects.html">Services</a></li>
          <li class="item"><a href="contactus.php">Contact US</a></li>
         
      </ul>

  </nav>
  
  
  <section id="home">
    <h2>We will be glad to serve you best, <br> Thank you for trusting us</h2>
</section>
<h1>CONTACT US</h1>
<p class="p">PLEASE COMPLETE THE FORM BELOW. WE’LL BE IN TOUCH WITH YOU SOON.</p>
<div class="contact">
    <form method="post" id="frmContactus" action="php_files/mail.php">
    <p>Name :* <br><input type="text" name="clintname" required></p>
    <p>Email :* <br><input type="email" name="clintemail" required></p>
    <p>Number :* <br><input type="number" name="clintnumber" required></p>
    <p><label for="hometype">Your Home Type*</label> <br>
    <select name="clinthometype">
        <option value="none">--</option>
        <option value="house">House</option>
        <option value="flat">Flat/Apartment</option>
        <option value="bunglow">Bunglow</option>
        <option value="office">Office</option>
    </select> </p><br>
    <p> <label for="size">Size Of Your Home *</label><br>
    <input type="radio" name="clintsizeofhome" value="2bhk"> 2 BHK <br>
    <input type="radio" name="clintsizeofhome" value="3bhk"> 3 BHK <br>
    <input type="radio" name="clintsizeofhome" value="4bhk"> 4 BHK <br>
    <input type="radio" name="clintsizeofhome" value="5bhk"> 5 BHK <br>
    <input type="radio" name="clintsizeofhome" value="6bhk"> 6+ BHK <br></p>
   
<p>City :* <br><input type="text" name="clintcity" required></p>
<input type="submit" value="Submit" id="submit" name="submit">

</form>
</div>

<footer class="footer">
  <h2>all @copyright rserved to LAKRIWALA</h2>

</footer>
</body>

</html>

<!--
https://www.pexels.com/search/furniture/
https://www.neotecture.in/
https://fluentdesignpdx.com/work.html
-->