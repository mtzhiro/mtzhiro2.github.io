# nextcloud
http://www.server-memo.net/server-setting/nextcloud/nextcloud_install.html
環境
  Apache 2.4
  MySQL
  PHP 5.6
  CentOS6.5
  
エラー　Apache2.4 DirectoryIndex 関係

VirtualHostの設定で変更

     <Directory "/var/www/GAITOUDIRECTORY">
      AllowOverride Limit Options FileInfo AuthConfig
        ↓
      AllowOverride All

エラーはでなくなったが・・

  内部サーバーエラー
  
        The server was unable to complete your request.
         If this happens again, please send the technical details below to the server administrator.
         詳細は、サーバーのログを確認してください。
         技術詳細
           リモートアドレス: 
           リクエスト ID: Wyk....

config/config.php などをいじっていたらうまくいった？後に、PHPのDOMモジュールがないと言われる。。DOM= yum では php-xml 

     yum install --enablerepo=remi-php56 php-xml
     
で入って、起動した。

HTTPS対応してないからか、iPhone アプリはログインしてもすぐログアウトしてしまう（認証は通っている）。同様の理由からか、iPhone写真アプリ＞共有＞からアップロードしようとしてもNG。
