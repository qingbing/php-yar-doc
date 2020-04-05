<?php
/**
 * @Extension    :   Yar
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.1.2
 * @Date         :   2020-04-05
 * @Class        :   Yar_Client
 */

/**
 * @author      qingbing<780042175@qq.com>
 * @describe    Yar 客户端
 *
 * Class Yar_Client
 */
class Yar_Client
{
    /**
     * 魔术方法：构造函数，创建一个客户端实例
     * @param string $url 服务端的HTTP URL路径
     * @param null $async
     */
    final public function __construct($url, $async = null)
    {
    }

    /**
     * @describe    调用远程服务,发起一个RPC调用, 并且得到返回值. 如果服务端的远程调用抛出异常, 那么本地也会相应的抛出一个Yar_Server_Exception异常
     *
     * @param string $method 远程服务的名字
     * @param array $parameters 调用参数
     */
    public function call(string $method, array $parameters): void
    {
    }

    /**
     * @describe    调用远程服务,发起一个RPC调用, 并且得到返回值. 如果服务端的远程调用抛出异常, 那么本地也会相应的抛出一个Yar_Server_Exception异常
     *
     * @param string $method 远程服务的名字
     * @param array $parameters 调用参数
     */
    public function __call(string $method, array $parameters)
    {
    }

    /**
     * @describe    获取调用的配置
     *
     * @param number $type
     *
     * @return mixed
     */
    public function getOpt($type)
    {
        return '';
    }

    /**
     * @describe    设置调用的配置,设置调用远程服务的一些配置, 比如超时值, 打包类型
     *
     * @param number $type 可以是: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (需要服务端支持keepalive), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT
     * @param mixed $value
     *
     * @return bool
     */
    public function setOpt($type, $value): bool
    {
        return true;
    }
}