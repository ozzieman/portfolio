package com.company;

public class Main {

    public static void main(String[] args) {

        //Create an Infinite Loop
        int count = 0;
        int i = 2;
        while(i > 1) {

            //Check if the number is prime
            if(isPrime(i)) {
                count++;
                System.out.println("Count is " + count);
            }

            if(count == 10001) {
                System.out.println(i);
                break; //Testing Break
            }
            i++;
        }


    }



    static boolean isPrime(int index) {
        //Check if Index is prime
        int sqroot = (int) Math.sqrt((double) index);

        if (index % 2 == 0 ) {
            if(index == 2) {
                //System.out.println("2 is the first prime number");
                return true;
            } else {
                //System.out.println("Not Prime");
                return false;
            }
        }
        for(int i = 3; i<= sqroot; i+=2) {
            if(index % i == 0 ) {
                //System.out.println("Not Prime");
                return false;
            }
        }
        //System.out.println("Prime");
        return true;
    }
}
