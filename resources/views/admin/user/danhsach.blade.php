@extends('admin.index')
@section('title', 'List User')
@section('content')
<main class="main--container">
   <section class="main--content">
      <div class="panel">
         <div class="records--header">

            <div class="actions">

               <form action="{{ url('admin/user/search') }}" method="post" class="search flex-wrap flex-md-nowrap" onsubmit="return false;" id="search-form">
                  <input type="text" class="form-control" name="name" placeholder="Name..." > 
                  <select name="diachi" class="form-control">
                     <option value="" disabled="" selected="">Tỉnh thành...</option>
                     @foreach($province as $pr)
                     <option value="{{$pr->id}}" >{{$pr->name}}</option>
                     @endforeach
                  </select>
                  <button id="search" type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button> 
               </form>
               <a href="{{url('admin/user/add')}}" class="addProduct btn btn-lg btn-rounded btn-warning">Add Product</a> 
            </div>
         </div>
         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
      </div>
      <div class="panel">
         <div class="records--list" data-title="Product Listing">
            <div id="recordsListView_wrapper" class="dataTables_wrapper no-footer">
               <div class="table-responsive">
                  <table id="recordsListView" class="dataTable no-footer" aria-describedby="recordsListView_info" role="grid">
                     <thead>
                        <tr role="row">
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 99px;">ID</th>
                         
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 160px;">Name</th>
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 152px;">Phone</th>
                          
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 107px;">Email</th>
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 107px;">Adrress</th>
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 107px;">Gender</th>
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 107px;">Province</th>
                           <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 150px;">Linh vực</th>
                           <!-- <th class="sorting" tabindex="0" aria-controls="recordsListView" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 150px;">Created Date</th> -->
                          
                           <th class="not-sortable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 93px;">Actions</th>
                        </tr>
                     </thead>
                     <tbody id="hien">
                        @include('admin.user.listTemplade')
                       
                     </tbody>
                  </table>
                  <div id="paginate-ngoc">
                     {{ $user_list->links() }}
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <footer class="main--footer main--footer-light">
      <p>Copyright © <a href="#">VAdmin</a>. All Rights Reserved.</p>
   </footer>
</main>
<script type="text/javascript">
   $(document).ready(function(){
      $("#search").click(function(){
        getDatas(1);
      });

      $(window).on('hashchange', function() {
          if (window.location.hash) {
              var page = window.location.hash.replace('#', '');
              if (page == Number.NaN || page <= 0) {
                  return false;
              } else {
                  getDatas(page);
              }
          }
      });   

      $(document).ready(function() {
          $(document).on('click', '.pagination a', function (e) {
              var url = $(this).attr('href'); 
              getDatas($(this).attr('href').split('page=')[1]);

               let page = $(this).text();
               let current_page = `<span class="page-link">${page}</span>`;
               $(this).after(current_page);
               $(this).parent().addClass('active');

               $(this).parent().siblings('.page-item').removeClass('active').each(function() {
                  let p = $(this).text();
                  $(this).html(`<a class="page-link" href="admin/user/list?page=${p}">${p}</a>`);
               });
               $(this).remove();
              e.preventDefault();
          });
      });

      function getDatas(page) {
         var form = $("#search-form");
         var form_data = form.serialize();

          $.ajax({
              url : '?page=' + page,
              type : "get",
              dataType: 'json',
              data: form_data,
              headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
               },
          }).done(function (result) {
               $('#hien').html(result);
              location.hash = page;

          }).fail(function (msg) {
            console.log(msg);
              alert('ngu người');
          });
      }
   });
</script>
@endsection