<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/nav.css">


    <title>Document</title>
    <style>
        @font-face {
            font-family: 'baloo';
            src: url("../font/baloo/Baloo-Regular.ttf");
        }

        * {
            margin: 0;
            padding: 0;
        }

        a {
            font-family: sans-serif;
            text-decoration: none;
        }

        header {
            background-color: white;
            padding-inline: 16px;
        }

        body {
            background-color: black;
        }

        nav {
            max-width: 1280px;
            height: 70px;
            margin-inline: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .logo {
            font-family: baloo;
            font-size: 18px;

        }

        .nav-list {
            display: flex;
            gap: 32px;
            list-style: none;
        }

        .nav-list a {
            font-size: 18px;
            color: black;
            padding-block: 16px;
        }

        .hamburguer {
            display: none;
            border: none;
            background: none;
            border-top: 3px solid black;
            cursor: pointer;

        }

        .hamburguer::before,
        .hamburguer::after {
            content: "";
            display: block;
            width: 30px;
            height: 3px;
            background: black;
            margin-top: 5px;
            position: relative;
            transition: 0.3s;

        }

        @media (max-width: 750px) {
            .hamburguer {
                display: block;
                z-index: 1;
            }

            .nav-list {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: olivedrab;
                clip-path: circle(100px at 90% -15%);
                transition: 1s ease-out;

                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                gap: 0;
                pointer-events: none;

            }

            .nav-list a {
                font-size: 24px;
                opacity: 0;
            }

            .nav-list li:nth-child(1) a { transition: 0.5s 0.2s;}

            .nav-list li:nth-child(2) a {transition: 0.5s 0.4s;}

            .nav-list li:nth-child(3) a {transition: 0.5s 0.6s;}

            .nav.active .nav-list {
                clip-path: circle(100px at 90% -15%);
                pointer-events: all;


            }
            .nav.active .nav-list a {
                opacity: 1;
            }
            .nav.active .hamburguer{
                position: fixed;
                top: 26px;
                right: 16px;
                border-top-color: transparent;

            }
            .nav.active .hamburguer::before{
                transform: rotate(135deg);
            }
            .nav.active .hamburguer::before{
                transform: rotate(-135deg);
                top: -7px;
            }

        }
    </style>
</head>

<body>

    <header>
        <nav>
            <a href="index.php" class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #fa5909; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></a>
            <button class="hamburguer"></button>
            <ul class="nav-list">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Sobre</a></li>



            </ul>
        </nav>


    </header>
    <script defer>
        const hamburguer = document.querySelector(".hamburguer");
        const nav = document.querySelector(".nav")
        hamburguer.addEventListener("click", () => nav.classList.toggle("active"));


    </script>
</body>

</html>