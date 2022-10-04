<?php

include 'db_conn.php';

$sql = "SELECT * FROM mint order by id desc";
$result = mysqli_query($conn, $sql);

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
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin POST board</title>
</head>

<body>
    <div class="all">

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
            <div class="boxesandcreatnewpost">
                <div class="creatnewpost">
                    <?php
                    if (isset($_SESSION['status'])) {

                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }

                    ?>
                    <a href="a_post.php">
                        <h2>+ creat new post</h2>
                    </a>
                </div>


                <div class="boxes">
                    <div class="cards">
                        <?php foreach ($result as $s) { ?>
                            <div class="card">
                                <div class="card_text">
                                    <div class="title">
                                        <H3><?php echo $s['title']; ?></H3>
                                    </div>
                                    <div class="content"><?php echo   substr($s['blog'], 0, 400) . ' . . . . .'; ?></div>
                                    <div class="readmore">
                                        <a href="a_fullnotice.php?id= <?php echo $s['id']; ?>">
                                            <h2>Read more</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="card_pic">
                                    <img src="pictures/<?php echo $s['_image']; ?>">
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>

        </div>
        <div>
            <img class="robot_img" src="pictures/robot.png">
            <img class="robot_img2" src="pictures/robotg.png" width="500px">

        </div>
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