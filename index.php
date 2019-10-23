<?php
  include('App/Database/db.php');
  $rs_result = selectWithExtra('post', [], 'ORDER BY created_at DESC');
  function trim_text($input, $length, $ellipses = true, $strip_tag = true,$strip_style = true) {
    if ($strip_tag)
      $input = strip_tags($input);
    if ($strip_style)
      $input = preg_replace('/(<[^>]+) style=".*?"/i', '$1',$input);
    if($length=='full')
      $trimmed_text=$input;
    else {
      if (strlen($input) <= $length)
        return $input;
      $last_space = strrpos(substr($input, 0, $length), ' ');
      $trimmed_text = substr($input, 0, $last_space);
      if ($ellipses)
        $trimmed_text .= '...';
    }
    return $trimmed_text;
  }
?>
<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <title>Blogger</title>

</head>
<body>
    <header>
        <div class="logo">
            <h1 class="actLogo">Blogger</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us/index.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <?php
          endif;
             ?>
        </ul>
    </header>

    <!--page wrapper-->

    <div class="page-wrapper">

        <!--Page Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>
                <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>

                    <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>
                    <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>

                    <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>

                    <div class="post">
                    <img src="Assets/images/post1.jpeg" alt="" class="slider-image">

                    <div class="post-info">
                        <h4><a href="single.php">One day you will leave this world behind so live a life you will remember</a></h4>
                        <i class="far fa-user">Satej kokate</i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true">2 October 2019</i>
                    </div>
                </div>
        </div>
        <!--Page Slider-->

    <!--Content-->

    <div class="content clearfix">
        <div class="recent-post-section">
            <h1 class="recent-post-title">Recent Posts</h1>
            <?php
                $i = 0;

                while ($i<sizeof($rs_result)) {

                $row = $rs_result[$i];
            ?>
            <div class="post">
                <?php
                    echo "<img src='Assets/images/postImage/".$row['image']."'"." class='img-style'>";
                ?>
                <div class="post-preview">
                    <h2><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
                    <i class="fa fa-user"><?php echo $row['created_by']; ?></i>
                    &nbsp;
                    <i class="fa fa-calendar" aria-hidden="true"><?php echo date('d M, Y', strtotime($row['created_at'])); ?></i>
                    &nbsp;
                    <i class="fa fa-clock"><?php echo date('h:i:s A', strtotime($row['created_at'])); ?></i>
                    <p class="prev-text"><?php echo trim_text($row['body'], 200); ?></p>
                    <a href="single.php?id=<?php echo $row['id']; ?>" class="btn read-more">Read More</a>
                </div>
            </div>
            <?php
                $i++;
            };
            ?>
        </div>

        <!--Side bar-->
        <div class="sidebar">
            <div class="section search">
                <h1 class="search-text">Search</h1>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" placeholder="Search..." class="text-input">
                </form>
            </div>
            <div class="section topic">
                <h2 class="topic-title">Catagories</h2>
                <ul>
                    <li><a href="#">Poem</a></li>
                    <li><a href="#">Story</a></li>
                    <li><a href="#">Motivational</a></li>
                    <li><a href="#">Gaming</a></li>
                    <li><a href="#">Biography</a></li>
                    <li><a href="#">Learing</a></li>
                    <li><a href="#">Programming</a></li>
                </ul>
            </div>
        </div>
        <!--Sidebar-->
    </div>
</div>
    <!--Content-->
    </div>

    <!--footer-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
               <h1 >Blogger</h1>
               <p>
                   Blogger is a blogging website meant
                   for the people to explore thoughts
                   and reforms in the world and also
                   a hub for creative writting
               </p>
               <div class="contact">
                   <span><i class="fas fa-phone"></i>&nbsp;8826544644</span>
                   &nbsp;
                   <span><i class="fas fa-envelope"></i>&nbsp;redament24@gmail.com</span>
               </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <li><a href="https://en.wikipedia.org/wiki/Blog#History" target = "_blank">History of Blogs</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Blog#Types" target = "_blank">Types of Blogs</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Blog#Popularity" target = "_blank">Popularity of Blogs</a></li>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h1>Contact Us</h1>
                <form action="index.html" method="post">
                    <input type="email" class="text-input contact-input" placeholder="Enter email here">
                    <textarea name="message" placeholder="Give us feedback" class="message-style"></textarea>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; Github | Designed by Satej Kokate,Sushant Shinde,Hrishikesh Agrawal and Chitleen Mohapatras
        </div>
    </div>
    <!--footer-->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--custom js-->
    <script src="Assets/js/script.js"></script>

    <!--slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--footer-->
</body>
</html>
