from account import Account


class User(Account):

    def __init__(self, name, document) -> None:
        super().__init__(name, document)
