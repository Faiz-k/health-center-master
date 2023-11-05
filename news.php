<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Health Hub</title>
    <link rel="icon" href="./images/favicon.png" type="png">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>

    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

             <div class="navbar-header">
                  <img src="./images/logo.png" alt="" height="50px">
             </div>

             <!-- MENU LINKS -->
             <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                       <li><a href="./index.php#top" class="smoothScroll">Home</a></li>
                       <li><a href="./index.php#about" class="smoothScroll">About Us</a></li>
                       <li><a href="./index.php#team" class="smoothScroll">Doctors</a></li>
                       <li><a href="./news.php" class="smoothScroll">News</a></li>
                       <li><a href="./index.php#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="./index.php#appointment">Skin Test</a></li>
                  </ul>
             </div>

        </div>
   </section>

    <main>
        <div class="cards-container container flex" id="cards-container">
            
        </div>
    </main>

    <template id="template-news-card">
        <div class="card">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
            </div>
        </div>
    </template>

    <script src="script.js"></script>
</body>
</html> 