<?php include('header.php'); ?>
<?php
if ( isset($_REQUEST['Alta'])) {

       extract($_REQUEST);
		
		
	
		$sql="Insert into categorias ( categoria )
				values ('$categoria')";
         
		$result = MySQLSESSION_ExecuteSQL($sql);
		
		
		echo '<script language="javascript">
				window.parent.location.href ="categorias.php";
				</script>';
		
				
}

if ( isset($_REQUEST['Modificar'])) {

        extract($_REQUEST);
		    
			
		
			$sql="update categorias set 
			      categoria = '$categoria'
				  where id='$id'";
		
		$result = MySQLSESSION_ExecuteSQL($sql);
		
		
				
}

?>

<?php

$id=$_REQUEST['id'];


$action=$_REQUEST['action'];
if ($action =='modificar') {
$sql="select * from categorias where id=".addslashes($id);
$result = MySQLSESSION_ExecuteSQL($sql);
$row=mysqli_fetch_array($result); 
}
?>

	
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Catagorias</h2>
						</div>
					<div class="box-content">
                      <form class="form-horizontal" name="frm-usuarios" id="frm" method="post" enctype="multipart/form-data" action="categorias-editar.php?action=<?php echo $_REQUEST['action']; ?>">
                        <fieldset>
                         
                         
						<div class="control-group">
                          <label class="control-label" for="focusedInput">Categoria</label>
						  
                          <div class="controls">
                            <input name="categoria" type="text" class="input-xlarge focused" id="focusedInput" value="<?php echo $row['categoria']; ?>" required="required" >
                            <input name="action" type="hidden" value="<?php echo $_REQUEST['action']; ?>" />
							<?php if ($action =='modificar') {  ?>
							<input name="id" type="hidden" value="<?php echo $_REQUEST['id']; ?>" />
							<?php } ?>
                          </div>
                        </div>
						
                       
                          <div class="control-group warning">
                          <label class="control-label" for="inputWarning"></label>
                        </div>
                          <div class="form-actions">
                          <?php if ($_REQUEST['action']=='alta') { ?>
                          <input name="Alta"  type="submit" class="btn btn-primary" value="Enviar" />	
						  <?php } ?>
                          <?php if ($_REQUEST['action']=='modificar') { ?>
						
                          <input name="Modificar"  type="submit" class="btn btn-primary" value="Modificar" />	
						  <?php } ?>
                          <input name="Volver"  type="button" class="btn" value="Volver" onclick="location.href='categorias.php';" />	
                          </div>
                        </fieldset>
                      </form>
				  </div>
				</div><!--/span-->
			</div><!--/row-->
       
<?php include('footer.php'); ?>
