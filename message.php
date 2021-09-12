
<?php

	
	if(isset($_GET['saved'])){

		echo '

			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Well done!</strong> your data has been inserted :) 
			</div>

		';
	}

	if(isset($_GET['error'])){

		echo '

			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Oh snap!</strong> Whats wrong with you? 
			</div>

		';
	}

	if (isset($_GET['pmerror'])) {
		
		echo '
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Warning!</strong> Password not much!
		</div>
		';
	}
	if (isset($_GET['fillerror'])) {
		
		echo '
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Warning!</strong> Please fill all input!
		</div>
		';
	}
	if (isset($_GET['delete'])) {
		
		echo '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Successfully!</strong> deleted user!
		</div>
		';
	}

	if (isset($_GET['error_up'])) {
		
		echo '
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Warning!</strong> Check Username and Password!
		</div>
		';
	}
?>