pub fn main() {
    let mut x = 2520;
    let result;

    'outer: loop {
        'inner: for n in 1..=20 {
            if x % n != 0 {
                break 'inner;
            }

            if n == 20 {
                result = x;
                break 'outer;
            }
        }
        x += 1;
    }

    println!("Result {}:", result);
}
