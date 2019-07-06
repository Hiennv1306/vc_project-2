@extends('admin.index')
@section('title', 'List User')
@section('content')
<main class="main--container">
   <section class="main--content">
      <div class="panel">
         <div class="records--header">
            <div class="title fa-shopping-bag">
               <h3 class="h3">Ecommerce Products <a href="#" class="btn btn-sm btn-outline-info">Manage Products</a></h3>
               <p>Found Total 1,330 Products</p>
            </div>
            <div class="actions">
               <form action="#" class="search flex-wrap flex-md-nowrap">
                  <input type="text" class="form-control" placeholder="Product Name..." required=""> 
                  <select name="select" class="form-control">
                     <option value="" selected="">Product Category</option>
                  </select>
                  <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button> 
               </form>
               <a href="{{url('admin/user/add')}}" class="addProduct btn btn-lg btn-rounded btn-warning">Add Product</a> 
            </div>
         </div>
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
                     <tbody>
                        @foreach($user_list as $ul)
                        <tr role="row" class="odd">
                           <td> <a href="#" class="btn-link">{{$ul->id}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->name}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->phone}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->email}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->address}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->gender}}</a> </td>
                           <td> <a href="#" class="btn-link">{{$ul->province}}</a> </td>
                           <td> <a href="#" class="btn-link">
                              <?php
                                 $list = explode(',', $ul->linhvuc);
                                 foreach ($list as $value) {
                                    echo $value . '<br>';
                                 }
                              ?>
                           </a> </td>
                          
                         <!--   <td>12 June 2017</td> -->
                           <td>
                              
                                 <div class="dropleft">
                                 <a href="#" class="btn-link" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a> 
                                 <div class="dropdown-menu" x-placement="left-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-2px, 0px, 0px);"> <a href="{{url('admin/user/edit/'.$ul->id)}}" class="dropdown-item">Edit</a>

                                    <form method="POST" action="{{ route('delete', ['id' => $ul->id]) }}">
                                       @csrf
                                       {{method_field('DELETE')}}
                                       <button class="dropdown-item">Delete</button>  
                                       
                                    </form>
                                 </div>
                              </div>
                              
                              
                           </td>
                        </tr>
                        @endforeach
                       
                     </tbody>
                  </table>
                  <?php echo $user_list->links();?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <footer class="main--footer main--footer-light">
      <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
   </footer>
</main>
@endsection