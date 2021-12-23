pub fn main() {
    let mut sum_of_squares: i64 = 0;
    let mut square_of_sum: i64 = 0;

    for n in 1..=100 {
        sum_of_squares += n * n;
        square_of_sum += n;
    }

    println!("Diff is: {}",
        square_of_sum.pow(2) - sum_of_squares);
}
