import { Component, Input, OnInit } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { ProductsService } from 'src/app/services/services_catalog/products.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {

  @Input() categoryIdFilter = 0;

  lista_productos: Product[] = []

  name_list: string = "Productos";

  constructor(private productService: ProductsService) {

  }

  ngOnInit(): void {
    this.loadProducts();
  }

  loadProducts(): void {

    this.productService.getProductsQuary(this.categoryIdFilter).subscribe(products => this.lista_productos = products);
  
  }

}
