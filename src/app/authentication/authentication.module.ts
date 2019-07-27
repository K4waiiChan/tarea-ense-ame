import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LoginComponent } from './login/login.component';
import { SigninComponent } from './signin/signin.component';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AuthenticationService } from '../services/authentication.service';


@NgModule({
  declarations: [LoginComponent, SigninComponent],
  imports: [
    CommonModule,
    ReactiveFormsModule,
    FormsModule
  ],
  exports: [
    LoginComponent,
    SigninComponent
  ],
  providers: [
    AuthenticationService
  ]
})
export class AuthenticationModule { }
