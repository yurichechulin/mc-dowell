let isTransposed = (inputString1, inputString2) => {
    if (inputString1.length != inputString2.length) {
        return false;
    }

    let indexes = [];
    inputString1 = inputString1.toLowerCase();
    inputString2 = inputString2.toLowerCase();

    for (let i = 0; i<inputString1.length; i++) {
        let value = inputString1.charCodeAt(i);
        indexes[value] = increment(indexes[value]);
    }

    for (let i=0; i<inputString2.length; i++) {
        let value = inputString2.charCodeAt(i);

        indexes[value] = decrement(indexes[value]);

        if (indexes[value] < 0) {
            return false;
        }
    }

    return true;
}


let increment = (value) => {
    if (value != undefined) {
        return value + 1;
    }
    return 1;
}

let decrement = (value) => {
    if (value != undefined) {
        return value - 1;
    }
    return -1;
}

console.log(isTransposed("abcert", "bacrte"));
