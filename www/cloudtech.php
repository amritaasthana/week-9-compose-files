<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 


</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! hey from docker container</h1>"; ?>

    <?php
    $conn = mysqli_connect('db', 'user', 'test', "cloudDb");
    $query = 'SELECT * From cloud';
    $result = mysqli_query($conn, $query);
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
    }
    $result->close();
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>
