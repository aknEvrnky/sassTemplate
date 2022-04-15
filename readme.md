Serveri çalıştırmak için

default server url: [localhost:3001](http://localhost:3001)

```shell
npm run watch
```

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