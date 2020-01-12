const assert = require('assert');

const replaceFunction = require('./main.js');

assert.equal(replaceFunction("aabcccccaaa"), "a2b1c5a3");

assert.equal(replaceFunction("abca"), "abca");

console.log("OK!");
