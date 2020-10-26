function fib(n) {
    let fst = 1;
    let snd = 1;
  
    if (n === 1 || n === 2) {
      return 1;
    }
  
    let result;
    for (let i = 2; i < n; i++) {
      result = fst + snd;
      fst = snd; 
      snd = result; 
    }
  
    return result;
  }

console.log("fib > ",fib(1));
console.log("fib > ",fib(3));
console.log("fib > ",fib(12));

  function shift(arr, dir, n) {
    const result = [];
    
    const len = arr.length;
    for (let i = 0; i < len; i++) {
      if (dir === "right") {
        result[(i + n) % len] = arr[i];
      } else if (dir === "left"){
        const tmp = i - n;
        const index = tmp < 0 ? tmp + len : tmp;
        result[index] = arr[i];
      }else{
        
      }
    }
    
    return result;
  }
  
  // shift(arr,right,3);
  console.log("shift > ",shift(['nook','kohpai','jane','nell','Aliz'],'right',0));
  console.log("shift > ",shift(['nook','kohpai','jane','nell','Aliz'],'right',3));
  console.log("shift > ",shift(['nook','kohpai','jane','nell','Aliz'],'left',3));

  
  function secondMax(arr = []) {
    let maxArr = arr[0];
    let nextmaxArr = arr[0];
  
    if (arr.length === 0) {
      return "Error!";
    }
  
    for (let i = 1; i < arr.length; i++) {
      if (arr[i] > maxArr) {
        nextmaxArr = maxArr;
        maxArr = arr[i];
      } else if (arr[i] > nextmaxArr && arr[i] != maxArr) {
        nextmaxArr = arr[i];
      }
    }
  
    return nextmaxArr;
  }
  
  
  console.log("secondMax >",secondMax([]));
  console.log("secondMax >",secondMax([2, 3, 4, 5]));
  console.log("secondMax >",secondMax([9, 2, 21, 21]));
  console.log("secondMax >",secondMax([4123]));
  console.log("secondMax >",secondMax([4,4,4,4]));