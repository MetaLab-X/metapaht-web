import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';

import { AppRoutingModule, routingComponents } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { ParagraphOneComponent } from './paragraph-one/paragraph-one.component';
import { ParagraphTwoComponent } from './paragraph-two/paragraph-two.component';
import { ParagraphThreeComponent } from './paragraph-three/paragraph-three.component';
import { ParagraphFourComponent } from './paragraph-four/paragraph-four.component';
import { ParagraphFiveComponent } from './paragraph-five/paragraph-five.component';
import { FooterComponent } from './footer/footer.component';
import { SlideComponent } from './slide/slide.component';
import { MainPageComponent } from './main-page/main-page.component';
import { NewsComponent } from './news/news.component';
import { NewsdetailComponent } from './news/newsdetail/newsdetail.component';


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    ParagraphOneComponent,
    ParagraphTwoComponent,
    ParagraphThreeComponent,
    ParagraphFourComponent,
    ParagraphFiveComponent,
    FooterComponent,
    SlideComponent,
    routingComponents,
    MainPageComponent,
    NewsComponent,
    NewsdetailComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    AppRoutingModule,
  ],
  providers: [
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
