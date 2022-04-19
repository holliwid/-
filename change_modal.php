<?php
require 'config.php';
$id = $_GET['id'];
// <!-- Modal Change -->
echo '
<!-- Bootstrap CSS (jsDelivr CDN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap Bundle JS (jsDelivr CDN) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--=============== BOXICONS ===============-->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dark.css">

<style>
        html{ height: 100% }
        body{  height: 100%; background-color: #8fbce9;}
        .wrapper{ width: 360px; padding: 20px; }
    </style>
<body class="img js-fullheight h-100" style="background-image: url(images/bg.jpg);">
<div class="float-right display-4 text-white">
        <i class="bx bxs-moon change-theme" id="theme-button"></i>
    </div>
    <h1 class="text-center">Change task</h1>
                <div class="row justify-content-center text-center" id="" >
                            <form action="change.php?id='.$id.'" method="post" class="mt-5">
                                <input type="text" name="task" class="task_input">
                                <a href="todo.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="">Close</button></a>
                                <input type="submit" class="btn btn-secondary" data-bs-dismiss="" value="Save" />
                            </form>
                </div>

            <div class="zad row text-center">
                <div id="zad">Я тёмная тема, да я вот такая странная. Я просто не понимаю, как сделать по дуругому</div>
            </div>

            <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>'
?>
