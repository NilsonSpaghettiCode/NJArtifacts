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
  }

  getCartProducts():Product[]
  {
    return this.product_cart;
  }
}
