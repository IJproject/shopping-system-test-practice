# Laravel＋Vue の雛形

[Vueのドキュメントはこちら](https://ja.vuejs.org/)
[Vuetifyのドキュメントはこちら](https://vuetifyjs.com/en/)
[Laravelのドキュメントはこちら](https://laravel.com/docs)
[Inertiaのドキュメントはこちら](https://inertiajs.com/)

## セットアップ方法

### 前提条件
* Dockerがインストールされている
* Node.jsがインストールされている

### 手順
* ローカル環境にソースコードをクローン
* .envファイルを作成し、.env.exammpleの内容を全てコピペ (DBの部分は適切なものを選択してください。値の変更自体は不要です。)
* プロジェクトのルートディレクトリで、以下のコマンドを順に実行
    * ```bash
      docker run --rm \
      -u "$(id -u):$(id -g)" \
      -v "$(pwd)":/var/www/html \
      -w /var/www/html \
      laravelsail/php82-composer:latest \
      bash -c \
      "composer install && \
      php artisan key:generate"
      ```
    * ```bash
      docker-compose up -d
      ```
    * ```bash
      ./vendor/bin/sail artisan migrate
      ```
    * ```bash
      ./vendor/bin/sail npm install
      ```
    * ```bash
      ./vendor/bin/sail npm run dev
      ```
* コンテナが立ち上がっている状態であれば、「localhost」というURLでページ見れます
