@extends('layouts.app')

@section('content')



<main class="container">

  <ul>
    @foreach($pages as $page)
    
    <li>{{ $page->slug }}</li>
    
    @endforeach
  </ul>






 <livewire:counter />
</main>
@endsection