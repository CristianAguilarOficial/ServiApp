<?= $this->extend('layout/login');?>
<?= $this->section('content');?>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="<?php echo base_url() ?>/public/asset/logo-Servi-Ice-FINAL.png" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Inicia sesión</h4>
                  </div>

                  <form>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" placeholder="correo o ID" />
                      <label class="form-label" for="form2Example11"></label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" placeholder="contraseña" />
                      <label class="form-label" for="form2Example22"></label>
                    </div>

                    <div class="text-center pt-2 mb-5 pb-1 ">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-2" type="button">Inicia
                        sesión</button>
                      <a class="text-muted" href="#!">olvidaste la contraseña?</a>
                    </div>


                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Ingreso de datos</h4>
                  <p class="small mb-0">Los datos de ingreso debe estar en su correo electroanico verifica tu correo al
                    que indicaste a tu administrador para la creacion de cuenta!!
                    <br>
                    <br>
                    Recordar que la contraseña debe ser cambiada una vez ingresado con la generada. Es importante no
                    compartir estos datos de ingreso por seguridad al ingreso malisioso.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?= $this->endSection();?>