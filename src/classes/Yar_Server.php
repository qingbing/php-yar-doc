<?php
/**
 * @Extension    :   Yar
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.1.2
 * @Date         :   2020-04-05
 *
 * @Class        :   Yar_Server
 */

/**
 * @author      qingbing<780042175@qq.com>
 * @describe    Yar 服务器
 *
 * Class Yar_Server
 */
class Yar_Server
{
    protected $_executor;

    /**
     * 魔术方法：构造函数，创建一个HTTP RPC Server
     *
     * @param $obj
     * @param null $protocol
     */
    final public function __construct($obj, $protocol = null)
    {
    }

    /**
     * @describe    启动HTTP RPC Server
     */
    public function handle()
    {
    }
}