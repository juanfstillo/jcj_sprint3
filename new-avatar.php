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

      <section class="main-content mx-5 justify-content-center">
        <div id="row">


          <div class="col-sm-6">

            <div class="title-des">
              <h1 id="main-title">Mi perfil</h1>
            </div>


            <div class="main-form">
              <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="name" class="text-white">Nombre</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
                </div>

                <div class="form-group">
                  <label for="lastname" class="text-white">Apellido</label>
                  <input type="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Del Potro">
                </div>

                <div class="form-group">
                  <fieldset disabled>
                    <label for="mailDisabled" class="text-white">Email</label>
                    <input type="text" id="mailDisabled" class="form-control" placeholder="jmdelpotro@gmail.com">
                  </fieldset>
                </div>

                <div class="avatar">
                  <label for="uploadAvatar" class="text-white">Foto de perfil</label>
                  <input type="file" class="form-control-file" id="uploadAvatar">
                  <small id="uploadAvatar" class="form-text text-white-80">No debe pesar más de 20mb, en formato .jpg, .jpeg, .png <br></small>
                </div>

                <div id="create">
                  <button type="button" class="btn btn-dark create">GUARDAR CAMBIOS</button>
                  <button type="button" class="btn btn-outline-danger">Eliminar cuenta</button>
                </div>

            </form>
          </section>

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
