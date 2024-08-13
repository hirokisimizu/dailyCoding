/**
 * @params {...(null|boolean|number|string|Array|Object)} args
 * @return {number}
 */

var argumentsLength = function(...args) {
    return args.length;
};



// tests
console.log(argumentsLength(1, 3, 5));
console.log(argumentsLength({}, [], "3", 5, 6, []));
