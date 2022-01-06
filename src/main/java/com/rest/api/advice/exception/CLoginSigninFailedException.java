package com.rest.api.advice.exception;

public class CLoginSigninFailedException extends RuntimeException {
    public CLoginSigninFailedException(String msg, Throwable t) {
        super(msg, t);
    }

    public CLoginSigninFailedException(String msg) {
        super(msg);
    }

    public CLoginSigninFailedException() {
        super();
    }
}
