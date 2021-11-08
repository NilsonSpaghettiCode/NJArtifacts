import { Injectable } from '@angular/core';
import { Category } from 'src/app/interfaces/category';
import { Observable, of } from 'rxjs';
import { catchError, map, tap } from 'rxjs/operators';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {
  //Propiedades del servicio
  url = 'http://localhost:8000/api/categorias';

  constructor(private http:HttpClient) { }

  getCategories():Observable<Category[]>
  {
    return this.http.get<Category[]>(this.url).pipe(catchError(this.handleError<Category[]>('getCategories', [])));
  }

  private handleError<T>(operation = 'operation', result?: T) {
    return (error: any): Observable<T> => {
  
      // TODO: send the error to remote logging infrastructure
      console.error(error); // log to console instead
  
      // TODO: better job of transforming error for user consumption
  
      // Let the app keep running by returning an empty result.
      return of(result as T);
    };
  }

}

