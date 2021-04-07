<?php
include 'template/header.html';
require_once 'connectdb.php';
$id = "";
$username = "";
$status = "";
$strSQL = "";
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if(isset($_GET["id"]) && $_GET["id"] != '') {
        $id = $_GET["id"];
        $username = $_GET["username"];
        $status = $_GET["status"];
    }else {
        //echo "id is null";
    }
}
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    echo $username . " -- " .$status;
    $strSQL ="UPDATE `user` SET `username`='" .$username."',`status`=".$status." WHERE id=".$id;
    if(($username == "") && ($status == "")) {
        echo "ไม่สามารถเพิ่มข้อมูลได้";
    }else{
        echo $strSQL ;

        $result = $myconn->query($strSQL);
        if($result){
            echo "เพิ่มข้อมูลสำเร็จ";
        }else{
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
    }
    //echo $_POST["username"];



    //$strSQL ="INSERT INTO user`(username`, password_hash) ";
    //$strSQL .=" VALUES ('user03','password for user 03')";

    //$result = $myconn->query($strSQL);
    //if($result){
    //    echo "1";
    //}else{
    //    echo "2";
    //}
    ?>
   
    <body>
    <form action="update.php?id=<?=$id?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="username" value="<?=$username ?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">status</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="status" value="<?= $status?>">
  </div>
  
  <button type="submit" class="btn btn-primary">SAVEชาวโลก</button>
</form>
    <?php
       include 'template/footer.html';
       ?>
    </body>
    </html>