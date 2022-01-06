package com.rest.api.util;

import com.amazonaws.auth.BasicAWSCredentials;
import com.amazonaws.regions.Region;
import com.amazonaws.regions.Regions;
import com.amazonaws.services.sns.AmazonSNSClient;
import com.amazonaws.services.sns.model.MessageAttributeValue;
import com.amazonaws.services.sns.model.PublishRequest;
import com.amazonaws.services.sns.model.PublishResult;
import org.springframework.beans.factory.annotation.Configurable;

import java.util.HashMap;
import java.util.Map;

/**
 *     @Value("${cloud.aws.credentials.accessKey}")
 *     private String accessKey;
 *
 *     @Value("${cloud.aws.credentials.secretKey}")
 *     private String secretKey;
 *
 *     String message = "YOUR MESSAGE";
 *     String phoneNumber = "+8201091195421";  // Ex: +91XXX4374XX
 *     AmazonSNS.sendSMSMessage(this.accessKey,this.secretKey, message, phoneNumber);
 */
@Configurable
public class AmazonSNS {


    // Send SMS to a Phone Number
    public static String sendSMSMessage(String accessKey, String secretKey, String message, String phoneNumber) {
        String ACCESS_KEY = accessKey;
        String SECRET_KEY = secretKey;
        AmazonSNSClient snsClient = new AmazonSNSClient(new  BasicAWSCredentials(ACCESS_KEY, SECRET_KEY));
        snsClient.setRegion(Region.getRegion(Regions.AP_SOUTHEAST_2));

        snsClient.setRegion(Region.getRegion(Regions.AP_SOUTHEAST_2));                      // REGION 설정

        Map<String, MessageAttributeValue> smsAttributes = new HashMap<String, MessageAttributeValue>();
        smsAttributes.put("AWS.SNS.SMS.SenderID",
                new MessageAttributeValue().withStringValue("HDEP").withDataType("String")); // SENDER ID 설정
        smsAttributes.put("AWS.SNS.SMS.SMSType",
                new MessageAttributeValue().withStringValue("Transactional").withDataType("String"));   // Transactional 설정

        PublishResult result = snsClient.publish(new PublishRequest().withMessageAttributes(smsAttributes)
                .withMessage(message)
                .withPhoneNumber(phoneNumber));
      //  System.out.println(result); // Prints the message ID.
        return result.getMessageId();
    }
}

