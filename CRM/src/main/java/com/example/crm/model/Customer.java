package com.example.crm.model;

import javax.persistence.Entity;
import javax.persistence.EntityListeners;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

import org.springframework.data.jpa.domain.support.AuditingEntityListener;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

@Entity
@Table(name = "Customer")
@EntityListeners(AuditingEntityListener.class)
@JsonIgnoreProperties(value = {"createdAt", "updatedAt"}, 
        allowGetters = true)

public class Customer {
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int customer_id;
	
	@NotBlank
	private String customer_name;
	@NotBlank 
	private String customer_phone;
	@NotBlank
	private String customer_email;
	
	
	public Customer() {
		super();
	}


	public Customer(int customer_id, @NotBlank String customer_name, @NotBlank String customer_phone,
			@NotBlank String customer_email) {
		super();
		this.customer_id = customer_id;
		this.customer_name = customer_name;
		this.customer_phone = customer_phone;
		this.customer_email = customer_email;
	}


	public int getCustomer_id() {
		return customer_id;
	}


	public void setCustomer_id(int customer_id) {
		this.customer_id = customer_id;
	}


	public String getCustomer_name() {
		return customer_name;
	}


	public void setCustomer_name(String customer_name) {
		this.customer_name = customer_name;
	}


	public String getCustomer_phone() {
		return customer_phone;
	}


	public void setCustomer_phone(String customer_phone) {
		this.customer_phone = customer_phone;
	}


	public String getCustomer_email() {
		return customer_email;
	}


	public void setCustomer_email(String customer_email) {
		this.customer_email = customer_email;
	}
	
	
	

}
