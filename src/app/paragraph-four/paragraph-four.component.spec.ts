import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ParagraphFourComponent } from './paragraph-four.component';

describe('ParagraphFourComponent', () => {
  let component: ParagraphFourComponent;
  let fixture: ComponentFixture<ParagraphFourComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ParagraphFourComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ParagraphFourComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
