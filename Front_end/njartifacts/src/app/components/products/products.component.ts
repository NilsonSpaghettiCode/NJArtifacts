import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {

  lista_productos =[
    {
     'name_product':'Placa madre',
     'description':'Es una placa madre',
     'quantity':5,
     'value':10,
     'category':'NONE',
     'image_src': "../../assets/images/TRX40 Creator.png",
    },{
      'name_product':'Disco duro',
      'description':'Esto es un disco duro',
      'quantity':15,
      'value':200,
      'category':'NONE',
      'image_src': "../../assets/images/TRX40 Creator.png",
     },
     {
      'name_product':'Ram',
      'description':'Esto es una RAM',
      'quantity':25,
      'value':100,
      'category':'NONE',
      'image_src': "../../assets/images/TRX40 Creator.png",
     },
     {
      'name_product':'Procesador',
      'description':'Esto es un',
      'quantity':90,
      'value':200,
      'category':'NONE',
      'image_src': "../../assets/images/TRX40 Creator.png",
     }
  ]
  name_list:string = "productos"
  constructor() { 
  }

  ngOnInit(): void {
    
  }

}
