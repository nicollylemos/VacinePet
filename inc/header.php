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
        background-color: #fff;
        border-bottom: 1px solid #ddd;
    }

    .topnav a {
        float: left;
        display: block;
        color: #3e3e3e;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #04AA6D;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    .topnav .cad {
        background-color: transparent;
        border: 3.5px solid var(--primary-clr);
        color: var(--primary-clr);
        font-weight: 600;
        border-radius: 8px;
        width: 150px;
        font-size: 15px;
        cursor: pointer;
        height: 35px;
    }

    .topnav button {
        float: left;
        display: block;
        text-align: center;
        margin: 14px 2px;
        left: 55%;
        position: relative;
    }

    .topnav .login {
        color: #ffffff;
        background-color: var(--primary-clr);
        font-weight: 600;
        border-radius: 8px;
        width: 150px;
        font-size: 15px;
        cursor: pointer;
        height: 35px;
        border: none;
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
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
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