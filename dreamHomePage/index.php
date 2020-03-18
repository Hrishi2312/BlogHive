<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlogHive</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <nav>
            <div class="row clearfix">
                <h1 class="logo">BlogHive</h1>
                <ul class="main-nav">
                  <?php
                  if(isset($_SESSION['id'])):
                  ?>
                  <li><a href="#">
                      <i class="fa fa-user"></i>
                     <?php echo $_SESSION['username']; ?>
                      <i class="fa fa-chevron-down"></i>
                     </a>
                      <ul>
                          <?php if($_SESSION['admin']): ?>
                          <li><a href="admin/posts/">Dashboard</a></li>
                          <?php endif; ?>
                          <li><a href="logout.php" class="out">Log out</a></li>
                      </ul>
                  </li>
                  <?php
              else:
                  ?>
                  <li><a href="../login.php">Login</a></li>
                  <li><a href="../signup.php">Sign Up</a></li>
                  <?php
                endif;
                   ?>
                   <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="image-nav">
            <h1 class="image-nav-text">WELCOME TO Blog<span>Hive</span>.<br>
            WE MARKUP YOUR THOUGHTS.
            </h1>
            <a href="explorePg.php"ss class="btn">Explore Blogs</a>
            <a href="#" class="btn">Create your own</a>
        </div>
    </header>

    <div class="segment">
        <h2 class="heading">Our Purpose</h2>
        <h3 class="sub-heading">Use your thoughts and imagination</h3>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos cupiditate, in fugiat nihil veniam vel sequi est perferendis aut possimus magni, ipsam aspernatur dicta accusantium consequuntur qui quas quisquam laboriosam repellendus provident libero tempora nulla? Dolorem possimus, dicta, facere rem cum est commodi autem asperiores incidunt. Laboriosam qui a repellat facere sapiente, minima alias ad ipsam, fugit adipisci, sit. Error aut magnam obcaecati quia? Iure soluta vel delectus, sit vitae omnis pariatur fugit tempore iusto, repudiandae modi iste quae facere impedit, commodi asperiores assumenda eius fuga? Id ab facere iusto qui dolorum fugit impedit assumenda minima. Eum ea sit voluptatem eveniet labore magni odio, delectus accusantium consectetur. Illum nobis tempora laboriosam modi animi accusamus perferendis ex, reiciendis architecto, consectetur est, adipisci voluptatem mollitia in beatae aperiam nesciunt fuga blanditiis illo ullam nemo porro totam asperiores ea. Cupiditate earum, dolor incidunt eum vitae facere nisi necessitatibus aliquam magnam, numquam similique iste suscipit doloribus. Corrupti ut rerum itaque ullam nostrum, et voluptates cumque repellendus ratione amet nobis laboriosam ab unde tempora est omnis dolorum suscipit. Atque laborum cum perspiciatis nam itaque reiciendis animi sed pariatur sit aperiam, cumque repellendus est modi maxime nesciunt, quibusdam facere. Impedit, laboriosam libero exercitationem sed tempore quas.</p>
    </div>

    <div class="features">
        <img src="images/homepage-img.jpg" class="img-style">
        <div class="content">
            <h1>Name of the feature</h1>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="fancy">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, molestiae.
            </p>
        </div>
    </div>

    <div class="features">
        <img src="images/homepage-img.jpg" class="img-style">
        <div class="content">
            <h1>Name of the feature</h1>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="fancy">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, molestiae.
            </p>
        </div>
    </div>

    <div class="features">
        <img src="images/homepage-img.jpg" class="img-style">
        <div class="content">
            <h1>Name of the feature</h1>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="fancy">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, molestiae.
            </p>
        </div>
    </div>

    <div class="features">
        <img src="images/homepage-img.jpg" class="img-style">
        <div class="content">
            <h1>Name of the feature</h1>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem hic nisi magnam labore vel laborum quo deserunt sit eius.
            </p>
            <p class="fancy">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, molestiae.
            </p>
        </div>
    </div>



</body>
</html>
