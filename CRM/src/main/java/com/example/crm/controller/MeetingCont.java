package com.example.crm.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.example.crm.model.Meeting;
import com.example.crm.repository.MeetingRepo;

@RestController
@RequestMapping("/meeting")
public class MeetingCont {

	@Autowired
	MeetingRepo meetingRepo;

	@GetMapping(path = "/allMeeting")
	public @ResponseBody Iterable<Meeting> getAllUsers() {
		return meetingRepo.findAll();
	}

	@PostMapping(path = "/newMeeting")
	public @ResponseBody String addNewMeeting(@RequestParam String customer_firstname,
			@RequestParam String customer_lastname, @RequestParam String product_name,
			@RequestParam String meeting_type, @RequestParam String potential, @RequestParam String follow_up,
			@RequestParam String notes) {

		Meeting newMeeting = new Meeting();
		newMeeting.setMeeting_id(0);
		newMeeting.setCustomer_firstname(customer_firstname);
		newMeeting.setCustomer_lastname(customer_lastname);
		newMeeting.setProduct_name(product_name);
		newMeeting.setMeeting_type(meeting_type);
		newMeeting.setPotential(potential);
		newMeeting.setFollow_up(follow_up);
		newMeeting.setNotes(notes);

		meetingRepo.save(newMeeting);

		return "Meeting Added";
	}
}
