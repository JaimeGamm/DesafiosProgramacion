def sum_serie(number, terms):
    temp = number
    result = 0
    for n in range(terms):
        if n==0: 
            number = (10**n)*temp
            result += number
            #print(number) 
        else:
            number = (10**n)*temp+number
            result += number
            #print(number)   
    return result

print(sum_serie(3,5))
print(sum_serie(5,3))