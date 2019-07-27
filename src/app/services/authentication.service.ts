import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AuthenticationService {
  url: string;
  constructor(public httpClient: HttpClient) {
    this.url = '';
   }

  login(credentials: any) {
    return this.httpClient.post(this.url + 'login', credentials);
  }

  singin(data: any) {
    return this.httpClient.post(this.url + 'users', data);
  }
}
