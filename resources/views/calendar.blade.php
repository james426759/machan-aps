@extends('layouts.myapp')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet"  />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" rel="stylesheet" media="print">
<style>
   .fc-widget-header {
       background: #E5F3FA;
   }
   .space-item {
       margin-left: 10px;
   }
   .fc-sun {
       color: red;
   }
   .fc-sat {
       color: red;
   }
   /* .fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
       float: left;
   } */
</style>
@endsection

@section('content')
    <div class="container-fluid">
        <h2>公司行事曆</h2>
        <ol class="breadcrumb">
            <img src="{{ asset('img/u12.png') }}">
            <span class="space-item">系統管理</span>
            <span class="space-item">></span>
            <span class="space-item">
                <a href="" style="color:blue">公司行事曆</a>
            <span>
            <span class="space-item">></span>
            <span class="space-item">公司行事曆(月)</span>
        </ol>
        <div id="calendar"></div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/zh-tw.js"></script>
    <script>
        $('#calendar').fullCalendar({
            header: {
                left: '',
                center: 'title',
            },
            locale: 'zh-tw',
            showNonCurrentDates: false,
            dayClick: function() {
                alert('123456');
            }
        });
        $('.fc-past, .fc-future, .fc-today').append('<button class="btn btn-primary">test</button>')
        var calendar = $('#calendar').fullCalendar('getCalendar');
        calendar.on('dayClick', function(date, jsEvent, view) {
            console.log('clicked on ' + date.format());
        });
    </script>
@endsection 
