<?php
/**
 * @Extension    :   Yar
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.1.2
 * @Date         :   2020-04-05
 * @Class        :   Yar_Concurrent_Client
 */

/**
 * @author      qingbing<780042175@qq.com>
 * @describe    Yar 并行客户端
 *
 * Class Yar_Concurrent_Client
 */
class Yar_Concurrent_Client
{
    protected static $_callstack;
    protected static $_callback;
    protected static $_error_callback;
    protected static $_start;

    /**
     * @describe    注册一个并行的服务调用
     *
     * @param string $uri
     * @param string $method
     * @param array $parameters
     * @param callable|null $callback
     *
     * @return int
     */
    public static function call(string $uri, string $method, array $parameters, callable $callback = null)
    {
        return 1;
    }

    /**
     * @describe    发送所有注册的并行调用
     *
     * @param callable|null $callback
     * @param callable|null $error_callback
     *
     * @return bool
     */
    public static function loop(callable $callback = null, callable $error_callback = null)
    {
        return true;
    }

    /**
     * @describe    清理所有已注册的调用
     *
     * @return bool
     */
    public static function reset()
    {
        return true;
    }
}