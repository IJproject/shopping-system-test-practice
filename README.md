## Laravel＋Vue の雛形

[Laravelのドキュメントはこちら](https://laravel.com/docs)

## セットアップ方法

以下の手順でローカル環境にセットアップしてください。

* ローカル環境にソースコードをクローン
* .envファイルを作成し、.env.exammpleの内容を全てコピペ (DBの名前などは、変更したければこのタイミングで)
* プロジェクトのルートディレクトリで、以下のコマンドを順に実行
    * docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd)":/var/www/html \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    bash -c \
    "composer install && \
     php artisan key:generate && \
     php artisan migrate"
    * docker-compose up -d
    * ./vendor/bin/sail npm install
    ./vendor/bin/sail npm run dev
* 「localhost」というURLでページ見れます
