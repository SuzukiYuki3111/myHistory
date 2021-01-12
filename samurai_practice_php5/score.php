<?php
    /**
 * 下記点数リストを
 * 90 以上 A,
 * 80 以上 B,
 * 60 以上 C,
 * その他 F
 * に整理する
 */

    $rankA = [] ;
    $rankB = [] ;
    $rankC = [] ;
    $rankF = [] ;

    $scoreList = [
        [ 'id' => 0, 'name' => '鈴木 浩', 'score' => 14 ],
        [ 'id' => 1, 'name' => '渚 健一', 'score' => 19 ],
        [ 'id' => 2, 'name' => '浜田 裕太', 'score' => 99 ],
        [ 'id' => 3, 'name' => '浜田 千代', 'score' => 90 ],
        [ 'id' => 4, 'name' => '中島 七夏', 'score' => 38 ],
        [ 'id' => 5, 'name' => '若松 裕太', 'score' => 68 ],
        [ 'id' => 6, 'name' => '浜田 翼', 'score' => 13 ],
        [ 'id' => 7, 'name' => '吉本 七夏', 'score' => 67 ],
        [ 'id' => 8, 'name' => '原田 さゆり', 'score' => 36 ],
        [ 'id' => 9, 'name' => '坂本 くみ子', 'score' => 10 ],
        [ 'id' => 10, 'name' => '加藤 充', 'score' => 13 ],
        [ 'id' => 11, 'name' => '中村 修平', 'score' => 38 ],
        [ 'id' => 12, 'name' => '佐々木 あすか', 'score' => 30 ],
        [ 'id' => 13, 'name' => '工藤 洋介', 'score' => 91 ],
        [ 'id' => 14, 'name' => '浜田 結衣', 'score' => 85 ],
        [ 'id' => 15, 'name' => '小泉 零', 'score' => 10 ],
        [ 'id' => 16, 'name' => '小泉 里佳', 'score' => 92 ],
        [ 'id' => 17, 'name' => '小泉 浩', 'score' => 12 ],
        [ 'id' => 18, 'name' => '井上 涼平', 'score' => 83 ],
        [ 'id' => 19, 'name' => '石田 幹', 'score' => 19 ],
        [ 'id' => 20, 'name' => '渡辺 和也', 'score' => 25 ],
        [ 'id' => 21, 'name' => '加藤 康弘', 'score' => 26 ],
        [ 'id' => 22, 'name' => '鈴木 零', 'score' => 29 ],
        [ 'id' => 23, 'name' => '若松 香織', 'score' => 75 ],
        [ 'id' => 24, 'name' => '井高 里佳', 'score' => 100 ],
        [ 'id' => 25, 'name' => '加納 知実', 'score' => 65 ],
        [ 'id' => 26, 'name' => '津田 太一', 'score' => 69 ],
        [ 'id' => 27, 'name' => '近藤 知実', 'score' => 71 ],
        [ 'id' => 28, 'name' => '田中 直子', 'score' => 51 ],
        [ 'id' => 29, 'name' => '近藤 知実', 'score' => 23 ],
        [ 'id' => 30, 'name' => '坂本 英樹', 'score' => 39 ],
        [ 'id' => 31, 'name' => '渡辺 淳', 'score' => 21 ],
        [ 'id' => 32, 'name' => '青田 直樹', 'score' => 54 ],
        [ 'id' => 33, 'name' => '若松 春香', 'score' => 11 ],
        [ 'id' => 34, 'name' => '佐々木 聡太郎', 'score' => 85 ],
        [ 'id' => 35, 'name' => '中村 太郎', 'score' => 100 ],
        [ 'id' => 36, 'name' => '加藤 あすか', 'score' => 78 ],
        [ 'id' => 37, 'name' => '斉藤 桃子', 'score' => 67 ],
        [ 'id' => 38, 'name' => '吉本 加奈', 'score' => 53 ],
        [ 'id' => 39, 'name' => '野村 篤司', 'score' => 13 ],
        [ 'id' => 40, 'name' => '佐藤 さゆり', 'score' => 77 ],
        [ 'id' => 41, 'name' => '山本 陽子', 'score' => 53 ],
        [ 'id' => 42, 'name' => '近藤 拓真', 'score' => 66 ],
        [ 'id' => 43, 'name' => '大垣 拓真', 'score' => 95 ],
        [ 'id' => 44, 'name' => '山口 直人', 'score' => 90 ],
        [ 'id' => 45, 'name' => '鈴木 里佳', 'score' => 33 ],
        [ 'id' => 46, 'name' => '原田 直樹', 'score' => 15 ],
        [ 'id' => 47, 'name' => '杉山 加奈', 'score' => 92 ],
        [ 'id' => 48, 'name' => '桐山 裕美子', 'score' => 43 ],
        [ 'id' => 49, 'name' => '松本 加奈', 'score' => 99 ],
        [ 'id' => 50, 'name' => '渚 淳', 'score' => 56 ],
        [ 'id' => 51, 'name' => '宮沢 淳', 'score' => 70 ],
        [ 'id' => 52, 'name' => '近藤 浩', 'score' => 52 ],
        [ 'id' => 53, 'name' => '三宅 淳', 'score' => 44 ],
        [ 'id' => 54, 'name' => '宇野 さゆり', 'score' => 35 ],
        [ 'id' => 55, 'name' => '浜田 裕美子', 'score' => 50 ],
        [ 'id' => 56, 'name' => '江古田 知実', 'score' => 52 ],
        [ 'id' => 57, 'name' => '山岸 裕樹', 'score' => 18 ],
        [ 'id' => 58, 'name' => '青田 知実', 'score' => 23 ],
        [ 'id' => 59, 'name' => '斉藤 治', 'score' => 62 ],
        [ 'id' => 60, 'name' => '桐山 結衣', 'score' => 27 ],
        [ 'id' => 61, 'name' => '田中 直樹', 'score' => 49 ],
        [ 'id' => 62, 'name' => '青山 陽一', 'score' => 47 ],
        [ 'id' => 63, 'name' => '佐藤 明美', 'score' => 91 ],
        [ 'id' => 64, 'name' => '山口 晃', 'score' => 6 ],
        [ 'id' => 65, 'name' => '大垣 裕樹', 'score' => 71 ],
        [ 'id' => 66, 'name' => '小泉 稔', 'score' => 97 ],
        [ 'id' => 67, 'name' => '小林 修平', 'score' => 54 ],
        [ 'id' => 68, 'name' => '佐々木 陽子', 'score' => 47 ],
        [ 'id' => 69, 'name' => '中津川 裕樹', 'score' => 31 ],
        [ 'id' => 70, 'name' => '中島 晃', 'score' => 74 ],
        [ 'id' => 71, 'name' => '山田 知実', 'score' => 2 ],
        [ 'id' => 72, 'name' => '佐藤 淳', 'score' => 60 ],
        [ 'id' => 73, 'name' => '原田 拓真', 'score' => 69 ],
        [ 'id' => 74, 'name' => '三宅 明美', 'score' => 80 ],
        [ 'id' => 75, 'name' => '中村 七夏', 'score' => 35 ],
        [ 'id' => 76, 'name' => '藤本 学', 'score' => 83 ],
        [ 'id' => 77, 'name' => '山口 直人', 'score' => 59 ],
        [ 'id' => 78, 'name' => '野村 涼平', 'score' => 99 ],
        [ 'id' => 79, 'name' => '藤本 桃子', 'score' => 50 ],
        [ 'id' => 80, 'name' => '小林 真綾', 'score' => 5 ],
        [ 'id' => 81, 'name' => '斉藤 明美', 'score' => 48 ],
        [ 'id' => 82, 'name' => '中村 春香', 'score' => 64 ],
        [ 'id' => 83, 'name' => '江古田 康弘', 'score' => 34 ],
        [ 'id' => 84, 'name' => '村山 亮介', 'score' => 73 ],
        [ 'id' => 85, 'name' => '木村 晃', 'score' => 42 ],
        [ 'id' => 86, 'name' => '鈴木 裕美子', 'score' => 27 ],
        [ 'id' => 87, 'name' => '大垣 直子', 'score' => 27 ],
        [ 'id' => 88, 'name' => '鈴木 結衣', 'score' => 2 ],
        [ 'id' => 89, 'name' => '喜嶋 春香', 'score' => 70 ],
        [ 'id' => 90, 'name' => '佐々木 学', 'score' => 35 ],
        [ 'id' => 91, 'name' => '村山 明美', 'score' => 17 ],
        [ 'id' => 92, 'name' => '田辺 京助', 'score' => 6 ],
        [ 'id' => 93, 'name' => '佐々木 さゆり', 'score' => 51 ],
        [ 'id' => 94, 'name' => '佐藤 里佳', 'score' => 19 ],
        [ 'id' => 95, 'name' => '杉山 翼', 'score' => 1 ],
        [ 'id' => 96, 'name' => '田中 直子', 'score' => 27 ],
        [ 'id' => 97, 'name' => '原田 晃', 'score' => 48 ],
        [ 'id' => 98, 'name' => '若松 舞', 'score' => 9 ],
        [ 'id' => 99, 'name' => '加藤 知実', 'score' => 48 ],
    ];
    
    foreach ( $scoreList as $rankInfo ) {
        if ( $rankInfo[ 'score' ] >= 90 ) {
            $rankA[] = $rankInfo ;
        } else if ( $rankInfo[ 'score' ] >= 80 ) {
            $rankB [] = $rankInfo ;
        } else if ( $rankInfo[ 'score' ] >= 60 ) {
            $rankC[] = $rankInfo ;
        } else {
            $rankF[] = $rankInfo ;
        }
    } 

    echo "<pre>" ;
    print_r( $rankA ) ;
    echo "</pre>" ;

    echo "<pre>" ;
    print_r( $rankB ) ;
    echo "</pre>" ;

    echo "<pre>" ;
    print_r( $rankC ) ;
    echo "</pre>" ;

    echo "<pre>" ;
    print_r( $rankF ) ;
    echo "</pre>" ;