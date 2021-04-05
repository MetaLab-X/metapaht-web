import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ParagraphThreeComponent } from './paragraph-three.component';

describe('ParagraphThreeComponent', () => {
  let component: ParagraphThreeComponent;
  let fixture: ComponentFixture<ParagraphThreeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ParagraphThreeComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ParagraphThreeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
