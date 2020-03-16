# 依存しているファイルを再帰的に見るか
## 依存関係
piyo → fuga → hoge

fugaはあるがhogeがないときにどうなるか

## 結果
```
$ make piyo
touch hoge
touch fuga
touch piyo
$ ls 
Makefile   README.md  fuga       hoge       piyo
$ rm -f hoge
$ make piyo
touch hoge
touch fuga
touch piyo
```

結果、再帰的に見られる
