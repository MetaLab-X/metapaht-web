import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ParagraphTwoComponent } from './paragraph-two.component';

describe('ParagraphTwoComponent', () => {
  let component: ParagraphTwoComponent;
  let fixture: ComponentFixture<ParagraphTwoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ParagraphTwoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ParagraphTwoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
