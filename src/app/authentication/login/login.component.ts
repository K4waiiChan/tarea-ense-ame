import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AuthenticationService } from 'src/app/services/authentication.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  loginFormgroup: FormGroup;
  logiFailed: boolean;
  constructor(public formBuilder: FormBuilder, public authenticationService: AuthenticationService) {
    this.loginFormgroup = formBuilder.group({
      username: ['', Validators.required],
      password: ['', Validators.required]
    });
    this.logiFailed = false;
   }

  ngOnInit() {
  }

  login() {
    this.authenticationService.login(this.loginFormgroup.value).subscribe(response =>{
      localStorage.setItem('token', response);
    }, () => {
      this.logiFailed = true;
      setTimeout(() => {
        this.logiFailed = false;
      }, 200000);
    });
    console.log(this.loginFormgroup.value);
  }
}
