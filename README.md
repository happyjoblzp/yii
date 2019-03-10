# yii
商城服务配置
- git clone https://github.com/happyjoblzp/yii 下载到本地/home/www/目录
- ecs服务器安装nginx，sudo yum install nginx
- 配置nginx，cd /etc/nginx/conf.d
- 修改/etc/nginx/nginx.conf文件，增加下面配置
```
server {
    charset utf-8;
    client_max_body_size 128M;
    listen 80;
    server_name book.mooc.test;

    root  /home/www/yii/mooc/web;
    index  index.php;

    location ~* \.(eot|otf|ttf|woff)$ {
        add_header Access-Control-Allow-Origin *;
    }

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include   fastcgi_params;
        fastcgi_index    index.php;
        fastcgi_param    SCRIPT_FILENAME    $document_root$fastcgi_script_name;
        fastcgi_pass   127.0.0.1:9000;
        try_files $uri =404;
    }

}

```
- 安装php-fpm，并启动,sudo yum install php-fpm,sudo php-fpm&
- 启动nginx，sudo /usr/sbin/nginx -s reload

- 安装yum install php-pdo   yum install php-pdo_mysql
