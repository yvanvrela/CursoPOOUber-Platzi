from payment import Payment


class Tarjeta(Payment):
    number = str
    cvv = str
    date = str

    def __init__(self, number, cvv, date) -> None:
        super().__init__()
        self.number = number
        self.cvv = cvv
        self.date = date
