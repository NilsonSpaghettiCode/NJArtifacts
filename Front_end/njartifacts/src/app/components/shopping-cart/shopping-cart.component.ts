import { Component, OnInit } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { ShoppingCartService } from 'src/app/services/shopping-cart/shopping-cart.service';

@Component({
  selector: 'app-shopping-cart',
  templateUrl: './shopping-cart.component.html',
  styleUrls: ['./shopping-cart.component.css']
})
export class ShoppingCartComponent implements OnInit {

  list_products_cart:Product[] = []
  constructor(private serviceCartProduct:ShoppingCartService) { }

  ngOnInit(): void {
    this.loadProducts();
  }

  loadProducts(): void
  {
    this.list_products_cart = this.serviceCartProduct.getCartProducts();
  }

  clearCart(): void
  {
    
  }

}
 