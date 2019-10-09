<?php  
    include('C:/xamppNew/htdocs/BlogHive/App/Database/db.php');
    if(isset($_POST['add-post'])){
        unset($_POST['add-post']);
        print_r($_FILES['image']);
        print_r($_POST);
        $target_dir = "../../Assets/images/postImage/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbName = 'blog';

        $conn = new MySqli($host, $user, $pass, $dbName);
        $image = $_FILES['image']['name'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic = $_POST['topic'];
        
        $query = "INSERT INTO post (title, body, image,topic)
        VALUES (?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $title, $body,$image,$topic);
        $stmt->execute();
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";}
        }
?>
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
                <a href="create.html" class="btn btn-big">Add Post</a>
                <a href="index.html" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content-create">
            <h2 class="page-title">Add Posts</h2>
                <form action="create.php" method="post" class="form-style" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title"  class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body" name="body"></textarea>
                    </div>
                    
                    <div class="image-upload-wrapper">
                        <label>Preview image</label><br><br>
                        <input type="file" name="image" class = "text-input" >
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic" class = "text-input">
                            <option value="Motivational">Life Lesson</option>
                            <option value="Poem">Poem</option>
                            <option value="Learning">Learning</option>
                            <option value="Programming">Programming</option>
                        </select>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-big" name=add-post>Add Post</button>
                    </div>
                </form>
            </div>
        </div>
        <!--admin content-->
    </div>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--ck editor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

    <!--custom js-->
    <script src="../../Assets/js/script.js"></script>

</body>
</html>

