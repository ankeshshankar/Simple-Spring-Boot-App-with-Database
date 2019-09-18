package com.example.crm.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.example.crm.model.Meeting;

@Repository
public interface MeetingRepo extends JpaRepository<Meeting, Integer>{
	
	

}
