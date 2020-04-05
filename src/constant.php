<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Extension    :   Yar
 * Version      :   2.1.2
 * Date         :   2020-04-05
 */
// Yar 版本号
defined('YAR_VERSION') or define('YAR_VERSION', '2.1.2');

// Yar 打包器选项编码
defined('YAR_OPT_PACKAGER') or define('YAR_OPT_PACKAGER', 1);

// Yar 持久化选项编码
defined('YAR_OPT_PERSISTENT') or define('YAR_OPT_PERSISTENT', 2);

// Yar 超时选项编码
defined('YAR_OPT_TIMEOUT') or define('YAR_OPT_TIMEOUT', 4);

// Yar 连接超时选项编码
defined('YAR_OPT_CONNECT_TIMEOUT') or define('YAR_OPT_CONNECT_TIMEOUT', 8);

// Yar header 选项编码
defined('YAR_OPT_HEADER') or define('YAR_OPT_HEADER', 16);

// Yar resolve 选项编码
defined('YAR_OPT_RESOLVE') or define('YAR_OPT_RESOLVE', 32);

// Yar 客户端使用 HTTP 协议
defined('YAR_CLIENT_PROTOCOL_HTTP') or define('YAR_CLIENT_PROTOCOL_HTTP', 1);

// Yar 客户端使用 TCP 协议
defined('YAR_CLIENT_PROTOCOL_TCP') or define('YAR_CLIENT_PROTOCOL_TCP', 2);

// Yar 客户端使用 UNIX 协议
defined('YAR_CLIENT_PROTOCOL_UNIX') or define('YAR_CLIENT_PROTOCOL_UNIX', 4);

// Yar 使用"PHP"打包器
defined('YAR_PACKAGER_PHP') or define('YAR_PACKAGER_PHP', 'PHP');

// Yar 使用"JSON"打包器
defined('YAR_PACKAGER_JSON') or define('YAR_PACKAGER_JSON', 'JSON');

// Yar 错误代码
defined('YAR_ERR_OKEY') or define('YAR_ERR_OKEY', 0);

// Yar 输出错误代码
defined('YAR_ERR_OUTPUT') or define('YAR_ERR_OUTPUT', 8);

// Yar transport 错误代码
defined('YAR_ERR_TRANSPORT') or define('YAR_ERR_TRANSPORT', 16);

// Yar 请求错误代码
defined('YAR_ERR_REQUEST') or define('YAR_ERR_REQUEST', 4);

// Yar 协议错误代码
defined('YAR_ERR_PROTOCOL') or define('YAR_ERR_PROTOCOL', 2);

// Yar 打包错误代码
defined('YAR_ERR_PACKAGER') or define('YAR_ERR_PACKAGER', 1);

// Yar 错误异常
defined('YAR_ERR_EXCEPTION') or define('YAR_ERR_EXCEPTION', 64);