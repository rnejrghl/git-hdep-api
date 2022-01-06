package com.rest.api.advice.exception;

public class CPswdException extends RuntimeException {
    public CPswdException(String msg, Throwable t) {
        super(msg, t);
    }

    public CPswdException(String msg) {
        super(msg);
    }

    public CPswdException() {
        super();
    }
}
