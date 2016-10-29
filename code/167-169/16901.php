<?php
header("content-type:text/html;charset=utf-8");
/**
 * 最后一个月,2016.9.9号前弄完商城项目;PHP入门就算结束!Come On Go!
 * @authors Your Name (you@example.org)
 * @date    2016-08-27 11:14:27
 * @version $Id$
 */
//====================169-多文件上传表彰陷阱===========================


print_r($_FILES);


/*
注意 :
 多文件上传时,如果name是数组形式,
 如pic[],pic[]

形成的数组与name=a,name=b,这种形式不同

注意这个问题;


打印如下:
Array
(
    [pic] => Array
        (
            [name] => Array
                (
                    [0] => 0ced9c672f756026c7eca5abd8de15b5.jpg
                    [1] => 5a74c8ffcb423c4206e1746df5784de5.jpg
                    [2] => 5a74c8ffcb423c4206e1746df5784de5.jpg
                )

            [type] => Array
                (
                    [0] => image/jpeg
                    [1] => image/jpeg
                    [2] => image/jpeg
                )

            [tmp_name] => Array
                (
                    [0] => D:\wamp\tmp\phpB682.tmp
                    [1] => D:\wamp\tmp\phpB683.tmp
                    [2] => D:\wamp\tmp\phpB693.tmp
                )

            [error] => Array
                (
                    [0] => 0
                    [1] => 0
                    [2] => 0
                )

            [size] => Array
                (
                    [0] => 39333
                    [1] => 32680
                    [2] => 32680
                )

        )

)
 */
?>