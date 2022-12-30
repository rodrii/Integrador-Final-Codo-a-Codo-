<?php include('header.php'); ?>
<?php


    if ( isset($_POST['Alta'])) {

       extract($_POST);
	 
	 	
    //aca se procesa la Foto

    if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
        
      // Primero, hay que validar que se trata de un JPG/GIF/PNG
     // $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
            
            if ((($_FILES["foto"]["type"] == "image/gif")
              || ($_FILES["foto"]["type"] == "image/jpeg")
              || ($_FILES["foto"]["type"] == "image/png")
              || ($_FILES["foto"]["type"] == "image/pjpeg"))
              ) {
          // el archivo es un JPG/GIF/PNG, entonces...
          
          $foto = $_FILES['foto']['name'];
          $directorio = '../uploads'; // directorio de tu elecci&oacute;n
          
          // almacenar imagen en el servidor
          move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
          
              
          
      } else { // El archivo no es JPG/GIF/PNG
          $malformato = $_FILES["foto"]["type"];
          echo 'La imagen es invalda: '.$malformato;
         
        }
      
  } 
								
		
		$sql="Insert into articulos (categoria,  talle,  color, detalle, material,calce,precio, foto)
				values ('$categoria',  '$talle', '$color', '$detalle', '$material', '$calce', '$precio', '$foto')";
		
				
     mysqli_query($_SESSION['dbdatabase'], "SET SESSION sql_mode = ' ' ");   
         
		$result = MySQLSESSION_ExecuteSQL($sql);
						
}
?>
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Articulos</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					
					
					<div class="box-content">
                      <form class="form-horizontal" name="frm-usuarios" id="frm" method="post" enctype="multipart/form-data" action="articulos-alta.php">
                        <fieldset>
						
				
 <!--Pruebo lista de categoria-->                                     
                        <div class="control-group">
                          <label class="control-label" for="label">Categoria</label>
                          <div class="controls">
                            
							<select name="categoria" id="selectError1"  >
                           
							  <?php
					$sql = "select * from categorias order by categoria asc";
			        $result= MySQLSESSION_ExecuteSQL($sql);
			        while ($row = mysqli_fetch_array($result)) {
					
					?>
                             
                              <option value="<?php echo $row['categoria']; ?>" ><?php echo $row['categoria']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        
<!--termino de probar lista de categoria--> 

<!--Pruebo lista de talles-->                                     
<div class="control-group">
                          <label class="control-label" for="label">Talle</label>
                          <div class="controls">
                            
							<select name="talle" id="selectError1"  >
                           
							  <?php
					$sql = "select * from talles order by talle asc";
			        $result= MySQLSESSION_ExecuteSQL($sql);
			        while ($row = mysqli_fetch_array($result)) {
					
					?>
                             
                              <option value="<?php echo $row['talle']; ?>" ><?php echo $row['talle']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        
<!--termino de probar lista de talles-->

<!--Pruebo lista de colores-->                                     
<div class="control-group">
                          <label class="control-label" for="label">Color</label>
                          <div class="controls">
                            
							<select name="color" id="selectError1"  >
                           
							  <?php
					$sql = "select * from colores order by color asc";
			        $result= MySQLSESSION_ExecuteSQL($sql);
			        while ($row = mysqli_fetch_array($result)) {
					
					?>
                             
                              <option value="<?php echo $row['color']; ?>" ><?php echo $row['color']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        
<!--termino de probar lista de colores-->

<!-- aca arranca imput de detalle -->

<div class="control-group">
                          <label class="control-label" for="focusedInput">Detalle</label>
                         
<div class="controls">
                            <input name="detalle" type="text" class="input-xlarge focused" id="focusedInput"  required="required">
                             
                          </div>
                        </div>

<!-- aca termina imput de detalle -->
						
<!-- aca arranca imput de material -->

<div class="control-group">
                          <label class="control-label" for="focusedInput">Material</label>
                         
<div class="controls">
                            <input name="material" type="text" class="input-xlarge focused" id="focusedInput"  required="required">
                             
                          </div>
                        </div>

<!-- aca termina imput de material -->

<!--Pruebo lista de calces-->                                     
<div class="control-group">
                          <label class="control-label" for="label">Calce</label>
                          <div class="controls">
                            
							<select name="calce" id="selectError1"  >
                           
							  <?php
					$sql = "select * from calces order by calce asc";
			        $result= MySQLSESSION_ExecuteSQL($sql);
			        while ($row = mysqli_fetch_array($result)) {
					
					?>
                             
                              <option value="<?php echo $row['calce']; ?>" ><?php echo $row['calce']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        
<!--termino de probar lista de calces-->

<!-- aca arranca imput de precio -->

<div class="control-group">
                          <label class="control-label" for="focusedInput">Precio</label>
                         
<div class="controls">
                            <input name="precio" type="int" class="input-xlarge focused" id="focusedInput"  required="required">
                             
                          </div>
                        </div>

<!-- aca termina imput de precio -->

<!-- aca arranca imput de foto -->

<div class="control-group">
                          <label class="control-label" for="focusedInput">Foto</label>
                         
<div class="controls">
                            <input name="foto" type="file" class="input-xlarge focused" id="focusedInput" >
                              
                          </div>
                        </div>



<!-- aca termina imput de foto -->





                      
                          <div class="control-group warning">
                          <label class="control-label" for="inputWarning"></label>
                        </div>
                          <div class="form-actions">
                          
                          <input name="Alta"  type="submit" class="btn btn-primary" value="Alta" />	
						 
                        
                          <input name="Volver"  type="button" class="btn" value="Volver" onclick="location.href='articulos.php';" />	
                          </div>
                        </fieldset>
                      </form>
					 
				  </div>
				</div><!--/span-->
			</div><!--/row-->
       
<?php include('footer.php'); ?>
