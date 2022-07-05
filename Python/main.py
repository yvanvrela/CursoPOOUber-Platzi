from car import Car


def main() -> None:

    # Instacia
    car = Car()
    car.license = "AM1235"
    car.driver = "Juan Herrera"
    print(vars(car))

    # Instacia
    car2 = Car()
    car2.license = "WQM1235"
    car2.driver = "Juan Array"
    print(vars(car2))


if __name__ == "__main__":
    main()
