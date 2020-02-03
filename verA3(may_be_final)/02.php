<?php
// ファイルへのパス
$path = './upload/';
$targetDir = 'upload';
$pdfFiles = glob($targetDir. DIRECTORY_SEPARATOR . "*.pdf");
$NowPdfNumber = count($pdfFiles);
$NextPdfNumber = $NowPdfNumber +1;
$NewPdfName =strval($NextPdfNumber);
$NAME =$NewPdfName.'.pdf';





// ファイルがアップロードされているかと、POST通信でアップロードされたかを確認
if( !empty($_FILES['file1']['tmp_name']) && is_uploaded_file($_FILES['file1']['tmp_name']) ) {

	// ファイルを指定したパスへ保存する
	if( move_uploaded_file( $_FILES['file1']['tmp_name'], $path.$NAME) ) {
		echo 'アップロードされたファイルを保存しました。';
	} else {
		echo 'アップロードされたファイルの保存に失敗しました。';
	}
}

echo $NAME;
