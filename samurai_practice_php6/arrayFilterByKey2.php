<?php

/**
 * 下記の条件を満たす自作関数を作りましょう。
 * 
 * 
 * 関数名：arrayFilterByKey
 * 説明：$arrayから$keyNameのキーが$keyValueである値をすべて取得
 * 引数：
 *  1. array $array
 *  2. string $keyName
 *  3. string $keyValue
 * 返り値：array $result
 */

// array_map('hoge' , $fuga ) =>$fugaの配列にhoge関数を適用させる
// array_filter( $hoge , コールバック関数) => コールバック関数に一致する$hogeの配列のみ表示する


function arrayFilterByKey($array, $keyName, $keyValue){
    $result = [];

    $result = array_filter($array , function($item) use($keyName , $keyValue){
        return $item[$keyName] === $keyValue ; 
    }) ;
    return $result ;
}

$postList = [
    [ 'id' => 0, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?93604', 'title' => 'fugit', 'content' => 'Ut nostrum assumenda voluptatem non odio eos ab.' ],
    [ 'id' => 1, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?40632', 'title' => 'et', 'content' => 'Rerum officia quia omnis eligendi et amet molestias.' ],
    [ 'id' => 2, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?29924', 'title' => 'quo', 'content' => 'Ipsum molestias minus laudantium id voluptas.' ],
    [ 'id' => 3, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?64438', 'title' => 'quas', 'content' => 'Ipsa eligendi nam porro aut nostrum veniam alias.' ],
    [ 'id' => 4, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?20525', 'title' => 'sit', 'content' => 'Enim nihil qui atque unde modi voluptatem laborum.' ],
    [ 'id' => 5, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?67000', 'title' => 'eos', 'content' => 'Quae quas cumque velit minus doloremque repudiandae.' ],
    [ 'id' => 6, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?41108', 'title' => 'iure', 'content' => 'Itaque perspiciatis vitae adipisci consequatur sunt adipisciveniam.' ],
    [ 'id' => 7, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?48372', 'title' => 'eveniet', 'content' => 'Voluptatem quia laboriosam quia non aut.' ],
    [ 'id' => 8, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?12931', 'title' => 'labore', 'content' => 'Eos molestias ducimus qui aut exercitationem.' ],
    [ 'id' => 9, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?15425', 'title' => 'modi', 'content' => 'Explicabo ut aperiam veniam necessitatibus dolores.' ],
    [ 'id' => 10, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?90695', 'title' => 'voluptatem', 'content' => 'Eum blanditiis et magni.' ],
    [ 'id' => 11, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?36474', 'title' => 'cupiditate', 'content' => 'Maiores nobis modi sunt minima.' ],
    [ 'id' => 12, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?92393', 'title' => 'facilis', 'content' => 'Ut assumenda quaerat non iure consequatur dolor.' ],
    [ 'id' => 13, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?99857', 'title' => 'omnis', 'content' => 'Porro aut nobis exercitationem dolore.' ],
    [ 'id' => 14, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?56098', 'title' => 'non', 'content' => 'Sed non laboriosam consequatur nostrum.' ],
    [ 'id' => 15, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?30622', 'title' => 'sunt', 'content' => 'Veniam iste quidem non minima quos quidem et.' ],
    [ 'id' => 16, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?27348', 'title' => 'officiis', 'content' => 'Fugiat quo voluptates placeat dolorem voluptatem eum iure animi.' ],
    [ 'id' => 17, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?89522', 'title' => 'temporibus', 'content' => 'Qui quia omnis quia aperiam.' ],
    [ 'id' => 18, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?18138', 'title' => 'harum', 'content' => 'Non neque eum beatae molestias earum delectus laudantium eligendi.' ],
    [ 'id' => 19, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?25966', 'title' => 'dolorem', 'content' => 'Aut modi quis perferendis sint dignissimos fugit quis quaerat.' ],
    [ 'id' => 20, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?10567', 'title' => 'vel', 'content' => 'Dolorem quod odio dolor velit consectetur numquam quaerat.'],
    [ 'id' => 21, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?16057', 'title' => 'rerum', 'content' => 'Exercitationem quam dolores sint sint.' ],
    [ 'id' => 22, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?73298', 'title' => 'qui', 'content' => 'Est et et cum consectetur optio tempore.' ],
    [ 'id' => 23, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?86379', 'title' => 'voluptatem', 'content' => 'Quia similique dolorum placeat est.' ],
    [ 'id' => 24, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?98978', 'title' => 'ipsam', 'content' => 'Labore voluptatem nobis exercitationem qui.' ],
    [ 'id' => 25, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?47548', 'title' => 'expedita', 'content' => 'Sequi inventore ea quia accusamus veritatis veniam eos.' ],
    [ 'id' => 26, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?78890', 'title' => 'eos', 'content' => 'Sequi ex sint repellat commodi enim perspiciatis soluta.' ],
    [ 'id' => 27, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?20918', 'title' => 'harum', 'content' => 'Repellendus debitis quis ut est.' ],
    [ 'id' => 28, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?23260', 'title' => 'delectus', 'content' => 'Nulla corrupti dicta est possimus.' ],
    [ 'id' => 29, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?22176', 'title' => 'nostrum', 'content' => 'Et aut voluptatem delectus quia.' ],
    [ 'id' => 30, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?87002', 'title' => 'deleniti', 'content' => 'Ea quo eos modi corporis adipisci.' ],
    [ 'id' => 31, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?23586', 'title' => 'suscipit', 'content' => 'Nostrum optio minus quasi modi consequatur libero consectetur.' ],
    [ 'id' => 32, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?18237', 'title' => 'et', 'content' => 'Earum itaque reprehenderit perspiciatis dolorem et quidem eveniet.' ],
    [ 'id' => 33, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?85554', 'title' => 'consequatur', 'content' => 'Vero eaque suscipit earum error iusto voluptas nesciunt.' ],
    [ 'id' => 34, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?19608', 'title' => 'quas', 'content' => 'Doloremque ut et laborum suscipit quasi reprehenderit.' ],
    [ 'id' => 35, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?62432', 'title' => 'odio', 'content' => 'Reiciendis ipsa incidunt soluta.' ],
    [ 'id' => 36, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?50617', 'title' => 'reiciendis', 'content' => 'Ut dolores quisquam vitae qui et.' ],
    [ 'id' => 37, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?49957', 'title' => 'deleniti', 'content' => 'Corporis voluptate amet exercitationem optio.' ],
    [ 'id' => 38, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?36164', 'title' => 'ea', 'content' => 'Aliquam esse alias iure aut.' ],
    [ 'id' => 39, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?13844', 'title' => 'tempore', 'content' => 'Qui et quia ad vero expedita rem omnis nostrum.' ],
    [ 'id' => 40, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?22425', 'title' => 'pariatur', 'content' => 'Explicabo quaerat consequatur sit sint amet laudantium laudantium id.' ],
    [ 'id' => 41, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?40194', 'title' => 'aut', 'content' => 'Nihil nisi ipsam aut quidem harum.' ],
    [ 'id' => 42, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?48568', 'title' => 'eum', 'content' => 'Ut natus inventore dignissimos est praesentium possimus qui aut.' ],
    [ 'id' => 43, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?74563', 'title' => 'ipsa', 'content' => 'Dolore harum ad numquam nihil fuga.' ],
    [ 'id' => 44, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?87615', 'title' => 'consequatur', 'content' => 'Non odit ducimus sit culpa ut.' ],
    [ 'id' => 45, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?58913', 'title' => 'minus', 'content' => 'Minima consequatur iste molestiae reprehenderit adipisci dolor voluptatibus.' ],
    [ 'id' => 46, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?62471', 'title' => 'sint', 'content' => 'Eum debitis sapiente nesciunt.' ],
    [ 'id' => 47, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?77544', 'title' => 'autem', 'content' => 'At quia consequuntur omnis nostrum.' ],
    [ 'id' => 48, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?51083', 'title' => 'molestiae', 'content' => 'Sed omnis corrupti voluptatum voluptas consequatur voluptates quia.' ],
    [ 'id' => 49, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?33640', 'title' => 'voluptate', 'content' => 'Est alias aperiam voluptatem itaque iure.' ],
    [ 'id' => 50, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?81431', 'title' => 'itaque', 'content' => 'Consequuntur sit omnis quibusdam hic qui officiis.' ],
    [ 'id' => 51, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?11423', 'title' => 'similique', 'content' => 'Nemo nesciunt facilis repellendus aut.' ],
    [ 'id' => 52, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?28249', 'title' => 'iste', 'content' => 'Ullam libero quibusdam doloremque laborum exercitationem cumque.' ],
    [ 'id' => 53, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?99581', 'title' => 'pariatur', 'content' => 'Error sed voluptas voluptate voluptas.' ],
    [ 'id' => 54, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?11713', 'title' => 'doloribus', 'content' => 'Dolores voluptates laborum porro aliquid rerum.' ],
    [ 'id' => 55, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?21737', 'title' => 'unde', 'content' => 'Ut laboriosam enim perferendis delectus molestias assumendanon quia.' ],
    [ 'id' => 56, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?93511', 'title' => 'asperiores', 'content' => 'Repellendus ipsam et praesentium blanditiis nam.' ],
    [ 'id' => 57, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?61967', 'title' => 'voluptatum', 'content' => 'Quos est facilis doloribus sint.' ],
    [ 'id' => 58, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?47073', 'title' => 'quod', 'content' => 'Ea quisquam pariatur explicabo unde quidem in unde.' ],
    [ 'id' => 59, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?45905', 'title' => 'quo', 'content' => 'Ipsa sed commodi ut mollitia sequi quam est dolor.' ],
    [ 'id' => 60, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?59716', 'title' => 'ab', 'content' => 'Vel minima et molestias totam vero placeat.' ],
    [ 'id' => 61, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?60549', 'title' => 'maxime', 'content' => 'Esse nihil illum asperiores eum.' ],
    [ 'id' => 62, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?83327', 'title' => 'exercitationem', 'content' => 'Eius eum iste id placeat rerum possimus autem.' ],
    [ 'id' => 63, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?80182', 'title' => 'ipsum', 'content' => 'Quisquam ipsam voluptatibus quaerat.' ],
    [ 'id' => 64, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?11908', 'title' => 'perferendis', 'content' => 'Facilis qui cumque eaque commodi reiciendis.' ],
    [ 'id' => 65, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?26430', 'title' => 'et', 'content' => 'Quibusdam asperiores laboriosam autem numquam consequatur.' ],
    [ 'id' => 66, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?36331', 'title' => 'cum', 'content' => 'A corporis et sed.' ],
    [ 'id' => 67, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?75233', 'title' => 'magni', 'content' => 'Voluptates repellat minima qui pariatur repellendus eos.'],
    [ 'id' => 68, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?61903', 'title' => 'et', 'content' => 'Quibusdam quod accusamus voluptatum a aperiam dolorem.' ],
    [ 'id' => 69, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?87856', 'title' => 'dignissimos', 'content' => 'Sunt soluta enim est rerum expedita accusamus.' ],
    [ 'id' => 70, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?57437', 'title' => 'quibusdam', 'content' => 'Maxime veritatis esse facilis molestias dignissimos sit.' ],
    [ 'id' => 71, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?70293', 'title' => 'recusandae', 'content' => 'Adipisci neque totam aut aut optio.' ],
    [ 'id' => 72, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?93026', 'title' => 'quia', 'content' => 'Mollitia in magni in ullam accusantium.' ],
    [ 'id' => 73, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?57633', 'title' => 'sed', 'content' => 'Recusandae non perspiciatis sint.' ],
    [ 'id' => 74, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?66099', 'title' => 'sint', 'content' => 'Harum nisi non molestias expedita esse.' ],
    [ 'id' => 75, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?64688', 'title' => 'consequatur', 'content' => 'Expedita possimus qui recusandae autem odio recusandaedoloremque.' ],
    [ 'id' => 76, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?96259', 'title' => 'eum', 'content' => 'Debitis pariatur vero fuga expedita.' ],
    [ 'id' => 77, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?22690', 'title' => 'commodi', 'content' => 'Qui rerum aut repudiandae quod consectetur.' ],
    [ 'id' => 78, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?32909', 'title' => 'veritatis', 'content' => 'Exercitationem itaque vel quae in nostrum.' ],
    [ 'id' => 79, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?92483', 'title' => 'non', 'content' => 'Quo id et molestiae officiis.' ],
    [ 'id' => 80, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?62532', 'title' => 'excepturi', 'content' => 'Ut dicta cupiditate qui ea quo.' ],
    [ 'id' => 81, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?10568', 'title' => 'aperiam', 'content' => 'Excepturi omnis rerum quae laborum aspernatur minima.' ],
    [ 'id' => 82, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?43411', 'title' => 'voluptatum', 'content' => 'Doloremque id exercitationem quo dolores.' ],
    [ 'id' => 83, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?46872', 'title' => 'et', 'content' => 'Et molestias at sed laborum temporibus doloribus.' ],
    [ 'id' => 84, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?51184', 'title' => 'eius', 'content' => 'Non saepe recusandae voluptatem repellat quis sed aperiam.'],
    [ 'id' => 85, 'type' => 'notice', 'thumbnail' => 'https://picsum.photos/640/480/?12709', 'title' => 'laudantium', 'content' => 'Omnis consectetur nam velit et dignissimos nisi ipsam.' ],
    [ 'id' => 86, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?54180', 'title' => 'sed', 'content' => 'Nulla est non dolor non.' ],
    [ 'id' => 87, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?86475', 'title' => 'quibusdam', 'content' => 'Facere qui officiis ut.' ],
    [ 'id' => 88, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?10869', 'title' => 'rerum', 'content' => 'Expedita amet dignissimos magnam similique.' ],
    [ 'id' => 89, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?46785', 'title' => 'doloribus', 'content' => 'Quia nostrum aut ratione similique sed quidem molestiae.' ],
    [ 'id' => 90, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?88359', 'title' => 'eaque', 'content' => 'At modi enim earum cupiditate quo excepturi similique.' ],
    [ 'id' => 91, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?71662', 'title' => 'facilis', 'content' => 'Ut eius incidunt non eligendi et recusandae.' ],
    [ 'id' => 92, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?83423', 'title' => 'impedit', 'content' => 'Qui ex rerum consequatur sequi et.' ],
    [ 'id' => 93, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?52130', 'title' => 'doloremque', 'content' => 'Ut suscipit nesciunt quo.' ],
    [ 'id' => 94, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?27536', 'title' => 'velit', 'content' => 'Ipsam eius amet est fugit autem officiis maxime.' ],
    [ 'id' => 95, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?22357', 'title' => 'commodi', 'content' => 'Mollitia dolor accusamus modi repellat optio.' ],
    [ 'id' => 96, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?34101', 'title' => 'reiciendis', 'content' => 'Perferendis dolor sunt et.' ],
    [ 'id' => 97, 'type' => 'column', 'thumbnail' => 'https://picsum.photos/640/480/?56798', 'title' => 'et', 'content' => 'Laboriosam occaecati ea ut unde.' ],
    [ 'id' => 98, 'type' => 'article', 'thumbnail' => 'https://picsum.photos/640/480/?11344', 'title' => 'dignissimos', 'content' => 'Est assumenda fuga eveniet tempora.' ],
    [ 'id' => 99, 'type' => 'news', 'thumbnail' => 'https://picsum.photos/640/480/?48223', 'title' => 'incidunt', 'content' => 'Totam quia eos qui non rerum.' ],
];



$newsList = arrayFilterByKey($postList, 'type', 'news');

echo '<pre>';
print_r($newsList);
echo '</pre>';