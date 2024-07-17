/**
 * @param {number[]} arr
 * @param {Function} fn
 * @return {number[]}
 */
var transformations = {
    plusOne: function(n) {
        return n + 1;
    },
    plusI: function(n, i) {
        return n + i;
    },
    constant: function() {
        return 42;
    },
    map: function(arr, fn) {
        const result = [];
        for (let i = 0; i < arr.length; i++) {
            result.push(fn(arr[i], i));
        }
        return result;
    }
};

// Usage examples
const arr1 = [1, 2, 3];
console.log(transformations.map(arr1, transformations.plusOne)); // Output: [2, 3, 4]

const arr2 = [1, 2, 3];
console.log(transformations.map(arr2, function(n, i) { return transformations.plusI(n, i); })); // Output: [1, 3, 5]

const arr3 = [10, 20, 30];
console.log(transformations.map(arr3, transformations.constant)); // Output: [42, 42, 42]