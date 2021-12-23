pub fn main() {
    let mut sum = 0;
    let mut helper = 1;
    let mut last_sequence = 2;

    loop {
        if last_sequence % 2 == 0 {
            sum += last_sequence;
        }

        last_sequence += helper;

        helper = last_sequence - helper;

        if last_sequence > 4000000 {
           break; 
        }
    }

    println!("Sum is: {}", sum);
}
