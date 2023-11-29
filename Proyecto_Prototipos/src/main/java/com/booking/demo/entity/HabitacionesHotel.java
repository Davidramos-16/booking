package com.booking.demo.entity;

import java.io.Serializable;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


@Entity
@Table(name  = "habitaciones")

public class HabitacionesHotel implements Serializable{
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	Long id;
	
	@Column(name = "cod_habitacion")
	String codHabitacion;
	
	@Column(name = "piso_habitacion")
	String piso;
	
	@Column(name = "categoria_habitacion")
	String categoriaHabitacion;
	
	@Column(name = "descripcion")
	String descripcion;
	
	@Column(name = "precio")
	Double precio;
	
	
	

	public HabitacionesHotel(Long id, String codHabitacion, String piso, String categoriaHabitacion, String descripcion,
			Double precio) {
		super();
		this.id = id;
		this.codHabitacion = codHabitacion;
		this.piso = piso;
		this.categoriaHabitacion = categoriaHabitacion;
		this.descripcion = descripcion;
		this.precio = precio;
	}
	
	




	public HabitacionesHotel() {
		
	}
	
	


	public Long getId() {
		return id;
	}






	public void setId(Long id) {
		this.id = id;
	}






	public String getCodHabitacion() {
		return codHabitacion;
	}






	public void setCodHabitacion(String codHabitacion) {
		this.codHabitacion = codHabitacion;
	}






	public String getPiso() {
		return piso;
	}






	public void setPiso(String piso) {
		this.piso = piso;
	}






	public String getCategoriaHabitacion() {
		return categoriaHabitacion;
	}






	public void setCategoriaHabitacion(String categoriaHabitacion) {
		this.categoriaHabitacion = categoriaHabitacion;
	}






	public String getDescripcion() {
		return descripcion;
	}






	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}






	public Double getPrecio() {
		return precio;
	}






	public void setPrecio(Double precio) {
		this.precio = precio;
	}






	public static long getSerialversionuid() {
		return serialVersionUID;
	}




	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;


}
