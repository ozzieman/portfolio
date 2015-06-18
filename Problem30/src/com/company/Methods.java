package com.company;

/**
 * Created by bharatharilela on 14/06/15.
 */
public class Methods {

        public int raiseToTheFifth(int toRaise) {
            int original = toRaise;
            //Could add to Math.pow, but I chose to avoid casting to a double
            for(int i =0; i < 4; i++) {
                toRaise = toRaise * original;
            }
            //System.out.println(toRaise);
            return toRaise;
        }
}
