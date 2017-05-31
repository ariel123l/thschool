<?php 



 ?>

 <form >
 	<div class="shure_to_delete">Are you shore to delete <?php echo $id; ?></div>

 	<div>
 		<?php 
 		echo "<a class='linke_to_edit' href='?subject=$subject&view=shureDelte&id=$id'>Delete</a>" ;
 		echo "<a class='linke_to_delete' href='?subject=$subject&view=view'>Cancle</a>" ;
 		?>
	</div>
 </form>