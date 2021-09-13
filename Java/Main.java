package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("hola mundo");

        Car car = new Car("ANG-117", new Account("Dante Zoe", "AND123"));
        car.passenger = 4;
        car.printDataCar();


        Car car2 = new Car("ATG-116", new Account("Juan Perez", "HAT642"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}