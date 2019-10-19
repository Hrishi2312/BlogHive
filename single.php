<?php
    include('App/Database/db.php');
    $rs_result = selectAll('post');
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
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sigup</a></li>
            <li><a href="#">
                <i class="fa fa-user"></i>
               Satej Kokate
                <i class="fa fa-chevron-down"></i>
               </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="out">Log out</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!--page wrapper-->

    <div class="page-wrapper">

        <!--Content-->

        <div class="content clearfix">
            <div class="recent-post-section single">
                <h1 class="post-title">This is the title of the post</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptatum, obcaecati officiis consequuntur aspernatur voluptatibus?</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quas animi praesentium, eos recusandae illum sed doloremque quisquam odio nesciunt reiciendis! Fuga eveniet inventore sint dolor voluptatibus quo omnis. Architecto fuga, asperiores rem ut exercitationem, voluptatum aperiam ipsum dolores beatae ducimus molestias, nostrum magni obcaecati nam cum fugiat! Iste, dicta.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem ipsum culpa fugiat, molestias ad natus numquam necessitatibus officiis cupiditate rerum odio alias iste! Nobis vero ratione facilis deleniti deserunt quis! Distinctio facere culpa aliquam id, deserunt repellat harum vitae, aliquid quibusdam rem quam optio natus molestias? Rerum ut odit doloremque accusamus soluta et eius earum iusto voluptas atque expedita ex id eveniet doloribus incidunt laboriosam recusandae, rem odio voluptatum sequi vero quibusdam vitae sit, inventore impedit. Eaque pariatur fugit, aperiam eligendi laboriosam earum nulla numquam eveniet cumque.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, fuga culpa enim quis earum molestiae dolorem quae. Nihil, quod iure. Reiciendis debitis distinctio quam in.</p>
            </div>

            <!--Side Bar-->
            <div class="sidebar single">
                <div class="section popular">
                    <h1>Popular</h1>
                    <div class="post clearfix">
                        <img src="Assets/images/post2.jpeg" alt="">
                        <a href="single.html">The most stammering performance of joker</a>
                    </div>
                    <div class="post clearfix">
                        <img src="Assets/images/post2.jpeg" alt="">
                        <a href="single.html">The most stammering performance of joker</a>
                    </div>
                    <div class="post clearfix">
                        <img src="Assets/images/post2.jpeg" alt="">
                        <a href="single.html">The most stammering performance of joker</a>
                    </div>
                    <div class="post clearfix">
                        <img src="Assets/images/post2.jpeg" alt="">
                        <a href="single.html">The most stammering performance of joker</a>
                    </div>
                    <div class="post clearfix">
                        <img src="Assets/images/post2.jpeg" alt="">
                        <a href="single.tml">The most stammering performance of joker</a>
                    </div>
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
            <!--Side bar-->
        </div>
    </div>

    <!--Content-->

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
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
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
