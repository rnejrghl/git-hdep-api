package com.rest.api.advice.exception;

public class CDuplicateException extends RuntimeException {
    public CDuplicateException(String msg, Throwable t) {
        super(msg, t);
    }

    public CDuplicateException(String msg) {
        super(msg);
    }

    public CDuplicateException() {
        super();
    }
}
