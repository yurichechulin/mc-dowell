let hasDoubleSymbols = (inputString) => {
    let indexes = [];
    inputString = inputString.toLowerCase();

    for (let i = 0; i<inputString.length; i++) {
        let charCode = inputString.charCodeAt(i);

        if (indexes[charCode] == -1) {
            return false;
        }

        indexes[charCode] = -1;
    }

    return true;
}

console.log(hasDoubleSymbols("abcErt"));
