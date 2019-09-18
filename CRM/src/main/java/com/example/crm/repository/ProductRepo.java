package com.example.crm.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.example.crm.model.Product;

@Repository
public interface ProductRepo extends JpaRepository<Product, Integer> {

}