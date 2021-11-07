@extends('layout.lapp')
@section('bodyContent')
    @foreach ($regs as $reg)
        <p>{{$reg-> fullname}} ----{{$reg-> email}} ------{{$reg->paddress}} ---{{$reg-> nidnumber}} </p>
    @endforeach
      
@endsection