class Car
{
    id;
    passenger;
    constructor (license, driver)
    {
        this.license = license;
        this.driver = driver;
    }

    printDataCar()
    {
    console.log(this.driver)
    console.log(this.license)
    console.log(this.driver.name)
    console.log(this.driver.document)

    }

}
/*
Car.prototype.printDataCar = function () {
    console.log(this.driver)
    console.log(this.license)
    console.log(this.driver.name)
    console.log(this.driver.document)
    console.log(this.driver.license)
}
*/

