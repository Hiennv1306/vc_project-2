@extends('admin.index')
@section('title', 'List User')
@section('content')
<main class="main--container">
   <section class="main--content">
      <div class="panel">
         <div class="panel-content">
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('actionAdd') }}" method="post" id="formWizard" class="form--wizard wizard clearfix" novalidate="novalidate" role="application">
               {{csrf_field()}}
               <div class="content clearfix">
                  <h3 id="formWizard-h-0" tabindex="-1" class="title current">Thêm</h3>
                  <section id="formWizard-p-0" role="tabpanel" aria-labelledby="formWizard-h-0" class="body current" aria-hidden="false" style="display: block;">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group"> <label> <span class="label-text">Name: *</span> <input type="text" name="name" value="{{old('name')}}"  class="form-control"  required=""> </label> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> 
                              <label> 
                                 <span class="label-text">Email: *</span> 

                                 <input id="input-email" type="email" name="email" value="{{old('email')}}" class="form-control" required=""> 
                              </label> 
                           </div>
                           <div><h6 id="hien"></h6></div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> <label> <span class="label-text">Phone:</span> <input type="tel" name="phone" value="{{old('phone')}}" class="form-control"> </label> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> <label> <span class="label-text">Address: *</span> <input type="text" name="address" value="{{old('address')}}" class="form-control" required=""> </label> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> <label> <span class="label-text">Password</span> <input type="password" name="address" value="{{old('password')}}" class="form-control" required=""> </label> </div>
                        </div>
                        <div class="col-md-6" >
                           <div class="form-group ">
                              <select name="province"  class="select form-control">
                                 <option  placeholder="Tỉnh thành" value="{{old('province')}}">{{old('province')}}</option>
                                 <option value="Ninh Binh">Ninh Binh</option>
                                 <option value="Ha Noi">Ha Noi</option>
                                 <option value="Hải Phòng">Hải Phòng</option>
                                 <option value="Nam Định">Nam Định</option>
                                 <option value="Nghệ An">Nghệ An</option>
                                 <option value="Hưng Yên">Hưng Yên</option>
                                 <option value="Hà Nam">Hà Nam</option>
                                 <option value="Hà Tĩnh">Hà Tĩnh</option>
                                 <option value="Thanh Hóa">Thanh Hóa</option>
                                 <option value="Lào Cai">Lào Cai</option>
                                 <option value="Bắc Giang">Bắc Giang</option>
                                 <option value="TP.HCM">TP.HCM</option>
                                 <option value="Đà Nẵng">Đà Nẵng</option>
                                 <option value="Quảng Trị">Quảng Trị</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group"> <label> <span class="label-text">Nam</span> <input type="radio" name="gender" value="nam"  <?php if(old('gender')== "nam") { echo 'checked'; } ?>  required=""> </label> </div>
                           <div class="form-group"> <label> <span class="label-text">Nữ</span> <input type="radio" name="gender" value="nữ"   <?php if(old('gender')== "nữ") { echo 'checked'; } ?> required=""> </label> </div>
                        </div>
                        <div class="col-md-2">
                           <h4>Lĩnh vực</h4>
                           <div class="checkbox form-group">
                              <label><input type="checkbox" name="linhvuc[]" value="Giáo viên"  @if(is_array(old('linhvuc')) && in_array('Giáo viên', old('linhvuc'))) checked @endif >Giáo viên</label>
                            </div>
                            <div class="checkbox form-group">
                              <label><input type="checkbox" name="linhvuc[]" value="Kĩ sư" @if(is_array(old('linhvuc')) && in_array('Kĩ sư', old('linhvuc'))) checked @endif >Kĩ sư</label>
                            </div>
                             <div class="checkbox form-group">
                              <label><input type="checkbox" name="linhvuc[]" value="Nhà nước"  @if(is_array(old('linhvuc')) && in_array('Nhà nước', old('linhvuc'))) checked @endif  >Nhà nước</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <textarea class="form-control" name="placeOfDeath" cols="50" rows="10" id="placeOfDeath">sdfsdfsdfs sdfsd</textarea>
                           </div>
                        </div> -->
                        <div class="col-md-12">
                           <button style="margin-top: 5px;" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Add</button>
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
               <div class="actions clearfix">
                  <ul role="menu" aria-label="Pagination">
                     <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li>
                     <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li>
                     <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
                  </ul>
               </div>
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
            success: function(data) {
               $('#hien').html(data);
            },
            error: function(err) {
               console.log(err);
            }
         });



      });

   });
   
</script>
@endsection