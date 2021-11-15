import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormOrdenComponent } from './form-orden.component';

describe('FormOrdenComponent', () => {
  let component: FormOrdenComponent;
  let fixture: ComponentFixture<FormOrdenComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormOrdenComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormOrdenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
