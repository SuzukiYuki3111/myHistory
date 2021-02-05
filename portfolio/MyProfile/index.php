<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Holtwood+One+SC&family=Permanent+Marker&family=Press+Start+2P&display=swap" 
          rel="stylesheet">    
    <title>CourageStyle</title>
</head>
<body>
    <header>
            <div class="alert alert-dark" 
                 role="alert" 
                 style="padding: 40px;">
                <a href="https://fontmeme.com/ja/font-graffiti-style/">
                    <img src="https://fontmeme.com/permalink/210115/4645ec5fc989471ab09cc0d51d5c1708.png" 
                         alt="font-graffiti-style" 
                         width="35%"
                         height="35%"
                         style="float: left;"
                         border="0">
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
    </header>
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-imgbd-placeholder-img-lg d-block w-100" 
                         width="800" 
                         height="525" 
                         xmlns="http://www.w3.org/2000/svg" 
                         preserveAspectRatio="xMidYMid slice" 
                         focusable="false" 
                         role="img" 
                         aria-label="Placeholder: First slide">
                         <title>かっちょいい写真</title>
                         <rect width="100%" height="100%" fill="#999"/>
                         <text x="50%" y="50%" fill="#888" dy=".3em">
                            <a href="profile.html">Profile</a>
                         </text>
                    </svg>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" 
                         width="800" 
                         height="525" 
                         xmlns="http://www.w3.org/2000/svg" 
                         preserveAspectRatio="xMidYMid slice" 
                         focusable="false" 
                         role="img" 
                         aria-label="Placeholder: Second slide">
                         <title>かっこええ写真</title>
                         <rect width="100%" height="100%" fill="#999"/>
                         <text x="50%" y="50%" fill="#888" dy=".3em">
                            Portfolio
                         </text>
                    </svg>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" 
                         width="800" 
                         height="525" 
                         xmlns="http://www.w3.org/2000/svg" 
                         preserveAspectRatio="xMidYMid slice" 
                         focusable="false" 
                         role="img" 
                         aria-label="Placeholder: Third slide">
                         <title>かこいい写真</title>
                         <rect width="100%" height="100%" fill="#999"/>
                         <text x="50%" y="50%" fill="#888" dy=".3em">
                             Contact
                         </text>
                    </svg>
                </div>
                </div>
                <a class="carousel-control-prev" 
                    href="#carouselExampleControls" 
                    role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>

        <h1>contact</h1>
    
        <?php include "./contact.php" ?>  
        <!-- includeにメール送信処理を記述 -->
        <form action="./contact.php" method="POST" enctype="">
        <div class="contact">
            <p>お名前</p>
            <input type="placeholder" name="name" value=""><br>
            <p>あなたのメールアドレス</p>
            <input type="placeholder" name="mail" value=""><br>
            <p>内容</p>
            <textarea name="text"></textarea><br>
            <input type="submit" name="sending" value="送信">
        </div>
    </form>

    </main>
    <footer>
        <span class="footerLogo">SuzukiYuki's Portfolio</span>
        <!-- githubアイコン -->
        <svg xmlns="http://www.w3.org/2000/svg"         
             width="16" 
             height="16" 
             fill="currentColor" 
             class="bi bi-github" 
             viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
        <!-- twitterアイコン -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             width="16" 
             height="16" 
             fill="currentColor" 
             class="bi bi-twitter" 
             viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>
        <!-- instagramアイコン -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             width="16" 
             height="16" 
             fill="currentColor" 
             class="bi bi-instagram" 
             viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>  
    </footer>
<!-- bootstrap javascriptプラグイン -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>