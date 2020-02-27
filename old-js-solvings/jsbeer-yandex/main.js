let getFirstDouble = (arr) => {
    let indexes = [];

    for (let i = 0; i<arr.length; i++) {
        let value = arr[i];

        if (indexes[value] == -1) {
            return i;
        }
        indexes[value] = -1;
    }

    return null;
}

console.log(getFirstDouble([1,2,6,3,2,4]));
