fn is_palindrome(x: u64) -> bool {
    let mut remain;
    let mut helper = x;
    let mut result = 0;

    while helper > 0 {
       remain = helper % 10;
       helper /= 10;
       result = result * 10 + remain;
    }

    x == result
}


pub fn main() {
    let mut x = 999;
    let mut max: u64 = 998001;
    let (mut result, mut y): (u64, u64) = (0, 0);
    
    'outer: while max > 1 {
        if is_palindrome(max) {
            while x > 1 {
                if max % x == 0 && max / x < 999 {
                   y = max / x; 
                   result = max;
                   break 'outer;
                }
                x -= 1;
            }
        }
        x = 999;
        max -= 1;
    }

    println!("Result: {}; comb of {} * {}", result, x, y)
}
