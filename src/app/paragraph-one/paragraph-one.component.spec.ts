import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ParagraphOneComponent } from './paragraph-one.component';

describe('ParagraphOneComponent', () => {
  let component: ParagraphOneComponent;
  let fixture: ComponentFixture<ParagraphOneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ParagraphOneComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ParagraphOneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
