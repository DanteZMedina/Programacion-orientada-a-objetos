package Java;

public class Car {
    //atributos
    Integer id;
    String license;
    Account driver;
    Integer passenger;

    public Car(String license, Account driver )
    {
        this.license = license;
        this.driver = driver; 
    }

    //metodos
    void printDataCar()
    {
        System.out.println("License: " + license + " Name Driver: " + driver.name);
    }
}
