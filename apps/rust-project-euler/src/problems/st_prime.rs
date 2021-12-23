fn is_prime(x: i64) -> bool {
    let mut result = true;

    for n in 2..x {
        if x % n == 0 {
            result = false;
            break;
        }
    }

    return result;
}

pub fn main() {
    let mut prime_number_index = 1;
    let mut last_number = 3;

    loop {
        if is_prime(last_number) {
           prime_number_index += 1; 
        }

        if prime_number_index == 10001 {
            break;
        }

        last_number += 2;
    }

    println!("Result: {}, index: {}", last_number, prime_number_index);
}

