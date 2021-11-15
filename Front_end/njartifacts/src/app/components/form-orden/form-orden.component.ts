import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { ProductsService } from 'src/app/services/services_catalog/products.service';
import { ShoppingCartService } from 'src/app/services/shopping-cart/shopping-cart.service';

@Component({
  selector: 'app-form-orden',
  templateUrl: './form-orden.component.html',
  styleUrls: ['./form-orden.component.css']
})
export class FormOrdenComponent implements OnInit {

  form_nombre = new FormControl('');
  form_email = new FormControl('');
  
  lista_productos:number[] = [];

  constructor(private servicioProducto:ProductsService, private shopping_card:ShoppingCartService) { }

  ngOnInit(): void {
    this.getID();
  }

  registrarOrden():void
  {
    let nombre = this.form_nombre.value;
    let email = this.form_email.value;

    console.log("AYUDA")
    console.table(this.lista_productos);
    let response = this.servicioProducto.registrarOrden(nombre,email,this.lista_productos);
  }

  getID()
  {
    this.shopping_card.getCartProducts().forEach(producto => {
      //console.log(producto.id_producto);
      this.lista_productos.push(producto.id_producto);     
    });
  }
}
