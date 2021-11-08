import { Injectable } from '@angular/core';
import { ConfigREST } from '../interfaces/config-rest';
@Injectable({
  providedIn: 'root'
})
export class ConfigService {
  
  static config:ConfigREST;

  constructor() { }
  loadConfigREST()
  {

  }

}
