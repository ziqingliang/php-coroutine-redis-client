<?php
/**
 * Created by PhpStorm.
 * User: lanzhi
 * Date: 2018/4/25
 * Time: 下午2:52
 */

namespace lanzhi\redis\commands\connections;


use lanzhi\redis\commands\AbstractCommand;

class QuitCommand extends AbstractCommand
{

    public function getCommandId(): string
    {
        return 'QUIT';
    }

    public function getDoc()
    {
        return <<<TXT
QUIT

请求服务器关闭与当前客户端的连接。

一旦所有等待中的回复(如果有的话)顺利写入到客户端，连接就会被关闭。

可用版本：
>= 1.0.0
时间复杂度：
O(1)
返回值：
总是返回 OK (但是不会被打印显示，因为当时 Redis-cli 已经退出)。
$ redis

redis> QUIT

$
TXT;

    }

}