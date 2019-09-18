package com.example.crm.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.example.crm.model.Login;
import com.example.crm.repository.LoginRepo;

@RestController
@RequestMapping("/login")
public class LoginCont {

	@Autowired
	LoginRepo loginRepo;

	@GetMapping(path = "/allUser")
	public @ResponseBody Iterable<Login> getAllUsers() {
		return loginRepo.findAll();
	}
	
		

	@PostMapping(path = "/newUser")
	public @ResponseBody String addNewUser(@RequestParam String email, @RequestParam String pass) {

		Login newUser = new Login();
		newUser.setId(0);
		newUser.setEmail(email);
		newUser.setPass(pass);
		loginRepo.save(newUser);
		return "Sucessfully Added";
	}
}
