import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-calender',
  templateUrl: './calender.component.html',
  styleUrls: ['./calender.component.css']
})
export class CalenderComponent implements OnInit {

  constructor() { }
  events: any[] = [];
  ngOnInit() {
    this.events = [
      { content: 'Ordered', date: '15/02/2021 10:30', status: 'R' },
      { content: 'Processing', date: '15/02/2021 14:00', status: 'R' },
      { content: 'Shipped', status: 'R', date: '15/02/2021 17:00' },
      { content: 'Delivered' },
    ]
  }

  }


