
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php require_once 'libs/app.php'; $app = new App(); ?>






<div><!--HEADER*************************************************************************************-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">OLA.KOM</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home</a>
      <a class="nav-item nav-link" href="acercade.php">Acerca de</a>
      <a class="nav-item nav-link" href="contacto.php">Contacto</a>
    </div>
    <a class="nav-item nav-link ms-auto" href="login.php">Login</a>
  </div>
</nav>
<br>
</div>

<div class="container"><!--CONTAINER1-->

        <div class="row" style="background-color: #33CEFF"><!--ROW1-->
            <div class="col-md-3">
                <img src="img/megafono.png" alt="" style="width: 300px; height:300px;">
            </div>


            <div class="col-md-6">
                <img src="img/laptop.png" alt="" style="width: 400px; height:300px;">
            </div>


            <div class="col-md-3">
                <div class="card text-align align-items-center" style="background-color: transparent; border: none;">
                    <img class="card-img-top" src="img/news.png" alt="Card image cap" style="width: 200px; height:228px;">
                    <div class="card-body">
                    <a href="#" class="btn btn-success">¡Enterate!</a>
                </div>
            </div>


        </div><!--END-ROW1-->
        

</div><!--END-CONTAINER1-->

<br><br>

<div class="container">
    <div class="row "style="background-color: #33CEFF">
        
    <div class="col-md-4"><!--col1-->
        <div class="card text-align align-items-center">
            <img class="card-img-top" src="img/lista.png" style="width: 300px; height:300px;">
            <div class="card-body">
            <a href="#" class="btn btn-primary">Inscribete ahora</a>
            </div>
        </div>
    </div><!--end-col1-->

    <div class="col-md-4"><!--col1-->
        <div class="card text-align align-items-center">
            <img class="card-img-top" src="img/logros.png" style="width: 300px; height:300px;">
            <div class="card-body">
            <a href="#" class="btn btn-primary">Logros</a>
            </div>
        </div>
    </div><!--end-col1-->

    <div class="col-md-4"><!--col1-->
        <div class="card text-align align-items-center">
            <img class="card-img-top" src="img/cronograma.png" style="width: 300px; height:300px;">
            <div class="card-body">
            <a href="#" class="btn btn-primary">Cronograma</a>
            </div>
        </div>
    </div><!--end-col1-->





    </div>
</div>








<?php

include("templates/footer.php");

?>