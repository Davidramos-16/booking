package com.booking.demo.entity;

import java.io.Serializable;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


@Entity
@Table(name = "detalle_reservacion")

public class DetalleReservacion implements Serializable {
	
	@Id
	@GeneratedValue(strategy= GenerationType.IDENTITY)
	Long id;
	
	
	
	@Id
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;


}
