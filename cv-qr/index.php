<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CV-QR</title>
</head>
<body>
<?php
        $keywordurl=urlencode($_GET["cvurl"]);
        $url="http://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=$keywordurl";

        $urlsplit = explode("/", urldecode($url));
        $urlsplitlength = count($urlsplit);
        $name = $urlsplit[$urlsplitlength -1];
        $qrname = "qr-".$name.".png";

        $data = file_get_contents($url);
        file_put_contents('./download/'.$qrname,$data);
?>
<img arc="<?php echo $name; ?>" src="<?php echo $url; ?>">
<br/>
<a href="./download/<?php echo $qrname; ?>" download="<?php echo $qrname; ?>">DownLoad</a>

</body>
</html>
