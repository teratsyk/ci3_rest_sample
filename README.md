# Sample RestAPI

codeigniter を使用してAPIを作成する。
APIのドキュメントとして、swaggerを使ってみたいので試してみる。

# codeigniter

codeigniter3を使用する。

### 日本語化

言語ファイルを[公式サイト](https://github.com/bcit-ci/codeigniter3-translations/archive/3.0.4.zip)から取得する。  
ダウンロードした `codeigniter3-translations-3.0.4/language/japanese` を `application/language` にコピー。

# Rest化

標準ではRestに対応していないので、既存ライブラリを使う。  
今回は、[hanischit/codeigniter-restserver](https://packagist.org/packages/hanischit/codeigniter-restserver) を使用する。
下記のとおりファイルをコピーする。

* vendor/hanischit/codeigniter-restserver/libraries/Format.php  
    ⇒ application/libraries/Format.php
* vendor/hanischit/codeigniter-restserver/libraries/REST_Controller.php  
    ⇒ application/libraries/REST_Controller.php
* vendor/hanischit/codeigniter-restserver/config/rest.php
    ⇒ application/config/rest.php
* vendor/hanischit/codeigniter-restserver/language/english
    ⇒ application/language/

[github](https://github.com/chriskacerguis/codeigniter-restserver) からダウンロードするとサンプルコードがある。

