# FizzBuzz implementation in python
# Written with python 3.6.4

def main():
    for count in range(1,101):
        if count % 3 == 0:
            print("Fizz")
        elif count % 5 == 0:
            print("Buzz")
        else:
            print(count)

main()
