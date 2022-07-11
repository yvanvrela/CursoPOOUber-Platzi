class Main {
    public static void main(String[] args) {

        // Instacia
        Car car = new Car("CASFE2", new Account("Maguire", "WQD123"));
        car.printDataCar();

        Car car2 = new Car("CASFE2", new Account("Juan", "DRQ456"));
        car2.printDataCar();

    }
} 