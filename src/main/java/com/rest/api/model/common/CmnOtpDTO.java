package com.rest.api.model.common;

import javax.validation.constraints.NotBlank;

import com.fasterxml.jackson.annotation.JsonIgnore;
import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonInclude.Include;
import com.rest.api.model.mm.CmnUserVO;

import org.apache.logging.log4j.util.Strings;

import lombok.Getter;
import lombok.Setter;

public class CmnOtpDTO {

    @Getter
    @Setter
    public static class RequestOtpVO {

    }

    @Getter
    @Setter
    public static class CheckOtpReq {
        @NotBlank
        private String userName;
        @NotBlank
        private String receiver;

        private String userId;

        @NotBlank
        private String otpNumber;
    }

    @Getter
    @Setter
    @JsonInclude(Include.NON_NULL)
    public static class CmnOtpVO {
        private String userName;
        private String email;
        private String telNo;
        private String verificationCode;
        private String userId;
        @JsonIgnore
        private String resetToken;

        public CmnUserVO toCmnUserVO() {
            CmnUserVO lCmnUserVO = new CmnUserVO();
            lCmnUserVO.setEmail(email);
            lCmnUserVO.setTelNo(telNo);
            lCmnUserVO.setUserName(userName);
            lCmnUserVO.setUserId(userId);

            return lCmnUserVO;
        }

        public CmnOtp toCmnOtp() {
            CmnOtp lCmnOtp = new CmnOtp();
            lCmnOtp.setReceiver(Strings.isNotBlank(telNo) ? telNo : email);
            lCmnOtp.setVerificationCode(verificationCode);

            return lCmnOtp;
        }
    }

    @Getter
    @Setter
    public static class UpdatePasswordReq {
        private String newPassword;
    }
}
