<?php include('../../App/Database/db.php');
    $rs_result = selectAll('post',['created_by'=>$_SESSION['username']]);
    //print_r($rs_result[0]);

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
            <h1 class="actLogo"><a href = "../../index.php">Blogger</a></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="#">
                <i class="fa fa-user"></i>
               <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
               </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="../../logout.php" class="out">Log out</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!--page wrapper-->

    <div class="admin-wrapper">
        <!--Left sidebar-->
        <div class="left-sidebar">
            <ul>
                <li><a href="index.php">Manage Posts</a></li>
                <li><a href="../topics/create.php">Manage Topics</a></li>
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
                    <?php
                        $i = 0;

                        while ($i<sizeof($rs_result)) {

                            $row = $rs_result[$i];
                    ?>
                    <tr>
                    <td><?php echo ($i+1)?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['created_by'] ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class = "edit">edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class = "delete">delete</a></td>
                    </tr>
                    <?php
                        $i++;
                    };
                    ?>
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
