### mysql の実行クエリログを取得できるように変更
mysql 5.5.47(on ubuntu 14.02)

```sh
vagrant@develop:/var/www/application/current/app$ mysql --version
mysql  Ver 14.14 Distrib 5.5.47, for debian-linux-gnu (x86_64) using readline 6.3
```
/etc/mysql/my.cnf の72,73行目のコメントアウトを外す。

```text
72 general_log_file        = /var/log/mysql/mysql.log
73 general_log             = 1
```
tail -f /var/log/mysql/mysql.log