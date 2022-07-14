from payment import Payment


class PyPal(Payment):
    email = str

    def __init__(self, email) -> None:
        super().__init__()
        self.email = email
