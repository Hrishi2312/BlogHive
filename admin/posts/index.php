<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="stylesheet" href="../../Assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <title>Admin Section - Manage Posts</title>

</head>
<body>
    <header>
        <div class="logo">
            <h1 class="actLogo">Blogger</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
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

    <div class="admin-wrapper">
        <!--Left sidebar-->
        <div class="left-sidebar">
            <ul>
                <li><a href="index.html">Manage Posts</a></li>
                <li><a href="../users/index.html">Manage Users</a></li>
                <li><a href="../topics/index.html">Manage Topics</a></li>
            </ul>
        </div>
        <!--Left sidebar-->

        <!--admin content-->
        <div class="admin-content">
            <div class="btn-gp">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
            <h2 class="page-title">Manage Posts</h2>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Actions</th>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>this is the first post</td>
                    <td>Pravin Jagtap</td>
                    <td><a href="#" class = "edit">edit</a></td>
                    <td><a href="#" class = "delete">delete</a></td>
                    <td><a href="#" class = "publish">publish</a></td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>this is the second post</td>
                    <td>Suyog Shette</td>
                    <td><a href="#" class = "edit">edit</a></td>
                    <td><a href="#" class = "delete">delete</a></td>
                    <td><a href="#" class = "publish">publish</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <!--admin content-->
    </div>


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--custom js-->
    <script src="../../Assets/js/script.js"></script>

</body>
</html>
