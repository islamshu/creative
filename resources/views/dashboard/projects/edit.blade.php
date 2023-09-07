@extends('layouts.backend')
@section('content')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">  تعديل عمل  </h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                @include('dashboard.parts._error')
                                @include('dashboard.parts._success')
    
                                <form class="form" method="post"
                                    action="{{ route('projects.update',$project->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>الصورة </label>
                                                <input type="file" name="image" class="form-control image"  >
                                                <div class="form-group">
                                                    <img src="{{ asset('uploads/'.$project->image) }}" style="width: 100px"
                                                        class="img-thumbnail image-preview" alt="">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>العنوان  <span class="required">*</span> </label>
                                                <input type="text" value="{{ $project->title }}" name="title" class="form-control" required >

                                            </div>
                                            <div class="col-md-6">
                                                <label>القسم  <span class="required">*</span> </label>
                                                <select name="section" class="form-control" required>
                                                    <option value="" selected disabled> اختر القسم</option>
                                                    <option value="مواقع الكترونية" @if( $project->section == 'مواقع الكترونية') selected @endif>مواقع الكترونية</option>
                                                    <option value="تطبيقات الموبايل" @if( $project->section == 'تطبيقات الموبايل') selected @endif > تطبيقات الموبايل </option>
                                                    <option value="سوشيال ميديا" @if( $project->section == 'سوشيال ميديا') selected @endif > سوشيال ميديا </option>
                                                    <option value="موشن جرافيك" @if( $project->section == 'موشن جرافيك') selected @endif  > موشن جرافيك </option>

                                                </select>

                                            </div>
                                          
                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>رابط الموقع  </label>
                                                <input type="url" value="{{ $project->url}}" name="url" class="form-control"  >
                                            </div>
                                            <div class="col-md-6">
                                                <label>رابط بيهانس  </label>
                                                <input type="url" value="{{ $project->behance_url }}" name="behance_url" class="form-control"  >
                                            </div>
                                          
                                        </div>
                                        <br>
                                        
                                        <br>
                                      
                                       
                                        <br>
                                        
                                       
                                    </div>
                                   
    
    
                                    <div class="form-actions left">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> @lang('حفظ')
                                    </button>
                                        </button>
                                    </div>
    
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </section>

    </div>
@endsection
