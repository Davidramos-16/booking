package com.booking.demo.entity;

import java.io.Serializable;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name ="clientes")
public class Cliente implements Serializable{
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	Long id;
	
	@Column(name ="nombre")
	String Nombre;
	
	@Column(name = "apellido")
	String Apellido;
	
	@Column(name = "direccion")
	String Direccion;
	
	@Column(name = "Usuario")
	String Usuario;
	
	@Column(name = "Correo")
	String Correo;

	public Cliente(Long id, String nombre, String apellido, String direccion, String usuario, String correo) {
		
		this.id = id;
		Nombre = nombre;
		Apellido = apellido;
		Direccion = direccion;
		Usuario = usuario;
		Correo = correo;
	}
	
	public Cliente() {
		
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getNombre() {
		return Nombre;
	}

	public void setNombre(String nombre) {
		Nombre = nombre;
	}

	public String getApellido() {
		return Apellido;
	}

	public void setApellido(String apellido) {
		Apellido = apellido;
	}

	public String getDireccion() {
		return Direccion;
	}

	public void setDireccion(String direccion) {
		Direccion = direccion;
	}

	public String getUsuario() {
		return Usuario;
	}

	public void setUsuario(String usuario) {
		Usuario = usuario;
	}

	public String getCorreo() {
		return Correo;
	}

	public void setCorreo(String correo) {
		Correo = correo;
	}
	
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;


}
