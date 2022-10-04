<?php
session_start();
include "db_conn.php";


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $sql = "SELECT * from mint where id=$id";
    $result = mysqli_query($conn, $sql);
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
    <title>Document</title>
    <style>
        .card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 50%;
            min-height: 200px;
            /* background-color: #112021; */
            border: 1px solid black;
            color: #000;
            border-radius: 15px;
            justify-content: center;
            align-items: center;
            padding: 10px;
            line-height: 1.3;
        }

        .readmore a {
            text-decoration: none;
            color: #fff;
        }

        .readmore {
            transition: .6s;

        }

        .readmore:hover {
            transform: scale(1.3);
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
        <?php foreach ($result as $s) { ?>
            <div class="card">
                <h2><?php echo $s['title']; ?></h2>
                <img src="pictures/<?php echo $s['_image']; ?>" width="600px">
                <p> <?php echo $s['blog']; ?></p>

            </div>
        <?php } ?>
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