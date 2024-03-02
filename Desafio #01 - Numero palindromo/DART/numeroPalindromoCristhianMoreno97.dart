bool isPalindrome(BigInt number) {
  String numberStr = number.toString();
  return numberStr == numberStr.split('').reversed.join('');
}

void main() {
  print(isPalindrome(BigInt.from(121)));
  print(isPalindrome(BigInt.from(1212)));
  print(isPalindrome(BigInt.from(1211)));
  print(isPalindrome(BigInt.from(12121)));
  print(isPalindrome(BigInt.from(1200021)));
  print(isPalindrome(BigInt.parse('120002112000211200021120002112000211200021')));
  print(isPalindrome(BigInt.parse('1200021120002112000211200021120002112000211')));
}