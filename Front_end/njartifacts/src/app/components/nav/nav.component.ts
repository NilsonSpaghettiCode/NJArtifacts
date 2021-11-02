import { Component, OnInit } from '@angular/core';
import { Category } from 'src/app/interfaces/category';
import { CategoryService } from 'src/app/services/services_catalog/category.service';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css']
})
export class NavComponent implements OnInit {
  list_category:Category[] = []
  
  constructor(private categoriesService:CategoryService) { }

  ngOnInit(): void {

    this.loadCategores();
    console.table(this.list_category)

  }
  loadCategores():void
  {
    this.categoriesService.getCategories().subscribe(categories => this.list_category= categories);
  }
}
