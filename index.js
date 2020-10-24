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
          <div>
              <span>no direction. try again with "right" or "left" direction</span>
          </div>
          
      }
    }
  
    return result;
  }
  