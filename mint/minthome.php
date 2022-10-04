<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="minthome.css">
    <link rel="stylesheet" href="style.css">
    <title>Mint home</title>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

</head>

<body>
    <div class="all">
        <div class="navbar">
            <div class="leftnav">
                <a href="minthome.php"><img src="pictures/mintlogo.png" alt="" srcset="" width="90px" height="60px"></a>
            </div>
            <div class="rightnav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="">Apply</a></li>
                    <li><a href="">Intern</a></li>
                </ul>
            </div>
            <div id="box" class="box">
                <div id="middle" class="middle"></div>
            </div>
        </div>

        <div class="first-page">
            <div class="imgandtexts">
                <div class="mainimg">
                    <img src="pictures/ampol.png" alt="">
                </div>
                <div class="lefttxts">
                    <h1>Minster of innovation <br> and technology</h1>
                    <p>The Ministry of Innovation and Technology (MinT) formerly known as the Ministry of Science and Technology (MoST), Ministry of Communication & Information Technology, Ministry of Science and Technology) is an Ethiopian government agency responsible for science and technological development in Ethiopia as well as a governing body of communications. It was established as a commission in December 1975 by directive No.62/1975.</p>
                    <div>
                        <button class="btn">Join</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>

        ///////for notification
        function showNotification() {
            const notification = new Notification("New message from MINT", {
                body: "Hey everybody suger is here",
                icon: "pictures/mintlogo.png"
            });
            notification.onclick = (e) => {
                window.location.href = "http://localhost/mint/news.php";
            }
        }


        if (Notification.permission === "granted") {
            showNotification();

        } else if (Notification.permission === "default") {
            Notification.requestPermission().then(permission => {
                console.log(permission)
            });
        }


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