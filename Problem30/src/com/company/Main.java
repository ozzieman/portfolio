package com.company;



public class Main {

    static public void main(String[] args) {
	// Project Euler Problem 30

        int answer = 0; //Final Answer
        Methods methods = new Methods(); ///Helper Class
        for(int i = 0; i <= 5000000; i++) { //Creates a loop to iterate over each number in the index
            int total = 0;
            int iCopy = i;
            //Number of ways to get the Digit; I quite liked the idea of parsing to a String and breaking to a char[], then reparsing into an int
            // However I stumbled upon this brilliant technique on StackOverflow by user Jinguy
            //http://stackoverflow.com/questions/3389264/how-to-get-the-separate-digits-of-an-int-number?answertab=votes#tab-top
            while (iCopy > 0) {
                total += methods.raiseToTheFifth(iCopy % 10); //Gets the Digit and calls method to raise to fifth
                iCopy = iCopy / 10; // Removes the gotten digit; For example 1287 / 10 = 128.7
                //As this is an Integer, the seven is gone
            }
            //System.out.println(total);
            if(total == i) {
                answer += total;
                System.out.println(answer);
            }
        }
        answer = answer - 1; //Can't
        System.out.println(answer);
    }

}
