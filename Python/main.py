from account import Account
from car import Car
from uberX import UberX


def main() -> None:

    uberX = UberX("AGW342", Account(
        "Yvan Varela", "DRE323"), "Hyundai", "Tucson")

    print(vars(uberX))


if __name__ == "__main__":
    main()
