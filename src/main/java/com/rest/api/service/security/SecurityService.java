package com.rest.api.service.security;

import com.rest.api.model.security.SecurityVO;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.stereotype.Service;

@RequiredArgsConstructor
@Service
public class SecurityService implements UserDetailsService {
    @Autowired
    private SecurityMapper mapper;


    public UserDetails loadUserByUsername(String userPk){
        return mapper.userInfoSeq(userPk);
    }

    public SecurityVO login(String userPk){
        SecurityVO userInfo =  mapper.userInfo(userPk);
        return userInfo;
    }

   }
