class Car {

    constructor(license, driver) {
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    printDataCar = () => {
        console.table(this.driver);
        console.table(this.driver.name);
        console.table(this.driver.document);
    }
}