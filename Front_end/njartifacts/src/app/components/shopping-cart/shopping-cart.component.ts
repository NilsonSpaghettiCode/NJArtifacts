import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Product } from 'src/app/interfaces/product';
import { ShoppingCartService } from 'src/app/services/shopping-cart/shopping-cart.service';

@Component({
  selector: 'app-shopping-cart',
  templateUrl: './shopping-cart.component.html',
  styleUrls: ['./shopping-cart.component.css']
})
export class ShoppingCartComponent implements OnInit {

  list_products_cart:Product[] = []
  
  summary:number = 0;
  tax:number = 100;

  constructor(private serviceCartProduct:ShoppingCartService) { }

  ngOnInit(): void {
    this.loadProducts();
    this.loadSummary();
  }

  loadProducts(): void
  {
    this.list_products_cart = this.serviceCartProduct.getCartProducts();
  }

  clearCart(): void
  {
    this.serviceCartProduct.clearCart();
    this.reload();
  }

  loadSummary():void
  {
    this.summary = this.serviceCartProduct.getTotal()+this.tax;
  }

  reload():void
  {
    window.location.reload();
  }
}
 