function isPalindrome(number) {
    const numberStr = number.toString()
    return numberStr == numberStr.split('').reverse().join('')
}

console.log(isPalindrome(121))
console.log(isPalindrome(1212))
console.log(isPalindrome(1211))
console.log(isPalindrome(12121))
console.log(isPalindrome('121121'))
console.log(isPalindrome('121211212112121121211212112121121211212112121'))
console.log(isPalindrome('121211212112121121211212112121121211212112122'))