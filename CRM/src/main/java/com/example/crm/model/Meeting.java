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
@Table(name = "Meeting")
@EntityListeners(AuditingEntityListener.class)
@JsonIgnoreProperties(value = {"createdAt", "updatedAt"}, 
        allowGetters = true)

public class Meeting implements Serializable {
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int meeting_id;
	
	@NotBlank
	private String customer_firstname;

	@NotBlank
	private String customer_lastname;
	@NotBlank
	private String product_name;
	@NotBlank
	private String meeting_type;
	@NotBlank
	private String potential;
	@NotBlank
	private String follow_up;
	@NotBlank
	private String notes;
	
	public Meeting() {
		super();
	}

	public Meeting(@NotBlank String customer_firstname, @NotBlank String customer_lastname,
			@NotBlank String product_name, @NotBlank String meeting_type, @NotBlank String potential,
			@NotBlank String follow_up, @NotBlank String notes) {
		super();
		this.customer_firstname = customer_firstname;
		this.customer_lastname = customer_lastname;
		this.product_name = product_name;
		this.meeting_type = meeting_type;
		this.potential = potential;
		this.follow_up = follow_up;
		this.notes = notes;
	}

	public int getMeeting_id() {
		return meeting_id;
	}

	public void setMeeting_id(int meeting_id) {
		this.meeting_id = meeting_id;
	}

	public String getCustomer_firstname() {
		return customer_firstname;
	}

	public void setCustomer_firstname(String customer_firstname) {
		this.customer_firstname = customer_firstname;
	}

	public String getCustomer_lastname() {
		return customer_lastname;
	}

	public void setCustomer_lastname(String customer_lastname) {
		this.customer_lastname = customer_lastname;
	}

	public String getProduct_name() {
		return product_name;
	}

	public void setProduct_name(String product_name) {
		this.product_name = product_name;
	}

	public String getMeeting_type() {
		return meeting_type;
	}

	public void setMeeting_type(String meeting_type) {
		this.meeting_type = meeting_type;
	}

	public String getPotential() {
		return potential;
	}

	public void setPotential(String potential) {
		this.potential = potential;
	}

	public String getFollow_up() {
		return follow_up;
	}

	public void setFollow_up(String follow_up) {
		this.follow_up = follow_up;
	}

	public String getNotes() {
		return notes;
	}

	public void setNotes(String notes) {
		this.notes = notes;
	}
	

}
