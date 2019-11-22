//Дана строка, состоящая из букв A-Z:
//AAAABBBCCXYZDDDDEEEFFFAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBBBB
//Нужно написать функцию RLE, которая на выходе даст строку вида:
//A4B3C2XYZD4E3F3A6B28
function rle(str) {
    let result = '',
        counter = 1;

    for (let i = 0; i < str.length; i++) {
        if (str[i] != str[i+1]) {
           if (counter > 1) {
               result+=str[i]+counter;
               counter = 1;
           } else {
               result+=str[i];
           }
        } else {
            counter++;
        }
    }

    return result;
}

console.log(rle("AAAABBBCCXYZDDDDEEEFFFAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBBBB"));




