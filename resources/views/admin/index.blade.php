@extends('layouts.admin')

@section('title')
    | Index
@endsection

@section('content')
<div class="my-container">
    <aside>
      <nav>
        <ul>
          <li><a class="active" href="#">Product</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Category/Product</a></li>
        </ul>
      </nav>
    </aside>
    <main>
        {{ __('You are logged in!') }}
    </main>
  </div>
@endsection