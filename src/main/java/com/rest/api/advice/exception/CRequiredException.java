package com.rest.api.advice.exception;

public class CRequiredException extends RuntimeException {
    public CRequiredException(String msg, Throwable t) {
        super(msg, t);
    }

    public CRequiredException(String msg) {
        super(msg);
    }

    public CRequiredException() {
        super();
    }
}
