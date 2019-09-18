package com.example.crm.exception;

import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.ResponseStatus;

@SuppressWarnings("serial")
@ResponseStatus(value = HttpStatus.NOT_FOUND)

public class NotFound extends Exception {

	public NotFound() {
		super(String.format("Information not found"));
	}

}
