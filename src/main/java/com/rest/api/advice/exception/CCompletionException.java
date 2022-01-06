package com.rest.api.advice.exception;

public class CCompletionException extends RuntimeException {
    public CCompletionException(String msg, Throwable t) {
        super(msg, t);
    }

    public CCompletionException(String msg) {
        super(msg);
    }

    public CCompletionException() {
        super();
    }
}
