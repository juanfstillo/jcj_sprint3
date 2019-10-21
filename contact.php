<html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Crear cuenta</title>
  </head>

  <body>
    <div class="container-fluid">
      <?php include_once('partials/header.php');?>
      <div id="spacer">

    <main>
      <container class="main-content">
        <div id="row">

          <div class="col-lg6 col-12">
            <div class="title-des">
              <h1 id="main-title">Contactanos</h1>
            </div>

            <div class="main-form">
              <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
                </div>

                <div class="form-group">
                  <label for="lastname">Email</label>
                  <input type="email" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="jmdelpotro@gmail.com">
                </div>

                <div class="form-group">
                  <label for="telephone">Teléfono (opcional)</label>
                  <input type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp">
                  <small id="telephoneHelp" class="form-text text-muted">Sin 0 y sin 15 para celulares</small>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Mensaje (opcional)</label>
                  <textarea class="form-control" id="textMessage" rows="3" placeholder="Dejanos aquí tu mensaje o consulta"></textarea>
                </div>

                <div id="create">
                  <button type="button" class="btn btn-dark create">Enviar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </container>
    </main>
    <!--FOOTER -->
    <div id="spacer">
    </div>
    <?php include_once('partials/footer.php');?>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/addc1ca592.js"></script>
</body>
</html>
