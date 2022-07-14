from payment import Payment


class Efectivo(Payment):
    def __init__(self) -> None:
        super().__init__()
