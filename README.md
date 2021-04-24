# spm-shop
Бесплатный код сайта для вашего магазина.

# Как всё настроить?
1. Загрузите код, и загрузите на сервер с поддержкой php и .htaccess
Всё, почти.

# connection.php:
1. Создайте базу данных
2. Создайте таблицу honey:
```sql
CREATE TABLE `u1093406_aptkop`.`honey` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `num` TEXT NOT NULL , `nick` TEXT NOT NULL , `tovar` INT(255) NOT NULL , `name` TEXT NOT NULL , `statuss` INT(255) NOT NULL , `cost` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;'
```
```sql
3. Создайте таблицу tovar: 'CREATE TABLE `u1093406_aptkop`.`tovar` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `num` INT(255) NOT NULL , `name` TEXT NOT NULL , `cost` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
4. Готово

# Добавление товара в дб:
1. Выполните sql запрос: "INSERT INTO honey (num, name, cost) VALUES (a, 'b', c)" где
a = айди товара
b = имя товара
c = цена товара

Добавление товара на сайт:
Как это сделать я указал в файле `index.php`
