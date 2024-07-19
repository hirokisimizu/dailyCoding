/**
 * @param {number[]} nums - integer array
 * @param {Function} fn  - a reducer function 
 * @param {number} init - an init value
 * @return {number} - final result obtained by executing the fn function on each element of the array
 */
var reduce = function(nums, fn, init) {
    let result = init;
    for (let num of nums) {
        result = fn(result, num)
    }
    return result;
};

