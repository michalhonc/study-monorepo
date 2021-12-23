pub fn main() {
    let number: i64 = 600851475143;
    // do even prime number fix
    for n in 2..number {
        if number % (number / n) == 0 {
            println!("Largest prime number {}", number / n);
        }
    }

    println!("None")
}
