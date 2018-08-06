# InstagramのURLから紐づく画像を取得するPHPスクリプト

## (instascget) get Instagram images related some URL

instascget.php
　　https://github.com/mtzhiro/mtzhiro.github.io/blob/master/d/instascget/instascget.php

InstagramのURLを入れると紐づく画像を取得します。/Can get Instagram images related some URL

テストしてくださる方と、PHPスクリプトを載せたURLを募集します。 https:/mtzhiro.github.io までご連絡いただければ・・/ volunteer needed to test and put script on Web server and publish it.

## インストール方法/How to install

instascget.php を何らかの方法でダウンロードし、Webサーバーに設置します。例では、 /Webサーバーの公開ディレクトリ/instascget/instascget.php に置いています。/Dowinload instascget.php and put it on public directory on Web server like /public_direcotry/instascget/instascget.php

## 動作確認/Confirmed platforms

Apache httpd 2.4.x, PHP 5.6.31 (cli) on CentOS6系

　　WindowsのPHP(PHP 5.4.31 (cli))でも動かそうとしたのですが、HTMLソース取り出しの file_get_contents($url) 部分がうまく動きませんでした。（Unable to find the wrapper "https" - did you forget ・・）というエラーなので、それ関係で調べて解決できそうですが、まだできてません）/Maybe also on Windows?

## 仕様/Specification

静止画はそのまま、静止画のURLが取得できます。/Still images - can get direct URL(link/address).

動画ファイルの場合は、動画に対応したサムネイルに表示される静止画が取得できます（動画取得にはいまのところ対応していません）/Videos - can get thumbnail for video image URL(link/address).


## Bug

時々、ちゃんと画像が返ってこないことがあります。

　　→Instagramの仕様による、影響？←正規表現見直したら治ったかも・・
  
  /(there are small bugs? maybe ok..)
  
  ここのURL/this code URL
  
  https://github.com/mtzhiro/mtzhiro.github.io/tree/master/d/instascget
  
## ライセンス/License
     License: GNU General Public License v2 or later
     License URI: http://www.gnu.org/licenses/gpl-2.0.html

