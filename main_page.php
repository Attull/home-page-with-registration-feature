<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My team</title>
    <link rel="stylesheet" type="text/css" href="scss/main.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>

<body>
    <header>
            <nav>
                <label class="logo">Cerebo Kids</label>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">CK Community</a></li>
                    <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact us</a></li>
                </ul>
                <label id="icon">
                    <i class="fas fa-bars"></i>
                </label>
            </nav>
        </header>

    <header class="hero">
        <div class="container spacing">
        
            <a href="sign_up.php" class="btn">Book Free Class</a>
        </div>
    </header>

    <main>
        <section class="featured">
            <div class="container">
            <h2 class="section-title"> Our Mentors </h2>
            <div class="split">
                <a href="#" class="featured__item">
                    <img src="image/sh.png" alt=""  class="featured_img">
                    <p class="featured__details"><span class="about">Arpit Gupta</span></p>
                </a>
                <a href="#" class="featured__item">
                    <img src="image/k.png" alt=""  class="featured_img">
                    <p class="featured__details"><span class="about">Shruti Goel</span></p>
                </a>
                <a href="#" class="featured__item">
                    <img src="image/som.png" alt=""  class="featured_img">
                    <p class="featured__details"><span class="about">Kumar Garvit</span></p>
                </a>
            </div>
            </div>
        </section>

        <section class="our-products">
            <div class="container">
                <h2 class="section-title">Explore Our Programs</h2>
                <p class="des"></p>
                <article class="product spacing">
                <img src="image/happi.svg" alt="" class="product__image">
                    <h3 class="product__title">Finance Learner's Program</h3>
                    <p class="product__description"></p>
                    <a href="" class="btn">Explore more</a>
                </article>
                
                <article class="product spacing">
                    <img src="image/brain.svg" alt="" class="product__image">
                    <h3 class="product__title">MAC4Kids Program</h3>
                    <p class="product__description"></p>
                    <a href="" class="btn">Explore more</a>
                </article>
            </div>
        </section>

        <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <br>
            <br>
    </main>

    </body>

</html>