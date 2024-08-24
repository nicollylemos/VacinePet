<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: white;
            position: relative;
            z-index: 10;
        }

        .topnav a {
            float: left;
            position: relative;
            left: 12%;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            color: #52BACB;
        }

        .topnav .icon {
            display: none;
            z-index: 12; /* Z-index para garantir que o ícone fique acima da logo */
        }

        .logo {
            color: #FA5909;
            font-family: 'baloo';
            position: absolute;
            top: 8px;
            left: 10px;
            font-size: 23px;
            z-index: 11;
            text-decoration: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
                position: absolute;
                right: 10px;
                top: 8px;
            }

            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <a href="index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
            style="color: #FA5909; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i></a>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>

</html>
