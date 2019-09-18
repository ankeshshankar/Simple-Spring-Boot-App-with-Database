package com.example.crm.model;

import java.io.Serializable;

import javax.persistence.Entity;
import javax.persistence.EntityListeners;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

import org.springframework.data.jpa.domain.support.AuditingEntityListener;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

@SuppressWarnings("serial")
@Entity
@Table(name = "Product")
@EntityListeners(AuditingEntityListener.class)
@JsonIgnoreProperties(value = {"createdAt", "updatedAt"}, 
        allowGetters = true)


public class Product implements Serializable{
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int product_id;
	
	@NotBlank
	private String product_name;
	@NotBlank
	private String product_type;
	@NotBlank
	private String product_model;
	@NotBlank
	private String product_price;
	
	public Product() {
		super();
	}

	public Product(int product_id, @NotBlank String product_name, @NotBlank String product_type,
			@NotBlank String product_model, @NotBlank String product_price) {
		super();
		this.product_id = product_id;
		this.product_name = product_name;
		this.product_type = product_type;
		this.product_model = product_model;
		this.product_price = product_price;
	}

	public int getProduct_id() {
		return product_id;
	}

	public void setProduct_id(int product_id) {
		this.product_id = product_id;
	}

	public String getProduct_name() {
		return product_name;
	}

	public void setProduct_name(String product_name) {
		this.product_name = product_name;
	}

	public String getProduct_type() {
		return product_type;
	}

	public void setProduct_type(String product_type) {
		this.product_type = product_type;
	}

	public String getProduct_model() {
		return product_model;
	}

	public void setProduct_model(String product_model) {
		this.product_model = product_model;
	}

	public String getProduct_price() {
		return product_price;
	}

	public void setProduct_price(String product_price) {
		this.product_price = product_price;
	}
	
	
	
	
	
	
	
	
	

}
