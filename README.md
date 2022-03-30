### 開発者のスケジュールを考慮してしばらくの間は開発を中止します

# utsupedia
うつ病に関する知識とコラムと相談フォームを作る

## インストール
 
```
$ git clone https://github.com/t1k2a/utsupedia.git
$ cd utsupedia
$ docker-compose up -d --build
$ docker-compose exec app bash
Dockerコンテナ内
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```
## MySQLログイン

```
$ docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```

## ビルド

```
Dockerコンテナ外
$ cd src
$ npm run dev
```

## ビルド（ホットリロード付き）

```
Dockerコンテナ外
$ cd src
$ npm run watch
```

## 参考
- [【初心者向け】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)
 - [【入門】Laravelチュートリアル – 掲示板を作成してみよう
](https://blog.hiroyuki90.com/articles/laravel-bbs/)
- [Laravel MixでbrowserSync(hot reload)を有効化する](https://qiita.com/ProjectEuropa/items/901f22b941c1b272d59c)
