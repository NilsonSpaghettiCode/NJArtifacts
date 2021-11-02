import { Injectable } from '@angular/core';
import { Category } from 'src/app/interfaces/category';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {
  //Propiedades del servicio
  categories:Category[] =[
    {id:1,name_category:"Procesadores"},
    {id:2,name_category:"Todo"},
    {id:3,name_category:"Ram"},
  ]

  constructor() { }

  getCategories():Category[]
  {
    return this.categories;
  }

}
