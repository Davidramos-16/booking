package com.booking.demo.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;


@Controller
public class IndexController {

	
	@GetMapping("/login")
	public String login(Model modelo)
	{
		
		modelo.addAttribute("titulo", "PMS ERROR 404");
		return "index";
		
	}
	
	@GetMapping("/Recuperar")
	public String RecuperarContrasenia(Model modelo)
	{
		
		return "RecuperarContrasenia";
	}
	
	@GetMapping("/Terminos")
	public String TerminosyCondiciones(Model modelo)
	{
		
		return "TerminosyCondiciones";
	}
	
	@GetMapping("/registrarse")
	public String registro(Model modelo)
	{
		
		modelo.addAttribute("titulo", "PMS ERROR 404");
		modelo.addAttribute("title", "Registrarse");
		
		return "registrarse";
	}
	
	@GetMapping("/reservacion")
	public String reservacion(Model modelo)
	{
		
		modelo.addAttribute("titulo", "PMS ERROR 404");
		modelo.addAttribute("title", "Registrarse");
		
		return "Reservacion";
	}
}
