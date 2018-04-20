<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/general.js"></script>
</head>

<body class="background-body">

    <nav class="background-header z-depth-3">



        <a href="#" class="brand-logo center">  Control Escolar</a>


    </nav>
    <div class="row">
        <div class="col s2">
            <ul>
            </ul>
        </div>

        <div class="col s8">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>



    </div>
</body>
<script>
  $(document).ready(function(){
    $('.tabs').tabs();
});
  
</script>
</html>
