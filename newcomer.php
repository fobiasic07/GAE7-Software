<!DOCTYPE html>
<html>
    <head>
        <title>Newcomer Details</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        require __DIR__ . '/passwdgen.php';
        require __DIR__ . '/db_connect.php';
        $conn = connect();
        if ($conn != NULL){
            try {

            // prepare sql, bind parameters and insert a row
            $stmt = $conn->prepare("INSERT INTO newcomers(email, pwd) VALUES (:email, :pwd)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pwd', $pwd);  
            $pwd = password(10);
            $email = $_GET["email"];
            $stmt->execute();
            echo "<h3> Added " . $email . "</h3>";
            echo "<h4> Password: " . $pwd . "</h4>";
            
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
          finally{
            $conn = NULL;
          }
        }
        ?>

        
        
       
    </body>
</html>