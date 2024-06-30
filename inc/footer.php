<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    		
        <hr>
        </main> <!-- /container -->

    <footer class="container">
	    <?php $hoje = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));     ?>
        <p>&copy;2023 a <?php echo $hoje -> format ("Y"); ?> - Projeto PW - Nicolly Lemos e Karina de Moraes</p>
    </footer>
    
	<script src="<?php echo BASEURL; ?>js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>

    </body>
</html>
