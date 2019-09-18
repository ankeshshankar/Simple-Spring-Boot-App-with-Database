package com.example.crm.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.example.crm.model.Product;
import com.example.crm.repository.ProductRepo;

@RestController
@RequestMapping("/product")
public class ProductCont {
	
	@Autowired
	ProductRepo productRepo;
	
	@GetMapping(path = "/allProduct")
	public @ResponseBody Iterable<Product> getAllProduct() {
		return productRepo.findAll();
	}
	

	
	
	@PostMapping(path="/newProduct") 
	public @ResponseBody String addNewUser (@RequestParam String product_name,
		@RequestParam String product_type,
		@RequestParam String product_model,
		@RequestParam String product_price
		) {
	
		Product newProduct = new Product();
		newProduct.setProduct_id(0);
		newProduct.setProduct_name(product_name);
		newProduct.setProduct_type(product_type);
		newProduct.setProduct_model(product_model);
		newProduct.setProduct_price(product_price);
		
		productRepo.save(newProduct);
		return "Product Added";
	}

}
