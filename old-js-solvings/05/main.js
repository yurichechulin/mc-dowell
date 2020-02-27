module.exports = function (inputString) {
    const size = getCompressedLength(inputString);

    if (size > inputString.length) {
        return inputString;
    }

    let array = [];

    let count = 1,
        lastSymbol = inputString.charAt(0);

    for (let i = 1; i < inputString.length; i++) {
        if (inputString.charAt(i) === lastSymbol) {
            count++;
        } else {
            array.push(lastSymbol);
            array.push(count.toString());
            lastSymbol = inputString.charAt(i);
            count = 1;
        }
    }

    array.push(lastSymbol);
    array.push(count.toString());

    return array.join('');
}

function getCompressedLength(inputString) {
    let size = 0,
        count = 1,
        lastSymbol = inputString.charAt(0);

    for (let i = 1; i < inputString.length; i++) {
        if (inputString.charAt(i) === lastSymbol) {
            count++;
        } else {
            lastSymbol = inputString.charAt(i);
            size += 1 + count.toString().length;
            count = 0;
        }
    }

    size += 1 +count.toString().length;

    return size;
}