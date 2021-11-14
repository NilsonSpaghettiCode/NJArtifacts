import { Injectable } from '@angular/core';
import { Product } from 'src/app/interfaces/product';

@Injectable({
  providedIn: 'root'
})
export class ShoppingCartService {

  product_cart: Product[] = []
  constructor() { }

  addProduct(product:Product):void
  {
    this.product_cart.push(product);
    console.log("Producto agregado");
  }

  getCartProducts():Product[]
  {
    return this.product_cart;
  }

  clearCart(): void
  {
    this.product_cart = []
  }
  

  getTotal(): number
  {
    let suma:number = 0;
    this.product_cart.forEach(product_select =>{
      suma = suma + product_select.valor;
    })
    
    return suma;
  }
}
