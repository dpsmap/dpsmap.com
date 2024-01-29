<?php
include 'connection.php';
session_start();
if(isset($_POST['uname']) && $_POST['pass']){
    $_SESSION["user"]=$_POST['uname'];
    $_SESSION["pass"]=$_POST['pass'];
}
if($_SESSION["user"]=="admin" && $_SESSION["pass"]=="12qwaszxQWER")
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>DPS Map Pricing</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <style>
        
            #has{margin-top:5vw;}
            
            .white,a {color:#ffffff;padding-left:1vw;}
           
            .col{padding-top:2vw;}
           
            #admin-head{background-color: #000000;padding-bottom:5vw;padding-top:2vw;}
            
            #admin-body{background-color: #4747ed;padding-bottom:100vw;margin-top:0vw !important;}
            
            form{margin-bottom:3vw;}
            
            select{width:30px;}
            span.green{color:green;font-weight:500px;}
            span.red{color:red;}
            span.yellow{color:orange;}
       
        </style>
        <div class="row">
        <div class="col-sm-3" id='col3'>
            <div id="admin-head" >
                <h3 class="white" style="background-color: #000000 !important;"> Adminer</h3>
            </div>
            <div id="admin-body">
                <p class="white"><a href="dashboard.php">Pricing List</a></p>
                <p class="white"><a href="insert.php">New Item</a></p>
                <p class="white"><a href="logout.php">Log Out</a></p>
                <hr>
                <p class="white" id="has" style="margin-top:5vw important;"><b><small>Developed By Htet Aung Shane</small></b></p>
            </div>
            
            
        </div>
        
        <div class="col-sm-9">
        <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Item</th>
                <th> 1pcs Price</th>
                <th> Above 10pcs Price</th>
                <th> Above 20pcs Price</th>
                <th> Above 50pcs Price</th>
                <th> Reseller</th>
                <th> Server</th>
                <th> Remark</th>
                <th> Update</th>
            </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM  pricing ";
                
            $result = mysqli_query($conn, $sql);
                
                
                if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                
                <td><?php echo $row["no"];?></td>
                <td><?php echo $row["item"];?></td>
                <td><?php echo $row["1pcs_price"];?></td>
                <td><?php echo $row["10pcs_price"];?></td>
                <td><?php echo $row["20pcs_price"];?></td>
                <td><?php echo $row["50pcs_price"];?></td>
                <td><?php echo $row["reseller"];?></td>
                <td><?php echo $row["server"];?></td>
                <td><?php echo $row["remark"];?></td>
                <td><a href="updated.php?id=<?php echo $row["id"];?>" style="color:tomato !important;"><u>Update </u></a></td>
                
            </tr>
            <?php
                    }
                    }
                     mysqli_close($conn);
            ?>
              
            </tbody>
            </table>
        </div>
        </div>
    </body>
    <?php
}
else if($_SESSION["user"]=="admin" && $_SESSION["pass"]=="12qwaszx")
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>DPS Map Pricing</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <style>
        
            #has{margin-top:5vw;}
            
            .white,a {color:#ffffff;padding-left:1vw;}
           
            .col{padding-top:2vw;}
           
            #admin-head{background-color: #000000;padding-bottom:5vw;padding-top:2vw;}
            
            #admin-body{background-color: #4747ed;padding-bottom:100vw;margin-top:0vw !important;}
            
            form{margin-bottom:3vw;}
            
            select{width:30px;}
            span.green{color:green;font-weight:500px;}
            span.red{color:red;}
            span.yellow{color:orange;}
       
        </style>
        <div class="row">
        <div class="col-sm-3" id='col3'>
            <div id="admin-head" >
                <h3 class="white" style="background-color: #000000 !important;"> Adminer</h3>
            </div>
            <div id="admin-body">
                <p class="white"><a href="dashboard.php">Pricing List</a></p>
                <p class="white"><a href="logout.php">Log Out</a></p>
                <hr>
                <p class="white" id="has" style="margin-top:5vw important;"><b><small>Developed By Htet Aung Shane</small></b></p>
            </div>
            
            
        </div>
        
        <div class="col-sm-9">
        <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Item</th>
                <th> 1pcs Price</th>
                <th> Above 10pcs Price</th>
                <th> Above 20pcs Price</th>
                <th> Above 50pcs Price</th>
                <th> Reseller</th>
                <th> Server</th>
                <th> Remark</th>
                
            </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM  pricing ";
                
            $result = mysqli_query($conn, $sql);
                
                
                if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                
                <td><?php echo $row["no"];?></td>
                <td><?php echo $row["item"];?></td>
                <td><?php echo $row["1pcs_price"];?></td>
                <td><?php echo $row["10pcs_price"];?></td>
                <td><?php echo $row["20pcs_price"];?></td>
                <td><?php echo $row["50pcs_price"];?></td>
                <td><?php echo $row["reseller"];?></td>
                <td><?php echo $row["server"];?></td>
                <td><?php echo $row["remark"];?></td>
                
                
            </tr>
            <?php
                    }
                    }
                     mysqli_close($conn);
            ?>
              
            </tbody>
            </table>
        </div>
        </div>
    </body>
    <?php
}
?>