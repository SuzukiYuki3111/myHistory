<?php

/**
 * 関数名：zyanken
 * 説明：関数が実行されると、じゃんけんの中で１つをランダムで出す。
 * 引数：なし
 * 返り値：「グー・チョッキ・パー」の中の１つのstring
 */

 // 1.グー、チョキ、パーを作る
 // 2.じゃんけんの中からランダムに出す関数を作成
 function zyanken() {
    $result = '';

    $result = ['グー' , 'チョキ' ,'パー' ][rand(0 , 2)] ;

    return $result;
}

echo '<pre>';
print_r(zyanken()) ;
echo '</pre>';

/**
 * 関数名：zyankenResult
 * 説明：関数が実行されると、$myZyankenと$yourZyankenを比較して結果を出す。
 * 引数：
 *  1. string $myZyanken → 「グー・チョッキ・パー」の中の１つのstring
 *  2. string $yourZyanken → 「グー・チョッキ・パー」の中の１つのstring
 * 返り値：「あいこ・勝ち・負け」の中の１つのstring
 */


/**
 * 関数名：zyankenResult
 * 説明：関数が実行されると、$myZyankenと$yourZyankenを比較して結果を出す。
 * 引数：
 *  1. string $myZyanken → 「グー・チョッキ・パー」の中の１つのstring
 *  2. string $yourZyanken → 「グー・チョッキ・パー」の中の１つのstring
 * 返り値：「あいこ・勝ち・負け」の中の１つのstring
 */

 // $myZyanken = ['グー' , 'チョキ' , 'パー']
 // $yourZyanken = ['グー' , 'チョキ' , 'パー']
 // $zyankenResult = ['勝ち' , '負け' , 'あいこ']
 // $myZyankenと$yourZyankenがあいこの場合を考える
 // $myZyankenが$yourZyankenに勝つ場合を考える
 // $myZyankenが$yourZyankenに負ける場合を考える

    //じゃんけんの関数を決める
 function zyankenResult($myZyanken, $yourZyanken) {
    $result = '';
    // じゃんけんの手を決める
   // $myZyanken = ['グー' , 'チョキ' , 'パー'] ;
   // $yourZyanken = ['グー' , 'チョキ' , 'パー'] ;
    // 勝負する際のパターンを考える
    // じゃんけんの結果をresultに入れる
    if( $myZyanken === $yourZyanken){
        $result = 'あいこ' ;
    } elseif($myZyanken === 'グー' && $yourZyanken === 'チョキ'){
        $result = '勝ち' ;
    } elseif($myZyanken === 'チョキ' && $yourZyanken === 'パー'){
        $result = '勝ち' ;
    } elseif($myZyanken === 'パー' && $yourZyanken === 'グー'){
        $result = '勝ち' ;
    } else{
        $result = '負け' ;
    }

    // $resultに返す
    return $result;
}

for ($i = 1; $i <= 100; $i++) {
    $myZyanken = zyanken();
    $yourZyanken = zyanken();
    $result = zyankenResult($myZyanken, $yourZyanken);


    echo "${i}回目 => 私：${myZyanken} vs 相手：${yourZyanken} => 結果：${result}<br>";
}

echo '<pre>';
print_r(zyankenResult($myZyanken , $yourZyanken));
echo '</pre>';