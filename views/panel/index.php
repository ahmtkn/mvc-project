<?php require 'views/header.php' ?>
	
		<div class="col-lg-12 text-center">
			<h5>PANELDESİN-HOŞGELDİNİZ</h5>
		<?php
			
			if(is_array($data)){
			echo '<div class="alert alert-danger mt-5">';
				foreach($data as $value){
					echo $value.'<br>';
				}
			echo '</div>';
			}else{
					echo $data;
			}
		?>
  </div>


	
<?php require 'views/footer.php'?>		
		