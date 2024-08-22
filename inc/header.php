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

    .logo {
        font-size: 30px;
        color: #FA5909;
        font-family: baloo;
        float: left;
        display: block;
        color: #000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav {
        overflow: hidden;
        background-color: #fff;
        border-bottom: 1px solid #DDD;
    }

    .topnav .link {
        float: left;
        display: block;
        color: #000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #000;
        color: black;
    }

    .topnav a.active {
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
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

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                style="color: #FA5909; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i></a>
        <a href="#news" class="link">News</a>
        <a href="#contact" class="link">Contact</a>
        <a href="#about" class="link">About</a>
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