from account import Account
from car import Car


def main() -> None:

    # Instacia
    car = Car("AMD345", Account('Juan Dos', 'NAD435'))
    print(vars(car))

    # Instacia
    car2 = Car("GDE345", Account('Hernan Shummer', 'GHT765'))
    print(vars(car2))


if __name__ == "__main__":
    main()
