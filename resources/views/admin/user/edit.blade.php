@extends('admin.index')
@section('title', 'List User')
@section('content')
<style type="text/css">
   p.error {
      color: #a94442;
      font-weight: bold;
   }

   p.success {
      color: #28a745;
      font-weight: bold;
   }
</style>
   <main class="main--container">
      <section class="main--content">
         <div class="panel">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-content">
               <form action="{{route('actionEdit')}}" method="post" id="formWizard" class="form--wizard wizard clearfix" novalidate="novalidate" role="application">
                  {{csrf_field()}}
                  <div class="content clearfix">
                     <h3 id="formWizard-h-0" tabindex="-1" class="title current">Sửa</h3>
                     <section id="formWizard-p-0" role="tabpanel" aria-labelledby="formWizard-h-0" class="body current" aria-hidden="false" style="display: block;">
                        <div class="row">
                           <input type="hidden" name="id"  value="{{$all->id}}"  class="form-control" required="">
                           <div class="col-md-6">
                              <div class="form-group"> <label> <span class="label-text">Name: *</span> <input type="text" name="name" value="{{$all->name}}" placeholder="Doe" class="form-control" required=""> </label> </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group"> <label> <span class="label-text">Email: *</span> <input type="email" id="input-email" name="email" value="{{$all->email}}" class="form-control" required=""> </label> </div>
                               <div><h6 id="hien"></h6></div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group"> <label> <span class="label-text">Phone:</span> <input type="tel" name="phone" value="{{$all->phone}}" class="form-control"> </label> </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group"> <label> <span class="label-text">Address: *</span> <input type="text" name="address" value="{{$all->address}}" class="form-control" required=""></label> </div>
                           </div>
                           <div class="col-md-6" >
                           <div class="form-group ">
                              <select name="province" class="select form-control">
                                 <option value="{{$all->province}}">{{$all->province}}</option>
                                 @foreach($province as $pr)
                                 <option value="{{$pr->name}}">{{$pr->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-md-2">
                              <div class="form-group"> <label> <span class="label-text action">Nam</span> <input type="radio"  name="gender" value="nam" <?php if($all->gender == 'nam'){ echo "checked=\"checked\" "; }?>  required=""></label> </div>
                              <div class="form-group"> <label> <span class="label-text action">Nữ</span> <input type="radio"  name="gender" value="nam" <?php if($all->gender == 'nữ'){ echo "checked=\"checked\" "; }?>  required=""></label> </div>
                        
                        </div>
                        <div class="col-md-2">
                           <h4>Lĩnh vực</h4>
                           
                           <div class="checkbox form-group">
                              
                                 <?php 
                                 $list = explode(',', $all->linhvuc);
                                
                                 
                                 ?>
                                 <label><input type="checkbox" name="linhvuc[]" <?php if(in_array("Giáo viên", $list)){ echo "checked=\"checked\" "; } ?>  value="Giáo viên">Giáo viên</label>
                                 <label><input type="checkbox" name="linhvuc[]" <?php if(in_array("Kĩ sư", $list)){ echo "checked=\"checked\" "; } ?>  value="Kĩ sư">Kĩ sư</label>
                                 <label><input type="checkbox" name="linhvuc[]" <?php if(in_array("Nhà nước", $list)){ echo "checked=\"checked\" "; } ?>  value="Nhà nước">Nhà nước</label>
                           </div>
                        </div>
                           <div class="col-md-12">
                              <button style="margin-top: 5px;" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Update</button>
                          </div>

                        </div>
                     </section>
                     <h3 id="formWizard-h-1" tabindex="-1" class="title">Login Info</h3>
                     
                     <h3 id="formWizard-h-2" tabindex="-1" class="title">Completed</h3>
                     <section id="formWizard-p-2" role="tabpanel" aria-labelledby="formWizard-h-2" class="body" aria-hidden="true" style="display: none;">
                        <div class="jumbotron text-center">
                           <h2 class="h1 fw--600 text-dark mb-2">Login Successfull</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore modi dignissimos, omnis earum cupiditate dolorum, deleniti ad praesentium atque ipsam illum! Aliquid, distinctio consequatur natus vero assumenda adipisci obcaecati iste. Molestias architecto, repudiandae id doloribus dolor.</p>
                           <button type="submit" class="btn btn-rounded btn-info">Proceed To User Profile</button> 
                        </div>
                     </section>
                  </div>
                  <!-- <div class="actions clearfix">
                     <ul role="menu" aria-label="Pagination">
                        <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
                        <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
                        <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
                     </ul>
                  </div> -->
               </form>
            </div>
         </div>
      </section>
      <footer class="main--footer main--footer-light">
         <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
      </footer>
   </main>
   <script type="text/javascript">
   $(document).ready(function(){

      $('#input-email').blur(function(){
         var value = $(this).val();
         /*$.post('{{route("ajax")}}',{id: value},function(data){
            $('#hien').html(data);
         })
         .fail((err) => {
            console.log(err);
         });*/


         $.ajax({
            url: '{{route("ajax")}}',
            type: 'POST',
            data: {id: value},
            headers: {
               'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(result) {
               console.log(result);
               if(result.status == 'false') {
                  $('#hien').html(result.message);
                  $('#input-email').css('borderColor', '#a94442');
                  alert(result.data.status2);

               } else {
                  $('#hien').html(result.message);
                  $('#input-email').css('borderColor', '#28a745');
                  alert(result.data.status2);

               }
               
            },
            error: function(err) {
               console.log(err);
            }
         });



      });

   });
   
</script>
@endsection
