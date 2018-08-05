<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<title>insta sc get</title>
</head>
<body >
<h1>insta sc get</h1>
<div>
InstagramのURLを入れると、そのURLに紐づく画像のURLを表示するPHPスクリプト<br />
<form action="/insta4.php" method="get" name="finsta" id="">
  <input type="text" name="instaurl" value="" size="40" /><input type="submit" name="instasub" value="get" /><br />
</form>

<?php
  // InstagramのURLをフォームから取得
  if (isset($_REQUEST['instaurl']) ) {
    $url = $_REQUEST['instaurl'];
  } else {
    // URL指定がない場合仮で
    $url = 'https://www.instagram.com/p/BmFmbI2F6OX/?taken-by=mtzhiro';
  }
  
  // HTMLソースの取得
  $str = file_get_contents($url);
  
  echo "URL= <a href=\"$url\">$url</a> <br />\n";
  //像を取得
  //1枚目の画像を取得
  $fa = array();
  // 1枚目の画像を見つける正規表現
  preg_match("/config_width\":750.*?(https:\/\/.*?\.jpg)/", $str, $fa);
  
  //いちおう画像を表示
  echo "f:<img src=\"" . $fa[1] . "\" alt=\"\" width=\"200\" />\n";
  
  //2枚目以降の画像があれば取得（Instagramの仕様としては、画像(動画)は1度に合計10枚まで）
  $oa = array();
  // 2枚目以降の画像を見つける正規表現
  preg_match_all("/is_video.*?(https:\/\/.*?\.jpg)/", $str, $oa); 
  
  //いちおう画像を表示
  $uc = count($oa[1]);
  for ($i = 1; $i < $uc; $i++) {
    echo "$i<img src=\"" . $oa[1][$i] . "\" alt=\"\" width=\"200\" />\n";
  }

?>
</div>
</body>
</html>
