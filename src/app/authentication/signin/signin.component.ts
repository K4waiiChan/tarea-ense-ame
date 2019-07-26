import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, AbstractControl } from '@angular/forms';

@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.scss']
})
export class SigninComponent implements OnInit {
  signInFormgroup: FormGroup;
  constructor(public formBuilder: FormBuilder) {
    this.signInFormgroup = this.formBuilder.group({
      username: ['', Validators.required],
      email: ['', Validators.compose([Validators.required, Validators.email])],
      password: ['', Validators.compose([Validators.required, Validators.pattern('')])],
      repeatPassword: ['', Validators.compose([Validators.required, Validators.pattern('')])],
      name: ['', Validators.required],
      lastname: ['', Validators.required],
      birthdate: ['', Validators.required],
      role: ['student', Validators.required]
    });
   }

  ngOnInit() {
  }

  signIn() {
    console.log(this.signInFormgroup.value);
  }

  changeRole(role: string) {
    this.signInFormgroup.get('role').setValue(role);
  }

  disableButton() {
    return this.signInFormgroup.valid && this.signInFormgroup.get('password').value == this.signInFormgroup.get('repeatPassword').value;
  }

  getValidationClassName(fieldName: string) {
    let field: AbstractControl;
    field = this.signInFormgroup.get(fieldName);
    if (!field.touched) {
      return '';
    } else if (field.touched && field.valid) {
      return 'is-valid';
    } else {
      return 'is-invalid';
    }
  }
}
