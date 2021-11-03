import { Component, OnInit } from '@angular/core';
import { Product } from 'src/app/interfaces/product';
import { ProductsService } from 'src/app/services/services_catalog/products.service';
import { ActivatedRoute } from '@angular/router';
import { ShoppingCartService } from 'src/app/services/shopping-cart/shopping-cart.service';
@Component({
  selector: 'app-product-detail',
  templateUrl: './product-detail.component.html',
  styleUrls: ['./product-detail.component.css']
})
export class ProductDetailComponent implements OnInit {

  productToDetail: Product = <Product>{};
  id_product: number = 0;

  constructor(private product: ProductsService, private routeInput: ActivatedRoute, private serviceCart:ShoppingCartService) {

  }

  ngOnInit(): void {
    this.getIdProduct()
    this.loadDetails()
    console.log(this.productToDetail)
  }

  loadDetails(): void {
    this.product.getProduct(this.id_product).subscribe(producto_response => this.productToDetail = producto_response);
  }

  getIdProduct(): void {
    const routeParameters = this.routeInput.snapshot.paramMap;//Recupera el id enviado atraves de la url
    this.id_product = Number(routeParameters.get('productId'));//Encuentra la vaariable que tiene el id del producto
  }

  addProduct():void
  {
    this.serviceCart.addProduct(this.productToDetail);
  }

}
