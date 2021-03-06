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
    <script src="/js/Chart.bundle.min.js"></script>

</head>

<body class="background-body">

    <nav class="background-header z-depth-3">

    

        <a href="/<?=$roldeusuario ?>" class="brand-logo center">  Control Escolar </a>
         <a href="/users/logout" class="right"><i class="large material-icons">block</i></a>

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

    if ("<?=$roldeusuario?>" == 'admin') { $("body").css('background','url(/img/a.png)')}
    if ("<?=$roldeusuario?>" == 'director') { $("body").css('background','url(/img/d.png)')}
    if ("<?=$roldeusuario?>" == 'profesor') { $("body").css('background','url(/img/p.png)')}
    if ("<?=$roldeusuario?>" == 'estudiante') { $("body").css('background','url(/img/e.png)')}

});
  
</script>
</html>
