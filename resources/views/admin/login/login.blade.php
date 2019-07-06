@extends('admin.index')
@section('title', 'List User')
@section('content')
<main class="main--container">
   <section class="main--content">
      <div class="panel">
         <div class="panel-content">
            <form action="/action_page.php">
               <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email">
               </div>
               <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd">
               </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </section>
   <footer class="main--footer main--footer-light">
      <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
   </footer>
</main>
@endsection