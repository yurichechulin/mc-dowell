let quickSort = (arr, left, right) =>  {
    let index;

    // отсекаем базовый случай
    if (arr.length > 1) {
         index = partition(arr, left, right);

         if (left < index - 1) {
            quickSort(arr, left, index-1);
         }

         if (index < right) {
             quickSort(arr, index, right);
         }

    }

    return arr;
}


const partition = (arr, left, right) => {
    let l = left,
        r = right;
    let middleElement = arr[Math.floor((left + right) / 2)];
    while (l <= r) {

        // движение левого указателя, пока не найдет элемент больше или равный среднему
        while (arr[l] < middleElement) {
            l++;
        }

        // движение правого указателя пока не найдет элемент меньше или равный среднему
        while (arr[r] > middleElement) {
            r--;
        }

        // если на момент когда нашли, левый указатель левее правого, поменять эти элементы местами и сдвинуть указатели, чтобы
        // продолжить цикл
        if (l <= r) {
            swap(arr, l, r);
            l++;
            r--;
        }
    }

    //  вернуть значение левого указателя, чтобы знать откуда размечать в следующий раз
    return l;


}

const swap = (arr, firstIndex, secondIndex) => {
    const temp = arr[firstIndex];
    arr[firstIndex] = arr[secondIndex];
    arr[secondIndex] = temp;
}


let arr = [2,5,7,8,1,9,15];

console.log(arr);

arr = quickSort(arr, 0, arr.length-1);

console.log(arr);


