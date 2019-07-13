@foreach($user_list as $ul)
   <tr role="row" class="odd">
      <td> <a href="#" class="btn-link">{{$ul->id}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->name}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->phone}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->email}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->address}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->gender}}</a> </td>
      <td> <a href="#" class="btn-link">{{$ul->getProvince->name}}</a> </td>
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