class Main {
    public static void main(String[] args) {

        // Instacia
        UberX uberX = new UberX("CASFE2", new Account("Maguire", "WQD123"), "VW", "Parati");
        uberX.setPassenger(4);
        
        uberX.printDataCar();

    }
}