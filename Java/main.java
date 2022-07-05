class Main {
    public static void main(String[] args) {

        // Instacia
        Car car = new Car();
        car.license = "AAGG44";
        car.driver = "Rayo Rapido";
        car.passegenger = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "QDGG45";
        car2.driver = "Rayo Lento";
        car2.passegenger = 3;
        car2.printDataCar();
    }
}