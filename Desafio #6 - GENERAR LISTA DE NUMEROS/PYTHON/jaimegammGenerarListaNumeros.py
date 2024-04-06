def process_numbers(list_numbers):
    list_exit = []
    for number in list_numbers:
        if number % 5 == 0:
            if number <= 600:
                list_exit.append(number)
            elif number > 1000:
                return list_exit
                
    return list_exit

entrada1 = [24, 150, 300, 660, 295, 1050, 50]
list_exit1 = process_numbers(entrada1)
print("Entrada:", entrada1)
print("list_exit:", list_exit1)

entrada2 = [110, 720, 307, 555, 1095, 12, 300, 1000]
list_exit2 = process_numbers(entrada2)
print("Entrada:", entrada2)
print("list_exit:", list_exit2)