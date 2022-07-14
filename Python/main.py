from account import Account
from car import Car
from uberBlack import UberBlack
from uberX import UberX


def main() -> None:

    uberX = UberX('AGW342', Account(
        'Yvan Varela', 'DRE323'), 'Hyundai', 'Tucson')

    print(vars(uberX))

    uberBlack = UberBlack('GHF342', Account(
        'Martin', 'ERT323'), ['Buggatti', ], ['Cuero', 'alcantra'])

    print(vars(uberBlack))


if __name__ == "__main__":
    main()
