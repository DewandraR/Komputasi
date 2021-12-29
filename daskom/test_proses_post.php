<!DOCTYPE html>
<head>
    <title>Latihan 14 PHP Test GET</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER ['PHP_SELF'];?>">
        <div>
            <label>Nama</label>
            <input type="text" name="fnama">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="femail">
        </div>
        <div>
            <input type="submit" name="Submit">
        </div>
    </form>

    <div>
        <?php
            if(isset($_POST['fnama'])){
                $nama = $_POST['fnama'];
                $email = $_POST['femail'];
                echo "Nama: $nama, email: $email";
            }
        ?>
    
</body>
</html>