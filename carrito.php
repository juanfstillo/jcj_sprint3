<html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Crear cuenta</title>
  </head>

  <body>
    <div class="container-fluid">
      <?php include_once('partials/header.php');?>
      <div id="spacer">

        <div class="container bg-white pb-3 mt-5 opct opacity-0.7">
    	     <table id="cart" class="table table-hover table-condensed">

             <thead>
               <tr>
    		           <th style="width:50%">Producto</th>
    							 <th style="width:10%">Precio</th>
                   <th style="width:8%">Unidades</th>
                   <th style="width:22%" class="text-center">Subtotal</th>
                   <th style="width:10%"></th>
    						</tr>
    					</thead>

    					<tbody>
    						<tr>

                  <td data-th="Producto">
    								<div class="row">
    									<div class="col-sm-2 hidden-xs"><img src="https://images-na.ssl-images-amazon.com/images/I/61C6xTH9-oL._SL1001_.jpg" alt="..." class="img-fluid "/></div>
    									<div class="col-sm-10">
    										<h4 class="nomargin">Raqueta Babolat</h4>
    										<p>Raqueta de tenis Babolat Pure Drive Plus</p>
                      </div>
    								 </div>
    								</div>
    							</td>

                  <td data-th="Precio">$13.999</td>
    							<td data-th="Unidades">
    								<input type="numero" class="form-control text-center" value="1">
    							</td>
    							<td data-th="Subtotal" class="text-center">$13.999</td>
                  <td class="actions" data-th="">
							    	<button class="btn btn-info btn-sm"><i class="fas fa-sync-alt" style="color:white"></i></button>
					    			<button class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color:white"></i></button>
					    		</td>

                </tr>
    					</tbody>

    					<tfoot>
    						<tr>
    							<td colspan="3" class="hidden-xs"></td>
    							<td class="hidden-xs text-center"><strong>Total $13.999</strong></td>
                  <td colspan="1" class="hidden-xs"></td>
    						</tr>
    					</tfoot>

            </table>

            <div class="content text-right">
              <td class="d-inline-block"><a href="index.html" class="btn btn-outline-dark" style="width:">Continuar comprando</a></td>
              <td class="d-inline-block"><a href="#" class="btn btn-success">Finalizar compra</a></td>
            </div>
          </div>
    <div id="spacer">
    </div>
    <?php include_once('partials/footer.php');?>
  </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/addc1ca592.js"></script>
</body>
</html>
