/**
 * Give a function 'fn', an array of argumets 'args', and an interval time 't', 
 * return a cancel function 'cancelFn'
 * 
 * After delay of 'cancelTimeMs', the returned cancel function 'cancelFn' 
 * will be invoked.
 */


/**
 * @param {Funciton} fn
 * @param {Array} args
 * @param {number} t
 * return {Funciton} cancelFn
 */
var cancellable = function(fn, args, t) {
    // 関数を即時実行し、その後も指定間隔で実行
    fn(...args);
    const intervalId = setInterval(() => fn(...args), t);

    // キャンセル関数を返す
    return function() {
        clearInterval(intervalId);
    };
};

// 使用例:
const result = [];

const fn = (x) => x * 2;
const args = [4], t = 35, cancelTimeMs = 190;

const start = performance.now();

const log = (...argsArr) => {
    const diff = Math.floor(performance.now() - start);
    result.push({"time": diff, "returned": fn(...argsArr)});
}

const cancel = cancellable(log, args, t);

setTimeout(cancel, cancelTimeMs);

setTimeout(() => {
    console.log(result);
}, cancelTimeMs + t + 15);
