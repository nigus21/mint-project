<?php

session_start();

include "db_conn.php";

if (isset($_REQUEST["add_post"])) {
    $title = $_REQUEST['title'];
    $blog = $_REQUEST['blog'];
    $image = $_REQUEST['image'];

    $sql = "INSERT INTO mint(title,blog,_image) VALUES ('$title','$blog','$image')";

    $result = mysqli_query($conn, $sql);

    $_SESSION['status'] = "data is inserted";
    header("location: a_news.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin Post</title>
    <style>
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;

        }

        form {
            /* width: 65%; */
            border-radius: 5px;
            border: 1px solid #010;
            display: flex;
            flex-direction: column;
            gap: 20px;
            color: #000;
            justify-content: center;
            margin-top: 30px;
        }

        .insideform {
            text-indent: 5px;
            padding: 10px;
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
        <div class="form" method="POST">
            <form action="">
                <h1><input class="insideform" type="text" placeholder="Blog Title" name="title"></h1>
                <textarea class="insideform" name="blog" placeholder="write your blog" id="" cols="30" rows="4"></textarea>
                <div class="insideform">
                    <label for="">Image: </label>
                    <input type="file" name="image">
                </div>
                <input class="insideform submit" name="add_post" type="submit" value="Add Post">
            </form>
        </div>
    </div>
</body>

</html>