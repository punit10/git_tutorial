var arr = [2, 4, 6, 8, 10];
for (var i in arr) {
    console.log(arr[i]);
}
printSquare(arr[1]);
function printSquare(n){
    return n*n;
}