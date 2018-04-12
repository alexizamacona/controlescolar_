<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="/js/materialize.js"></script>
</head>

<body class="grey lighten-4">

    <nav class="background-body z-depth-3">



        <a href="#" class="brand-logo"> <i class="material-icons padding-icon">menu</i> control escolar</a>


    </nav>
    <div class="row">
        <div class="col s2">
            <ul>
                <li><a href="" class="black-text">opcion 1</a></li>
                <li><a href="" class="black-text">opcion 2</a></li>
                <li><a href="" class="black-text">opcion 3</a></li>
            </ul>
        </div>

        <div class="col s8">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>



    </div>
</body>

</html>
