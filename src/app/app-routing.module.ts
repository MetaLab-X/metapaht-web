import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { from } from 'rxjs';

import { CalenderComponent } from './calender/calender.component';
import { MainPageComponent } from './main-page/main-page.component';
const routes: Routes = [
  {
    path: '',
    component: MainPageComponent,
  },
  {
    path: 'calendar',
    component: CalenderComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [CalenderComponent]
