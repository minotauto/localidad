<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controlador/controlador.php?a=registraradmin" method="post" enctype="multipart/form-data" class="login-form">
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="Usuario" type="text" required name="usuario">
                  </div>
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="Celular" type="text" required name="celular">
                  </div>
                     <div class="form-group">
                         <input class="form-control input_X" placeholder="Email" type="email" required name="email">
                     </div>
                    <center>                     <div class="form-group">
                        <input class="form-control input_X" placeholder="Password" type="password" required name="pass">
                     </div>
                     <br/>
                     </center>
<div class="modal-footer">
        <input type="submit" name="validar" value="Registrar" class="btn btn-primary">
        
      </div>
                  </form>
      </div>
      
    </div>
  </div>
</div>

