<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"

    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="carousal.css">

    <title>theresgen</title>
  </head>
  <body>
    <!--corasal-->
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <h1><a class="navbar-brand" id="tor" href="#">THE RESGEN</a></h1>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="welcome.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#aboutus">about</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="filling.php">resumegen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactus">contact us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\slide1.jpg"
            class="d-block w-100"
            alt="img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>want to land in your dream job?</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\slide2.jpg"
            class="d-block w-100"
            alt="...img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\slide3.jpg"
            class="d-block w-100"
            alt="...img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--for about us-->
    <div class="aboutus">
      <p><figure class="text-center">
        <blockquote class="blockquote">
          <h2 id="aboutus"><strong>ABOUT US</strong></h2>
        </blockquote></p></figure>
      <h4 class="h22">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia rem dolor nulla laboriosam ab sunt repellat est maxime quam corporis excepturi consequatur natus labore, placeat quis obcaecati exercitationem repellendus hic at error? Ipsum mollitia minus id eum et at eaque voluptatibus laudantium nemo labore aliquid fugit, necessitatibus nihil similique culpa quidem in? Hic tenetur ea error deserunt numquam, blanditiis nemo eveniet in aperiam aliquid ex, fuga doloremque magni sed aspernatur atque voluptatum esse obcaecati? Necessitatibus fuga, suscipit voluptates eum quaerat similique in adipisci veritatis, dignissimos corporis recusandae? Illo perferendis fugit qui, quaerat consequatur atque nobis, voluptate libero, facere eum officiis.</h4>
    </div>


<!--button-->
    <a class="btn btn-dark" href="filling.php" role="button" >build now</a>
    

<!--quote-->
    <figure class="text-center">
      <blockquote class="blockquote">
        <h3><strong>USE RESUME BUILDER</strong></h3>
      </blockquote>
      <h5> <figcaption class="blockquote-footer">
        build your resume and get started in career , just enter the required detaild and your perfect resume will be ready in minutes<cite title="Source Title">Source Title</cite>
      </figcaption></h5>
    </figure>
   

 <!--cards-->
    <div class="card">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" >
            <img src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\temall.jpg" class="card-img-top" alt="...img">
            <div class="card-body">
              <p class="card-text"> <h4>STEP 1</h4> select template of your choice</p>
              <a class="btn btn-dark" href="templets.php" role="button" >choose now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" >
            <img src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\fill.jpg" class="card-img-top" alt="...img">
            <div class="card-body">
              <p class="card-text"> <h4>STEP 2</h4>just fill in the blanks 
             , as simple as that</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" >
            <img src="C:\Users\Sinchana\OneDrive\Desktop\project\img\picspucs\R (1).png" class="card-img-top" alt="...img">
            <div class="card-body">
              <p class="card-text"><h4>STEP 3</h4>download your resume in PDF format
            </div>
          </div>
        </div>
      </div>
    </div>


<!--quote-->
    <figure class="text-center">
      <blockquote class="blockquote">
        <p>if you cant make it good,atleast make it look good!.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <a class="btn btn-dark" href="filling.php" role="button" >build now</a>
        create resume  <cite title="Source Title">get started</cite>
      </figcaption>
    </figure>


<!--why us-->
    <figure>
      <blockquote class="blockquote">
        <h1>why choose our website?</h1>
      </blockquote>
    </figure>


<!--steps-->
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="C:\Users\Sinchana\OneDrive\Desktop\staycool\pics\pucs\step1.jpg" class="img-thumbnail" alt="...img">
          
        </div>
        <div class="col">
         <P> <h1>FREE OF COST</h1>  obcaecati corrupti exercitationem mollitia expedita, eos velit asperiores ab iusto iste et explicabo, maiores blanditiis!</P>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="C:\Users\Sinchana\OneDrive\Desktop\staycool\pics\pucs\step2.jpg" class="img-thumbnail" alt="..img.">
          
        </div>
        <div class="col">
         <P> <H1>SAVE YOUR MONEY</H1>  obcaecati corrupti exercitationem mollitia expedita, eos velit asperiores ab iusto iste et explicabo, maiores blanditiis!</P>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="C:\Users\Sinchana\OneDrive\Desktop\staycool\pics\pucs\step3.jpg" class="img-thumbnail" alt="...img">
          
        </div>
        <div class="col">
         <P><h1> HASSEL FREE!</H1>  obcaecati corrupti exercitationem mollitia expedita, eos velit asperiores ab iusto iste et explicabo, maiores blanditiis!</P>
        </div>
      </div>
    </div>


<!--contactus-->
    <form class="first"  method="POST" action="loginpage.php">
      
      <h1 id="contactus" >CONTACT US </h1>

      <input type="text" placeholder="your name " />
      <input type="text" placeholder="your email " />
     <input type="text" placeholder="write to us" />
     <input type="submit" value="SEND" />
     </form>


     


<!--footer-->
     <div class="text-center bg-light text-dark">
       <h1>THE resumegen</h1>
     </div>

     hr 


     <div class="container text-center default-color text-light">
       <div class="row">
         <div class="col text-center">
           <h1><a href="#"><i></i></a>stay connected</h1>
         </div>
         <div class="col text-center">
           <h1><a href="#"><i></i></a>support </h1>
         </div>
         <div class="col text-center">
           <h1><a href="#"><i></i></a>find us here</h1>
         </div>
       </div>
     </div>
     

     
     <hr>



     <footer>
       <div class="container text-center default-color">
        <div class="container text-center text-dark">
          <div class="row">
            <div class="col text-center">
             
              <p><a href="#"><i class="fa fa-facebook  fa-2x "></i>facebook</a></p>
              <p><a href="#"><i class="fa fa-instagram fa-2x"></i></a>instagram</p>
              <p><a href="#"><i class="fa fa-twitter fa-2x"></i></a>twitter</p>
              <p><a href="#"><i  class="fa fa-home fa-2x" ></i></a>home</p>
              <p><a href="#"><i  class="fa fa-linkedin fa-2x" ></i></a>linkedin</p>
              
              
            </div>
        
            <div class="col text-center ">
          <p><a href="#"></a>contact us</p>
          <p><a href="#"></a>FAQ</p>
          <p><a href="#"></a>polices</p>
          <p><a href="#"></a>contact support</p>
          <p><a href="#"></a>partners</p>
            </div>
        
            <div class="col text-center ">
            <p>Dans une résidence de 1995, cet appartement d'une superficie de 88.5M2 (84,10M2 loi Carrez) est situé dans une rue calme entre les stations de métro Richard-Lenoir, Saint Ambroise, chemin vert. Au 2nd étag</p>
            </div>
        
          </div>
        </div>
       </div>
     </footer>
     
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

  
  </body>
</html>
