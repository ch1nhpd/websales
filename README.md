
## Introduce
- This is a complete upgrade compared to [Version 1][link_ver1]
- Database use `Functions` and `Procedures`
- Site is built from `HTML, CSS, JavaScript, MySql, PHP`, not `Framework`
- Not yet support `English`
- Not yet `Responsive Web`

## Installation
Set config in `admincp/modules/config.php` :
```php
$host = '';
$user_name = '';
$password = '';
$database = '';

$conn = mysqli_connect($host, $user_name, $password, $database);

if (!$conn) {
    echo "Connection failed: ".mysqli_connect_error();
}
```
## Path
Index:
```path
localhost/xiaomi_sales_website_ver2/index.php
```

Admin Control Panel:
```path
localhost/xiaomi_sales_website_ver2/admincp/index.php
```
*Note, account login page Admin is: admin-admin*