    <?php
     include 'template/header.html';
     require_once 'connectdb.php';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $frmUsername = $frmPassword = "";
       $frmUsername = $_POST["username"];
        $frmPassword = $_POST["username"];

        if($frmUsername && $frmPassword) {
            $strSQL ="INSERT INTO user(username,password_hash,status) ";
        $strSQL .=" VALUES ('". $frmUsername ."','". $frmPassword ."',0)";

        $result = $myconn->query($strSQL);
        if($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
        }else {
            echo "ไม่สามารถเพิ่มข้อมูล";
        }
    }
        }



        ?>
        <body>


<form action="insert.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">SAVEชาวโลก</button>
</form>
       <?php
       include 'template/footer.html';
       ?>
</body>

</html>