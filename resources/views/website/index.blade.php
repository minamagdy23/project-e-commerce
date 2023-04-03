<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--------google fonts------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!------font awesome------->
    <link rel="stylesheet" href="https://kit.fontawesome.com/f8e488f435.css" crossorigin="anonymous">
    <!----- css ------>
    <link rel="stylesheet" href="{{ asset('website') }}/style.css"/>
    <!------ bootstrap ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container-fluid head">
        <div class="col-3"><h2>Free Shipping on All Orders Over $75!</h2></div>
        <div class="col-7">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Log In</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Wishlist</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><label for="currency">currency</label>
            <select>
                <option>USd</option>
                <option>Euro</option>
                <option>L.E</option>
            </select></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ">My CArt ()</a>
                </li>
              </ul>
        </div>
    </section>
<!----------------------end head----------------------->
    <section class="search container-fluid">
        <input id="search" type="search" placeholder="search..."/>
        <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
    </section>


<!--------------end search------->
<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">fashion</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">women</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">man</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">footwear</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">sales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</section>
<!-------------end navbar--------->
<section class="container-fluid carousel">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://club-for-girls.org/wp-content/uploads/2015/03/modnyye-tendentsii-vesna-2015-35.jpg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://th.bing.com/th/id/R.1947ad5ac2c039dafdc95661a2e841d2?rik=xtzJXpq8Ww6Ltg&pid=ImgRaw&r=0"  alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://m.media-amazon.com/images/S/aplus-seller-content-images-us-east-1/ATVPDKIKX0DER/A3RY1ELNVW1110/9b30243c-62a0-4977-8dbd-a26e5588a3a7._CR0,0,970,600_PT0_SX970__.jpg"  alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
<section class="collection container">
    <div class="coll-left">
      <img src="https://th.bing.com/th/id/R.6cf260d7ef02dbc0dd493c2a4505844a?rik=dWUP%2bgB7EamoTw&riu=http%3a%2f%2fwww.nvmatchmakers.co.uk%2fwp-content%2fuploads%2f2017%2f06%2fFotolia_162247006_Subscription_Monthly_M.jpg&ehk=xq0G7Ivby8PYYK5Rwn25mL9KWYBVt333AfXucLP3IE4%3d&risl=&pid=ImgRaw&r=0" width="700" height="470"/>
      <h5>Hot Collection</h5>
      <h3>New Trend For Women</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem saepe nobis facere voluptatibus sit eius officiis adipisci ea ratione provident vitae fugiat magnam, iste animi corporis repudiandae pariatur, eveniet quo!</p>
      <button class="shopnow">Shop Now</button>
    </div>
    <div class="coll-img">
        <div class="img-1"><img src="https://th.bing.com/th/id/R.25d4473c76dcd5e1d0ffdb24379af87f?rik=SkUIW%2fBlh7holA&pid=ImgRaw&r=0"/></div>
        <div class="img-2"><img src="https://th.bing.com/th/id/OIP.v2I8jdD-Qj0eVHIta_7c2gHaE8?pid=ImgDet&w=2048&h=1368&rs=1" /></div>
    </div>
</section>
<section class="feuture container">
    <div><h2>Feuturd items</h2></div>
    <div class="feuture-list">
      <ul>
        <li>All</li>
        <li>Men</li>
        <li>Women</li>
        <li>Kids</li>
      </ul>
    </div>
    <div class="feuture-cards">
      <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-regular fa-heart"></i>
          </div>
        </div>

      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-regular fa-heart"></i>
          </div>
        </div>

      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-sharp fa-regular fa-heart"></i>
          </div>
        </div>

      </div>
    </div>
</section>
<section class="title-model">
  <div class="women">
    <div>
      <h2>70% <span>OFF</span></h2>
    <h4>Tao Kinben Na?</h4>
    </div>
  </div>
  <div class="man">
    <div>
      <h5>AMR CHEHRA KHARAP NA</h5>
    <h4><span>CHEHRA</span> Dia KI hoy</h4>
    </div>
  </div>
