<!-- MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NUEVO REGISTRO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>    
                      <div class="modal-body">
        <form action="../controlador/controlador.php?a=validarproducto" method="post" enctype="multipart/form-data" class="login-form">
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="TIENDA" type="text" required name="tienda">
                  </div>
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="USUARIO" type="text" required name="usuario">
                  </div>
                     <div class="form-group">
                         <input class="form-control input_X" placeholder="CELULAR" type="numeric" required name="celular">
                     </div>
            <div class="form-group">
                         <input class="form-control input_X" placeholder="DIRECCION" type="text" required name="direccion">
                     </div>
            <div class="form-group">
                         <input class="form-control input_X" placeholder="PRODUCTO" type="text" required name="producto">
                     </div>
            <div class="form-group">
                         <input class="form-control input_X" placeholder="DESCRIPCION " type="text" required name="descripcion">
                     </div>
            <div class="form-group">
                         <input class="form-control input_X" placeholder="PRECIO" type="numeric" required name="precio">
                     </div>
                    
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="validar" value="Registrar" class="btn btn-primary">
        
         </div>
                  </form>
      </div>
                  
                  
                </div>
              </div>
            </div>

