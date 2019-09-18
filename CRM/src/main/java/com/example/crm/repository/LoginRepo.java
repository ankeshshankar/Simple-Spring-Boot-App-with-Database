package com.example.crm.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.crm.model.Login;

public interface LoginRepo extends JpaRepository<Login, Integer> {

}
