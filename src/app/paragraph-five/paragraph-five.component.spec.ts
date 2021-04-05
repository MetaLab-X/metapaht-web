import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ParagraphFiveComponent } from './paragraph-five.component';

describe('ParagraphFiveComponent', () => {
  let component: ParagraphFiveComponent;
  let fixture: ComponentFixture<ParagraphFiveComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ParagraphFiveComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ParagraphFiveComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
