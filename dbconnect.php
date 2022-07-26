<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'meppwebsite';

try {
    $dsn = 'mysql: host='.$host.';dbname='.$dbname;
    $pdo = new PDO($dsn, $user, $password);
    // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage()."<br>";
  }
//   all blog posts
  $mepp_blog = $pdo->prepare("SELECT * FROM blogs order by date DESC LIMIT 6");
    $mepp_blog->execute();
    $row_mepp_blog = $mepp_blog->fetchAll(PDO::FETCH_OBJ);

     // side items on single blog post 
    $mepp_blogrecent = $pdo->prepare("SELECT * FROM blogs order by date DESC LIMIT 3");
    $mepp_blogrecent->execute();
    $row_mepp_blogrecent = $mepp_blogrecent->fetchAll(PDO::FETCH_OBJ);
    
        // fetch data from db function
    function fetchDB($table, $column, $value){
        $stmt = $GLOBALS['pdo']->prepare("SELECT * FROM $table WHERE $column = ?");
        $stmt->execute([$value]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $row;
      }

      





  ?>