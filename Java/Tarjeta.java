class Tarjeta extends Payment {
    String number;
    String cvv;
    String date;

    public Tarjeta(String number, String cvv, String date) {
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}
