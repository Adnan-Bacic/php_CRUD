<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO and MYSQLI CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-info" id="toggle">Toggle</button>
        </div>
    </div>
</div>
    <?php
    require_once 'pdo.php';
    require_once 'mysqli.php';
    ?>

<script>
        const pdo = document.querySelector('#pdo')
        const mysqli = document.querySelector('#mysqli')
        const toggle = document.querySelector('#toggle')

        toggle.addEventListener('click', () => {
            pdo.classList.toggle('d-none')
            mysqli.classList.toggle('d-none')
        })
    </script>
</body>
</html>