<?php
if(isset($_GET['go'])){
	switch ($_GET['go']) {
		case 'danhmuc':
			include("danhmuc.php");
			break;
		case 'hang':
			include("hang.php");
			break;
		case 'donhang':
			include("donhang.php");
			break;
		case 'sanpham':
			include("sanpham.php");
			break;
		case 'slide':
			include("slide.php");
			break;
		case 'user':
			include("user.php");
			break;
		case 'delete':
			include("delete.php");
			break;
		default:
			include("user.php");
			break;
	}
}else{
	include("user.php");
}

	?>