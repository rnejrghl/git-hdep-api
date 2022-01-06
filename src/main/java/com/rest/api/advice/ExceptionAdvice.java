package com.rest.api.advice;

import com.rest.api.advice.exception.*;
import com.rest.api.model.response.CommonResult;
import com.rest.api.service.ResponseService;
import lombok.RequiredArgsConstructor;
import org.springframework.context.MessageSource;
import org.springframework.context.i18n.LocaleContextHolder;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestControllerAdvice;

import javax.servlet.http.HttpServletRequest;
import java.nio.file.AccessDeniedException;


@RequiredArgsConstructor
@RestControllerAdvice
public class ExceptionAdvice {

    private final ResponseService responseService;

    private final MessageSource messageSource;

    @ExceptionHandler(Exception.class)
    @ResponseStatus(HttpStatus.INTERNAL_SERVER_ERROR)
    protected CommonResult defaultException(HttpServletRequest request, Exception e) {
        // 예외 처리의 메시지를 MessageSource에서 가져오도록 수정
        return responseService.getFailResult(Integer.valueOf(getMessage("unKnown.code")), getMessage("unKnown.msg") + "(" + e.getMessage() + ")");
    }

    @ExceptionHandler(CLoginSigninFailedException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult emailSigninFailed(HttpServletRequest request, CLoginSigninFailedException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("loginSigninFailed.code")), getMessage("loginSigninFailed.msg"));
    }

    @ExceptionHandler(CAuthenticationEntryPointException.class)
    @ResponseStatus(HttpStatus.UNAUTHORIZED)
    public CommonResult authenticationEntryPointException(HttpServletRequest request, CAuthenticationEntryPointException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("entryPointException.code")), getMessage("entryPointException.msg"));
    }

    @ExceptionHandler(AccessDeniedException.class)
    @ResponseStatus(HttpStatus.FORBIDDEN)
    public CommonResult accessDeniedException(HttpServletRequest request, AccessDeniedException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("accessDenied.code")), getMessage("accessDenied.msg"));
    }


    @ExceptionHandler(CResourceNotExistException.class)
    @ResponseStatus(HttpStatus.OK)
    public CommonResult resourceNotExistException(HttpServletRequest request, CResourceNotExistException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("resourceNotExist.code")), getMessage("resourceNotExist.msg"));
    }

    @ExceptionHandler(CUserNotFoundException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult userNotFound(HttpServletRequest request, CUserNotFoundException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("userNotFound.code")), getMessage("userNotFound.msg"));
    }
    @ExceptionHandler(CRequiredException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult requiredError(HttpServletRequest request, CRequiredException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("requiredError.code")), getMessage("requiredError.msg"));
    }
    @ExceptionHandler(CDuplicateException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult duplicateError(HttpServletRequest request, CDuplicateException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("duplicateError.code")), getMessage("duplicateError.msg"));
    }
    @ExceptionHandler(CCompletionException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult completionError(HttpServletRequest request, CCompletionException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("completionError.code")), getMessage("completionError.msg"));
    }

    @ExceptionHandler(CPswdException.class)
    @ResponseStatus(HttpStatus.OK)
    protected CommonResult pswdError(HttpServletRequest request, CPswdException e) {
        return responseService.getFailResult(Integer.valueOf(getMessage("pswdError.code")), getMessage("pswdError.msg"));
    }
    // code정보에 해당하는 메시지를 조회합니다.
    private String getMessage(String code) {
        return getMessage(code, null);
    }

    // code정보, 추가 argument로 현재 locale에 맞는 메시지를 조회합니다.
    private String getMessage(String code, Object[] args) {
        return messageSource.getMessage(code, args, LocaleContextHolder.getLocale());
    }

}
