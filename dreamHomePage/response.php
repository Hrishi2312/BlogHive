<?php
include('App/Database/connect.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$key = $_SESSION['search-key'];
session_destroy();
$sql = "SELECT * FROM post where title LIKE '%$key%' OR body LIKE '%$key%' LIMIT $start_from, $limit";
$rs_result = mysqli_query($conn, $sql);


?>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<div class="clearfix card" style="width: 20rem;">
	<div class="embed-responsive embed-responsive-4by3">
	    <?php
            echo "<img src='Assets/images/postImage/".$row['image']."'"." class='slider-image'>";
        ?>
    </div>
	<div class="card-body" style="min-height:40px">
	  <h4 class="card-title"><?php echo $row['title']?></h4>

	</div>
	<div class="card-footer">
	  <i class="fa fa-calendar" aria-hidden="true"><?php echo date('d M, Y', strtotime($row['created_at'])); ?></i>
                            &nbsp;
                            <i class="fa fa-clock"><?php echo date('h:i:s A', strtotime($row['created_at'])); ?></i>
	  <a href="../single.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Find Out More!</a>
	</div>
</div>
<?php
};
?>
