<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel＋Vue の雛形

[Laravelのドキュメントはこちら](https://laravel.com/docs)


## セットアップ方法

以下の手順でローカル環境にセットアップしてください。

・ローカル環境にソースコードをクローン

・.envファイルを作成し、.env.exammpleの内容を全てコピペ (DBの名前などは、変更したければこのタイミングで)

・プロジェクトのディレクトリ内のターミナルで、「npm install」「composer install」「php artisan key:generate」をそれぞれ実行

・「php artisan migrate」でローカルのMySQL上にテーブルを作成

・「npm run dev」と「php artisan serve」でサーバーを立ち上げると、localhost:8000でページ見れます


## セットアップ方法 (Dockerを使いたい方は先ほどの続きでこちらも実行)

[参考資料はこちら](https://laravel.com/docs/10.x/sail)

プロジェクトのディレクトリ内のターミナルで、以下の順番に実行し、コンテナを立ち上げる。(.envファイルはいじらないことをオススメします)

・composer require laravel/sail --dev

・php artisan sail:install

・./vendor/bin/sail up

各artisanコマンドは、./vendor/bin/sail artisan 〜 のように記述してください。

※ この雛形を作った人間はあまりDockerに詳しくないため、不具合が出ても解決方法は基本的には分かりませんので、その辺りはご注意を。

## vuetifyのインストール

LaravelSailのように、viteのバージョンが4.xのプロジェクトの場合は、以下のようにvite-plugin-vuetifyのバージョンを指定する。(latest)の部分は最新バージョンのもので大丈夫。vite-plugin-vuetifyの最新バージョンの2.0.1だと、viteのバージョンが古いためnode_modulesがぶっ壊れる。

"devDependencies": {

    "vite-plugin-vuetify": "^1.0.2",

    "vuetify": (latest)

},

"dependencies": {

    "@mdi/font": (latest),

}
