<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="author" content="NTU CSIE Information System Training Course">
	<meta name="keywords" content="Keyword 1,Keyword 2">
	<meta name="description" content="description">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/favicon.png">
	<title>upload</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="upfile">
	<input type="submit" name="submit" value="上傳">
</form>
<?php

class upload_file {
	public $uploads_dir, $filename, $tmp_url, $upfile_error, $base_path, $dir;

	function __construct() {
		$this->uploads_dir = "upload/";
		$this->filename = @$_FILES['upfile']['name'];
		$this->tmp_url = @$_FILES['upfile']['tmp_name'];
		$this->dir = pathinfo($_SERVER['PHP_SELF']);
		$this->base_path = $_SERVER['HTTP_HOST'] . $this->dir['dirname'] . "/" . $this->uploads_dir . $this->filename;
	}

	public function upload() {
		if (move_uploaded_file($this->tmp_url, $this->uploads_dir . $this->filename)) {
			echo "上傳成功" . "<a href='http://$this->base_path' target='_blank'>檔案</a>";
		} else {
			switch (@$_FILES['upfile']['error']) {
			case 1:
				// 檔案大小超出了伺服器上傳限制 UPLOAD_ERR_INI_SIZE
				$this->upfile_error = "檔案大小超出了伺服器上傳限制";
				break;

			case 2:
				// 要上傳的檔案大小超出瀏覽器限制 UPLOAD_ERR_FORM_SIZE
				$this->upfile_error = "上傳的檔案大小超出瀏覽器限制";
				break;

			case 3:
				//檔案僅部分被上傳 UPLOAD_ERR_PARTIAL
				$this->upfile_error = "檔案僅部分被上傳";
				break;

			case 4:
				//沒有找到要上傳的檔案 UPLOAD_ERR_NO_FILE
				$this->upfile_error = "沒有找到要上傳的檔案";
				break;

			case 5:
				//伺服器臨時檔案遺失
				$this->upfile_error = "伺服器臨時檔案遺失";
				break;

			case 6:
				//檔案寫入到站存資料夾錯誤 UPLOAD_ERR_NO_TMP_DIR
				$this->upfile_error = "檔案寫入到暫存資料夾錯誤";
				break;

			case 7:
				//無法寫入硬碟 UPLOAD_ERR_CANT_WRITE
				$this->upfile_error = "無法寫入硬碟";
				break;

			case 8:
				//UPLOAD_ERR_EXTENSION
				$this->upfile_error = "PHP擴充功能影響上傳";
				break;
			}
			echo $this->upfile_error;
		}

	}

}
if (@$_POST['submit']) {
	$upload = new upload_file();
	$upload->upload();
}

?>
</body>
</html>