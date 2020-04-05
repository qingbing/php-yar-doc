<?php
/**
 * @Extension    :   Yar
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.1.2
 * @Date         :   2020-04-05

 * @Class        :   Yar_Client_Exception
 */

/**
 * @author      qingbing<780042175@qq.com>
 * @describe    Yar 客户端异常
 *
 * Class Yar_Client_Exception
 */
class Yar_Client_Exception extends Exception implements Throwable
{
    /**
     * @describe    获取异常的原始类型
     *
     * @return string
     */
    public function getType(): string
    {
        return '';
    }
}