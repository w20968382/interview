<?php/** * * Null 合并运算符 * PHP 7 新增加的 NULL 合并运算符（??）是用于执行isset()检测的三元运算的快捷方式。 * NULL 合并运算符会判断变量是否存在且值不为NULL，如果是，它就会返回自身的值，否则返回它的第二个操作数。 * * 以前的写法是 */$a = null;$res = isset($a) ? $a : '测试';$res1 = $a ?? 'test';echo $res.PHP_EOL;echo $res1.PHP_EOL;// 注意 ?? 是判断值是否存在 即isset，   ?:判断值是否为空，即empty$a = false;var_dump($a ?? "a"); // 相当于: isset($a) ? $a : 'a' => 输出 10var_dump($a ?: "b"); // 相当于: $a ? $a : 'a' =>输出 10