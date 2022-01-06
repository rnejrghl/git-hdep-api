package com.rest.api.util;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexUtil {
    public enum PatternEnum{
        TEL("^\\d*$"),
        EMAIL("^\\w{2,}@\\w{2,}\\.\\w{2,4}$");

        private final String regex;

        private PatternEnum(final String regex) {
			this.regex = regex;
        }
        
        public Pattern toPattern(){
            return Pattern.compile(regex);
        }
    }

    public static boolean findMatches(PatternEnum pattern, String input){
        final Matcher m = pattern.toPattern().matcher(input);
        return m.find();
    }



    
}
