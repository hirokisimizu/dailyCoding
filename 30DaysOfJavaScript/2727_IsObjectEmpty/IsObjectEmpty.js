/**
 * Given a objcet or an array,
 * return if it's empty
 * - An empty object contains no key-value pairs.
 * - An empty array contains no elements.
 * 
 * We may assume the objcet or array is the output of 'Json.perse'
 */

/**
 * @param {Object|Array} obj
 * @return {boolean}
 */

var isEmpty = function(obj) {
    if (Array.isArray(obj)) {
        return obj.length === 0;
    }

    return Object.keys(obj).length === 0;
};



// example excute


const example1 = {"x" : 5, "y" : "text"};
console.log(isEmpty(example1));

const example2 = {};
console.log(isEmpty(example2));

const example3 = [null, false, 0, "text"];
console.log(isEmpty(example3));

const example4 = [];
console.log(isEmpty(example4));