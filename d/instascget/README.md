# InstagramのURLから紐づく画像を取得するPHPスクリプト

## (instascget)

instascget.php
　　https://github.com/mtzhiro/mtzhiro.github.io/blob/master/d/instascget/instascget.php

InstagramのURLを入れると紐づく画像を取得します。

テストしてくださる方と、PHPスクリプトを載せたURLを募集します。 https:/mtzhiro.github.io までご連絡いただければ・・

## インストール方法

instascget.php を何らかの方法でダウンロードし、Webサーバーに設置します。例では、 /Webサーバーの公開ディレクトリ/instascget/instascget.php に置いています。

## 動作確認

Apache httpd 2.4.x, PHP 5.6.31 (cli)

## 仕様

静止画はそのまま、静止画のURLが取得できます。

動画ファイルの場合は、動画に対応したサムネイルに表示される静止画が取得できます（動画取得にはいまのところ対応していません）

## Bug

時々、ちゃんと画像が返ってこないことがあります。

　　→Instagramの仕様による、影響？←正規表現見直したら治ったかも・・
  
  ここのURL
  
  https://github.com/mtzhiro/mtzhiro.github.io/tree/master/d/instascget
  
  
