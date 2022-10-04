<?php

session_start();

include "db_conn.php";

if (isset($_REQUEST['id'])) {


    $sql = "SELECT * FROM mint where id='$_REQUEST[id]'";
    $result = mysqli_query($conn, $sql);
}

if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $blog = $_REQUEST['blog'];
    $image = $_REQUEST['image'];

    $sql = "UPDATE mint SET title='$title', blog='$blog',_image='$image' WHERE id ='$id'";
    mysqli_query($conn, $sql);

    $_SESSION['status'] = "data is updated";
    header("location: a_news.php?info=added");
    exit();
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;

        }

        form {
            width: 65%;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            color: #fff;
            justify-content: center;
            margin-top: 30px;
        }
        .first_page{
            display: flex;
            flex-direction: column;
            position: relative;
            top:200px;
        }
        .insideform {
            text-indent: 5px;
            background-color: #010;
            padding: 10px;
            color: #fff;
            display: flex;
            border-radius: 5px;
        }

        form ::placeholder {
            text-align: center;
        }

        .submit {
            cursor: pointer;
            display: flex;
            justify-content: center;
            border: none;
            width: 10%;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="leftnav">
            <a href="minthome.php"><img src="pictures/mintlogo.png" alt="" srcset="" width="90px" height="60px"></a>
        </div>
        <div class="rightnav">
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">contact</a></li>
                <li><a href="news.php">news</a></li>
                <li><a href="">apply</a></li>
                <li><a href="">intern</a></li>
            </ul>
        </div>
    </div>
    <div class="first_page">
        <div class="form">

            <?php foreach ($result as $s) { ?>
                <form action="" method="POST">
                    <input class="insideform" type="text" placeholder="Blog Title" name="title" value="<?php echo $s['title']; ?>">
                    <textarea class="insideform" name="blog" placeholder="write your blog" id="" cols="30" rows="4" value=""><?php echo $s['blog']; ?></textarea>
                    <div class="insideform">
                        <label for="">Image: </label>
                        <input type="file" name="image" value="<?php echo $s['_image']; ?>">
                    </div>
                    <input class="insideform submit" name="update" type="submit" value="Update Post">
                </form>
            <?php } ?>

        </div>
    </div>
<script>
          ////////for nav-bar
          let box = document.getElementById('box');
        let rightnavbar=document.getElementsByClassName('rightnav')[0];
        let isopen = false;

        box.onclick = () => {
            if (!isopen) {
                box.classList.toggle('open');
                isopen = true;
                rightnavbar.classList.add('active');
            }
            else {
                box.classList.toggle('open');
                isopen=false;
                rightnavbar.classList.remove('active');

            }

        }
</script>
</body>

</html>