</section>
<section class="container trending">
  <div><h2>Trending Item</h2></div>
  <div class="feuture-cards">
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://i0.wp.com/www.theunstitchd.com/wp-content/uploads/2018/03/mens-fashion-trends-this-year.jpg?fit=649%2C1078" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://jooinn.com/images/model-photoshoot-15.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.Zl0BSgnZVxzkjsNaAngUuwHaLH?pid=ImgDet&w=990&h=1485&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.Zl0BSgnZVxzkjsNaAngUuwHaLH?pid=ImgDet&w=990&h=1485&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://i0.wp.com/www.theunstitchd.com/wp-content/uploads/2018/03/mens-fashion-trends-this-year.jpg?fit=649%2C1078" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/R.a692894982664954e56fff9f1d9da5e3?rik=nFWxEERV53cvUA&pid=ImgRaw&r=0" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.Zl0BSgnZVxzkjsNaAngUuwHaLH?pid=ImgDet&w=990&h=1485&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/R.a692894982664954e56fff9f1d9da5e3?rik=nFWxEERV53cvUA&pid=ImgRaw&r=0" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://jooinn.com/images/model-photoshoot-15.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.Zl0BSgnZVxzkjsNaAngUuwHaLH?pid=ImgDet&w=990&h=1485&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div>
    <button class="load-more">Load More</button>
  </div>
</section>
<section class="content">
  <h2>,,</h2>
  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae fuga quasi similique, tempore ut neque possimus, repudiandae facilis doloremque cupiditate illo officiis dolorum illum porro. Dolorem consequuntur esse porro distinctio.</h3>
  <div class="title-content">
    <img src="https://th.bing.com/th/id/OIP.xJStLwZ_yJpr4bPr5asJyQHaFj?pid=ImgDet&rs=1" width="200px" height="100px"/>
    <h2>Mina Magdy</h2>
  </div>
</section>
<section class="container blog">
  <div><h2>latest Blog</h2></div>
  <div class="feuture-cards">
    <div class="card" style="width: 18rem;">
      <img src="https://th.bing.com/th/id/OIP.glgTOLT0Mp35i1Mr6PXwOQHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://i0.wp.com/www.theunstitchd.com/wp-content/uploads/2018/03/mens-fashion-trends-this-year.jpg?fit=649%2C1078" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://jooinn.com/images/model-photoshoot-15.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</section>
<section class="container">
  <div><h2>Shop By Brand</h2></div>
  <div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</section>
<section class="footer">
  <div class="footer-cards">
    <div><h2>SHOPS</h2></div>
    <div class="footer-list">
      <ul>
        <li><a href="#">New In</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Schuhe Shoes</a></li>
        <li><a href="#">Bags & Accessories</a></li>
        <li><a href="#">Top Brands</a></li>
        <li><a href="#">Sale & Special offers</a></li>
        <li><a href="#">Lookbook</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-cards">
    <div><h2>INFORMATION</h2></div>
    <div class="footer-list">
      <ul>
        <li><a href="#">About us</a></li>
        <li><a href="#">Customer Services</a></li>
        <li><a href="#">New Collection</a></li>
        <li><a href="#">Best Sellers</a></li>
        <li><a href="#">Manufacturers</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & condition</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-cards">
    <div><h2>CUSTOMER SERVICE</h2></div>
    <div class="footer-list">
      <ul>
        <li><a href="#">Search Terms</a></li>
        <li><a href="#">Advanced Search</a></li>
        <li><a href="#">Orders and Returns</a></li>
        <li><a href="#">Contact US</a></li>
        <li><a href="#">Rss</a></li>
        <li><a href="#">Help & FAQs</a></li>
        <li><a href="#">Consultant</a></li>
        <li><a href="#">Store Locations</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-form">
    <div><h2>NEWSLETTER</h2></div>
    <div style="color: white;"><h5>sign up for News Letter</h5></div>
    <div>
          <input type="text" placeholder="type your Email"/>
    </div>
    <div>
      <button class="SUBSCRIBE">SUBSCRIBE</button>
    </div>
    <div>
      <i class="fa-brands fa-square-facebook"></i>
      <i class="fa-brands fa-square-twitter"></i>
      <i class="fa-brands fa-square-behance"></i>
      <i class="fa-brands fa-square-tumblr"></i>
      <i class="fa-brands fa-vimeo"></i>
      <i class="fa-brands fa-youtube"></i>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div> <p>&copy;2021 ELLA fashion store Shopify.All Rights Reserved Ecommerce Software by Mina Magdy</p></div>
  <div class="footer-icons">
    <i class="fa-brands fa-cc-visa"></i>
    <i class="fa-brands fa-cc-mastercard"></i>
    <i class="fa-brands fa-cc-paypal"></i>
  </div>
  </div>
</footer>

    <script src="https://kit.fontawesome.com/f8e488f435.js" crossorigin="anonymous"></script>
<!------------ js bootstrap--------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
