<?php
/**
 * @Extension    :   Yar
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.1.2
 * @Date         :   2020-04-05
 * @Class        :   Yar_Server_Exception
 */

/**
 * @author      qingbing<780042175@qq.com>
 * @describe    Yar 服务器端异常
 *
 * Class Yar_Server_Exception
 */
class Yar_Server_Exception extends Exception implements Throwable
{
    /**
     * @describe    获取异常的原始类型
     *      当服务端的服务函数抛出异常的时候, 客户端本地会响应的抛出一个Yar_Server_Exception异常
     *      有一个属性, 标明了服务端异常的类型. 这个方法就是获取这个异常类型.
     *
     * @return string
     */
    public function getType(): string
    {
        return '';
    }
}