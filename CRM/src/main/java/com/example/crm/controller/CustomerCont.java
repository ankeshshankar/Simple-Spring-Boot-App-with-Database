package com.example.crm.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.example.crm.model.Customer;
import com.example.crm.repository.CustomerRepo;

@RestController
@RequestMapping("/customer")
public class CustomerCont {

	@Autowired
	CustomerRepo customerRepo;

	@GetMapping(path = "/allCustomer")
	public @ResponseBody Iterable<Customer> getAllUsers() {
		return customerRepo.findAll();
	}

	@PostMapping(path = "/newCustomer")
	public @ResponseBody String addNewCustomer(@RequestParam String customer_name, @RequestParam String customer_phone,
			@RequestParam String customer_email) {

		Customer newCustomer = new Customer();
		newCustomer.setCustomer_id(0);
		newCustomer.setCustomer_name(customer_name);
		newCustomer.setCustomer_email(customer_email);
		newCustomer.setCustomer_phone(customer_phone);

		customerRepo.save(newCustomer);

		return "Sucessfully Added";
	}

}
