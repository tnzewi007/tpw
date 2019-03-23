<?php
include "models/adminModels.php";
Class adminControllers extends adminModels{
	public function viewAudio()
	{
		$call = new adminModels;
		$result = $call->allaudios();

		if (is_array($result)){
			foreach ($result as $value) {
				# code...
				echo "<div class='col-md-3 col-xs-12'>";
						
				// echo "</div><div class='col-md-3 col-xs-12'>";
				echo "<p>". $value['audio_name'] ."</p>";		
				echo "</div>";
				
			}
		}
	}
}
?>