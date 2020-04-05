# php-yar-doc
php-yar，并行RPC框架编码提示api文档

## 使用说明
- yar版本：2.1.2
- 提供 php-yar 的各类的外部调用api
- 将该包加入到php-include文件或直接放入项目中，在编码中可以起到api提示信息的作用
- 该包仅仅是针对 php-yar 扩展中各个类的调用定义，不进入项目编译等


## 使用方法
### 1、 方法一
```text
通过composer安装到项目上即可
composer require-dev qingbing/php-yar-doc
```

### 2、 方法二
```text
用git工具clone到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

### 3、 方法三
```text
直接下载到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

## 参考链接
- [API-DOC] https://github.com/qingbing/php-yar-doc
- [Download] http://pecl.php.net/package/yar
- [DOC] https://www.php.net/manual/zh/book.yar.php
- [DOC] https://www.laruence.com/manual/
- [DOC] https://php.golaravel.com/intro.yar.html


## php.ini Yar 全局配置选项

|配置名称|默认值|可修改范围|意义|
|:-----|:--- |:---|:---|
|yar.packager|php|PHP_INI_SYSTEM|设置Yar的打包工具, 可以是PHP(serialize), JSON, Msgpack(这个需要编译的时候指定--enable-msgpack)|
|yar.debug|Off|PHP_INI_ALL|打开的时候, Yar会把请求过程的日志都打印出来(到stderr)|
|yar.connect_timeout|1000|PHP_INI_ALL|连接超时(毫秒为单位)|
|yar.timeout|5000|PHP_INI_ALL|处理超时(毫秒为单位)|
|yar.expose_info|On|PHP_INI_SYS|如果关闭, 则当通过浏览器访问Server的时候, 不会出现Server Info信息|

## Class-List-Doc : 
- Yar_Server_Request_Exception
- Yar_Server_Protocol_Exception
- Yar_Server_Packager_Exception
- Yar_Server_Output_Exception
- Yar_Client_Transport_Exception
- Yar_Client_Packager_Exception
- Yar_Client_Protocol_Exception

## Class-List-Doc : 
- Yar_Server
- Yar_Client
- Yar_Concurrent_Client
- Yar_Server_Exception
- Yar_Server_Request_Exception
- Yar_Server_Protocol_Exception
- Yar_Server_Packager_Exception
- Yar_Server_Output_Exception
- Yar_Client_Exception
- Yar_Client_Transport_Exception
- Yar_Client_Packager_Exception
- Yar_Client_Protocol_Exception
