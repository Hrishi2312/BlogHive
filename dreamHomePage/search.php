<?php
include('App/Database/connect.php');
if(isset($_POST['submit-button'])){
$_SESSION['search-key'] = $_POST['key'];
$key = $_POST['key'];    
echo "<pre>",print_r($_POST),"</pre>";    
}
//for total count data
$countSql = "SELECT COUNT(id) FROM post WHERE title LIKE '%key%' OR body LIKE '%key%'";  
$tot_result = mysqli_query($conn, $countSql);  

 
$row = mysqli_fetch_row($tot_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <style type="text/css">
	.card {
		height: 260px;
		width: 20%;
		margin-top:10px;
		margin-right:10px;
		float: left
	}
	.page-container {
		margin-top: 20px;
	}
    .page-wrapper {
        border: 1px solid red;
        height: 800px;
        width:70%;
    }    
    </style>
</head>
<body>
    
    <div class="page-wrapper">
        <div id="target-content" class="clearfix">
        </div>
    </div>
    
    <div>
    <ul class='pagination' id="pagination">
		<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
		 if($i == 1):?>
					<li class='page-item active'  id="<?php echo $i;?>"><a href='response.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a></li> 
		 <?php else:?>
		 <li id="<?php echo $i;?>" class="page-item"><a href='response.php?page=<?php echo $i;?>' class="page-link"><?php echo $i;?></a></li>
		 <?php endif;?> 
		<?php endfor;endif;?> 
	</ul>
    </div>
    <script type="text/javascript">
         $(document).ready(function(){
	     jQuery("#target-content").load("response.php?page=1");
        
         jQuery("#pagination li").on('click',function(e){
         e.preventDefault();
         jQuery("#target-content").html('loading...');
         jQuery("#pagination li").removeClass('active');
         jQuery(this).addClass('active');
         var pageNum = this.id;
         jQuery("#target-content").load("response.php?page=" + pageNum);
         });    
        })
        
    </script>
</body>
</html>