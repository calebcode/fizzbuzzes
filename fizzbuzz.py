# FizzBuzz implementation in python
# Written with python 3.6.4
#
# Output 1 - 100, except any number divisible by 3, output 'Fizz'
# and any number divisible by 5, output 'Buzz'. When count is
# divisible by both 3 and 5, output 'FizzBuzz' 

def main():
    for count in range(1,101):
        if count % 3 == 0 and count % 5 == 0:
            print("FizzBuzz")
        elif count % 3 == 0:
            print("Fizz")
        elif count % 5 == 0:
            print("Buzz")
        else:
            print(count)

main()
