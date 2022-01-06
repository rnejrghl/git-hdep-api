package com.rest.api.util;

import java.io.IOException;

import com.amazonaws.AmazonClientException;
import com.amazonaws.AmazonWebServiceRequest;
import com.amazonaws.ResponseMetadata;
import com.amazonaws.auth.AWSStaticCredentialsProvider;
import com.amazonaws.auth.BasicAWSCredentials;
import com.amazonaws.services.simpleemail.AmazonSimpleEmailService;
import com.amazonaws.services.simpleemail.AmazonSimpleEmailServiceClientBuilder;
import com.google.common.collect.Lists;
import org.springframework.beans.factory.annotation.Configurable;

@Configurable
public class AmazonSES {



    public static void main(String[] args) throws IOException {

        AmazonSES sender = new AmazonSES();

        sender.send("","","park82ch@gmail.com","제목","내용");

    }


    public static String send(String accessKey, String secretKey,String to, String subject,String content){

        Mail mail = Mail.builder()
//                .from("halee@hanwha.com")
                .from("swpark1223@hanwha.com")
                .to(Lists.newArrayList(to))
                .subject(subject)
                .content(content)
                .build();
        try {
            // 아래 부분에 위에서 받은 ID, Key를 집어 넣습니다.
            // 인증방식은 제가 고쳐서 진행했습니다.
            BasicAWSCredentials awsCreds = new BasicAWSCredentials(accessKey,secretKey);
            AWSStaticCredentialsProvider credentialsProvider = new AWSStaticCredentialsProvider(awsCreds);
            try {
                // 아래와 같이 인증방식을 변경함.
                credentialsProvider.getCredentials();
            } catch (Exception e) {
                throw new AmazonClientException(
                        "key 올바르지 않습니다.",
                        e);
            }

            AmazonSimpleEmailService client = AmazonSimpleEmailServiceClientBuilder.standard()
                    .withCredentials(credentialsProvider)
                    // 자신이 설정한 리전으로 변경할 것!!
                    .withRegion("us-east-1")
                    .build();

            // Send the email.
            client.sendEmail(mail.toSendRequestDto());
          //  System.out.println("Email sent!");
            
            return client.getSendQuota().getSdkResponseMetadata().getRequestId();

        } catch (Exception ex) {
          //  System.out.println("The email was not sent.");
          //  System.out.println("Error message: " + ex.getMessage());
            throw new AmazonClientException(
                    ex.getMessage(),
                    ex);
        }
    }
}



