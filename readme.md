Önce php serveri başlatmamız gerekiyor.
```
php -S 127.0.0.1:3000 -t public
```
daha sonra autoreload işlemleri için bu komutu çalıştırıyoruz.
```shell
npm run watch
```
Bundan sonra 3000 portu yerine 3001 portu kullanılabilir.

Kodları minify edip productiona çıkmak için
```shell
npm run prod
```

fontawesome api keyi için:
ana dizine .npmrc diye bir dosya oluşturun.

dosyanın içeriğine şunu ekleyin:

```
@fortawesome:registry=https://npm.fontawesome.com/
//npm.fontawesome.com/:_authToken=<API KEY>
```
API KEY i eklemeyi unutmayın.