<?php

/**
 * 指定されたミリ秒数だけスリープ（待機）します。
 * 
 * @param int $millis 待機時間をミリ秒で指定します。
 * @return void
 */
function sleepMillis(int $millis): void {
    // usleep関数を使って指定されたミリ秒数だけ待機します。
    // usleepはマイクロ秒単位（1秒の100万分の1）なので、ミリ秒を1000倍します。
    usleep($millis * 1000);
}

// 使用例:
// 現在のタイムスタンプを取得します。
$t = microtime(true);

// 100ミリ秒待機します。
sleepMillis(100);

// 経過した時間を出力します。おおよそ0.1秒（100ミリ秒）。
echo (microtime(true) - $t) * 1000 . " ms\n";
