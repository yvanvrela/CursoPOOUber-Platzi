class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passenger;// Encapsulamiento

    // Constructor
    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    void printDataCar() {
        if (passenger != null & license != null & driver.name != null) {
            System.out.println("License: " + license + " Name Driver: " + driver.name + " Passenger: " + passenger);
        } else {
            System.out.println("Asignar todos los datos!");
        }
    }

    // Getters and Setters
    public Integer getPassenger() {
        return passenger;
    }

    public void setPassenger(Integer passenger) {
        if (passenger == 4) {
            this.passenger = passenger;
        } else {
            System.out.println("Se debe asignar 4 pasajeros");
        }
    }

}
