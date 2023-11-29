package com.booking.demo.entity;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


@Entity
@Table(name = "hoteles")

public class Hotel {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	Long id;
	
	@Column(name  = "Hotel")
	String hotel;
	
	@Column(name = "direccion")
	String direccion;
	
	
	@Column(name = "Categoria_hotel")
	String categoria;
	
	
	
	
	
	

	public Hotel() {
		
	}

	public Hotel(Long id, String hotel, String direccion, String categoria) {
		super();
		this.id = id;
		this.hotel = hotel;
		this.direccion = direccion;
		this.categoria = categoria;
	}
	
	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getHotel() {
		return hotel;
	}

	public void setHotel(String hotel) {
		this.hotel = hotel;
	}

	public String getDireccion() {
		return direccion;
	}

	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}

	public String getCategoria() {
		return categoria;
	}

	public void setCategoria(String categoria) {
		this.categoria = categoria;
	}

	public static long getSerialversionuid() {
		return serialVersionUID;
	}


	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;


}
