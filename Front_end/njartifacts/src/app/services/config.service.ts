import { Injectable } from '@angular/core';
import { ConfigREST } from '../interfaces/config-rest';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ConfigService {
  
  static config:ConfigREST;

  constructor(private httpRequest: HttpClient) { }
  loadConfigREST()
  {
    

  }

}
