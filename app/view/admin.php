<?php
class View {
	public function __construct() {
	}
	
	public function showContent($data){
		ob_start();
		include('./template/header.php');
		include('./template/nav.php');
		include('./template/admin.main.php');
		include('./template/footer.php');
		include('./template/modal.php');
		$output = ob_get_contents();  
		ob_end_clean();
		return $output;
	}	
}
?>
