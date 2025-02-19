console.log(1 + '4')

console.log(Number(true))
console.log(Number(false))



//This file will be run step by step

// dynamic typing

// variable a is assigned to a string
let a = "hello";
console.log(typeof a);

// variable a is assigned to an integer
a = 5
console.log(typeof a)


// weak typing
// tries to convert types, this is common in interpreted languages, typing is less strict
console.log(1 + '7'); // => '17'

const output = 1 + '7'
console.log(typeof output)

//type juggling

// if ("test") {
// if ("0") {
// if (0) {
// if ("") {
//     console.log("is true")
// } else {
//     console.log("is false")
// }

// statement
const name = 'nate';

//block
if (name) {
    console.log(name)
}

//variables and scope
if (true) {
    var blockVar = 'test'
    const blockConst = 'test2'
    let blockLet = 'test3'
}
console.log(blockVar)
console.log(blockConst)
console.log(blockLet)

//template literals
const string1 = 'yo'
const templateLiteral = `${string1} what up?`
console.log(templateLiteral)

//escape characters
const specialChar = "\"quotes\""
console.log(specialChar)

//arrays
const array = [1,2,3, "test", true, [1,2,3]];

//object
const object1 = {key: 'value'};

//array builtins
//length
console.log(array.length)

array.push(4);
console.log(array);

//join
array.join(',');

//more
//https://www.w3schools.com/js/js_array_methods.asp

//expressions
if ('1' === 1) {
    console.log('true');
} else {
    console.log('false');
}

//operators

//arithmetic

//string operators

//comparison operator

//!= == not equal and equal
if (1 == 1) {
    console.log('true');
}

//!== === strict not equal and equal, checks type
if (1 == '1') {
    console.log('true');
}

if (1 === '1') {
    console.log('true');
}

//< > <= >= less than, greater than and equals to

//logical operators

//&& and
if (true && true) {
    console.log('true');
}

//|| or
if (true || false) {
    console.log('true');
}

//! not
if (true && !false) {
    console.log('true');
}
