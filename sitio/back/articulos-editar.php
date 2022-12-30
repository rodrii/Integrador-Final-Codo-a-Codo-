<?php include('header.php'); ?>
<?php

if ( isset($_REQUEST['Modificar'])) {

        extract($_REQUEST);
		
		
	if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
        
        // Primero, hay que validar que se trata de un JPG/GIF/PNG
               
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
        
    } else { 
	
		$foto=$fotoactual;
    }	
									
	
			$sql="update articulos set categoria='$categoria', talle='$talle', color='$color', detalle='$detalle',material='$material', calce='$calce', precio='$precio', foto='$foto' where id='$id'";
			                                 
			  mysqli_query($_SESSION['dbdatabase'], "SET SESSION sql_mode = ' ' ");   							
		$result = MySQLSESSION_ExecuteSQL($sql);
		
		
				
}
?>

<?php
  
$id=$_REQUEST['id'];



$action=$_REQUEST['action'];

//if ($action =='modificar') {
$sql="select * from articulos where id=".addslashes($id);
$result = MySQLSESSION_ExecuteSQL($sql);
$row=mysqli_fetch_array($result); 
//}
?>

		
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Artículos</h2>
						<!--<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>-->
					</div>
					
					
				  	<div class="box-content">
					
              
                      <form class="form-horizontal" name="frm-usuarios" id="frm" method="post" enctype="multipart/form-data" action="articulos-editar.php?action=modificar">
                        <fieldset>
            
             <!-- Aca se elige categoria de lista               -->
						<div class="control-group">
                          <label class="control-label" for="label">Categoría</label>
                          <div class="controls">
                            
							<select name="categoria"id="selectError1"  >
                           
							  <?php
					$sqlpais = "select * from categorias order by categoria asc";
			        $resultpais = MySQLSESSION_ExecuteSQL($sqlpais);
			        while ($rowpais = mysqli_fetch_array($resultpais)) {
					if  ($rowpais['categoria'] == $row['categoria']) {
					?>
                              <option value="<?php echo $rowpais['categoria']; ?>" selected="selected"><?php echo $rowpais['categoria']; ?></option>
                              <?php }else{ ?>
                              <option value="<?php echo $rowpais['categoria']; ?>" ><?php echo $rowpais['categoria']; ?></option>
                              <?php } } ?>
                            </select>
                          </div>
                        </div>
		
    
             <!-- Aca se elige talle de lista               -->
             <div class="control-group">
                          <label class="control-label" for="label">Talle</label>
                          <div class="controls">
                            
							<select name="talle"id="selectError1"  >
                           
							  <?php
					$sqlpais = "select * from talles order by talle asc";
			        $resultpais = MySQLSESSION_ExecuteSQL($sqlpais);
			        while ($rowpais = mysqli_fetch_array($resultpais)) {
					if  ($rowpais['talle'] == $row['talle']) {
					?>
                              <option value="<?php echo $rowpais['talle']; ?>" selected="selected"><?php echo $rowpais['talle']; ?></option>
                              <?php }else{ ?>
                              <option value="<?php echo $rowpais['talle']; ?>" ><?php echo $rowpais['talle']; ?></option>
                              <?php } } ?>
                            </select>
                          </div>
                        </div>   
    
              <!-- Aca se elige color de lista               -->
              <div class="control-group">
                          <label class="control-label" for="label">Color</label>
                          <div class="controls">
                            
							<select name="color"id="selectError1"  >
                           
							  <?php
					$sqlpais = "select * from colores order by color asc";
			        $resultpais = MySQLSESSION_ExecuteSQL($sqlpais);
			        while ($rowpais = mysqli_fetch_array($resultpais)) {
					if  ($rowpais['color'] == $row['color']) {
					?>
                              <option value="<?php echo $rowpais['color']; ?>" selected="selected"><?php echo $rowpais['color']; ?></option>
                              <?php }else{ ?>
                              <option value="<?php echo $rowpais['color']; ?>" ><?php echo $rowpais['color']; ?></option>
                              <?php } } ?>
                            </select>
                          </div>
                        </div>   
 						 
                      
		  <!-- Aca se escribre la detalle          -->	  						
      <div class="control-group">
                          <label class="control-label" for="focusedInput">Detalle</label>
                          <div class="controls">
                            <textarea name="detalle" rows="1" class="input-xlarge focused" id="focusedInput"  ><?php echo $row['detalle']; ?></textarea>
                            
							
                          </div>
                        </div>
    
		  <!-- Aca se escribre el material          -->	  						
      <div class="control-group">
                          <label class="control-label" for="focusedInput">Material</label>
                          <div class="controls">
                            <textarea name="material" rows="1" class="input-xlarge focused" id="focusedInput"  ><?php echo $row['material']; ?></textarea>
                            
							
                          </div>
                        </div>

  <!-- Aca se elige calce de lista               -->
  <div class="control-group">
                          <label class="control-label" for="label">Calce</label>
                          <div class="controls">
                            
							<select name="calce"id="selectError1"  >
                           
							  <?php
					$sqlpais = "select * from calces order by calce asc";
			        $resultpais = MySQLSESSION_ExecuteSQL($sqlpais);
			        while ($rowpais = mysqli_fetch_array($resultpais)) {
					if  ($rowpais['calce'] == $row['calce']) {
					?>
                              <option value="<?php echo $rowpais['calce']; ?>" selected="selected"><?php echo $rowpais['calce']; ?></option>
                              <?php }else{ ?>
                              <option value="<?php echo $rowpais['calce']; ?>" ><?php echo $rowpais['calce']; ?></option>
                              <?php } } ?>
                            </select>
                          </div>
                        </div>   


						<!-- Aca se escribre el precio       -->	  	
            <div class="control-group">
                          <label class="control-label" for="label">Precio</label>
                          <div class="controls">
                             <input name="precio" type="number" class="input-medium focused" id="focusedInput" value="<?php echo $row['precio']; ?>" > 
                          </div>
                        </div>


    
    
						 <!-- Esta parte no la pude sacar del codigo          -->		
						<div class="control-group">
                          <label class="control-label" type="hidden" for="focusedInput"></label>
                          <div class="controls">
                            
                             
							
							<input name="id" type="hidden" value="<?php echo $id ?>" />
						
                          </div>
                        </div>
						
            
				   <!-- Aca se editan las fotos       -->	

           <div class="control-group">
                          <label class="control-label" for="label">Foto<br> ( jpg, gif, png )</label>
                          <div class="controls">
						   <?php if ($row['foto'] != NULL)  { ?>
						   <img  style=" max-width:200px;" src="../uploads/<?php echo $row['foto']; ?>" >
										
										<?php }else{ ?>
										Foto no disponible 
										<?php } ?>
										
										<input name="fotoactual" type="hidden"  value="<?php echo $row['foto']; ?>" size="20"  />
										<p><input name="foto" type="file" class="input-file uniform_on" id="fileInput"></p>
                            
                          </div>
                        </div>                                   



					
                        <!-- Aca se terminan de editar las foitos       -->	
                        
                        <div class="form-actions">
                         
						
                          <input name="Modificar"  type="submit" class="btn btn-primary" value="Modificar" />	
						
                          <input name="Volver"  type="button" class="btn" value="Volver" onclick="location.href='articulos.php';" />	
                          </div>
												
                        </fieldset>
                      </form>  
					
					
				   </div> <!--box content -->
				</div><!--/span-->
			</div><!--/row-->
       
<?php include('footer.php'); ?>
