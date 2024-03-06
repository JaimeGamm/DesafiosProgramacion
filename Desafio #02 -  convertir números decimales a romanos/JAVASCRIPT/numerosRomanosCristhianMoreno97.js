const ROMAN_SYMBOLS = [
    { 'I': 1 },
    { 'V': 5 },
    { 'X': 10 },
    { 'L': 50 },
    { 'C': 100 },
    { 'D': 500 },
    { 'M': 1000 },
]

function getNearestType1Roman(index) {
    if (index == 0) return ROMAN_SYMBOLS[0]
    return index % 2 == 0 ? ROMAN_SYMBOLS[index - 2] : ROMAN_SYMBOLS[index - 1]
}

function getNearestRoman(index) {
    if (index == 0) return ROMAN_SYMBOLS[0]
    return ROMAN_SYMBOLS[index - 1]
}

function getRomanNumber(decimalNumber) {
    if (typeof decimalNumber !== 'number') {
        throw new Error('Invalid data: el argumento debe ser un número');
    }

    let romanNumber = []

    for (let i = 0; i < ROMAN_SYMBOLS.length; i++) {
        if (decimalNumber == 0) break

        const currentSymbolObj = ROMAN_SYMBOLS[i]
        const currentSymbol = Object.keys(currentSymbolObj)[0]
        const currentValue = currentSymbolObj[currentSymbol]

        const nearestType1Obj = getNearestType1Roman(i)
        const nearestType1Symbol = Object.keys(nearestType1Obj)[0]
        const nearestType1Value = Object.values(nearestType1Obj)[0]

        const nearestObj = getNearestRoman(i)
        const nearestSymbol = Object.keys(nearestObj)[0]
        const nearestValue = Object.values(nearestObj)[0]

        if (decimalNumber >= currentValue) {
            continue
        }

        if (currentValue - nearestType1Value > decimalNumber) {
            romanNumber.push(nearestSymbol)
            decimalNumber -= nearestValue
        } else {
            romanNumber.push(nearestType1Symbol)
            romanNumber.push(currentSymbol)
            decimalNumber -= (currentValue - nearestType1Value)
        }

        i = 0
    }

    return romanNumber.join("")
}

console.log(`result: ${getRomanNumber(9)}`)
console.log(`result: ${getRomanNumber(31)}`)
console.log(`result: ${getRomanNumber(45)}`)
console.log(`result: ${getRomanNumber(880)}`)
console.log(`result: ${getRomanNumber(890)}`)
console.log(`result: ${getRomanNumber(900)}`)
