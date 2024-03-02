fn is_palindrome(number: u128) -> bool{
    let mut reversed = 0;
    let mut number_mut = number;

    while number_mut != 0 {
        reversed = reversed * 10 + number_mut % 10;
        number_mut /= 10
    }
    number == reversed
}

fn main() {
    println!("121: {}", is_palindrome(121));
    println!("1212: {}", is_palindrome(1212));
    println!("1211: {}", is_palindrome(1211));
    println!("12121: {}", is_palindrome(12121));
    println!("1200021: {}", is_palindrome(1200021));
    println!("120002112000211200021: {}", is_palindrome(120002112000211200021));
    println!("1200021120002112000211: {}", is_palindrome(1200021120002112000211));
}
