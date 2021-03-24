<!-- MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>    
                      <div class="modal-body">
                          <table class="container">
                              <tr><td>TIENDA</td><td><?=$fila[1]?></td></tr>
                              <tr><td>DUEÑO</td><td><?=$fila[2]?></td></tr>
                              <tr><td>CELULAR</td><td><?=$fila[3]?></td></tr>
                              <tr><td>DIRECCION</td><td><?=$fila[4]?></td></tr>
                              <tr><td>PRODUCTO</td><td><?=$fila[5]?></td></tr>
                              <tr><td>DESCRIPCION</td><td><?=$fila[6]?></td></tr>
                              <tr><td>FOTO</td><td><?=$fila[7]?></td></tr>
                              <tr><td>PRECIO</td><td><?=$fila[8]?></td></tr>
                              
                              <div><td>
                                      <br>
                              <a type="button" class="btn btn-outline-success" href="chat/chat2/index.php">Contactar</a>
                              </td></div>  
                          </table>
                          <br>
                          
      </div>
                  
                  
                </div>
              </div>
            </div>

